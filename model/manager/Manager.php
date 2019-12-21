<?php

namespace Project\Model\Manager;

abstract class Manager
{
    private static $database = null;

    private const DRIVER = 'mysql';
    private const SERVER = 'localhost';
    private const DBNAME = 'jean_forteroche_blog';
    private const USERNAME = 'root';
    private const PASSWORD = '';

    protected function databaseConnect()
    {
        //Limite le nombre d'accès à la BDD
        if(self::$database === null) {

            try {

                self::$database = new \PDO(self::DRIVER.':host='.self::SERVER.';dbname='.self::DBNAME.';charset=utf8', self::USERNAME, self::PASSWORD);

            } catch (\Exception $e) {

                die('Erreur : ' . $e->getMessage());
            }
        }

        return self::$database;
    }
}