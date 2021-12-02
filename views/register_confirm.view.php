<?php
ob_start();
?>

<div>Bienvenue dans notre famille !</div>
<a href="?view=showMember&op=show" class="btn btn-info">Voir votre profil</a>

<?php
$content = ob_get_clean();
require('template.view.php');

