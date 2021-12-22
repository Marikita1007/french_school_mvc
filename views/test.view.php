<?php
ob_start();
?>

    <!-- 表示場所 -->
    <div class="container test_test">

        <h2>Faites le test et vérifiez votre niveau de français</h2>

        <div class="row my-3">
            <div class="class=">
                <form action="?view=showMember&op=testResult" method="post">
                <?php $questionNumber = 1; ?>
                <?php foreach ($questionsData as $questions) : ?>
                    <row><?= $questionNumber++ ?>.  <?= $questions->question ?><br><br>
                        <?php
                        $answersList = new \controllers\AnswersController();
                        $answersData = $answersList->listAnswers($questions->id_question);
                        if(!empty($answersData)){
                            shuffle($answersData);
                            foreach ($answersData as $answer) : ?>
                                <input class="form-check-input" type="radio" id="answer" name="<?=$questions->id_question ?>" value="<?= $answer->id_answer ?>">
                                <?=  $answer->answer;
                            endforeach;
                        }
                        if(!empty($answersData)) {} ?><br><br>
                    </row>
                <?php endforeach; ?>
                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>


<?php
$content = ob_get_clean();
//ここに'template.views.php'があるから上の表はここ（つまりタイトルの下）に表示される
require ('template.view.php');



