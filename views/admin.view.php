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
                            <a class="nav-link active nav-member" aria-current="page" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span class="ml-2">Membres</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?view=question&opAdmin=qlist">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                <span class="ml-2">Modifier le test</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">

                <h1 class="h2">Dashboard</h1>
                <p>Voici un tableau de bord pour les utilisateurs de l'administration</p>

                <div class="card">
                    <h5 class="card-header">Les élèves de French School</h5>
                    <div class="card-body">
                        <div class="row">

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">ID Membre</th>
                                            <th scope="col">Prenom</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Date d'inscription</th>
                                            <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ( $members as $member) : ?>
                                            <tr>
                                                <td><?= $member->id_member ?></th>
                                                <td><?= $member->prenom ?></td>
                                                <td><?= $member->nom ?></td>
                                                <td><?= $member->email ?></td>
                                                <td><?= $member->signup_date  ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row my-4">
                    <h4>Nombre d'inscriptions</h4>
                    <?php setlocale(LC_TIME, "fr_FR"); ?>
                    <p>(<?= strftime("%d %B %Y"); ?>)</p>
                    <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header text-center">Aujourd'hui</h5>
                            <div class="card-body">
                                <h5 class="card-title text-center"><?= $todayRegister;  ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                            <h5 class="card-header text-center">Cette semaine</h5>
                            <div class="card-body">
                                <h5 class="card-title text-center"><?= $weekRegister;  ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                            <h5 class="card-header text-center">Ce mois-ci</h5>
                            <div class="card-body">
                                <h5 class="card-title text-center"><?= $monthRegister;  ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                            <h5 class="card-header text-center">Cette année</h5>
                            <div class="card-body">
                                <h5 class="card-title text-center"><?= $yearRegister;  ?></h5>
                            </div>
                            </div>
                        </div>
                </div>

<?php
$content = ob_get_clean();
require('template.view.php');