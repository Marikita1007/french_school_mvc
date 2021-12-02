<?php
ob_start();

echo "TEST FOR STUDENT PAGE";
?>

    <!-- 表示場所 -->
    <div class="container">

        <h2>Please choose the answer from the options</h2>

        <div class="row">
            <form action="" method="post">
                <?php foreach ($questionsData as $questions) : ?>
                    <row><?= $questions->id_question ?> - <?= $questions->question ?><br><br>
                        <?php
                        $answersList = new \controllers\AnswersController();
                        $answersData = $answersList->listAnswers($questions->id_question);
                        if(!empty($answersData)){}
                        foreach ($answersData as $answer) : ?>
                            <input class="form-check-input" type="radio" id="answer" name="<?= $answer->id_question?>" value="<?= $answer->id_answer ?? '' ?>">
                            <?= $answer->answer;
                        endforeach;
                        if(!empty($answersData)) {} ?><br><br>
                    </row>
                <?php endforeach; ?>
                <button type="submit" name="submit" value="submit" class="btn btn-info"><a href="?op=new" style="text-decoration: none">Submit</a></button>
            </form>
        </div>
    </div>


<?php
$content = ob_get_clean();
//ここに'template.views.php'があるから上の表はここ（つまりタイトルの下）に表示される
require ('template.view.php');



