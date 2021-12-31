<?php
ob_start();
?>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="p-3 d-flex justify-content-center">
                    <h2 class="title-text contact-title">CONTACT NOUS</h2>
                </div>
            </div>
        </div>
    </div>

    <?php
    if(isset($errors) && $errors != ""){
        echo $errors;
    }
    ?>

    <div class="container px-4">
        <div class="row p-3 d-flex justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <form action="?view=contact&op=sendMessage" method="post">
                    <fieldset>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 name-form">
                                <div class="p-1">
                                    <input type="text" name="last_name" class="form-control" placeholder="Nom" aria-label="First name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 firstname-form">
                                <div class="p-1">
                                    <input type="text" name="first_name" class="form-control" placeholder="Prénom" aria-label="Last name">
                                </div>
                            </div>
                        </div>
                        <div class="p-1">
                            <input type="subject" name="subject" class="form-control" placeholder="Sujet">
                        </div>
                        <div class="p-1">
                            <input type="email" name="email" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="p-1">
                            <textarea class="form-control message" name="message" placeholder="Message" rows="6"></textarea>
                        </div>
                        <div class="p-3">
                            <button type="submit" class="btn float-end contact-button">Envoyer un message</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
require('template.view.php');