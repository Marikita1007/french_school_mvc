<?php

namespace Models;
use Debug;
use http\Encoding\Stream\Debrotli;
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

    public function selectDeleteAnswers($id_question){
        $query = Model::getDatabase()->prepare("SELECT id_answer FROM answers WHERE id_question =:id_question");
        $query->execute(array(
           ':id_question' => $id_question
        ));
        $result = $query->fetchAll(PDO::FETCH_COLUMN);
        $result = implode(",", $result);
        return $result;
    }

    //This function delete not only the correct answer ,but also the wrong answers.
    public function deleteAnswers($id_target_answers){ //$id_target_answers has 4 target id_answer. $id_target_answers is string.
        $query = Model::getDataBase()->prepare("DELETE FROM answers WHERE id_answer IN (". $id_target_answers .")");//this query target one correct and 3 wrong id_answer by using  IN (". $id_target_answers .")
        $query->execute();
    }

    public function deleteQuestion($id){
        $query = Model::getDataBase()->prepare("DELETE FROM questions WHERE " . $this->getIdColumnName() . "=:id");
        $query->execute(array(
            ':id' => $id
        ));
    }

    public function addQuestion($question_data)
    {
        $column_lists = implode(',', array_keys($question_data));
        $marker_lists = implode(',:', array_keys($question_data));
        $query = Model::getDataBase()->prepare("INSERT INTO questions" . " ($column_lists ) VALUES (:$marker_lists)");
        if ($query->execute($question_data)){
            return Model::getDataBase()->lastInsertId();
        }else{
            return false;
        }
    }

    public function addAnswers($id_question, $answersArray){

        foreach ($answersArray as $answer){

            $query = Model::getDataBase()->prepare("INSERT INTO answers (id_question, answer) VALUES (:id_question, :answer) ");
            $executeQuery= $query->execute(array(
                ':id_question' => $id_question,
                ':answer' => $answer['answer']
            ));
            if ($executeQuery == true && strpos($answer["id"], "correct_answer") !== false){
                $id_correct_answer = Model::getDataBase()->lastInsertId();
            }
        }
        if(is_numeric($id_correct_answer)){
            return $id_correct_answer;
        }
    }

    public function addGoodAnswerToQuestion($id_question, $id_correct_answer){
        $query = Model::getDataBase()->prepare("UPDATE questions SET id_answer = :id_answer WHERE id_question = :id_question");
        $executeQuery = $query->execute(array(
            ':id_answer' => $id_correct_answer,
            ':id_question' => $id_question
        ));
        if ($executeQuery == true ){
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

    //its getting $answerArray which contains an array of $answer_data.
    // This array has 2 values.
    // One is associative arrays which has  "id" as key name, second is user inputs answers which has "answer" as key name
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

    //When the user take the level test, this function checks the result
    public function checkTestAnswers($userAnswers){
        $setListQuestions = array();
        foreach (array_keys($userAnswers) as $key){
            $setListQuestions[] = "$key";
        }
        $allQuestions = implode(', ', $setListQuestions);
        $query = Model::getDataBase()->prepare("SELECT * FROM questions WHERE id_question IN ($allQuestions)");
        $query->execute();
        $dbQuestionDatas = $query->fetchAll();
        //$correct_counter = 0;
        $testScores = 0;
        foreach ($dbQuestionDatas as $questionData){
            //new \Debug($answerResult->id_question);
            //new \Debug($setListQuestions);
            foreach ($userAnswers as $id_question => $id_answer){
                if($questionData->id_question ==  $id_question && $questionData->id_answer == $id_answer && $questionData){
                    //$correct_counter ++;
                    switch ($questionData->id_difficulty){
                        case "1":
                            $testScores ++;
                            break;
                        case "2":
                            $testScores += 2;
                            break;
                        case "3":
                            $testScores += 3;
                            break;
                    }
                }
            }
        }
        return $testScores;
    }
}