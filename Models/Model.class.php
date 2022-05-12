<?php

namespace Models;
use PDO, PDOException, Exception;

//抽象的(abstract)なメソッドは中身がない！returnとかなし！
//abstract として定義されたクラスのインスタンスを生成することはできない。
abstract class Model //Not always abstract for coneccting to database ,but one of the method
{
    private static $pdo;

    private static function setDataBase()//This setter will set everything in this function in $pdo
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
                    PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_OBJ//Ceci précis que nous faisons FETCH_OBJ par défaut
                )
            );

        }catch (PDOException $e){
            die('Database connexion error');//die permet d'afficher et de stopper le script
        }
    }

    protected function getDataBase()//This getter get everything inside the $pdo
    {
        if(self::$pdo === null){//je test si $pdo contient une instance PDO ("new PDO"). si elle est === à null 
            
            // déclanche la méthode setDataBase() qui créera une instance
            self::setDataBase();
        }
        return self::$pdo;
    }

    //This code checks if its localhost or not by localhost URL numbers  ['127.0.0.1', '::1']  '::1' is for Linux or certain computers
    //Ce code vérifie si son hôte local ou non par les numéros d'URL de l'hôte local ['127.0.0.1', '::1'] '::1' est pour Linux ou certains ordinateurs
    private static function isLocalhost($whitelist = ['127.0.0.1', '::1']) {
        //this checks if inside $whitelist, $_SERVER['REMOTE_ADDR' exist or not. like finding a needle inside a hay glass.
        // ceci vérifie si à l'intérieur de $whitelist, $_SERVER['REMOTE_ADDR' existe ou non. comme trouver une aiguille dans un verre à foin.
        return in_array($_SERVER['REMOTE_ADDR'], $whitelist);
    }
}