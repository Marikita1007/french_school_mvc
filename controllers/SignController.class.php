<?php

namespace Controllers;

use Models\Model;
use Models\MembersManager;
use PDO, PDOException, Exception;
use Debug;



class SignController
{
    private $db;

    public function __construct()
    {
        $this->db = new \Models\MembersManager();
    }

    public function run(){

        $view = $_GET['op'] ?? 'register';
        switch ($view) {
            case 'newMember' :
                $this->register();
                break;
            default :
                require('views/sign_up.view.php');
                break;
        }
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
    
        if(!isset($_POST['password']) || strlen($_POST['password']) < 8 || strlen($_POST['password']) > 20){
            $errors .= '<div class="alert alert-danger"> Le mot de passe doit contenir entre 8 et 20 caractères. </div>';
        }

        if (!preg_match("#[0-9]+#", $_POST['password'])) {
            $errors .= '<div class="alert alert-danger"> Le mot de passe doit inclure au moins un numéro. </div>';
        }
    
        if (!preg_match("#[a-z]+#", $_POST['password'])) {
            $errors .= '<div class="alert alert-danger">Le mot de passe doit contenir au moins une lettre. </div>';
        }  

        if (!preg_match("#[A-Z]+#", $_POST['password'])) {
            $errors .= '<div class="alert alert-danger">Le mot de passe doit contenir au moins une lettre capitale. </div>';
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
                new Debug($newMemberId);
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
}