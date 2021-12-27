<?php

namespace models;

use PDO, PDOException, Exception;
class TestResultsManager extends Model
{
    public function checkUserHistory($memberId){
        $query = Model::getDataBase()->prepare("SELECT * FROM test_results WHERE id_member" . "=:id_member" ) ;
        $query->execute(array (
           ':id_member' => $memberId
        ));
        return $query->fetch();
    }

    //$testResult contains the result of the level check test and  $memberId has id_member from SESSION
    public  function insertTestResult($testResult, $memberId){
        $query = Model::getDataBase()->prepare("INSERT INTO test_results (`test_result`, `id_member`) VALUES (:test_result , :id_member) ") ;
        $query->execute(array (
            ':id_member' => $memberId,
            ':test_result' => $testResult
        ));
        $result = $query->fetch();
        return $result;
    }

    public function updateTestResult($newTestResult, $memberId){
        $query = Model::getDataBase()->prepare("UPDATE test_results SET test_result = :test_result WHERE id_member = :id_member");
        return  $query->execute(array(
            ':test_result' => $newTestResult,
            ':id_member' => $memberId
        ));
    }

}