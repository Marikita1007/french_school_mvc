<?php
ob_start();
?>

    <section id="test-result">
        <container class = "">
            <row class = "d-flex text-center h-75 align-items-center">
                <h3 class = "col-12">Votre niveau de français est <?= $testResult ?></h3>
            </row>
            <row class = "d-flex justify-content-center">
                <?php if(isset($_SESSION['member'])){ ?>
                    <a class="btn btn-primary" href="<?= '?view=showMember&op=show' ?>">Allez sur votre page</a>
                <?php } else {
                    header('location:?view=home');
                }?>
            </row>
        </container>
    </section>

<?php
$content = ob_get_clean();
require('template.view.php');

