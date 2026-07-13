<?php
namespace utils;

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
Use Dotenv\Dotenv;
class Conexao
{
    private static $entityManager;

    public static function getEntityManager() {

        if(self::$entityManager === null){
            $config = ORMSetup::createAttributeMetadataConfiguration(
                paths: [realpath(__DIR__ . '/../model')],
                isDevMode: true,
            );

            $dotenv = Dotenv::createImmutable(dirname(__DIR__, 2));
            $dotenv->load();

            $connetion = DriverManager::getConnection([
                'driver' => $_ENV['DB_DRIVER'],
                'host' => $_ENV['DB_HOST'],
                'port' => $_ENV['DB_PORT'],
                'dbname' => $_ENV['DB_NAME'],
                'user' => $_ENV['DB_NAME'],
                'password' => $_ENV['DB_PASSWORD'],
            ], $config);

            self::$entityManager = new EntityManager($connetion, $config);
        }
        return self::$entityManager;
    }
}