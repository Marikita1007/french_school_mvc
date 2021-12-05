<?php

namespace controllers;

use models\QuestionsManager;
use PDO, PDOException, Exception;

class QuestionsController
{
    private $db;

    public function __construct(){
        //"manager "オブジェクトを作成し、$dbプロパティに格納します。
        $this->db = new \Models\QuestionsManager;
    }

    public function run(){

        if($_SESSION['member']->status !== '1') {
            session_destroy();
            header('location:?view=home');
        } else {
            $opAdmin = $_GET['opAdmin'] ?? 'qlist';
            switch ($opAdmin){
                case 'qlist' :
                    $this->listQuestions();
                    break;
            }
            switch ($opAdmin){
                case 'edit' :
                    $this->editQuestions();
                    break;
            }
            switch ($opAdmin){
                case 'delete' :
                    $this->deleteQuestions();
                    break;
            }
            switch ($opAdmin){
                case 'show' :
                    $this->showData();
                    break;
            }
        }
    }

    public function listQuestions(){
        $questionsData = $this->db->selectQuestions();
        require('views/admin.leveltest.view.php');
    }

    public function editQuestions(){
        if ($_GET['opAdmin'] == 'edit' && !empty($_GET['id']) && is_numeric($_GET['id'])){
            $current = $this->db->selectQuestion($_GET['id']);
            $answersInfo = $this->db->selectAnswers($_GET['id']);
//            new \Debug($answersInfo);
//            new \Debug($current);
//            die;
        }

        if (!empty($_POST)) {

            $errors = array();
            $champs_vides = 0;
            foreach ($_POST as $key => $value) {
                $_POST[$key] = htmlspecialchars($value);
                if (trim($_POST[$key]) == '') $champs_vides++;
            }
            if ($champs_vides > 0) {
                $errors[] = 'Il manque ' . $champs_vides . ' information(s)';
            }
            if (empty($errors)) {

                if($_GET['opAdmin'] == 'edit' && !empty($_GET['id']) && is_numeric($_GET['id'])){
                    $this->db->update($_GET['id'], $_POST);
                }
                header('location:?op=list');
            }
        }

        require('views/edit_q&a.view.php');
    }

    //Need to edit !!
    public function showData(){
        if($_GET['op'] == 'show' && !empty($_SESSION['member']->id_member) && is_numeric($_SESSION['member']->id_member)){
            require('views/memberAccount.view.php');
        }else{
            require ('views/login.view.php');
        }
    }

    public function deleteQuestions(){
        echo 'hi deleteQuestions';
        die;
    }

}