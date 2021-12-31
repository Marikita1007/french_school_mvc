<?php
ob_start();
?>
<div style="min-height: 20vh;">
    <div class="text-center registered-text">Bienvenue dans notre famille !</div>
    <div class="text-center">
        <a href="?view=showMember&op=show" class="btn btn-info">Voir votre profil</a>
    </div>
</div>

<?php
$content = ob_get_clean();
require('template.view.php');

