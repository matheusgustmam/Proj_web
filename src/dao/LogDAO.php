<?php

namespace dao;

use model\Log;
use utils\Conexao;

class LogDAO extends GenericDAO
{
    protected static $modelClass = Log::class;
    public static function listar()
    {
        $em = Conexao::getEntityManager();
        return $em->getRepository(Log::class)
            ->findBy([], ['dataHora' => 'DESC']);
    }
}