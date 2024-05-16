<?php 

parse_str($_SERVER["QUERY_STRING"], $parameters);

if(array_key_exists("id",$parameters)){

    $errors = [];

    $questionId = $parameters["id"];
    $isAvailable = false;

    if($_SERVER["REQUEST_METHOD"] === "POST") {

        if(array_key_exists("close",$_POST)){
            closeQuestion($questionId);
        }else {
            $answer = $_POST['answer'];
            if(hasSpecialCharactersRegex($answer)) $errors['answer'] = "Please do not use special characters.";
            if(!strlen($answer)) $errors['answer'] = "Please enter a text.";
            if(!count($errors)){
                if(submitAnswer($currentUser['userImage'],$currentUser['username'],$answer,$currentUser['totalAnswers'],$questionId)) $isAvailable = true;
            }
        }

    }

    $questionData = getQuestionByID($questionId);
    $answersData = getAnswersByQuestionID($questionId);
    $questionUser = getUserByUsername($questionData['username']);
    
    if($questionData) $isAvailable = true;

    if($isAvailable) {
        require pages("question.view.php");
    }
    else 
    redirect("/404");

}else {
    $pageData = $parameters['page'];
    $questionsData = getQuestionsbyPage($pageData);

    if(!$questionsData) $questionsData = [];

    if($pageData != 1)
        if($pageData < 1 || !$questionsData) redirect("/questions?page=1");

    $index = 0;

    foreach($questionsData as $questionData) {

        $userData = getUserByUsername($questionData['username']);

        $questionData['userImage'] = $userData['userImage'];

        $questionsData[$index] = $questionData;

        $index += 1;

    }

    $isFinal = !getQuestions($pageData+1);

    require pages("questions.view.php"); 
}

