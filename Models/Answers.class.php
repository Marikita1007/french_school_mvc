<?php
namespace Models;

class Answers{

    private $id_answer;
    private $id_question;
    private $answer;
    private $correct;

    public function __construct($id_answer, $id_question, $answer, $correct)
    {
        $this->id_answer = $id_answer;
        $this->id_question = $id_question;
        $this->answer = $answer;
        $this->correct = $correct;

    }

    public function getIdAnswer()
    {
        return $this->id_answer;
    }

    public function setIdAnswer($id_answer)
    {
        $this->id_answer = $id_answer;
    }

    public function getIdQuestion()
    {
        return $this->id_question;
    }

    public function setIdQuestion($id_question)
    {
        $this->id_question = $id_question;
    }


    public function getAnswer()
    {
        return $this->answer;
    }

    public function setAnswer($answer)
    {
        $this->answer = $answer;
    }

    public function getCorrect()
    {
        return $this->correct;
    }

    public function setCorrect($correct)
    {
        $this->correct = $correct;
    }



}