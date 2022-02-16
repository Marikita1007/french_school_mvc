<?php
ob_start();
?>

<section id="welcome">
    <div class="container">
        <div class="row" data-aos="fade-down" data-aos-duration="3000">
            <h1 class="col-lg-12 col-md-12 col-sm-12">APPRENEZ LE FRANÇAIS AVEC NOUS !</h1>
        </div>
        <div class="row d-flex justify-content-center" data-aos="fade-up" data-aos-duration="2000">
            <h2 class="col-lg-12 col-md-12 col-sm-12 text-center">COURS GRATUITS</h2>
        </div>
        <div class="row courses_buttons d-flex justify-content-center" data-aos="fade-up" data-aos-duration="2000">
            <button type='button' class="col-lg-4 col-md-3 mx-lg-4 mx-md-3 button_debutant"><a href= "<?= '?view=beginner&op=lesson' ?>">DÉBUTANT</a></button>
            <button type='button' class="col-lg-4 col-md-3 mx-lg-4 mx-md-3 button_intermediaire"><a href="<?= '?view=intermediate&op=lesson' ?>">INTERMÉDIAIRE</a></button>
            <button type='button' class="col-lg-4 col-md-3 mx-lg-4 mx-md-3 button_avance"><a href="<?= '?view=advanced&op=lesson' ?>">AVANCÉ</a></button>
            <div class="offset-md-3"></div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="wave-bottom">
        <path fill="#E6FFFF" fill-opacity="0.9" d="M0,192L80,181.3C160,171,320,149,480,170.7C640,192,800,256,960,272C1120,288,1280,256,1360,240L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
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
                <div class="p-3 course-descriptions">
                    <div class="d-flex justify-content-center">
                        <i class="shake_anime fas fa-book fa-7x"></i>
                    </div>
                    <div class="row">
                        <div class="col content-text">
                            <h3 class="text-center">Les Cours de Français</h3>
                            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="p-3 course-descriptions">
                    <div class="d-flex justify-content-center">
                        <i class="shake_anime fas fa-graduation-cap fa-7x"></i>
                    </div>
                    <div class="row">
                        <div class="col content-text">
                            <h3 class="text-center">Test ton niveau</h3>
                            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="p-3 course-descriptions">
                    <div class="d-flex justify-content-center">
                        <i class="shake_anime fas fa-users fa-7x"></i>
                    </div>
                    <div class="row">
                        <div class="col content-text">
                            <h3 class="text-center">Accent natif</h3>
                            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

<section id="achievements" class="flex-column d-flex">
    <h2 class="text-center my-5">Statistiques</h2>
    <div class="col-md-10 d-flex justify-content-center align-item-center mx-3">
        <div class="row cards-row number-move-start">
            <div class="col-xl-3 col-lg-6">
                <div class="card l-bg-blue-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-chalkboard-teacher"></i></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Enseignants</h5>
                        </div>
                        <div class="col-8" data-count="16">
                            <span  class="d-flex align-items-center mb-0 achivement-number num-counter">0</span>
                        </div>
                        <div class="progress mt-1" data-height="8" style="height: 8px;">
                            <div class="progress-bar l-bg-blue" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card l-bg-blue-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Étudiants</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8" data-count="2125">
                                <span  class="d-flex align-items-center mb-0 achivement-number num-counter">0</span>
                            </div>
                        </div>
                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                            <div class="progress-bar l-bg-blue" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card l-bg-blue-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-globe-americas"></i></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Nationalités</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8" data-count="160">
                                <span  class="d-flex align-items-center mb-0 achivement-number num-counter">0</span>
                            </div>
                        </div>
                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                            <div class="progress-bar l-bg-blue" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card l-bg-blue-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-spinner"></i></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Entreprises partenaires</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8" data-count="15">
                                <span  class="d-flex align-items-center mb-0 achivement-number num-counter">0</span>
                            </div>
                        </div>
                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                            <div class="progress-bar l-bg-blue" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="mobile-usage">
    <div class="content" data-aos="zoom-in-right" data-aos-duration="3000">
        <h3 class="text-center py-3">Une méthode pour chaque type d'apprentissage</h3>
        <p class="main-text px-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius libero fugit nam dolorem totam numquam, iusto officia asperiores dolore delectus deleniti esse a nostrum, nemo cupiditate consectetur quidem reprehenderit corporis? Sapiente odio dolore blanditiis cum, officiis facilis. Nihil, atque sequi?</p>
    </div>
    <div class="images-content">
        <div data-aos="zoom-in-up" data-aos-duration="2000" class="image-mobile-usage"><img src="public/img/mobile-course.jpg" alt="Online Course On Mobile"></div>
    </div>
    <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#184387" fill-opacity="0.9" d="M0,256L80,245.3C160,235,320,213,480,208C640,203,800,213,960,197.3C1120,181,1280,139,1360,117.3L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
</section>

<section id="hire-teachers" class="d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="text-center col-lg-12">Devenir instructeur</h3>
                <h3 class="text-center col-lg-12">Rejoignez des milliers d'instructeurs et ayez un nouveau travail !
            </h2>
            <div class="line text-center"></div>
            <button type="button" class="btn col-lg-12 rounded-pill">
                <a href="<?= "?view=contact" ?>">
                    commencez maintenant
                </a>
            </button>
        </div>
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
            <div class="col-lg-3 col-md-6 col-sm-6 student-comment">
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
            <div class="col-lg-3 col-md-6 col-sm-6 student-comment">
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
            <div class="col-lg-3 col-md-6 col-sm-6 student-comment">
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
            <div class="col-lg-3 col-md-6 col-sm-6 student-comment">
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
