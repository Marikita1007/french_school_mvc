<?php
ob_start();

?>

    <div class="container test_container">

        <h2>Faites le test et vérifiez votre niveau de français</h2>

        <?php
        if(!empty($errors)){
            foreach ($errors as $error){
                echo $error;
            };
        }
        ?>

        <div class="row my-3">
            <div class="class">
                <form action="?view=showMember&op=testResult" method="post">
                <?php $questionNumber = 1; ?>
                <?php foreach ($questionsData as $questions) : ?>
                    <row><?= $questionNumber++ ?>.  <?= $questions->question ?><br><br>
                        <?php
                        $answersList = new \Controllers\AnswersController();
                        $answersData = $answersList->listAnswers($questions->id_question);
                        if(!empty($answersData)){
                            shuffle($answersData);
                            foreach ($answersData as $answer) : ?>
                            <div>
                                <input class="form-check-input" type="radio" id="answer" name="<?= $questions->id_question ?>" value="<?= $answer->id_answer ?>">
                                <?=  $answer->answer; ?>
                            </div>
                            <?php
                            endforeach;
                        }
                        if(!empty($answersData)) {} ?><br><br>
                    </row>
                <?php endforeach; ?>
                    <!-- Here its counting the number of questions  -->
                    <input type="hidden" name="questions_amount" value="<?= count($questionsData) ?>" >
                    <button type="submit" class="btn test_submit_button">Soumettre</button>
            </form>
            </div>
        </div>
    </div>


<?php
$content = ob_get_clean();
//ここに'template.views.php'があるから上の表はここ（つまりタイトルの下）に表示される
require ('template.view.php');



