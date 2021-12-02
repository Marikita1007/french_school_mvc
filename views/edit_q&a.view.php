<?php
ob_start();
?>
    <!-- 入力フォームの作成 -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <form action="?op=new" method="post">
                    <div class="form-group">
                        <label for="question">Question</label><br>
                        <input type="text" class="form-control" id="question" name="question">
                    </div>
                    <div class="form-group">
                        <label for="answer">Bonne réponse</label><br>
                        <input type="text" class="form-control" id="answer" name="answer">
                    </div>

                    <div class="form-group">
                        <label for="answer">Mauvaise réponse</label><br>
                        <input type="text" class="form-control" id="answer" name="answer">
                    </div>

                    <div class="form-group">
                        <label for="answer">Mauvaise réponse</label><br>
                        <input type="text" class="form-control" id="answer" name="answer">
                    </div>

                    <div class="form-group">
                        <label for="answer">Mauvaise réponse</label><br>
                        <input type="text" class="form-control" id="answer" name="answer">
                    </div>

                    <div class="form-group">
                        <label for="difficulty">Difficulté</label><br>
                        <input type="text" class="form-control" id="difficulty" name="difficulty">
                    </div>


                    <input type="submit" value="Add New Employes" class="btn btn-primary">
                    <a href="?view=question&opAdmin=qlist" >Return</a>

                </form>
            </div>
        </div>
    </div>
<?php
$content = ob_get_clean();
require ('template.view.php');