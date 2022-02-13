<?php
ob_start();
?>

    <section id="advanced_exercice">
        <div class="exercice_box">
            <div class="exercice_header">
                <span>Note: <span id="score">0</span></span>
                <span id="countdown"></span>
            </div>
            <div class="exercice_body">
                <div class="exercice_set active">
                    <h4>1. If someone asks you how old you are, you would respond with your age in the following manner...</h4>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a1" valid="valid">
                        <span>J'ai vingt-huit ans</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a1">
                        <span>Je suis vingt-huit annees</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a1">
                        <span>J'ai eu vingt-huit ans</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a1">
                        <span>J'aie vingt-huit annees</span>
                    </div>
                </div>
                <div class="exercice_set">
                    <h4>2. Choose the best phrase that means, "you're wrong.": </h4>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a2">
                        <span>Vous avez la chance</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a2" valid="valid">
                        <span>Vous avez tort.</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a2">
                        <span>Vous avez la malraison</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a2">
                        <span>Vous etes misconnue</span>
                    </div>
                </div>
                <div class="exercice_set">
                    <h4>3. What is the best translation of "celle" in the following phrase:  "Notre voiture est celle qui est dans la garage." : </h4>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a3">
                        <span>blanc</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a3">
                        <span>Is which one</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a3">
                        <span>That</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a3" valid="valid">
                        <span>The one</span>
                    </div>
                </div>
                <div class="exercice_set">
                    <h4>4. In the sentence, "Je doute qu'il le sache," means.. : </h4>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a4">
                        <span>He left</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a4" valid="valid">
                        <span>I doubt he knows</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a4">
                        <span>I'm not sure about it</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a4">
                        <span>I need him</span>
                    </div>
                </div>
                <div class="exercice_set">
                        <h4>5. Which of the following is incorrect ? :</h4>
                        <div class="exercice_ans_row">
                            <input type="radio" name="a5" valid="valid">
                            <span>la humanité</span>
                        </div>
                        <div class="exercice_ans_row">
                            <input type="radio" name="a5">
                            <span>la hâte</span>
                        </div>
                        <div class="exercice_ans_row">
                            <input type="radio" name="a5">
                            <span>la honte</span>
                        </div>
                        <div class="exercice_ans_row">
                            <input type="radio" name="a5">
                            <span>la haine</span>
                        </div>
                    </div>
                </div>
                <div class="exercice_set">
                    <div class="d-flex align-items-center result">
                        <h4>Votre note total était <span id="totalScore"> 0 </span> sur 100</h4>
                        <a class="btn1 btn-primary" href="?view=advanced" role="button">Cours avancé</a>
                    </div>
                </div>
                <div class="exercice_footer">
                    <button class="btn1" id="skip">passer</button>
                </div>
            </div>
        </div>
    </section>

<?php
$content = ob_get_clean();
require('template.view.php');



