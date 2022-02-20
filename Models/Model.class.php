<?php

namespace Models;
use PDO, PDOException, Exception;

abstract class Model
{
    private static $pdo;

    private static function setDataBase()
    {
        ;
        if(self::isLocalhost()){
            $host = "localhost";
            $username = "root";
            $password = "";
            $dbname = "french_school_mvc";
        } else {
            $host = "marikat1007.mysql.db";
            $username = "marikat1007";
            $password = "b6bukRXJxW3WUbp";
            $dbname = "marikat1007";
        }

        try{
            self::$pdo = new PDO("mysql:host=$host;dbname=$dbname; charset=utf8", $username, $password,
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

    private static function isLocalhost($whitelist = ['127.0.0.1', '::1']) {
        return in_array($_SERVER['REMOTE_ADDR'], $whitelist);
    }
}