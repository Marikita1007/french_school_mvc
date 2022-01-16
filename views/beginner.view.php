<?php
ob_start();
?>

<section id="beginner">
    <div class="container">
        <div class="row introduction_titles">
            <h2 class="text-center">DÉBUTANT</h2>
        </div>
    </div>

    <div class="container">
        <div class="row introduction_titles">
            <h3 class="">Leçon 1</h2>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <h4 class="col-lg-6">Dialogue 1</h2>
                <audio controls class="col-lg-6">
                    <source src="public/audio/audio1.mp3" type="audio/mpeg">
                    Votre navigateur ne prend pas en charge l'élément audio.
                </audio>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-3">
                    <p><b>Abbott : </b>Aussi étrange que cela puisse paraître, on donne aujourd'hui des noms très particuliers aux joueurs de football.</p>

                    <p><b>Costello : </b> Des noms amusants ?</p>

                    <p><b>Abbott : </b> Des surnoms, des surnoms. Dans l'équipe de Saint-Louis, on a Qui est en première position, Quoi en deuxième position, Je ne sais pas en troisième position...</p>

                    <p><b>Costello : </b> C'est ce que je veux savoir. Je veux que vous me donniez les noms des membres de l'équipe de St Louis.</p>

                    <p><b>Abbott : </b> Des surnoms, des surnoms. Dans l'équipe de St Louis, on a Qui est en première position, Quoi en deuxième position, Je ne sais pas en troisième position...</p>

                    <p><b>Costello : </b> C'est ce que je veux savoir. Je veux que vous me donniez les noms des membres de l'équipe de St Louis.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <h4 class="col-lg-6">Dialogue 2</h2>
                <audio controls class="col-lg-6 col-md-6 col-sm-12">
                    <source src="public/audio/audio1.mp3" type="audio/mpeg">
                    Votre navigateur ne prend pas en charge l'élément audio.
                </audio>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-3">
                    <p><b>CATHY : </b> Excusez-moi ?</p>

                    <p><b>DUMMY : </b> Lorem ipsum dolor sit amet consectetur adipisicing elit ?</p>

                    <p><b>CATHY : </b> Eh bien, pas à n'importe qui.</p>

                    <p><b>DUMMY : </b> Provident similique accusantium nemo autem. Veritatis
                        obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                        nihil.</p>

                    <p><b>CATHY : </b> Impedit sit sunt quaerat, odit,
                        tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                        quia. Quo neque error repudiandae fuga?</p>

                    <p><b>DUMMY : </b> Ipsa laudantium molestias eos
                        sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
                        recusandae alias error harum maxime</p>

                    <p><b>CATHY :</b> Sed quibusdam recusandae alias error harum maxime adipisci amet laborum !</p>

                    <p><b>DUMMY :</b>  Sit laborum ab, eius fugit doloribus tenetur
                        fugiat, temporibus enim commodi iusto libero magni deleniti quod quam
                        consequuntur! Commodi minima excepturi repudiandae velit hic maxime
                        doloremque. </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row dialogue-container">
            <h4 class="col-lg-6">Dialogue 3</h2>
                <audio controls class="col-lg-6">
                    <source src="public/audio/audio1.mp3" type="audio/mpeg">
                    Votre navigateur ne prend pas en charge l'élément audio.
                </audio>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-3">
                    <p><b>Abbott : </b>Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam</p>

                    <p><b>Costello : </b> Des noms amusants ?</p>

                    <p><b>Abbott : </b> Ipsa laudantium molestias eos
                        sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
                        recusandae alias error harum maxime adipisci amet laborum. </p>

                    <p><b>Costello : </b> Sit laborum ab, eius fugit doloribus tenetur
                        ugiat, temporibus enim commodi iusto libero magni deleniti quod quam
                        consequuntur! </p>

                    <p><b>Abbott : </b> Des surnoms, des surnoms. Dans l'équipe de St Louis, on a Qui est en première position, Quoi en deuxième position, Je ne sais pas en troisième position...</p>

                    <p><b>Costello : </b> C'est ce que je veux savoir. Je veux que vous me donniez les noms des membres de l'équipe de St Louis.</p>
                </div>
            </div>
        </div>
    </div>

</section>

<section id="button-exercices">
    <div class="container">
        <div class="row">
            <div class="p-3">
                <p>Essaies l'exercice de cette leçon !</p>
                <div class="d-flex justify-content-center">
                    <button type='button' class="col-lg-2 col-md-3 mx-lg-4 mx-md-3 button_debutant">
                        <a class="btn-exercice" href="?view=beginner&op=start" role="button">Exercice</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
require('template.view.php');