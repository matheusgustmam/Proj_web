<?php

namespace controller;

use Exception;

use dao\ClienteDAO;
use model\Cliente;
use utils\Auth;
use utils\Logger;

class ClienteController
{
    private function validarCSRF()
    {
        if(
            !isset($_POST['csrf']) ||
            !isset($_SESSION['csrf']) ||
            !hash_equals(
                $_SESSION['csrf'],
                $_POST['csrf']
            )
        ){
            http_response_code(403);
            echo "Ação não autorizada.";
            exit;
        }
    }
    public function testp ()
    {
        try {
            require __DIR__ . "/../view/pag-inicial.php";
        }catch (Exception $ex){
            $_SESSION["mensagem_erro_detalhado"] = $ex->getMessage();
        }
    }

    public function novo()
    {
        try {
            if (!isset($_SESSION['csrf'])) {
                $_SESSION['csrf'] =
                    bin2hex(random_bytes(32));
            }
            $cliente = new Cliente();
            require __DIR__ . "/../view/pag-clientes.php";

        } catch (Exception $ex){
            $_SESSION["mensagem_erro_detalhado"] =
                $ex->getMessage();
            header(
                "Location: ".BASE_URL."/clientes"
            );
            exit;
        }
    }

    public function comentario()
    {
        try {
            if(
                !isset($_POST['csrf']) ||
                !hash_equals(
                    $_SESSION['csrf'],
                    $_POST['csrf']
                )
            ){
                die("Token CSRF inválido");
            }
            $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
            $nome = filter_input(
                INPUT_POST,
                'nome',
                FILTER_SANITIZE_SPECIAL_CHARS
            );
            $email = filter_input(
                INPUT_POST,
                'email',
                FILTER_SANITIZE_EMAIL
            );

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                throw new Exception("E-mail inválido.");
            }
            $textinho = filter_input(
                INPUT_POST,
                'textinho',
                FILTER_SANITIZE_SPECIAL_CHARS
            );
            if(empty($nome) || empty($textinho)){
                throw new Exception(
                    "Preencha os campos obrigatórios."
                );
            }
            if ($id) {
                // Edição
                $cliente = ClienteDAO::buscarId($id);
                if (!$cliente) {
                    throw new Exception("Comentário não encontrado.");
                }
                $cliente->setUpdatedAt(new \DateTime());

            } else {
                // Novo comentário
                $cliente = new Cliente();
                $agora = new \DateTime();
                $cliente->setCreatedAt($agora);
                $cliente->setUpdatedAt($agora);
                $cliente->setAprovado(false);
            }

            $cliente->setNome($nome);
            $cliente->setEmail($email);
            $cliente->setTextinho($textinho);
            ClienteDAO::salvar($cliente);

            if ($id) {
                Logger::registrar("EDITOU", $cliente);
            } else {
                Logger::registrar("CRIOU", $cliente);
            }
            $_SESSION['mensagem_sucesso'] =
                "Comentário enviado para aprovação.";
            header(
                "Location: ".BASE_URL."/clientes"
            );
        }catch(Exception $ex){
            $_SESSION['mensagem_erro'] =
                $ex->getMessage();
            header(
                "Location: ".BASE_URL."/clientes/novo"
            );
        }finally{
            exit;
        }
    }

    public function editar(array $params)
    {
        Auth::verificarNivel([
            'ADMIN',
            'MODERADOR'
        ]);

        try {

            $id = $params['id'];
            $cliente = ClienteDAO::buscarId($id);
            $cliente->setUpdatedAt(new \DateTime());
            Logger::registrar(
                "EDITOU",
                $cliente->getId()
            );
            if(empty($cliente)){
                throw new Exception("Cliente não encontrado");
            }
        } catch (Exception $ex){
            echo "Falha ao buscar cliente" . $ex->getMessage();
        } finally {
            require __DIR__ . "/../view/pag-clientes.php";
        }
    }

    public function buscar(array $params)
    {
        try {
            $id = $params['id'];
            $cliente = ClienteDAO::buscarId($id);
            if (!$cliente) {
                throw new Exception("Comentário não encontrado.");
            }
            require __DIR__ . "/../view/pag-visualizar-comentario.php";
        } catch (Exception $ex) {
            echo "Falha ao buscar comentário: " . $ex->getMessage();
        }
    }

    public function listar()
    {
        try {
            $clientes = ClienteDAO::listarAprovados();
            require __DIR__ . "/../view/pag-comentarios.php";
        } catch (Exception $ex) {
            echo "Falha ao listar os comentários: " . $ex->getMessage();
        }
    }

    public function remover(array $params)
    {
        Auth::verificarNivel([
            'ADMIN',
            'MODERADOR'
        ]);
        $this->validarCSRF();
        try {
            $id = $params['id'];
            $cliente = ClienteDAO::buscarId($id);
            if (empty($cliente)){
                throw new Exception("Cliente não encontrado.");
            }

            Logger::registrar(
                "EXCLUIU",
                $cliente
            );

            ClienteDAO::deletar($cliente);

            $_SESSION["mensagem_sucesso"] = "Comentario removido com sucesso.";
        } catch (Exception $ex) {
            $_SESSION["mensagem_erro"] = 'Falha ao remover Comentario';
            $_SESSION["mensagem_erro_detalhado"] = $ex->getMessage();
        } finally {
          header('Location: ' . BASE_URL . '/clientes');
          exit;
        }
    }

    public function listarPendentes()
    {
        Auth::verificarNivel([
            'ADMIN',
            'MODERADOR'
        ]);
        $clientes = ClienteDAO::listarPendentes();
        require __DIR__ .
            '/../view/admin/pag-aprovar-comentarios.php';
    }

    public function aprovar(array $params)
    {
        Auth::verificarNivel([
            'ADMIN',
            'MODERADOR'
        ]);
        $this->validarCSRF();

        $cliente = ClienteDAO::buscarId(
            $params['id']
        );
        if (!$cliente || $cliente->isAprovado()) {
            die("Comentário inválido.");
        }
        $cliente->setAprovado(true);
        ClienteDAO::salvar($cliente);

        Logger::registrar("APROVOU", $cliente);

        header(
            "Location: ".
            BASE_URL.
            "/admin/comentarios"
        );
        exit;
    }

    public function rejeitar(array $params)
    {
        Auth::verificarNivel([
            'ADMIN',
            'MODERADOR'
        ]);

        $this->validarCSRF();
        try {
            $cliente = ClienteDAO::buscarId($params['id']);
            if (empty($cliente)) {
                throw new Exception("Comentário não encontrado.");
            }

            Logger::registrar("REJEITOU", $cliente);
            ClienteDAO::deletar($cliente);

            ClienteDAO::deletar($cliente);
            $_SESSION["mensagem_sucesso"] = "Comentário rejeitado.";

        } catch (Exception $ex) {
            $_SESSION["mensagem_erro"] = $ex->getMessage();
        } finally {
            header("Location: " . BASE_URL . "/admin/comentarios");
            exit;
        }
    }
}