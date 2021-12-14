<?php require_once('inc/header.view.php');

echo $content;

if(!empty($_SESSION['member']) && $_SESSION['member']->status === "1"){
    require_once('inc/admin_footer.view.php');
}else{
    require_once ('inc/footer.view.php');
    require_once ('inc/header.view.php');
}