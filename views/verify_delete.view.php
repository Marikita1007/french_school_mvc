<?php
ob_start();
?>

    <div class="d-flex flex-column align-items-center justify-content-center little-text-page">
        <div class="delete-account-txt text-center">Êtes-vous sûr de vouloir supprimer votre compte ?</div>
        <button class="btn">
            <a class="shortpage-btn" href="?view=showMember&op=delete">Supprimer votre compte</a>
        </button>
    </div>


<?php
$content = ob_get_clean();
require('template.view.php');



