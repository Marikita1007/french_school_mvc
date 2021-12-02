<?php
ob_start();
?>

<div class="container">
    <div class="row">
        <table>
            <thead>
            <tr class="d_flex">
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
            </tr>
            </thead>

            <tr>
                <td><?= $_SESSION['member']->prenom ?></td>
                <td><?= $_SESSION['member']->nom ?></td>
                <td><?= $_SESSION['member']->email ?></td>
            </tr>
        </table>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="p-3 ">
                    <a href="?op=list" >Return</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="p-3 ">
                <a href="?view=showMember&op=editCheck" class="btn btn-info">Modifier votre Profile</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="p-3 ">
                <a href="logout.php" class="btn btn-info">Se déconnecter</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="p-3 ">
                <a href="?view=showMember&op=deleteCheck" class="btn btn-info">Supprimer votre compte</a>
            </div>
        </div>
    </div>

</div>

<?php
$content = ob_get_clean();
require('template.view.php');