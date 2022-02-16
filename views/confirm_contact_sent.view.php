<?php
ob_start();
?>

<div style="min-height: 50vh;">
    <div class="text-center registered-text">Votre message a été envoyé. Nous répondrons à votre question dans un délai de 3 jours ouvrables.</div>
    <div class="text-center return-home-button">
        <button class="btn btn-primary"><a href="?view=showMember&op=home">Retournez à la page d'accueil</a></button>
    </div>
</div>

<?php
$content = ob_get_clean();
require('template.view.php');
