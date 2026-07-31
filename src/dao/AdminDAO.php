<?php

namespace dao;

use model\Admin;
use utils\Conexao;

class AdminDAO extends GenericDAO
{
    protected static $modelClass = Admin::class;

    public static function buscarUsuario($usuario)
    {
        $em = Conexao::getEntityManager();
        return $em->getRepository(Admin::class)
            ->findOneBy([
                "usuario" => $usuario
            ]);

    }
}