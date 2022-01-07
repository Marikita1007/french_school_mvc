<?php
ob_start();
?>

    <section id="beginner_exercice">
        <div>beginner quiz!</div>
    </section>

<?php
$content = ob_get_clean();
require('template.view.php');



