<?php

namespace Controllers;

class IntermediateController
{
    public function run(){
        $op = $_GET['op'] ?? 'list';

        switch ($op){
            case 'start' :
                require ('views/start_intermediate_exercice.view.php');
                break;
            case 'intermediate_exercice':
                require ('views/intermediate_exercice.view.php');
                break;
            case 'lesson':
                $this->showLesson();
                break;
            default:
                require ('views/intermediate.view.php');
        }
    }

    public function showLesson(){
        if($_GET['op'] == 'lesson' && !empty($_SESSION)){
            require  ('views/intermediate.view.php');
        }else{
            header('location:?view=login');
        }
    }

}