<?php
ob_start();
?>
<div class="d-flex align-items-center justify-content-center flex-column little-text-page">
    <div class="text-center registered-text">Bienvenue dans notre famille !</div>
    <button class="text-center btn">
        <a class="shortpage-btn" href="?view=showMember&op=show">Voir votre profil</a>
    </button>
</div>

<?php
$content = ob_get_clean();
require('template.view.php');

