<?php

namespace Models;
use PDO, PDOException, Exception;

class AnswersManager extends Model{

    public function selectAll()
    {
        //Modelクラスにあるfunction getBdd()メソッドを使う！getBdd()はnullの場合pdoを起動する
        $query = Model::getDataBase()->query("SELECT * FROM answers");
        $result = $query->fetchAll();
        return $result;
    }

    public function selectIdQuestion($id_question){
        $query = Model::getDataBase()->prepare("SELECT * FROM answers WHERE id_question =:id_question");
        $query->execute(array(
            ':id_question' => $id_question
        ));
        $result = $query->fetchAll();
        return $result;
    }

//    public function getIdColumName(){
//        $result = $query = Model::getBdd()->query("DESC answers;");
////        $result = Model::array_column($a, 'id_question');
////
///       new \Debug($result);
////        die;
//        $result = $query->fetch();
//        new \Debug($result);
//        die;
//        $this->idQuestion = $result;
//        return $this->idQuestion;
//    }
}