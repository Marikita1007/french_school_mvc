<section id="edit">
    <container>
        <row>
            <div class="d-flex justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <form action="?view=showStudent&op=edit&id_student=<?= $studentInfo->id_student?>" method="POST">
                        <fieldset>
                            <legend class="mt-2 title">MON COMPTE</legend>
                            <input type="hidden" name="id_student" value="<?= $studentInfo->id_student?>">
                            <div class="form-group">
                                <label for="" class="form-label mt-2">Prénom</label>
                                <input type="prenom" name="prenom" class="form-control" id="prenom" value="<?= $studentInfo->prenom ?>">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label mt-2">Nom</label>
                                <input type="nom" name="nom" class="form-control" id="nom" value="<?= $studentInfo->nom ?>">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label mt-2">Mot de passe</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Saisir un nouveau mot de passe">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label mt-2">Vérifier votre mot de passe</label>
                                <input type="password" name="password2" class="form-control" id="exampleInputPassword1" placeholder="Vérifier le mot de passe">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label mt-2">Email</label>
                                <input type="email" name="email" class="form-control" id="email" value="<?= $studentInfo->email ?>">
                                <small id="email" class="form-text text-muted">Nous ne partagerons jamais votre email avec qui que ce soit.</small>
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn sign-in-button mb-4">MODIFIER</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </row>
    </container>


</section>