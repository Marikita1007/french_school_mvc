<?php
ob_start();
?>

    <section id="intermediate_exercice">
        <div class="exercice_box">
            <div class="exercice_header">
                <span>Note: <span id="score">0</span></span>
                <span id="countdown"></span>
            </div>
            <div class="exercice_body">
                <div class="exercice_set active">
                    <h4>1. Referring to question #1,what is a more condensed way of asking someone whether someone speaks French.</h4>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a1" valid="valid">
                        <span>Parles-tu Francais?</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a1">
                        <span>Parles-vous Francaise?</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a1">
                        <span>Qu'es parles Francais?</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a1">
                        <span>Parlons-nous Francais?</span>
                    </div>
                </div>
                <div class="exercice_set">
                    <h4>2. "Combien" means.. : </h4>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a2">
                        <span>How</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a2">
                        <span>When</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a2" valid="valid">
                        <span>How much</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a2">
                        <span>Why</span>
                    </div>
                </div>
                <div class="exercice_set">
                    <h4>3. Choose the correct translation of, "I am really delighted to be in France.." : </h4>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a3">
                        <span>Je suis heureux naturellement d'etre en France.</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a3" valid="valid">
                        <span>Je suis vraiment enchante d'etre en France.</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a3">
                        <span>Je suis plait d'etre en France.</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a3">
                        <span>Je me plait parfaitement la France.</span>
                    </div>
                </div>
                <div class="exercice_set">
                    <h4>4. How would you translate the following French phrase, "J'ai déjà recu l'invitation..": </h4>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a4">
                        <span>I had received the invitation before.</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a4" valid="valid">
                        <span>I have already received the invitation.</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a4">
                        <span>I have again received the invitation.</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a4">
                        <span>I received the invitation.</span>
                    </div>
                </div>
                <div class="exercice_set">
                        <h4>5.The phrase, "avoir de la chance" means.. :</h4>
                        <div class="exercice_ans_row">
                            <input type="radio" name="a5" valid="valid">
                            <span>To be lucky</span>
                        </div>
                        <div class="exercice_ans_row">
                            <input type="radio" name="a5">
                            <span>To be a risk-taker</span>
                        </div>
                        <div class="exercice_ans_row">
                            <input type="radio" name="a5">
                            <span>To have fun</span>
                        </div>
                        <div class="exercice_ans_row">
                            <input type="radio" name="a5">
                            <span>To be mistaken</span>
                        </div>
                    </div>
                </div>
                <div class="exercice_set">
                    <div class="d-flex align-items-center result">
                        <h4>Votre note total était <span id="totalScore"> 0 </span> sur 100</h4>
                        <a class="btn1" href="?view=intermediate" role="button">Cours intermédiaire</a>
                    </div>
                </div>
                <div class="exercice_footer">
                    <button class="btn1" id="skip">Passer</button>
                </div>
            </div>
        </div>
    </section>

<?php
$content = ob_get_clean();
require('template.view.php');



