<?php
ob_start();
?>

    <section id="advanced_exercice">

        <div class="exercice_box">
            <div class="exercice_header">
                <span>Note: <span id="score">0</span></span>
            </div>
            <div class="exercice_footer text-center">
                <a href="<?= '?view=advanced&op=advanced_exercice' ?>" class="btn1" id="skip">Démarrer</a>
            </div>
        </div>
    </section>
<?php
$content = ob_get_clean();
require('template.view.php');
