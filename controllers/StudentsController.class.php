<?php

namespace controllers;

use models\Model;
use models\StudentsManager;
use PDO, PDOException, Exception;

class StudentsController
{
    private $db;

    public function __construct()
    {
        $this->db = new \Models\StudentsManager();
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
        }
    }

    public function goHome(){
        session_destroy();
        header('location:?view=home');
    }

    public function logout(){
        session_destroy();
        header('location:?view=home');
    }

    //!!!!!!何故か$_GET['id_student']が空
    public function deleteCheck(){
        require ('views/verify_delete.view.php');
    }

    public function delete(){
        if($_GET['op'] == 'delete' && !empty($_SESSION['student']->id_student) && is_numeric($_SESSION['student']->id_student)){
            $this->db->deleteData($_SESSION['student']->id_student);
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
            $errors[] = 'Il manque ' . $champs_vides . ' information(s)';
            require ('views/login.view.php');
        }

        if(empty($errors)){

            if(!empty($_POST['password']) && !empty($_POST['email'])){
                $studentInfo = $this->db->loginCheck($_POST['password'], $_POST['email']);
            }

            if($studentInfo){
                unset($_SESSION['student']);
                $_SESSION['student'] = $studentInfo;
                new \Debug($_SESSION);
                require('views/studentAccount.view.php');
            }else{
                $errors[] = "Votre saisie est incorrecte.";
                require ('views/login.view.php');
            }

        }
    }

    public function showData(){
        if($_GET['op'] == 'show' && !empty($_SESSION['student']->id_student) && is_numeric($_SESSION['student']->id_student)){
            require('views/studentAccount.view.php');
        }else{
            require ('views/login.view.php');
        }
    }

    public function editCheck(){
        require ('views/edit_student.view.php');
    }

    public function edit(){

//        if($_GET['op'] == 'edit' && !empty($_GET['id_student']) && is_numeric($_GET['id_student'])){
//            $studentInfo = $this->db->selectOne($_GET['id_student']);
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
                // j'incremente mon compteur de champs vides chaque fois que je detecte un champ non rempli
            }
            if ($champs_vides > 0) {
                $errors[] = '<div class="alert alert-danger">Il manque ' . $champs_vides . ' information(s)</div>';
            }

            if(!isset($_POST['password']) || $_POST['password'] != $_POST['password2']){
                $errors[] = '<div class="alert alert-danger">Le mot de passe ne correspond pas.</div>';
            }

            if (empty($errors)) {
                // Cas de modif d'un student existant
                if($_GET['op'] == 'edit' && !empty($_SESSION['student']->id_student) && is_numeric($_SESSION['student']->id_student)){
                    unset($_POST['password2']);
                    $this->db->update($_SESSION['student']->id_student, $_POST);// je lance la méthode update du model
                }

            }
        }
        $_SESSION['student'] = $this->db->selectOne($_SESSION['student']->id_student);
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
                $errors .= '<div class="alert alert-danger">Il manque ' . $champs_vides . ' information(s)</div>';
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
            $_POST['password'] = md5($_POST['password']);//password
            if($_GET['op'] == 'newStudent'){
                $newStudentId = $this->db->insert($_POST);
                if($newStudentId > 0){
                    $_SESSION['student'] = $this->db->selectOne($newStudentId);
                    //new \Debug($_SESSION);
                    require('views/register_confirm.view.php');
                }else{
                    $errors .= '<div class="alert alert-danger">Votre email est déjà utilisé.</div>';
                    require('views/sign_up.view.php');
                }
            }
        }else{
            require('views/sign_up.view.php');
        }

    }

}