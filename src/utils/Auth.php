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
        if (
            !isset($_SESSION['nivel']) ||
            $_SESSION['nivel'] !== $nivel
        ) {
            http_response_code(403);
            echo "Acesso negado";
            exit;
        }
    }

    public static function logout()
    {
        $_SESSION = [];
        session_destroy();
        header(
            "Location: " . BASE_URL . "/login"
        );
        exit;
    }
}