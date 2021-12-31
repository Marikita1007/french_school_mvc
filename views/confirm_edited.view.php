<?php
ob_start();

if(!empty($errors)){
    foreach ($errors as $error){
        echo "<div style=' margin-top: 10vh;' >" . $error . "</div>";
    }
}else{
    echo "<section style='height: 40vh;' class='d-flex flex-column justify-content-center align-items-center'>
                    <h5>Votre compte a été modifié.</h5>
                    <div>
                        <button type='button' class='btn btn-primary'><a href='?view=showMember&op=show' class='text-white'>Retournez à la page de votre compte</a></button>
                    </div>
            </section>";
}

$content = ob_get_clean();
require('template.view.php');
