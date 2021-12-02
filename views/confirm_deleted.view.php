<?php
ob_start();
?>

<div>Votre compte a été supprimé.</div>

<button><a href="?view=showMember&op=home">Retournez à la page d'accueil</a></button>

<?php
$content = ob_get_clean();
require('template.view.php');