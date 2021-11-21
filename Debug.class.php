<?php

//debugging
class Debug{

    public function __construct($data){
        echo "<pre>" . json_encode($data, JSON_PRETTY_PRINT) . "</pre>";
    }
}

//new Debug($variable);

