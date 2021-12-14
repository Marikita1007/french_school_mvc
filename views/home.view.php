<?php
ob_start();
?>

<section id="welcome" >
    <div class="container-fluid">
        <div class="row">
            <h2 class="col-lg-6 col-md-12 col-sm-11 col-centered">APPRENEZ LE FRANÇAIS AVEC NOUS !</h2>
            <div class="offset-lg-6 offset-md-0 offset-sm-1"></div>
        </div>
        <div class="row">
            <h3 class="col-lg-6 col-md-12 col-sm-8">COURS GRATUITS</h3>
            <div class="offset-lg-6 offset-md-0 offset-sm-4"></div>
        </div>
        <div class ="row courses_buttons">
            <button type='button' class="col-lg-2 col-md-3 mx-lg-4 mx-md-3 button_debutant">DÉBUTANT</button>
            <button type='button' class="col-lg-2 col-md-3 mx-lg-4 mx-md-3 button_intermediaire">INTERMÉDIAIRE</button>
            <button type='button' class="col-lg-2 col-md-3 mx-lg-4 mx-md-3 button_avance">AVANCÉ</button>
            <div class="offset-lg-6 offset-md-3"></div>
        </div>
    </div>
</section>

<section id="introduction">
    <div class="container">
        <div class="row introduction_titles">
            <h2 class="">Améliore ton français avec nous!</h2>
            <h3 class="">Voici nos outils pour apprendre efficacement en t’amusant</h3>
        </div>
    </div>

    <div class="container introduction_icons">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="p-3 ">
                    <div class="d-flex justify-content-center">
                        <i class="shake_anime fas fa-book fa-7x"></i>
                    </div>
                    <div class="row">
                        <div class="col content-text">
                            <h3 class="text-center">Les Cours de Français</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="p-3 ">
                    <div class="d-flex justify-content-center">
                        <i class="shake_anime fas fa-graduation-cap fa-7x"></i>
                    </div>
                    <div class="row">
                        <div class="col content-text">
                            <h3 class="text-center">Test ton niveau</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="p-3 ">
                    <div class="d-flex justify-content-center">
                        <i class="shake_anime fas fa-users fa-7x"></i>
                    </div>
                    <div class="row">
                        <div class="col content-text">
                            <h3 class="text-center">Accent natif</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

<section id="temoignages">
    <div class="container">
        <div class="row introduction_titles">
            <h2 class="">Témoignages</h2>
        </div>
    </div>

    <div class="container temoignages_picturesté">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 student-comment">
                <div class="p-3 ">
                    <div class="d-flex justify-content-between mobile-picture">
                        <a class="student-image student1"></a>
                    </div>
                    <div class="row">
                        <div class="col content-text">
                            <h3 class="text-center">Eugenia Anders</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates ad rerum iusto facilis labore provident amet? Nihil ipsum ipsam magni nam aliquam! Neque, ad accusamus ipsa voluptatibus odit eaque dignissimos.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 student-comment">
                <div class="p-3 ">
                    <div class="d-flex justify-content-between mobile-picture">
                        <a class="student-image student2"></a>
                    </div>
                    <div class="row">
                        <div class="col content-text">
                            <h3 class="text-center">Nguta Ithya</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates ad rerum iusto facilis labore provident amet? Nihil ipsum ipsam magni nam aliquam! Neque, ad accusamus ipsa voluptatibus odit eaque dignissimos.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 student-comment">
                <div class="p-3 ">
                    <div class="d-flex justify-content-between mobile-picture">
                        <a class="student-image student3"></a>
                    </div>
                    <div class="row">
                        <div class="col content-text">
                            <h3 class="text-center">Trevor Virtue</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates ad rerum iusto facilis labore provident amet? Nihil ipsum ipsam magni nam aliquam!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 student-comment">
                <div class="p-3 ">
                    <div class="d-flex justify-content-between mobile-picture">
                        <a class="student-image student4"></a>
                    </div>
                    <div class="row">
                        <div class="col content-text">
                            <h3 class="text-center">Salome Simoes</h3>
                            <p>Voluptates ad rerum iusto facilis labore provident amet? Nihil ipsum ipsam magni nam aliquam! Neque, ad accusamus ipsa voluptatibus odit eaque dignissimos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
require('template.view.php');



