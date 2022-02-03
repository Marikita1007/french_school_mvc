<?php
ob_start();
?>

    <section id="beginner_exercice">
        <div class="exercice_box">
            <div class="exercice_header">
                <span>Note: <span id="score">0</span></span>
                <span id="countdown"></span>
            </div>
            <div class="exercice_body">
                <div class="exercice_set active">
                    <h4>1. How would you write "a very nice friend"? </h4>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a1">
                        <span>un arbre vert</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a1">
                        <span>un grand bâtimentt</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a1">
                        <span>un très vieil homme</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a1" valid="valid" id="correct">
                        <span>un ami très genti</span>
                    </div>
                </div>
                <div class="exercice_set">
                    <h4>2. Which one of the following means "square": </h4>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a2">
                        <span>circulaire</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a2" valid="valid">
                        <span>carré</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a2">
                        <span>doux</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a2">
                        <span>profond</span>
                    </div>
                </div>
                <div class="exercice_set">
                    <h4>3. Which one of the following means "red": </h4>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a3">
                        <span>blanc</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a3">
                        <span>jaune</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a3">
                        <span>noir</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a3" valid="valid">
                        <span>rouge</span>
                    </div>
                </div>
                <div class="exercice_set">
                    <h4>4. Which one of the following means "today": </h4>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a4">
                        <span>immédiatement</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a4" valid="valid">
                        <span>aujourd'hui</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a4">
                        <span>demain</span>
                    </div>
                    <div class="exercice_ans_row">
                        <input type="radio" name="a4">
                        <span>déjà</span>
                    </div>
                </div>
                <div class="exercice_set">
                        <h4>5. How would you write "green car"?</h4>
                        <div class="exercice_ans_row">
                            <input type="radio" name="a5">
                            <span>garage</span>
                        </div>
                        <div class="exercice_ans_row">
                            <input type="radio" name="a5">
                            <span>ma voiture</span>
                        </div>
                        <div class="exercice_ans_row">
                            <input type="radio" name="a5" valid="valid">
                            <span>voiture verte</span>
                        </div>
                        <div class="exercice_ans_row">
                            <input type="radio" name="a5">
                            <span>extérieur de la voiture</span>
                        </div>
                    </div>
                </div>
                <div class="exercice_set">
                    <div class="d-flex align-items-center result">
                        <h4>Votre note total était <span id="totalScore"> 0 </span> sur 100</h4>
                        <a class="btn1 btn-primary" href="?view=beginner" role="button">Cours débutant</a>
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



