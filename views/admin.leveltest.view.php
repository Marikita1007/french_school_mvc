<?php
ob_start();
?>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Question ID</th>
            <th scope="col">Question</th>
            <th scope="col">Difficultés</th>
            <th scope="col"></th>
            <th scope="col"><a href="?op=new" class="btn btn-primary ">Ajouter</a></th>
        </tr>
        </thead>
        <?php foreach ($questionsData as $question) : ?>
            <tr>
                <td><?= $question->id_question ?></td>
                <td><?= $question->question ?></td>
                <td><?= $question->difficulty ?></td>
                <td class="d-flex justify-content-end"><a href="?view=question&opAdmin=edit&id=<?= $question->id_question ?>" class="btn btn-primary ">Modifier</a></td>
                <td><a href="?view=question&opAdmin=delete&id=<?= $question->id_question ?>" class="btn btn-danger">Supprimer</a></td>
            </tr>
        <?php endforeach; ?>
    </table>


<?php
$content = ob_get_clean();
require ('template.view.php');

