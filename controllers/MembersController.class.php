<?php
namespace controllers;

use models\Model;
use models\MembersManager;
use models\QuestionsManager;
use models\AnswersManager;
use models\TestResultsManager;
use PDO, PDOException, Exception;

class MembersController
{
    private $db;

    public function __construct()
    {
        $this->db = new \Models\MembersManager();
        $this->dbQuestions = new \Models\QuestionsManager();
        $this->dbAnswers = new \Models\AnswersManager();
        $this->dbtestResults = new \Models\TestResultsManager();
    }

    public function run(){
        $op = $_GET['op'] ?? 'list';

        switch ($op){
            case 'list' :
                break;
                $this->listAll();
            case 'editCheck':
                $this->editCheck();
                break;
            case 'edit' :
                $this->edit();
                break;
            case 'editPsw':
                $this->editPassword();
                break;
            case 'show' :
                $this->showData();
                break;
            case 'login':
                $this->login();
                break;
            case 'logout':
                $this->logout();
                break;
            case 'deleteCheck':
                $this->deleteCheck();
                break;
            case 'delete':
                $this->delete();
                break;
            case 'home':
                $this->goHome();
                break;
            case 'admin':
                $this->goAdmin();
                break;
            case 'test':
                $this->showTest();
                break;
            case 'testResult':
                $this->showTestResult();
                break;
        }
    }

    public function goAdmin(){
        $members = $this->db->selectStudents();
        require ('views/admin.view.php');
    }

    public function goHome(){
        session_destroy();
        header('location:?view=home');
    }

    //!!!!!!何故か$_GET['id_member']が空
    public function deleteCheck(){
        require ('views/verify_delete.view.php');
    }

    public function delete(){
        if($_GET['op'] == 'delete' && !empty($_SESSION['member']->id_member) && is_numeric($_SESSION['member']->id_member)){
            $this->db->deleteData($_SESSION['member']->id_member);
        }
        require ('views/confirm_deleted.view.php');
    }

    public function login(){
        $errors = array();
        $champs_vides = 0;
        foreach ($_POST as $key => $value) {
            $_POST[$key] = htmlspecialchars($value);
            if (trim($_POST[$key]) == '') $champs_vides++;
            // j'incremente mon compteur de champs vides chaque fois que je detecte un champ non rempli
        }
        if (!empty($champs_vides)) {
            $errors[] = '<div class="alert alert-danger">Il manque' . $champs_vides . ' information(s) </div>';
            require ('views/login.view.php');
        }

        if(empty($errors)){

            if(!empty($_POST['password']) && !empty($_POST['email'])){
                $memberInfo = $this->db->loginCheck($_POST['password'], $_POST['email']);
            }

            if($memberInfo){
                unset($_SESSION['member']);
                $_SESSION['member'] = $memberInfo;
                //Admin Check
                $infosArray = json_decode(json_encode($_SESSION['member']), true);
                if(!empty($infosArray) && $infosArray['status'] == 1){
                    $members = $this->db->selectStudents();
                    require('views/admin.view.php');
                    //header('location:?view=home&op=admin');
                }else{
                    //header('location:?view=home');
                    //これなんでアドミンは何もしないのにでるのか。多分セッション。そのほうがきれい。
                    $testResultDatas = $this->dbtestResults->checkUserHistory($_SESSION["member"]->id_member);
                    if($testResultDatas){
                        $testResult = $testResultDatas->test_result;
                    }else{
                        $testResult = false;
                    }
                    require ('views/memberAccount.view.php');
                }

            }else{
                $errors[] = '<div class="alert alert-danger"> Votre saisie est incorrecte. </div>';
                require ('views/login.view.php');
            }

        }
    }

    public function showData(){
        if($_GET['op'] == 'show' && !empty($_SESSION['member']->id_member) && is_numeric($_SESSION['member']->id_member)){
            $testResultDatas = $this->dbtestResults->checkUserHistory($_SESSION["member"]->id_member);
            if($testResultDatas){
                $testResult = $testResultDatas->test_result;
            }else{
                $testResult = false;
            }
            require('views/memberAccount.view.php');
        }else{
            require ('views/login.view.php');
        }
    }

    public function editCheck(){
        require ('views/edit_member.view.php');
    }

    public function edit(){

//        if($_GET['op'] == 'edit' && !empty($_GET['id_member']) && is_numeric($_GET['id_member'])){
//            $memberInfo = $this->db->selectOne($_GET['id_member']);
//        }

        if(!empty($_POST)){

            $errors = array();
            $champs_vides = 0;
            foreach ($_POST as $key => $value) {
                $_POST[$key] = htmlspecialchars($value);
                if($key == "password" || $key == "password2"){
                    $_POST[$key] = md5($_POST[$key]);
                }
                if (trim($_POST[$key]) == '') $champs_vides++;
                // j'incrementxe mon compteur de champs vides chaque fois que je detecte un champ non rempli
            }
            if ($champs_vides > 0) {
                $errors[] = '<div class="alert alert-danger">Il manque ' . $champs_vides . ' information(s).</div>';
            }

            if(!isset($_POST['password']) || $_POST['password'] != $_POST['password2']){
                $errors[] = '<div class="alert alert-danger">Le mot de passe ne correspond pas.</div>';
            }

            if (empty($errors)) {
                // Cas de modif d'un member existant
                if($_GET['op'] == 'edit' && !empty($_SESSION['member']->id_member && is_numeric($_SESSION['member']->id_member))){
                    unset($_POST['password2']);
                    $this->db->update($_SESSION['member']->id_member, $_POST);// je lance la méthode update du model
                }

            }
        }
        $_SESSION['member'] = $this->db->selectOne($_SESSION['member']->id_member);
        require ('views/confirm_edited.view.php');

    }

    public function register(){

        $errors = "";

        if(!empty($_POST)){

            $champs_vides = 0;
            foreach ($_POST as $key => $value){
                $_POST[$key] = htmlspecialchars($value);
                if (trim($_POST[$key]) == '') $champs_vides++;
            }
            if($champs_vides > 0){
                $errors .= '<div class="alert alert-danger">Il manque ' . $champs_vides . ' information(s).</div>';
            }
        }

        if(!isset($_POST['nom']) || strlen($_POST['nom']) < 2 || strlen($_POST['nom']) > 30 ){
            $errors .= '<div class="alert alert-danger">Le prenom doit contenir entre 2 et 30 caractères. </div>';
        }

        if(!isset($_POST['prenom']) || strlen($_POST['prenom']) < 2 || strlen($_POST['nom']) > 30 ){
            $errors .= '<div class="alert alert-danger">Le prenom doit contenir entre 2 et 30 caractères. </div>';
        }

        if(!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL )){
            $errors .= '<div class="alert alert-danger"> Email non valide. </div>';
        }

        if(!isset($_POST['password']) || strlen($_POST['password']) < 5 || strlen($_POST['password']) > 20){
            $errors .= '<div class="alert alert-danger"> Le mot de passe doit contenir entre 5 et 20 caractères. </div>';
        }

        if(!isset($_POST['password']) || $_POST['password'] != $_POST['password2']){
            $errors .= '<div class="alert alert-danger">Le mot de passe ne correspond pas.</div>';
        }


        if($errors == ""){
            $showPage = "";
            unset($_POST['password2']);
            $_POST['password'] = md5($_POST['password']);//password encrypted
            if($_GET['op'] == 'newMember'){
                $newMemberId = $this->db->insert($_POST);
                if($newMemberId > 0){
                    $_SESSION['member'] = $this->db->selectOne($newMemberId);
                    require('views/register_confirm.view.php');
                }else{
                    $errors .= '<div class="alert alert-danger" >Votre email est déjà utilisé.</div>';
                    require('views/sign_up.view.php');
                }
            }
        }else{
            require('views/sign_up.view.php');
        }

    }

    public function showTest(){
        if($_GET['op'] == 'test' && !empty($_SESSION) ){
            $questionsData = $this->dbQuestions->selectQuestions();
            $answersData = $this->dbAnswers->selectAll();
            require('views/test.view.php');
        }else{
            header('location:?view=login');
        }
    }

    public function showTestResult(){
        //Even the user didn't choose any answer, it still get in here because of  $_POST["questions_amount"]
        if($_GET['op'] == 'testResult' && !empty($_SESSION)){
            $errors = array();
            //$_POST["questions_amount"] is checking the length of the questions
            //It is adding questions_amount so it needs to be increased(+1)
            $empty_answers = $_POST["questions_amount"] - count($_POST) + 1;
            //We don't need the questions_amount anymore so unset it
            unset($_POST["questions_amount"]);
            if($empty_answers > 0){
                $errors[] = '<div class="alert alert-danger">Vous avez oublié ' . $empty_answers .'réponse(s)</div>';
                $questionsData = $this->dbQuestions->selectQuestions();
                $answersData = $this->dbAnswers->selectAll();
            }
            if(empty($errors)){
                // models\QuestionManager
                // $testScores returns the result score of the user
                $testScores = $this->dbQuestions->checkTestAnswers($_POST);
                // this checks the level of the user
                switch ($testScores) {
                    case ($testScores >= 40) :
                        $testResult = "Avancé";
                        break;
                    case ($testScores >= 20) :
                        $testResult = "Intermédiaire";
                        break;
                    case ($testScores >= 0) :
                        $testResult = "Débutant";
                        break;
                }
                //insertTestResult function will keep the latest data of the level test result
                // $_SESSION["member"]->id_member gets the id_member which is in array in array
                $userHistory = $this->dbtestResults->checkUserHistory($_SESSION["member"]->id_member);
                if($userHistory == false){
                    $insertTestResult = $this->dbtestResults->insertTestResult($testResult, $_SESSION["member"]->id_member);
                }else{
                    $updateTestResult = $this->dbtestResults->updateTestResult($testResult, $_SESSION["member"]->id_member);
                }
                $testResultDatas = $this->dbtestResults->checkUserHistory($_SESSION["member"]->id_member);
                $testResult = $testResultDatas->test_result;
                require('views/show_test_result.view.php');
            }
        }
        require("views/test.view.php");
    }

}