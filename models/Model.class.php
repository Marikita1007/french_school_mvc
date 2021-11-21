<?php

namespace models;
use PDO, PDOException, Exception;

abstract class Model
{
    private static $pdo;

    private static function setDataBase()
    {
        try{
            self::$pdo = new PDO("mysql:host=localhost; dbname=french_school; charset=utf8", "root", "root",
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                    PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_OBJ
                )
            );

        }catch (PDOException $e){
            die('Database connexion error');
        }
    }

    protected function getDataBase()
    {
        if(self::$pdo === null){
            self::setDataBase();
        }
        return self::$pdo;
    }
}