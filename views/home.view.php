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
            <button type='button' class="col-lg-2 col-md-3 mx-lg-4 mx-md-3 button_debutant"><a href="<?= '?view=beginner' ?>">DÉBUTANT</a></button>
            <button type='button' class="col-lg-2 col-md-3 mx-lg-4 mx-md-3 button_intermediaire"><a href="<?= '?view=intermediate' ?>">INTERMÉDIAIRE</a></button>
            <button type='button' class="col-lg-2 col-md-3 mx-lg-4 mx-md-3 button_avance"><a href="<?= '?view=advanced' ?>">AVANCÉ</a></button>
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

<section id="instructions">
    <div class="wave-container">
        <div data-aos="zoom-in-right" data-aos-duration="3000">
            <div class="content">
                <h3 class="text-center mb-5">Une méthode pour chaque type d'apprentissage</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <i class="far fa-check-circle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum minima, earum maxime sequi tempora.</i>
                <i class="far fa-check-circle">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci, quisquam.</i>
                <i class="far fa-check-circle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto explicabo aliquid consequatur quaerat.</i>
            </div>
        </div>

        <div data-aos="zoom-in-up"  data-aos-duration="3000"> <img src="public/img/mobile-course.jpg" alt="Online Course"></div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00008B" fill-opacity="0.3" d="M0,32L60,69.3C120,107,240,181,360,208C480,235,600,213,720,176C840,139,960,85,1080,90.7C1200,96,1320,160,1380,192L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    </div>
    
</section>

<section id="temoignages">
    <div class="container">
        <div class="row introduction_titles">
            <h2 class="mt-5">Témoignages</h2>
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



