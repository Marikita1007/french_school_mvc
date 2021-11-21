<div class="container">
    <div class="row">
        <input type="hidden" name="id_student" value="<?= $studentInfo->id_student?>">
        <table>
            <thead>
            <tr class="d_flex">
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
            </tr>
            </thead>

            <tr>
                <td><?= $studentInfo->prenom ?></td>
                <td><?= $studentInfo->nom ?></td>
                <td><?= $studentInfo->email ?></td>
            </tr>
        </table>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="p-3 ">
                    <a href="?op=list" >Return</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="p-3 ">
                    <a href="?view=showStudent&op=editCheck&id_student=<?= $studentInfo->id_student ?>" class="btn btn-info">Modifier votre Profile</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="p-3 ">
                    <a href="?view=showStudent&op=logout&id_student=<?= $studentInfo->id_student ?>" class="btn btn-info">Se déconnecter</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="p-3 ">
                    <a href="?view=showStudent&op=deleteCheck&id_student=<?= $studentInfo->id_student ?>" class="btn btn-info">Supprimer votre compte</a>
                </div>
            </div>
        </div>
    </div>
</div>