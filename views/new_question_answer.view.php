<?php
ob_start();
?>

    <section id="admin">
    <nav class="navbar navbar-light bg-light p-3">
        <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
            <a class="navbar-brand" href="#">
                Administration
            </a>
            <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                    Bonjour, <?= $_SESSION['member']->nom ?>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Messages</a></li>
                    <li><a class="dropdown-item" href="logout.php">Se déconnecter</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-md-5">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="?view=showMember&op=adminF">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span class="ml-2">Membres</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?view=question&opAdmin=qlist">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                <span class="ml-2">Test de niveau</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
    <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
        </ol>
    </nav>
    <h1 class="h2">Dashboard</h1>
    <p>Voici un tableau de bord pour les utilisateurs de l'administration</p>

    <?php  if(!empty($errors)){ ?>
        <div class="alert alert-danger" role="alert"><?= implode($errors); ?></div>
    <?php }
    if(!empty($empty_difficulty)){ ?>
    <div class="alert alert-danger" role="alert"><?= $empty_difficulty; ?></div>
    <?php }
    if(!empty($wrongInputs)){ ?>
        <div class="alert alert-danger" role="alert"><?= $wrongInputs; ?></div>
    <?php }?>

    <!-- 問題と解答の入力フォーム -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-4 col-sm-6">
                <form action="?view=question&opAdmin=new" method="post" class="">

                    <div class="form-group">
                        <label for="question" class="form-label mt-4">Question</label>
                        <textarea class="form-control" id="question" rows="3" name="question"></textarea>
                    </div>

                        <div class="form-group">
                            <label for="answer">Bonne réponse</label><br>
                            <input type="text" class="form-control" id="" name="correct_answer" value="">
                        </div>
                        <div class="form-group">
                            <label for="answer">Mauvaise réponse</label><br>
                            <input type="text" class="form-control" id="" name="wrong_answer_1" value="">
                        </div>
                        <div class="form-group">
                            <label for="answer">Mauvaise réponse</label><br>
                            <input type="text" class="form-control" id="" name="wrong_answer_2" value="">
                        </div>
                        <div class="form-group">
                            <label for="answer">Mauvaise réponse</label><br>
                            <input type="text" class="form-control" id="" name="wrong_answer_3" value="">
                        </div>

                    <select name="id_difficulty" id="difficulty" class="form-select mt-3" aria-label="Default select example">
                        <option  value="">Choisissez le niveau de la question</option>
                        <option  value="1">Débutant</option>
                        <option  value="2">Intermédiaire</option>
                        <option  value="3">Avance</option>
                    </select>

                    <input type="submit" value="Ajouter la question et les réponses" class="btn btn-primary my-3">
                    <a href="?view=question&opAdmin=qlist" >Return</a>

                </form>
            </div>
        </div>
    </div>
<?php
$content = ob_get_clean();
require ('template.view.php');