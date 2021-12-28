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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!--  animate.css !!!! NOT USING YET !!!!!-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- AOS  This is for the animation of the explanation of the site at page home -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Bootstrap -->
    <!-- All the bootstraps are for the Dashboard sidebar -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="public/css/navbar.css">
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/home.css">
    <link rel="stylesheet" href="public/css/about.css">
    <link rel="stylesheet" href="public/css/courses.css">
    <link rel="stylesheet" href="public/css/form.css">
    <link rel="stylesheet" href="public/css/contact.css">
    <link rel="stylesheet" href="public/css/admin.css">
    <link rel="stylesheet" href="public/css/test.css">
    <link rel="stylesheet" href="public/css/show_test_result.css">

    <title>French School</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="container-fluid">
            <a class="navbar-brand" href="<?= '?view=home' ?>">
                <img src= "public/img/school_icon.png" alt="French School" height="45">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- ms-autoでナビアイテムが右側に移動-->
                <ul class="navbar-nav ms-auto">
                <!-- === for sexurity reason  it must use === -->
                <?php if(!empty($_SESSION['member']) && $_SESSION['member']->status === "1"){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= '?view=showMember&op=admin' ?>">ADMIN</a>
                    </li>
                <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= '?view=showMember&op=test' ?>">TEST DE NIVEAU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= '?view=about' ?>">QUI SOMMES-NOUS?</a>
                    </li>
            <?php
                if(isset($_SESSION['member'])){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= '?view=showMember&op=show' ?>">MON COMPTE</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= '?view=sign' ?>">S'INSCRIRE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= '?view=login' ?>">CONNEXION</a>
                    </li>
                    <?php } ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            COURS DE FRANÇAIS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= '?view=beginner' ?>">DÉBUTANT</a>
                            <a class="dropdown-item" href="<?= '?view=intermediate' ?>">INTERMÉDIAIRE</a>
                            <a class="dropdown-item" href="<?= '?view=advanced' ?>">AVANCÉ</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<main>