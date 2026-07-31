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
            header("Location: ".BASE_URL."/login");
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

            header("Location: ".BASE_URL."/login");
            exit;
        }

        session_regenerate_id(true);

        $_SESSION['admin'] = [
            'id' => $admin->getId(),
            'usuario' => $admin->getUsuario(),
            'nivel' => $admin->getNivel()
        ];

        // Gera um novo token CSRF após o login
        $_SESSION['csrf'] = bin2hex(random_bytes(32));

        header("Location: " . BASE_URL . "/admin/comentarios");
        exit;
    }

    public function logout()
    {
        $_SESSION = [];

        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();

            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params['path'],
                $params['domain'],
                $params['secure'],
                $params['httponly']
            );
        }

        session_destroy();

        header("Location: " . BASE_URL . "/login");
        exit;
    }

    public function novo()
    {
        Auth::verificar();
        Auth::verificarNivel("ADMIN");

        require __DIR__ . '/../view/admin/novo-admin.php';
    }

    public function cadastrar()
    {
        Auth::verificar();
        Auth::verificarNivel("ADMIN");

        $usuario = trim($_POST['usuario']);
        $senha = $_POST['senha'];
        $nivel = $_POST['nivel'];

        if (strlen($usuario) < 4) {
            $_SESSION['erro'] =
                "O usuário deve possuir pelo menos 4 caracteres.";

            header("Location: " . BASE_URL . "/admin/novo");
            exit;
        }

        if (strlen($senha) < 8) {
            $_SESSION['erro'] =
                "A senha deve possuir pelo menos 8 caracteres.";

            header("Location: " . BASE_URL . "/admin/novo");
            exit;
        }

        if (
            !isset($_POST['csrf']) ||
            !hash_equals($_SESSION['csrf'], $_POST['csrf'])
        ) {
            die("Token CSRF inválido.");
        }

        if (!in_array($nivel, ['ADMIN', 'MODERADOR'])) {
            $_SESSION['erro'] = "Nível inválido.";
            header("Location: " . BASE_URL . "/admin/novo");
            exit;
        }

        $existe = AdminDAO::buscarUsuario($usuario);

        if ($existe) {
            $_SESSION['erro'] = "Já existe um usuário com esse nome.";
            header("Location: " . BASE_URL . "/admin/novo");
            exit;
        }

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

        $_SESSION['mensagem_sucesso'] =
            "Usuário cadastrado com sucesso.";

        header("Location: " . BASE_URL . "/admin/comentarios");
        exit;


    }
}