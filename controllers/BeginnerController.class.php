<?php
namespace controllers;

class BeginnerController
{
    public function run(){
        $op = $_GET['op'] ?? 'list';

        switch ($op){
            case 'start' :
                require ('views/start_beginner_exercice.view.php');
                break;
            case 'beginner_exercice':
                require ('views/beginner_exercice.view.php');
                break;
            default:
                require ('views/beginner.view.php');
        }
    }

}