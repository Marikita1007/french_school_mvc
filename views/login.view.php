<?php
ob_start();
if(!empty($errors)){
    foreach ($errors as $error){
        echo $error;
    };
}
?>

<section id="login">
    <container>
        <row>
            <div class="d-flex justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <form action="?view=showMember&op=login" method="post">
                        <fieldset>
                            <legend class="mt-2 title">CONNEXION</legend>

                            <div class="form-group">
                                <label for="" class="form-label mt-2">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Entrez votre email">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label mt-2">Mot de passe</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn login-button">CONNEXION</button>
                            </div>
                            <br>
                        </fieldset>
                    </form>
                </div>
            </div>
        </row>
    </container>
    <container>
        <row>
            <div class="d-flex justify-content-center">
                <label for="" class="">Vous n’avez pas votre compte ?</label>
            </div>
            <div class="d-flex justify-content-center">
                <a href='?view=sign' class="btn login-button">CRÉER UN COMPTE</a>
            </div>
            <br>
        </row>
    </container>
</section>

<?php
$content = ob_get_clean();
require('template.view.php');
