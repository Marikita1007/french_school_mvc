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
                    <li><a class="dropdown-item" href="#">Settings</a></li>
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
                            <a class="nav-link active" aria-current="page" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span class="ml-2">Membres</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?view=question&opAdmin=qlist">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                <span class="ml-2">Test de niveau</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                <span class="ml-2">Products</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span class="ml-2">Customers</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                                <span class="ml-2">Reports</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                <span class="ml-2">Integrations</span>
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

                <!-- 問題と解答の入力フォーム -->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-4 col-sm-6">
                            <form action="?op=new" method="post" class="">

                                <div class="form-group">
                                    <label for="question" class="form-label mt-4">Question</label>
                                    <textarea class="form-control" id="question" rows="3" name="question"><?= $current->question ?></textarea>
                                </div>
                                <?php $wrongAnswers = "";
                                foreach ($answersInfo as $answer) :
                                        if($answer->id_answer == $current->id_correct_answer){
                                            $correctAnswer =
                                            '<div class="form-group">
                                                <label for="answer">Bonne réponse</label><br>
                                                <input type="text" class="form-control" id="" name="correct_answer" value="' . $answer->answer  . '">
                                            </div>';
                                        }else{
                                            $wrongAnswers .=
                                            '<div class="form-group">
                                                <label for="answer">Mauvaise réponse</label><br>
                                                <input type="text" class="form-control" id="" name="answer" value="' . $answer->answer  . '">
                                            </div>';
                                        } endforeach;
                                        echo $correctAnswer;
                                        echo $wrongAnswers;
                                        ?>
                                <select name="difficulty" id="difficulty" class="form-select mt-3" aria-label="Default select example">
                                    <!--   condition ? if true, do this : otherwise, do this -->
                                    <option <?= $current->id_difficulty == "1" ? ' selected ': ''; ?>value="1">Débutant</option>
                                    <option <?= $current->id_difficulty == "2" ? ' selected ': ''; ?>value="2">Intermédiaire</option>
                                    <option <?= $current->id_difficulty == "3" ? ' selected ': ''; ?>value="3">Avance</option>
                                </select>

                                <input type="submit" value="Ajouter une nouvelle question et des réponses" class="btn btn-primary my-3">
                                <a href="?view=question&opAdmin=qlist" >Return</a>

                            </form>
                        </div>
                    </div>
                </div>
<?php
$content = ob_get_clean();
require ('template.view.php');