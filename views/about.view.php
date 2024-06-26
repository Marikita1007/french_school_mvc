<?php
ob_start();
?>
<section id="teachers">
    <div class="container">
        <div class="row introduction_titles">
            <h1 class="text-center"> QUI SOMMES-NOUS?</h1>
        </div>
    </div>

    <div class="container introduction_icons">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="p-3">
                    <div class="d-flex justify-content-center" data-aos="fade-right" data-aos-duration="2000">
                        <img class="resize" src="public/img/teacher2.jpg" alt="teacher's photo">
                    </div>
                    <div class="d-flex justify-content-center flex-column" data-aos="fade-right" data-aos-duration="2000">
                        <h3>Anne Ogastric</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="p-3">
                    <div class="row">
                        <div class="col teachers-content-text">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                                numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                                optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                                obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                                nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                                tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                                quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos
                                sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
                                recusandae alias error harum maxime adipisci amet laborum. Perspiciatis
                                minima nesciunt dolorem!
                            </p>
                            <p> Officiis iure rerum voluptates a cumque velit
                                quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur
                                fugiat, temporibus enim commodi iusto libero magni deleniti quod quam
                                consequuntur! Commodi minima excepturi repudiandae velit hic maxime
                                doloremque. Quaerat provident commodi consectetur veniam similique ad
                                earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo
                                fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore
                                suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium
                                modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam
                                totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam
                                quasi aliquam eligendi, placeat qui corporis!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-12">
                <div class="p-3">
                    <div class="d-flex justify-content-center" data-aos="fade-right" data-aos-duration="2000">
                        <img class="resize" src="public/img/teacher1.jpg" alt="teacher's photo">
                    </div>
                    <div class="d-flex justify-content-center flex-column" data-aos="fade-right" data-aos-duration="2000">
                        <h3>Jaydan Lane</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="p-3">
                    <div class="row">
                        <div class="col teachers-content-text">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                                numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                                optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                                obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                                nihil, eveniet aliquid culpa officia aut!
                            </p>
                            <p> Impedit sit sunt quaerat, odit,
                                tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                                quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos
                                sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
                                recusandae alias error harum maxime adipisci amet laborum. Perspiciatis
                                minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit
                                quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur
                                fugiat, temporibus enim commodi iusto libero magni deleniti quod quam
                                consequuntur! Commodi minima excepturi repudiandae velit hic maxime
                                doloremque. Quaerat provident commodi consectetur veniam similique ad
                                earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo
                                fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore
                                suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium
                                modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam
                                totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam
                                quasi aliquam eligendi, placeat qui corporis!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </row>
    </div>

</section>

<section id="buttons">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="p-3">
                    <h2>Inscris-toi et suivez nos cours gratuits !</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="d-flex justify-content-center courses_buttons">
                    <button type='button' class="button_debutant">
                        <a href="<?= '?view=beginner&op=lesson' ?>">DÉBUTANT</a>
                    </button>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="d-flex justify-content-center courses_buttons">
                    <button type='button' class="button_intermediaire">
                        <a href="<?= '?view=intermediate&op=lesson' ?>">INTERMÉDIAIRE</a>
                    </button>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="d-flex justify-content-center courses_buttons">
                    <button type='button' class="button_avance">
                        <a href="<?= '?view=advanced&op=lesson' ?>">AVANCÉ</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="guides">
    <div class="container">
        <div class="row">
            <div class="p-3">
                <h1 class="text-center">LE GUIDE POUR DÉCOUVRIR NOTRE SITE</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row h-100">
            <h3>1 : L’écoute</h3>
            <div class="col-sm-12 my-auto">
                <div class="p-3 ">
                    <div class="row">
                        <div class="col">
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae
                                quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis
                                harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident
                                similique accusantium nemo autem. Veritatis obcaecati tenetur iure eius earum ut molestias
                                architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut!</p>
                            <p>
                                Impedit sit sunt quaerat, odit, tenetur error, harum nesciunt ipsum debitis quas aliquid.
                                Reprehenderit, quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos
                                sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam recusandae alias
                                error harum maxime adipisci amet laborum. Perspiciatis minima nesciunt dolorem! Officiis
                                iure rerum voluptates a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius
                                fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero magni deleniti quod
                                quam consequuntur! Commodi minima excepturi repudiandae velit hic maxime doloremque.</p>
                            <p>
                                Impedit sit sunt quaerat, odit, tenetur error, harum nesciunt ipsum debitis quas aliquid.
                                Reprehenderit, quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos sapiente
                                officiis modi at sunt excepturi expedita sint? Sed quibusdam recusandae alias error harum maxime
                                adipisci amet laborum. Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates a
                                cumque velit quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur fugiat,
                                temporibus enim commodi iusto libero magni deleniti quod quam consequuntur! Commodi minima
                                excepturi repudiandae velit hic maxime doloremque.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row h-100">
            <h3>2 : Apprendre dans la langue cible</h3>
            <div class="col-sm-12 my-auto">
                <div class="p-3 ">
                    <div class="row">
                        <div class="col">
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae
                                quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis
                                harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident
                                similique accusantium nemo autem. Veritatis obcaecati tenetur iure eius earum ut molestias
                                architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut!</p>
                            <p>
                                Impedit sit sunt quaerat, odit, tenetur error, harum nesciunt ipsum debitis quas aliquid.
                                Reprehenderit, quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos
                                sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam recusandae alias
                                error harum maxime adipisci amet laborum. Perspiciatis minima nesciunt dolorem! Officiis
                                iure rerum voluptates a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius
                                fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero magni deleniti quod
                                quam consequuntur! Commodi minima excepturi repudiandae velit hic maxime doloremque.</p>
                            <p>
                                Impedit sit sunt quaerat, odit, tenetur error, harum nesciunt ipsum debitis quas aliquid.
                                Reprehenderit, quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos sapiente
                                officiis modi at sunt excepturi expedita sint? Sed quibusdam recusandae alias error harum maxime
                                adipisci amet laborum. Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates a
                                cumque velit quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur fugiat,
                                temporibus enim commodi iusto libero magni deleniti quod quam consequuntur! Commodi minima
                                excepturi repudiandae velit hic maxime doloremque.</p>

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
