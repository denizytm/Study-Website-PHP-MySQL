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
    $questionsData = getQuestions2();
    $lastIndex = -1;
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

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $dateFilter = $_POST["radioDate"];
        $languageFilter = $_POST["checkboxLanguage"];
        $lastIndex = -1;

        if($dateFilter != "anytime") {

            $now = strtotime("now");
            $oneDayAgo = strtotime("-1 $dateFilter", $now);
            if($questionsData != false || $questionsData != []) {
                $filteredArray = array_filter($questionsData, function($item) use($oneDayAgo) {
                    $itemDate = strtotime($item['date']);
                    return ($itemDate >= $oneDayAgo);
                });
                $questionsData = array_values($filteredArray);
            }
        }

        if($languageFilter != "anyone") {
            if($questionsData != false || $questionsData != []) {
                $filteredArray = array_filter($questionsData, function($item) use($languageFilter) {
                    if (strpos($item["tags"], $languageFilter) !== false) {
                        return true;
                    }
                    return false;
                });
                $questionsData = array_values($filteredArray);
            }
        }
    }

    if(array_key_exists("byPublisher",$_POST)){
        $questionsData = getQuestionsByPublisher($_POST['searchData']);
    }

    require pages("questions.view.php"); 
}