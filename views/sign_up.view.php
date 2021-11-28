<?php
if(isset($errors) && $errors != ""){
    echo "<div>" . $errors . "</div>";
} ?>

<section id="sign-in">
    <container>
        <row>
            <div class="d-flex justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <form action="?view=sign&op=newMember" method="POST">
                        <fieldset>
                            <legend class="mt-2 title">S'INSCRIRE</legend>
                            <div class="form-group">
                                <label for="" class="form-label mt-2">Prénom</label>
                                <input type="prenom" name="prenom" class="form-control" id="prenom" placeholder="Entrez votre prénom">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label mt-2">Nom</label>
                                <input type="nom" name="nom" class="form-control" id="nom" placeholder="Entrez votre nom">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label mt-2">Mot de passe</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label mt-2">Vérifier votre mot de passe</label>
                                <input type="password" name="password2" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label mt-2">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Entrez votre email">
                                <small id="email" class="form-text text-muted">Nous ne partagerons jamais votre email avec qui que ce soit.</small>
                            </div>
                            <input type="hidden" name="status" id="status" value="0">
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn sign-in-button mb-4">ENREGISTRER</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </row>
    </container>
    <container>
        <row>
            <div class="d-flex justify-content-center">
                <label for="" class="">Avez vous déjà un compte ?</label>
            </div>
            <div class="d-flex justify-content-center">
                <a href='?view=login' class="btn sign-in-button">Aller à la connexion</a>
            </div>
            <br>
        </row>
    </container>

</section>

