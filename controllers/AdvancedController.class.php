<?php
namespace Controllers;

class AdvancedController
{
    public function run(){

        $op = $_GET['op'] ?? 'list';

        switch ($op){
            case 'start' :
                require ('views/start_advanced_exercice.view.php');
                break;
            case 'advanced_exercice':
                require ('views/advanced_exercice.view.php');
                break;
            case 'lesson':
                $this->showLesson();
                break;
            default:
                require ('views/advanced.view.php');
        }
    }

    public function showLesson(){
        if($_GET['op'] == 'lesson' && !empty($_SESSION)){
            require  ('views/advanced.view.php');
        }else{
            header('location:?view=login');
        }
    }

}