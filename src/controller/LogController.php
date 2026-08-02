<?php

namespace controller;

use dao\LogDAO;
use utils\Auth;

class LogController
{
    public function listar(array $params = [])
    {
        Auth::verificarNivel([
            'ADMIN',
            'MODERADOR'
        ]);
        $logs = LogDAO::listar();
        require __DIR__ . '/../view/admin/pag-logs.php';
    }
}