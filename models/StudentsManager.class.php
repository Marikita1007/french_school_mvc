<?php

namespace models;

use PDO, PDOException, Exception;

class StudentsManager extends Model
{
    private $idColumName;

    public function __construct(){}

    public function getIdColumnName(){
        $query = Model::getDataBase()->query("DESC students");
        $result = $query->fetch();
        $this->idColumnName = $result->Field;
        return $this->idColumnName; //This returns "id_student" which is the column name
    }


    public function insert($infos)
    {
        $query = Model::getDataBase()->prepare("SELECT * FROM students WHERE email=:email");
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

            $query = Model::getDataBase()->prepare("INSERT INTO students" . "($list_colonnes) VALUES (:$list_marquers)");

            if($query->execute($infos)){
                return Model::getDataBase()->lastInsertId();
            }else{
                return false;
            }
        }

    }

    public function selectOne($id_student)
    {
        $query = Model::getDataBase()->prepare("SELECT * FROM students WHERE " . $this->getIdColumnName() . "=:id_student");
        $query->execute(array(
            ':id_student' => $id_student
        ));
        $result = $query->fetch();
        return $result;
    }

    public function loginCheck($password, $email){
        $query = Model::getDataBase()->prepare("SELECT * FROM students WHERE password=:password AND email=:email");
        $query->execute(array(
            ':password' => md5($password),
            ':email' => $email
        ));
        $result = $query->fetch();
        return $result;
    }

    public function update($id_student, $infos){

        $setList = array();
        foreach(array_keys($infos) as $key){
            $setList[] = "$key = :$key";
        }
        $newValues = implode(',' , $setList);
        $newValues = str_replace('password2 = :password2,','',$newValues);
        $query = Model::getDataBase()->prepare("UPDATE students SET $newValues WHERE " . $this->getIdColumnName() . "=:id_student");
        $infos['id_student'] = $id_student;
        return $query->execute($infos);
    }

    public function deleteData($id_student){
        $query = Model::getDataBase()->prepare("DELETE FROM students WHERE ". $this->getIdColumnName() . "=:id_student");
        return $query->execute(array(
           ':id_student' => $id_student
        ));
    }

}