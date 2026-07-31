<?php

namespace controller;

use Exception;

use dao\ClienteDAO;
use model\Cliente;
use utils\Auth;

class ClienteController
{
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
            $cliente = new Cliente();
            $cliente->setNome($nome);
            $cliente->setEmail($email);
            $cliente->setTextinho($textinho);

            // aguarda aprovação
            $cliente->setAprovado(false);

            ClienteDAO::salvar($cliente);

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
        try {
            $id = $params['id'];
            $cliente = ClienteDAO::buscarId($id);
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
            if (empty($cliente)) {
                throw new Exception("Cliente não encontrado");
            }
        } catch (Exception $ex) {
            echo "Falha ao buscar cliente" . $ex->getMessage();
        } finally {
            require __DIR__ . "/../view/pag-clientes.php";
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
        Auth::verificarNivel(['ADMIN']);
        try {
            $id = $params['id'];
            $cliente = ClienteDAO::buscarId($id);
            if (empty($cliente)){
                throw new Exception("Cliente não encontrado.");
            }

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
        $cliente = ClienteDAO::buscarId(
            $params['id']
        );
        if(!$cliente){
            die("Comentário não encontrado");
        }

        $cliente->setAprovado(true);
        ClienteDAO::salvar($cliente);
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
        try {
            $cliente = ClienteDAO::buscarId($params['id']);
            if (empty($cliente)) {
                throw new Exception("Comentário não encontrado.");
            }

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