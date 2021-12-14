<?php

namespace controllers;

use http\Encoding\Stream\Debrotli;
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
                case 'prefill' :
                    $this->prefillQuestions();
                    break;
                case 'delete' :
                    $this->deleteQuestions();
                    break;
                case 'show' :
                    $this->showDashboard();
                    break;
                case 'new' :
                    $this->newQuestions();
                    break;
                case 'edit' :
                    $this->editQuestion();
                    break;
            }
        }
    }

    public function listQuestions(){
        $questionsData = $this->db->selectQuestions();
        require('views/admin.leveltest.view.php');
    }

    public function prefillQuestions(){
        if ($_GET['opAdmin'] == 'prefill' && !empty($_GET['id']) && is_numeric($_GET['id'])){
            $currentQuestion = $this->db->selectQuestion($_GET['id']);
            $answersInfo = $this->db->selectAnswers($_GET['id']);
        }
        require('views/edit_q&a.view.php');
    }

    public function editQuestion(){

        if(!empty($_POST)){
            $errors = array();
            $empty_columns = 0;
            foreach ($_POST as $key => $value){
                $_POST[$key] = htmlspecialchars($value);
                if(trim($_POST[$key]) == '') $empty_columns++;
            }
            if($empty_columns > 0){
                $errors[] = 'Il manque ' . $champs_vides . ' information(s)';
            }

            if(empty($errors)){
                if($_GET['opAdmin'] == 'edit' && !empty($_GET['id']) && is_numeric($_GET['id'])){
                    $this->db->updateQuestion($_GET['id'], $_POST);
                    $this->db->updateAnswers($_GET['id'], $_POST);
                }
                //This path is not created yet !!
                //header('location:?opAdmin=lisQuestion');
            }
        }

    }

    //Need to add if else for checking if the answers are different
    public function newQuestions(){
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

            //Need to write insert in the model and make sure that the inputs shows if the user input is wrong!
            if(empty($errors)){
                if ($_GET['opAdmin'] == 'new') {
                    $wrongInputs = '';
                    if($_POST['correct_answer'] == $_POST['wrong_answer_1'] && $_POST['correct_answer'] == $_POST['wrong_answer_2'] && $_POST['correct_answer'] == $_POST['wrong_answer_3']   ){
                        $wrongInputs .= 'La bonne réponse doit être unique!';
                    }else{
                        if($_POST['wrong_answer_1'] == $_POST['wrong_answer_2'] && $_POST['wrong_answer_2'] == $_POST['wrong_answer_3']  ){
                            $wrongInputs .= 'Les mauvaises réponses doivent être différentes !';
                        }
                    }
                    if(empty($wrongInputs)){
                        echo 'No wrongInputs or errors';
                        die;
                        $this->db->insert($_POST);
                    }
                }
            }


            //header('location:?opAdmin=list');
        }
        require_once ('views/new_q&a.view.php');
    }


    public function showDashboard(){
        if($_GET['op'] == 'show' && !empty($_SESSION['member']->id_member) && is_numeric($_SESSION['member']->id_member)){
            require('views/memberAccount.view.php');
        }else{
            require ('views/login.view.php');
        }
    }

    public function deleteQuestions(){
        if (!empty($_GET['id']) && is_numeric($_GET['id']) && $_GET['opAdmin'] == 'delete'){
                $this->db->delete($this['id']);
        }
        echo "Its deleted ! ";
        die;
        header('location:?opAdmin=qlist');
    }


}
