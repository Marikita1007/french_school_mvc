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

    public function delete($id){
        $query = Model::getDataBase()->query("DELETE FROM questions WHERE " . $this->getIdColumnName() . "=:id");
        return $query->execute(array(
            ':id' => $id
        ));
    }

    public function addQuestion($infos)
    {
        $column_lists = implode(',', array_keys($infos));//implode() Rassemble les éléments d'un tableau en une chaîne.
        $marker_lists = implode(',:', array_keys($infos));//array_keys — Retourne toutes les clés ou un ensemble des clés d'un tableau
        $query = Model::getDataBase()->prepare("INSERT INTO questions" . " ($column_lists ) VALUES (:$marker_lists)");
        if ($query->execute($infos)){
            return Model::getDataBase()->lastInsertId();
        }else{
            return false;
        }
    }

    public function updateQuestion($id, $infos){
        $setList = array();
        foreach(array_keys($infos) as $key){//array_keys — Retourne toutes les clés ou un ensemble des clés d'un tableau
            $setList[] = "$key = :$key";
        }
        $newValues = implode(',' , $setList);//implode() Rassemble les éléments d'un tableau en une chaîne. nom=:nom,prenom=:prenom, salaire=:salaire
        $query = Model::getDataBase()->prepare("UPDATE question SET $newValues WHERE " . $this->getIdColumnName() . "=:id");
        $infos['id'] = $id;
        //return $query->execute($infos);
    }

    //It need to have id_question and id_qnswer to edit the answers
    public function updateAnswers($id_question, $infos){
        new \Debug($id_question);
        new \Debug($infos);
        die;

        //UPDATE answer SET `answer`='Bonjour mod' WHERE id_question = 1 AND id_answer = 5;
        $query = Model::getDataBase()->prepare("UPDATE answers SET  WHERE " . $this->getIdColumnName() . "=:id");
        $infos['id'] = $id_question;
    }



}