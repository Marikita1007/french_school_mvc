<?php
ob_start();
?>


<section id="admin">
    <div class="container-fluid">
    <div class="row">
    <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-md-5">
            <ul class="nav flex-column">
                <li class="nav-item margin-top">
                    <a class="nav-link" aria-current="page" href="?view=showMember&op=admin">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        <span class="ml-2 margin-top">Membres</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"  href="?view=question&opAdmin=qlist">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                        <span class="ml-2">Modifier le test</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">

    <h1 class="h2">Tableau de bord</h1>
    <p>Voici un tableau de bord pour les utilisateurs de l'administration</p>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Question ID</th>
            <th scope="col">Question</th>
            <th scope="col">Difficultés</th>
            <th scope="col"></th>
            <th scope="col"><a href="?view=question&opAdmin=new" class="btn btn-primary ">Ajouter</a></th>
        </tr>
        </thead>
        <?php $questionNumber = 1; ?>
        <?php foreach ($questionsData as $question) : ?>
            <tr>
                <td><?= $questionNumber++ ?></td>
                <td><?= $question->id_question ?></td>
                <td><?= $question->question ?></td>
                <td><?= $question->difficulty ?></td>
                <td class="d-flex justify-content-end"><a href="?view=question&opAdmin=prefill&id=<?= $question->id_question ?>" class="btn btn-primary ">Modifier</a></td>
                <td><a href="?view=question&opAdmin=delete&id=<?= $question->id_question ?>" class="btn btn-danger">Supprimer</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

<?php
$content = ob_get_clean();
require ('template.view.php');

