<?php

namespace models;
use mysql_xdevapi\DocResult;
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

    //This also need to be fixed just like updateQuestion and updateAnswers cuz this is inserting into é tables !!!!!!!!!!!!!!!!
    public function addQuestion($infos)
    {
        $column_lists = implode(',', array_keys($infos));//implode() Rassemble les éléments d'un tableau en une chaîne.
        $marker_lists = implode(',:', array_keys($infos));//array_keys — Retourne toutes les clés ou un ensemble des clés d'un tableau
        $query = Model::getDataBase()->prepare("INSERT INTO questions" . " ($column_lists ) VALUES (:$marker_lists)");
        if ($query->execute($infos)){
            new \Debug($query);
            die;
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
        $infos['id'] = $id;
        $newValues = implode(', ' , $setList);//implode() Rassemble les éléments d'un tableau en une chaîne. nom=:nom,prenom=:prenom, salaire=:salaire
        $query = Model::getDataBase()->prepare("UPDATE questions SET $newValues WHERE " . $this->getIdColumnName() . "=:id");
        $query->execute($infos);
    }

    //its getting $answerArray which contains an array.
    // This array has 2 values.
    // Ons is associative arrays which has  "id" as key name, second is user inputs answers which has "answer" as key name
    public function updateAnswers($answerArray){
        foreach($answerArray as $answer){
            //explode separate key name. ex : correct_answer_id of key name "id"
            $idAnswer = explode('_', $answer["id"]);
            //Get last letters after "_" so even the id number is huge, it still works.
            $idAnswer = end($idAnswer);
            $query = Model::getDataBase()->prepare("UPDATE answers SET answer =  :answer  WHERE id_answer =  :id_answer");
            $query->execute(array(
                    ':answer' => $answer["answer"],
                    ':id_answer' => $idAnswer
                )
            );
        }
    }



}