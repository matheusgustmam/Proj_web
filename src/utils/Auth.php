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

    public static function verificarNivel($nivel)
    {
        self::verificar();

        $nivelUsuario = $_SESSION['admin']['nivel'];

        if ($nivelUsuario === "ADMIN") {
            return;
        }

        if ($nivelUsuario !== $nivel) {
            http_response_code(403);
            exit("Acesso negado");
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