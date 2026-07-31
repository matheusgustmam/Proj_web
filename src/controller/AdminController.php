<?php

namespace controller;

use model\Admin;
use dao\AdminDAO;
use utils\Auth;

class AdminController
{
    public function login()
    {
        if (!isset($_SESSION['csrf'])) {

            $_SESSION['csrf'] =
                bin2hex(random_bytes(32));
        }
        require __DIR__ . '/../view/pag-login.php';
    }

    public function autenticar()
    {
        if (
            !isset($_POST['csrf']) ||
            !hash_equals(
                $_SESSION['csrf'],
                $_POST['csrf']
            )
        ) {
            die("Token inválido");
        }

        $usuario = trim($_POST['usuario']);
        $senha = $_POST['senha'];

        if(empty($usuario) || empty($senha)){

            $_SESSION['erro_login'] =
                "Preencha todos os campos.";
            header(
                "Location: ".BASE_URL."/login"
            );
            exit;
        }

        $admin = AdminDAO::buscarUsuario($usuario);

        if(
            !$admin ||
            !password_verify(
                $senha,
                $admin->getSenha()
            )
        ){
            $_SESSION['erro_login'] =
                "Usuário ou senha inválidos.";

            header(
                "Location: ".BASE_URL."/login"
            );
            exit;
        }

        session_regenerate_id(true);

        $_SESSION['admin'] = true;
        $_SESSION['usuario_admin'] =
            $admin->getUsuario();
        $_SESSION['nivel'] =
            $admin->getNivel();

        header(
            "Location: ".BASE_URL."/admin/comentarios"
        );
        exit;
    }

    public function logout()
    {
        session_destroy();
        header(
            "Location: " .
            BASE_URL .
            "/login"
        );
        exit;
    }

    public function cadastrarAdmin()
    {
        Auth::verificarNivel("ADMIN");
        // criar novo administrador

    }

    public function novo()
    {

        Auth::verificar();

        Auth::verificarNivel("ADMIN");


        require __DIR__ .
            '/../view/admin/novo-admin.php';

    }

    public function cadastrar()
    {

        Auth::verificar();

        Auth::verificarNivel("ADMIN");


        $usuario = trim($_POST['usuario']);

        $senha = $_POST['senha'];

        $nivel = $_POST['nivel'];



        $admin = new Admin();


        $admin->setUsuario($usuario);


        $admin->setSenha(
            password_hash(
                $senha,
                PASSWORD_DEFAULT
            )
        );


        $admin->setNivel($nivel);



        AdminDAO::salvar($admin);



        header(
            "Location: ".
            BASE_URL.
            "/admin"
        );

        exit;

    }
}