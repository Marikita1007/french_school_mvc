<?php

namespace Controllers;

use Debug;
use http\Encoding\Stream\Debrotli;
use Models\QuestionsManager;
use PDO, PDOException, Exception;

class QuestionsController
{
    private $db;
    public $questionsData;

    public function __construct(){
        //"manager "オブジェクトを作成し、$dbプロパティに格納します。
        $this->db = new \Models\QuestionsManager;
    }

    public function run(){

        if($_SESSION['member']->status !== '1') {
            session_destroy();
            header('location:?view=home');
        } else {
            $opAdmin = $_GET['opAdmin'] ?? 'qlist';
            switch ($opAdmin){
                case 'qlist' :
                    $this->listQuestions();
                    break;
                case 'prefill' :
                    $this->prefillQuestions();
                    break;
                case 'delete' :
                    $this->deleteQuestionAndAnswers();
                    break;
                case 'show' :
                    $this->showDashboard();
                    break;
                case 'new' :
                    $this->newQuestionAndAnswers();
                    break;
                case 'edit' :
                    $this->editQuestion();
                    break;
            }
        }
    }

    public function listQuestions(){
        $questionsData = $this->db->selectQuestions();
        require('views/admin.leveltest.view.php');
    }

    //Prefill datas which are already in the database
    public function prefillQuestions(){
        if ($_GET['opAdmin'] == 'prefill' && !empty($_GET['id']) && is_numeric($_GET['id'])){
            $currentQuestion = $this->db->selectQuestion($_GET['id']);
            $answersInfo = $this->db->selectAnswers($_GET['id']);
        }
        require('views/edit_question_answer.view.php');
    }

    //edit database of questions and answers
    public function editQuestion(){

        if(!empty($_POST)){
            $errors = array();
            $empty_fields = 0;
            $empty_difficulty = '';
            foreach ($_POST as $key => $value){
                //Prevent SQL injections
                $_POST[$key] = htmlspecialchars($value);
                if(trim($_POST[$key]) == '') $empty_fields++;
            }
            if($empty_fields > 0){
                //Need to call this in the page so it actually shows.
                $errors[] = 'Il manque ' . $empty_fields . ' information(s)';
                if ($_POST["id_difficulty"] == '') {
                    $empty_difficulty .= 'Veuillez choisir la niveau de la question';
                }
                //refilling the data again
                $currentQuestion = $this->db->selectQuestion($_GET['id']);
                $answersInfo = $this->db->selectAnswers($_GET['id']);
            }

            if(empty($errors)){
                if($_GET['opAdmin'] == 'edit' && !empty($_GET['id']) && is_numeric($_GET['id'])){
                    //making arrays to separate datas of the table answers and questions
                    //strpos needs to have arrays
                    $answer_data = [];
                    $question_data = [];
                    foreach ($_POST as $key => $value) {
                        //strpos finds the position of what's given as needle
                        if(strpos($key, "answer_") !== false || strpos($key, "wrong_answer") !== false) {
                            //array_push adds what it's given to $answer_data
                            //Here it's getting only the necessary datas for answer table
                            //It also create name "id" for keys and name "answer" for values
                            //By doing this, we can get associative arrays of answer datas as values of "id";
                            //This helps to edit names of associative arrays cuz they are not the same as database column's names
                            array_push($answer_data, array( "id" => $key,"answer" => $value));
                        }else {
                            //it only gets what we need for table questions
                            //This one, we don't need to edit the associative arrays so don't need to do array_push
                            $question_data[$key] =$value ;
                        }
                    }
                    $this->db->updateQuestion($_GET['id'], $question_data);
                    $this->db->updateAnswers($answer_data);
                }
                header('location:?view=question&opAdmin=qlist');
            }
        }
        require('views/edit_question_answer.view.php');
    }

    //Need to add if else for checking if the answers are different
    public function newQuestionAndAnswers(){
        if (!empty($_POST)) {
            $errors = array();
            $empty_difficulty = '';
            $empty_fields = 0;
            foreach ($_POST as $key => $value) {
                $_POST[$key] = htmlspecialchars($value);
                if (trim($_POST[$key]) == '') $empty_fields++;
            }
            if ($empty_fields > 0) {
                $errors[] = 'Il manque ' . $empty_fields . ' information(s)';
                if ($_POST["id_difficulty"] == '') {
                    $empty_difficulty .= 'Veuillez choisir la niveau de la question';
                }
            }
            //Need to write insert in the model and make sure that the inputs shows if the user input is wrong!
            if(empty($errors) && empty($empty_difficulty)){
                if ($_GET['opAdmin'] == 'new') {
                    $wrongInputs = '';
                    if($_POST['correct_answer'] == $_POST['wrong_answer_1'] && $_POST['correct_answer'] == $_POST['wrong_answer_2'] && $_POST['correct_answer'] == $_POST['wrong_answer_3']   ){
                        $wrongInputs .= 'La bonne réponse doit être unique!';
                    }else{
                        if($_POST['wrong_answer_1'] == $_POST['wrong_answer_2'] || $_POST['wrong_answer_2'] == $_POST['wrong_answer_3']  ){
                            $wrongInputs .= 'Les mauvaises réponses doivent être différentes !';
                        }
                    }
                    if(empty($wrongInputs)){
                        if($_GET['opAdmin'] == 'new'){
                            //making arrays to separate datas of the table answers and questions
                            //strpos needs to have arrays
                            $answer_data = [];
                            $question_data = [];
                            foreach ($_POST as $key => $value) {
                                //strpos finds the position of what's given as needle
                                if(strpos($key, "correct_answer") !== false || strpos($key, "wrong_answer") !== false) {
                                    array_push($answer_data, array( "id" => $key,"answer" => $value));
                                }else {
                                    //it only gets what we need for table questions
                                    //This one, we don't need to edit the associative arrays so don't need to do array_push
                                    $question_data[$key] =$value ;
                                }
                            }
                            //Input a new question to the table "questions" without a column "id_answer"
                            $id_question = $this->db->addQuestion($question_data);
                            //Input new answers to the table "answers"
                            $id_good_answer = $this->db->addAnswers($id_question, $answer_data);
                            //Get the correct answer from the addAnswers function and input into "questions" column "id_answer"
                            $this->db->addGoodAnswerToQuestion($id_question, $id_good_answer);
                            // Is it good ?
                            $answersInfo = $this->db->selectAnswers($id_question);
                        }
                        header('location:?view=question&opAdmin=qlist');
                    }
                }
            }

        }
        require_once('views/new_question_answer.view.php');
    }


    public function showDashboard(){
        if($_GET['op'] == 'show' && !empty($_SESSION['member']->id_member) && is_numeric($_SESSION['member']->id_member)){
            require('views/memberAccount.view.php');
        }else{
            require ('views/login.view.php');
        }
    }

    public function deleteQuestionAndAnswers(){
        if (!empty($_GET['id']) && is_numeric($_GET['id']) && $_GET['opAdmin'] == 'delete'){
                $id_target_answers = $this->db->selectDeleteAnswers($_GET['id']);
                $this->db->deleteAnswers($id_target_answers);
                $this->db->deleteQuestion($_GET['id']);
        }
        header('location:?view=question&opAdmin=qlist');
    }


}
