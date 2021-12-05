<?php

namespace models;
use PDO, PDOException, Exception;

class QuestionsManager extends Model{

    public function selectQuestions()
    {
        //Modelクラスにあるfunction getBdd()メソッドを使う！getBdd()はnullの場合pdoを起動する
        $query = Model::getDataBase()->query("SELECT * FROM questions INNER JOIN difficulties ON difficulties.id_difficulty = questions.id_difficulty");
        $result = $query->fetchAll();
        return $result;
    }

    public function selectQuestion($id){
        $query = Model::getDataBase()->prepare("SELECT * FROM questions WHERE " . $this->getIdColumnName() . "=:id");
        $query->execute(array (
            ':id' => $id
        ));
        $result = $query->fetch();
        return $result;
    }

    public function selectAnswers($id_question){
        $query = Model::getDataBase()->prepare("SELECT * FROM `answers` WHERE id_question=:id_question");
        $query->execute(array (
            ':id_question' => $id_question
        ));
        $result = $query->fetchAll();
        return $result;
    }


    public function getIdColumnName(){
        $query = Model::getDataBase()->query("DESC questions");
        $result = $query->fetch();
        $this->idColumName = $result->Field;
        return $this->idColumName;
    }


}