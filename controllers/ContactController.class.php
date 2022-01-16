<?php

namespace controllers;

use Debug;
use models\Model;
use PDO, PDOException, Exception;

class ContactController
{
    public function run(){

        $op = $_GET['op'] ?? '';
        switch ($op){
            case '' :
                $this->showContactPage();
                break;
            case 'sendMessage' :
                $this->sendMessage();
                break;
        }

        if($op='sendMessage'){}
    }

    public function showContactPage(){
        require ('views/contact.view.php');
    }

    //Have to check if all of them were filled
    //make sure the email is real email
    public function sendMessage(){

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

        if(!isset($_POST['last_name']) || strlen($_POST['last_name']) < 2 || strlen($_POST['last_name']) > 30 ){
            $errors .= '<div class="alert alert-danger">Le prenom doit contenir entre 2 et 30 caractères. </div>';
        }

        if(!isset($_POST['first_name']) || strlen($_POST['first_name']) < 2 || strlen($_POST['first_name']) > 30 ){
            $errors .= '<div class="alert alert-danger">Le prenom doit contenir entre 2 et 30 caractères. </div>';
        }

        if(!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL )){
            $errors .= '<div class="alert alert-danger"> Email non valide. </div>';
        }

        if(!isset($_POST['subject']) || strlen($_POST['subject']) < 5 ){
            $errors .= '<div class="alert alert-danger">Le sujet doit avoir au moins 5 caractères</div>';
        }

        if(!isset($_POST['message']) || strlen($_POST['message']) < 10 ||  strlen($_POST['message']) > 1000){
            $errors .= '<div class="alert alert-danger">Le message doit avoir au moins 10 caractères et moins de 1000 caractères</div>';
        }

        if($errors == ""){

            $lastName = $_POST['last_name'];
            $firstName = $_POST['first_name'];
            $subject = $_POST['subject'];
            $emailFrom = $_POST['email'];
            $message = $_POST['message'];

            //need to make sure if its possible to send to gmail
            $mailTo = 'french_school@hotmail.com';
            $headers = "Expéditeur: " . $emailFrom;
            $txt = "Vous avez reçu un e-mail de " . $firstName . " " . $lastName . ".\n\n" . $message;

            mail($mailTo, $subject, $txt, $headers);

            //NEED TO CHECK IF THE EMAIL IF ACTUALLY WORKING ONCE ITS UPLOADED
            // new Debug($mailTo);
            // new Debug($headers);
            // new Debug($txt);
            // die;

            //Have to edit this header
            //need to create a new view
            require('views/confirm_contact_sent.view.php');

        }else{
            require('views/contact.view.php');
        }

    }

}

