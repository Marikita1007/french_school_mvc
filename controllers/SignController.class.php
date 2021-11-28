<?php

namespace controllers;

class SignController
{
    public function run(){

        $view = $_GET['op'] ?? 'register';
        switch ($view) {
            case 'newMember' :
                $newMember = new MembersController;
                $newMember->register();
                break;
            default :
                require('views/sign_up.view.php');
                break;
        }
    }
}