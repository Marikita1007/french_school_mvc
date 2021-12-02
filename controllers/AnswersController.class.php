<?php

namespace controllers;

use model\Model;
use PDO, PDOException, Exception;

class AnswersController{

    private $dataBase;

    public function __construct(){
        //"manager "オブジェクトを作成し、$dbプロパティに格納します。
        $this->dataBase = new \Models\AnswersManager;
    }

    public function runAnswers(){
        $op = $_GET['op'] ?? 'list';

        switch ($op){
            case 'list' :
                $this->listAllAnswers();
                break;
            case 'new':
                $this->register();
                break;
        }
    }

    public function listAllAnswers(){// méthode qui fait appel à la méthode selectAll() présente dans le modèle
        $answersData = $this->dataBase->selectAll();// on passe par db pour atteindre la méthode selectAll()
        require ('views/admin.leveltest.view.php');
    }

    public function listAnswers($id_question){
        return $this->dataBase->selectIdQuestion($id_question);
    }

    public function register(){
        return "Im register";
    }

}