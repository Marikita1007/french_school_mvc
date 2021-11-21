<?php

class Autoload{
    public static function autoInclude($className){

        $path = str_replace('\\', '/', $className) .'.class.php';
        require $path;
    }
}

spl_autoload_register(array('Autoload', 'autoInclude'));