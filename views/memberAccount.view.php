<?php
ob_start();

?>
<!-- Need to modify the bootstrap !-->
    <div class="row member-page-container">
        <div class="col-lg-12 col-md-8 col-xl-8 mb-4 mb-lg-0">
            <div class="card">
                <h5 class="card-header">Bonjour <strong class="text-primary" ><?= $_SESSION['member']->prenom ?></strong> !</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                            <tr class="d_flex">
                                <th scope="col">Prénom</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Email</th>
                                <th scope="col"></th>
                            </tr>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?= $_SESSION['member']->prenom ?></td>
                                <td><?= $_SESSION['member']->nom ?></td>
                                <td><?= $_SESSION['member']->email ?></td>
                                <td><a href="?op=list"  class="btn btn-sm btn-primary">La page d'accueil</a></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="p-3">
                                        <a href="?view=showMember&op=editCheck" class="btn btn-info">Modifier votre Profile</a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-12">
                                    <div class="p-3">
                                        <a href="<?= '?view=showMember&op=logout' ?>" class="btn btn-info">Se déconnecter</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-4 col-sm-12">
                                    <div class="p-3">
                                        <a href="?view=showMember&op=deleteCheck" class="btn btn-info">Supprimer votre compte</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-4 col-xl-4">
            <div class="card">
                <h5 class="card-header">Etudiez avec nous !</h5>
                <div class="card-body">
                    <?php
                    if($testResult){
                        echo "<div>Résultat du dernier test de niveau : " . '<strong class="text-primary" >' . $testResult . '</strong></div>';
                    } else {
                        echo "Vous n'avez pas passé le test de niveau.";
                    }?>
                </div>
                <div class="card-body">
                    <a class="btn btn-info" href="<?= '?view=showMember&op=test' ?>"><div id="traffic-chart">Faire le test de niveau</div></a>
                </div>
                <div class="card-body">
                    <a class="btn btn-info" href="<?= '?view=beginner' ?>"><div id="traffic-chart">DÉBUTANT</div></a>
                </div>
                <div class="card-body">
                    <a class="btn btn-info" href="<?= '?view=intermediate' ?>"><div id="traffic-chart">INTERMÉDIAIRE</div></a>
                </div>
                <div class="card-body">
                    <a class="btn btn-info" href="<?= '?view=advanced' ?>"><div id="traffic-chart">AVANCÉ</div></a>
                </div>
            </div>
        </div>
    </div>


<?php
$content = ob_get_clean();
require('template.view.php');