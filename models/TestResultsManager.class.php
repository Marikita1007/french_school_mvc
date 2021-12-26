<?php

namespace models;

use PDO, PDOException, Exception;

class TestResultsManager
{
    //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    public  function insertTestResult($testResult, $memberInfos){
        new \Debug($memberInfos);
        new \Debug($testResult);
        die;
        //$query = Model::getDataBase()->prepare("INSERT INTO test_results")
    }

}