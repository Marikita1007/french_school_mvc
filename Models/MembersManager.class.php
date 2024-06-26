<?php

namespace Models;

use Debug;
use PDO, PDOException, Exception;

class MembersManager extends Model
{
    private $idColumName;

    public function __construct(){}

    public function selectStudents(){
        $query = Model::getDataBase()->query("SELECT * FROM members WHERE status = 0");
        $result = $query->fetchAll();
        return $result;
    }

    //Get today's number of student registration
    public function getRegNumToday(){
        $query = Model::getDataBase()->query("SELECT * FROM `members` WHERE day(signup_date) = day(now());");
        $result = $query->rowCount();
        return $result;
    }

    public function getRegNumWeek(){
        $query = Model::getDataBase()->query("SELECT * FROM `members` WHERE week(signup_date) = week(now())");
        $result = $query->rowCount();
        return $result;
    }

    public function getRegNumMonth(){
        $query = Model::getDataBase()->query("SELECT * FROM `members` WHERE month(signup_date) = month(now()) and year(signup_date) = year(now());");
        $result = $query->rowCount();
        return $result;
    }

    public function getRegNumYear(){
        $query = Model::getDataBase()->query("SELECT * FROM `members` WHERE year(signup_date) = year(now()) and  status = 0");
        $result = $query->rowCount();
        return $result;
    }

    public function getIdColumnName(){
        $query = Model::getDataBase()->query("DESC members");
        $result = $query->fetch();
        $this->idColumnName = $result->Field;
        return $this->idColumnName; //This returns "id_member" which is the column name
    }


    public function insert($infos)
    {
        $query = Model::getDataBase()->prepare("SELECT * FROM members WHERE email=:email");
        $query->execute(array(
            ':email' => $infos['email']
        ));
        $result = $query->rowCount();
        if($result){
            return false;
        }
        else{
            $list_colonnes = implode(',', array_keys($infos));
            $list_marquers = implode(',:', array_keys($infos));
            $query = Model::getDataBase()->prepare("INSERT INTO members" . "($list_colonnes) VALUES (:$list_marquers)");
            if($query->execute($infos)){
                return Model::getDataBase()->lastInsertId();
            }else{
                return false;
            }
        }

    }

    public function selectOne($id_member)
    {
        $query = Model::getDataBase()->prepare("SELECT * FROM members WHERE " . $this->getIdColumnName() . "=:id_member");
        $query->execute(array(
            ':id_member' => $id_member
        ));
        $result = $query->fetch();
        return $result;
    }

    //emailCheck function returns all the table columns to verify password in MembersController
    public function emailCheck($email){
        $query = Model::getDataBase()->prepare("SELECT * FROM members WHERE email=:email");
        $query->execute(array(
            ':email' => $email
        ));
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    //if the password password_verify() returns true, this function will get the table info.
    public function loginCheck($email){
        $query = Model::getDataBase()->prepare("SELECT * FROM members WHERE email=:email");
        $query->execute(array(
            ':email' => $email
        ));
        $result = $query->fetch();
        return $result;
    }

    public function update($id_member, $infos){
        $setList = array();
        foreach(array_keys($infos) as $key){
            $setList[] = "$key = :$key";
        }
        $newValues = implode(',' , $setList);
        $newValues = str_replace('password2 = :password2,','',$newValues);
        $query = Model::getDataBase()->prepare("UPDATE members SET $newValues WHERE " . $this->getIdColumnName() . "=:id_member");
        $infos['id_member'] = $id_member;
        return $query->execute($infos);
    }

    public function deleteTestResult($id_member){
        $query = Model::getDataBase()->prepare("DELETE FROM test_results WHERE ". $this->getIdColumnName() . "=:id_member");
        return $query->execute(array(
           ':id_member' => $id_member
        ));
    }

    public function deleteData($id_member){
        $query = Model::getDataBase()->prepare("DELETE FROM members WHERE ". $this->getIdColumnName() . "=:id_member");
        return $query->execute(array(
           ':id_member' => $id_member
        ));
    }

}