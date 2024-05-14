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
                if(submitAnswer($currentUser['image'],$currentUser['username'],$answer,$questionId)) $isAvailable = true;
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

    if($pageData != 1)
        if($pageData < 1 || !$questionsData) redirect("/questions?page=1");

    $index = 0;

    foreach($questionsData as $questionData) {

        $userData = query("SELECT image FROM users WHERE username = :username",[
            "username" => $questionData['username']
        ])->fetch();

        $questionData['userImage'] = $userData['image'];

        $questionsData[$index] = $questionData;

        $index += 1;

    }

    $isFinal = !getQuestions($pageData+1);

    require pages("questions.view.php"); 
}