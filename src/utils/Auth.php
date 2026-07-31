<?php

namespace utils;
class Auth
{
    public static function verificar()
    {
        if (!isset($_SESSION['admin'])) {
            header(
                "Location: " . BASE_URL . "/login"
            );
            exit;
        }
    }

    public static function verificarNivel($niveis)
    {
        if (!isset($_SESSION['admin'])) {
            header("Location: " . BASE_URL . "/login"
            );
            exit;
        }

        if (!is_array($niveis)) {
            $niveis = [$niveis];
        }

        if (
            !isset($_SESSION['admin']['nivel']) ||
            !in_array(
                $_SESSION['admin']['nivel'],
                $niveis
            )
        ) {
            http_response_code(403);
            echo "Acesso negado";
            exit;
        }
    }

    public static function logout()
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
}