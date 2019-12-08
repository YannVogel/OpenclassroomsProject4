<?php


class Manager
{
    protected function databaseConnect()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=jean_forteroche_blog;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }

        return $db;
    }
}