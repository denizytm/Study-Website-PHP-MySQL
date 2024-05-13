<?php 

parse_str($_SERVER["QUERY_STRING"], $parameters);

if(array_key_exists("id",$parameters)){

    $questionId = $parameters["id"];
    
    $isAvailable = false;

    $questionData = getQuestionByID($questionId);

    if($questionData) $isAvailable = true;

    if($isAvailable) {
        require pages("question.view.php");
    }
    else 
    redirect("/404");

}else {
    $pageData = $parameters['page'];
    $questionsData = getQuestions($pageData);

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