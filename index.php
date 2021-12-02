<?php

session_start();
require_once ('autoload.php');

$view = $_GET['view'] ?? 'home';
switch ($view){
    case 'home' :
        $home = new Controllers\HomeController;
        $home->run();
        break;
    case 'about' :
        $about = new Controllers\AboutController;
        $about->run();
        break;
    case 'question' :
        $test = new Controllers\QuestionsController();
        $test->run();
        break;
    case 'sign' :
        $sign = new Controllers\SignController;
        $sign->run();
        break;
    case 'login' :
        $login = new Controllers\LoginController;
        $login->run();
        break;
    case 'beginner' :
        $beginner = new Controllers\BeginnerController;
        $beginner->run();
        break;
    case 'intermediate':
        $interm = new Controllers\IntermediateController;
        $interm->run();
        break;
    case 'advanced':
        $advanced = new Controllers\AdvancedController;
        $advanced->run();
        break;
    case 'contact':
        $contact = new Controllers\ContactController;
        $contact->run();
        break;
    case 'showMember':
        $member = new controllers\MembersController;
        $member->run();
        break;
    case 'myPage' :
        $myPage = new controllers\myPageController;
        $myPage->run();
        break;
}



