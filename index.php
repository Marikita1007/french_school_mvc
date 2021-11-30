<?php

session_start();
require_once ('autoload.php');
require_once ('views/inc/header.view.php');

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
    case 'test' :
        $test = new Controllers\TestController;
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

if(!empty($_SESSION['member']) && $_SESSION['member']->status === "1"){ 
    require_once('views/inc/admin_footer.view.php');
}else{
    require_once ('views/inc/footer.view.php');
}

