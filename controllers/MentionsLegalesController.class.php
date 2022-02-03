<?php

namespace controllers;

use models\Model;
use PDO, PDOException, Exception;

class MentionsLegalesController
{
    public function run(){
        require('views/mentions_legales.view.php');
    }
}