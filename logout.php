<?php
    //Users can logout without leaving session
    // this is the first page to be called so that I can use header() function
    session_start();
    session_destroy();
    header("location:index.php");
?>