<?php
ob_start();
?>

<div class="delete-account-txt text-center">Votre compte a été supprimé.</div>

<div class="text-center return-home-button">
    <button><a href="?view=showMember&op=home">Retournez à la page d'accueil</a></button>
</div>

<?php
$content = ob_get_clean();
require('template.view.php');