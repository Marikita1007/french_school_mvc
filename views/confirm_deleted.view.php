<?php
ob_start();
?>

<div class="d-flex flex-column align-items-center justify-content-center little-text-page">
    <div class="delete-account-txt text-center">Votre compte a été supprimé.</div>

    <div class="text-center return-home-button">
        <button class="btn"><a class="shortpage-btn" href="?view=showMember&op=home">Retournez à la page d'accueil</a></button>
    </div>
</div>


<?php
$content = ob_get_clean();
require('template.view.php');