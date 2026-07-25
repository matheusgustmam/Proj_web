<?php

namespace controller;

use Exception;

use dao\ClienteDAO;
use model\Cliente;

class ClienteController
{
    public function index()
    {
        try {
            $clientes = ClienteDAO::listar();
            require __DIR__ . "/../view/pag-clientes.php";

        } catch(Exception $ex){
            echo $ex->getMessage();
        }
    }

    public function buscar(array $params)
    {
        try {
            $cliente = ClienteDAO::buscarId($params['id']);

            if (empty($cliente)) {
                throw new Exception("Cliente não encontrado.");
            }

            require __DIR__ . "/../view/pag-clientes.php";
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
    public function novo()
    {
        try {
            $cliente = new Cliente();

            require __DIR__ . "/../view/pag-clientes.php";
        } catch (Exception $ex){
            $_SESSION["mensagem_erro_detalhado"] = $ex->getMessage();
            header("Location: " . BASE_URL . '/clientes');
        }
    }

    public function cadastrar()
    {
        try {
            $id = filter_input(INPUT_POST, 'id' , FILTER_SANITIZE_NUMBER_INT);
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $textinho  = filter_input(INPUT_POST, 'textinho', FILTER_SANITIZE_SPECIAL_CHARS);

            $cliente = $id ? ClienteDAO::buscarId($id) : new Cliente();

            if (empty($cliente))
                throw new Exception("Cliente não encontrado.");

            $cliente->setNome($nome);
            $cliente->setTextinho($textinho);

            ClienteDAO::salvar($cliente);

            header('Location: ' . BASE_URL . '/clientes');
            $_SESSION["mensagem_sucesso"] = "Comentario Salvo com sucesso.";

        }catch (Exception $ex){
            $_SESSION["mensagem_erro"] = 'Falha ao Salvar Comentario. ';
            $_SESSION["mensagem_erro_detalhado"] = $ex->getMessage();
            header('Location: ' . BASE_URL . '/clientes/novo');
        } finally {
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

    public function listar()
    {
        try {
            $clientes = ClienteDAO::listar();
        } catch (Exception $ex) {
            echo "Falha ao listar os clientes" . $ex->getMessage();
        } finally {
            require __DIR__ . "/../view/pag-clientes.php";
        }
    }

    public function remover(array $params)
    {
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
}