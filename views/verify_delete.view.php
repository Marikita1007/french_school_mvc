<?php
ob_start();
?>
    <div class="delete-account-txt text-center">Êtes-vous sûr de vouloir supprimer votre compte ?</div>
    <div class="row">
        <div class="col-12 text-center">
            <div class="p-3 ">
                <a href="?view=showMember&op=delete" class="btn btn-info">Supprimer votre compte</a>
            </div>
        </div>
    </div>


<?php
$content = ob_get_clean();
require('template.view.php');



