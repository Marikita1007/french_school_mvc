<?php
ob_start();
?>

    <section id="beginner_exercice">

        <div class="exercice_box">
            <div class="exercice_header">
                <span>Score: <span id="score">0</span></span>
            </div>
            <div class="exercice_footer text-center">
                <a href="?view=beginner&op=beginner_exercice" class="btn1" id="skip">Start</a>
            </div>
        </div>
    </section>
<?php
$content = ob_get_clean();
require('template.view.php');



