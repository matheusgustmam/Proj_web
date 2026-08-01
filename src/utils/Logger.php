<?php

namespace utils;

use dao\LogDAO;
use model\Log;

class Logger
{
    public static function registrar(string $acao, int $comentarioId): void
    {
        $log = new Log();

        $log->setAcao($acao);
        $log->setComentarioId($comentarioId);
        $log->setUsuario($_SESSION['admin']['usuario']);
        $log->setDataHora(new \DateTime());

        LogDAO::salvar($log);
    }
}