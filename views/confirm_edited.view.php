<?php
if(!empty($errors)){
    foreach ($errors as $error){
        echo $error;
    }
}else{
    echo "<div>Votre compte a été modifié.</div>";
    echo '<button><a href="?view=showStudent&op=show">Retournez à la page de votre compte</a></button>';
}


