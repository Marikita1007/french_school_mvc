<?php

namespace Controllers;

use Models\Model;
use PDO, PDOException, Exception;

class MentionsLegalesController
{
    public function run(){
        require('views/mentions_legales.view.php');
    }
}