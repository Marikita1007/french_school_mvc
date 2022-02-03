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
            case 'lesson':
                $this->showLesson();
                break;
            default:
                require ('views/beginner.view.php');
        }
    }

    public function showLesson(){
        if($_GET['op'] == 'lesson' && !empty($_SESSION)){
            require  ('views/beginner.view.php');
        }else{
            header('location:?view=login');
        }
    }

}