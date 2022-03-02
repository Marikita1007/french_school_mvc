<?php

namespace Controllers;

use Debug;
use Models\Model;
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

            //The guy write down his own email address : im.client@gmail.com
            // Your website sends the actual email, so the website's email address is contact@marika-abe.fr
            // The email where the actual message is sent to, is your own email : ishinomaki1007@gmail.com

            $lastName = $_POST['last_name'];
            $firstName = $_POST['first_name'];
            $subject = $_POST['subject'];
            $emailFrom = "contact@marika-abe.fr";
            $emailUser = $_POST['email'];
            $message = $_POST['message'];

            //I received en email to my google account
            $mailTo = 'ishinomaki1007@gmail.com';
            $headers = $emailFrom;
            $txt = "Vous avez reçu un e-mail de " . $firstName . " " . $lastName . ".\n\n" . $message . ".\n\n Expéditeur :" . $emailFrom;

            mail($mailTo, $subject, $txt, $headers);

            require('views/confirm_contact_sent.view.php');

        }else{
            require('views/contact.view.php');
        }

    }

}

