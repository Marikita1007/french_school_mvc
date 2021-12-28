<?php
ob_start();
?>
<!-- 入力フォームの作成 -->
<div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <form action="?op=new" method="post">
                    <div class="form-group">
                        <label for="prenom">Prenom</label><br>
                        <input type="text" class="form-control" id="prenom" name="prenom">
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom</label><br>
                        <input type="text" class="form-control" id="nom" name="nom">
                    </div>

                    <div>
                    <label for="nom">Gender</label><br>
                        <select class="custom-select" name="sexe">
                            <option value="1">f</option>
                            <option value="2">m</option>
                        </select>
                    </div>

                    <div>
                        <label for="salaire">Salaire</label><br>
                        <input type="number" id="salaire" name="salaire" ><br>
                    </div>
                    <div>
                        <label for="service">Service</label><br>
                        <input type="text" id="service" name="service" ><br>
                    </div>
                    <div>
                        <label for="date">Date Embouche</label><br>
                        <input type="date" id="date" name="date_embauche" ><br>
                    </div>
                    <div>
                        <label for="id_secteur">ID Secteur</label><br>
                        <input type="number" id="id_secteur" name="id_secteur" ><br>
                    </div>

                    <input type="submit" value="Add New Employes" class="btn btn-primary">
                    <a href="?op=list" >Return</a>

                </form>
            </div>
        </div>
</div>
<?php
$content = ob_get_clean();
$title = "Form";
require ('template.view.php');