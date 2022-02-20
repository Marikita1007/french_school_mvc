<?php
namespace models;

class Questions{
    private $id_question;
    private $question;
    private $id_difficulty;

    public function __construct($id_question, $question, $id_difficulty){
        $this->id_question = $id_question;
        $this->question = $question;
        $this->id_difficulty = $id_difficulty;
    }

    public function getIdQuestion()
    {
        return $this->id_question;
    }

    public function setIdQuestion($id_question)
    {
        $this->id_question = $id_question;
    }

    public function getQuestion()
    {
        return $this->question;
    }

    public function setQuestion($question)
    {
        $this->question = $question;
    }


    public function getIdDifficulty()
    {
        return $this->id_difficulty;
    }

    public function setIdDifficulty($id_difficulty)
    {
        $this->id_difficulty = $id_difficulty;
    }


}