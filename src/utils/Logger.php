<?php

namespace utils;

use dao\LogDAO;
use model\Cliente;
use model\Log;

class Logger
{
    public static function registrar(
        string $acao,
        Cliente $cliente
    ): void
    {
        $log = new Log();

        $log->setAcao($acao);

        $log->setComentarioId($cliente->getId());
        $log->setAutorComentario($cliente->getNome());
        $log->setEmailComentario($cliente->getEmail());
        $log->setTextoComentario($cliente->getTextinho());

        $log->setAdminId($_SESSION['admin']['id']);
        $log->setUsuario($_SESSION['admin']['usuario']);
        $log->setNivel($_SESSION['admin']['nivel']);

        $log->setIp($_SERVER['REMOTE_ADDR'] ?? '');
        $log->setUserAgent($_SERVER['HTTP_USER_AGENT'] ?? '');

        $log->setDataHora(new \DateTime());

        LogDAO::salvar($log);
    }
}