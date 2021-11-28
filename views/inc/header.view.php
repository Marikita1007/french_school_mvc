<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- favicon -->
    <!-- MAMPの元のfaviconを表示しないために/Applications/MAMP/conf/apache/httpd.conf にある1行：Alias /favicon.ico "/Applications/MAMP/bin/favicon.ico"に#（コメント）にして無効化した
    httpd.conf の名前に注意！-->
    <link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon"/>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
          integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!--  animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Bootstrap -->
    <!-- popper.min.jsファイルを Bootstrap javascriptの前に含むことでドロップダウンバーを使うことができる -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >

    <!-- CSS -->
    <link rel="stylesheet" href="public/css/navbar.css">
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/home.css">
    <link rel="stylesheet" href="public/css/about.css">
    <link rel="stylesheet" href="public/css/courses.css">
    <link rel="stylesheet" href="public/css/form.css">
    <link rel="stylesheet" href="public/css/contact.css">

    <title>Index</title>
</head>
<body>

<!-- BOOTSWATCH Theme LUX を使用-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= '?view=home' ?>">
            <!--height="45"でブランドロゴサイズを変更 -->
            <img src= "public/img/school_icon.png" alt="French School" height="45">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
            <!-- ms-autoでナビアイテムが右側に移動-->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= '?view=test' ?>">TEST DE NIVEAU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= '?view=about' ?>">QUI SOMMES-NOUS?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= '?view=sign' ?>">S'INSCRIRE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= '?view=login' ?>">CONNEXION</a>
                </li>
                <li class="nav-item">
                <?php
                if(isset($_SESSION['student'])){ ?>
                    <a class="nav-link" href="<?= '?view=showStudent&op=show' ?>">MON COMPTE</a>
                <?php }else{
                    '?view=login'?>
                <?php } ?>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">COURS DE FRANÇAIS</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= '?view=beginner' ?>">DÉBUTANT</a>
                        <a class="dropdown-item" href="<?= '?view=intermediate' ?>">INTERMÉDIAIRE</a>
                        <a class="dropdown-item" href="<?= '?view=advanced' ?>">AVANCÉ</a>
                    </div>
                </li>
            </ul>
        </div>
</nav>

<main>
