<?php

namespace Project\Model\Manager;

/**
 * Class Manager
 * @package Project\Model\Manager
 */
abstract class Manager
{
    /**
     * @var null Contains the database connexion informations once connected
     */
    private static $database = null;

    /**
     * @var string Contains the relational database management system (RDBMS)
     */
    private const DRIVER = 'mysql';

    /**
     * @var string Contains the server address
     */
    private const SERVER = 'localhost';

    /**
     * @var string Contains the database name
     */
    private const DBNAME = 'jean_forteroche_blog';

    /**
     * @var string Contains the database username
     */
    private const USERNAME = 'root';

    /**
     * @var string Contains the database password
     */
    private const PASSWORD = '';

    /**
     * @return \PDO|null
     * Connect to the database.
     * If already connected, return the database informations.
     */
    protected function databaseConnect()
    {
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