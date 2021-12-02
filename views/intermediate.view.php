<?php
ob_start();
?>

<section id="intermediate">
    <div class="container">
        <div class="row introduction_titles">
            <h2 class="text-center">INTERMÉDIAIRE</h2>
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
                    <p><b>Client : </b>Généralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a été modifié), le Lorem ipsum ou Lipsum, qui permet donc de faire office de texte d'attente. L'avantage de le mettre en latin est que l'opérateur sait au premier coup d'oeil que la page contenant ces lignes n'est pas valide, et surtout l'attention du client n'est pas dérangée par le contenu, il demeure concentré seulement sur l'aspect graphique.</p>

                    <p><b>Opérateur : </b>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. </p>
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
                    <p><b>LALA : </b>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                    <p><b>DANIEL : </b>Excusez-moi ?</p>

                    <p><b>LALA : </b>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. </p>

                    <p><b>DANIEL : </b> Eh bien, pas à n'importe qui.</p>

                    <p><b>LALA : </b> Lorem Ipsum has been the standard forgery of printing since the 1500s, when an anonymous printer assembled pieces of text together to make a specimen book of text fonts. It has not only survived for five centuries, but has also been adapted to computerized office automation, without changing its content.</p>

                    <p><b>DANIEL : </b> Les gens n'ont pas l'habitude d'agir de la sorte avec une télévision. C'est généralement beaucoup plus unilatéral.</p>

                    <p><b>LALA : </b>Contrairement à une opinion répandue, le Lorem Ipsum n'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans.</p>

                    <p><b>DANIEL : </b>Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d'entre elles a été altérée par l'addition d'humour ou de mots aléatoires qui ne ressemblent pas une seconde à du texte standard.</p>

                    <p><b>LALA : </b>Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr qu'il n'y a rien d'embarrassant caché dans le texte. Tous les générateurs de Lorem Ipsum sur Internet tendent à reproduire le même extrait sans fin, ce qui fait de lipsum.com le seul vrai générateur de Lorem Ipsum.</p>
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
                    <p><b>Abbott : </b>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. </p>

                    <p><b>Costello : </b> Le Lorem Ipsum ?</p>

                    <p><b>Abbott : </b>  Quaerat provident commodi consectetur veniam similique ad
                        earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo
                        fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore
                        suscipit quas ?</p>

                    <p><b>Costello : </b> Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.</p>

                    <p><b>Abbott : </b> Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression Nulla, placeat. Voluptatem quaerat non architecto ab laudantium
                        modi minima sunt esse temporibus sint culpa...</p>

                    <p><b>Costello : </b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                        numquam blanditiis</p>
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
                    <button type='button' class="col-lg-2 col-md-3 mx-lg-4 mx-md-3 button_debutant">Exercices</button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
require('template.view.php');

