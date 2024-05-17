<?php

$isDone = false;
$exampleFinished = false;

if($_SERVER["REQUEST_METHOD"] === "POST"){

    parse_str($_SERVER["QUERY_STRING"], $parameters);
    
    $title = $parameters['title'];
    $page = intval($parameters['page']);
    $test = intval($parameters['test']);
    $userAnswer = $_POST['userAnswer'];

    $studyData = getStudyByTitle($title);

    $examplesData = getExamplesForLanguage($studyData['studyID']);

    $start = ($test-1)*10;
    $end = ($test)*10;
    $length = $end - $start;

    $slicedExamplesData = array_slice($examplesData, $start, $length);
    
    $exampleData = $slicedExamplesData[$page-1];

    if(editExampleProgress($currentUser['userID'],$test,"$title",$page)) {
        if($userAnswer === $exampleData['answer']){
            increaseTrueExamples($currentUser['userID']);
            gainExperience(25,$currentUser['username']);
        }
        else {
            increaseFalseExamples($currentUser['userID']);
            gainExperience(25,$currentUser['username']);
        }
    }

    $currentUser = getUserByID($currentUser['userID']);

    $isDone = checkExampleDoneBefore($currentUser['userID'],$title,$test,$page);
    $exampleFinished = checkExamplesDone($currentUser['userID'],$title,$test);

    $a = htmlspecialchars($exampleData['a']);
    $b = htmlspecialchars($exampleData['b']);
    $c = htmlspecialchars($exampleData['c']);
    $d = htmlspecialchars($exampleData['d']);

    require pages("example.view.php");

}else if($_SERVER["REQUEST_METHOD"] === "GET"){
    if (array_key_exists("QUERY_STRING", $_SERVER)) {

        parse_str($_SERVER["QUERY_STRING"], $parameters);
    
        $title = $parameters['title'];
        $page = intval($parameters['page']);
        $test = intval($parameters['test']);

        $studyData = getStudyByTitle($title);

        $examplesData = getExamplesForLanguage($studyData['studyID']);

        $start = ($test-1)*10;
        $end = ($test)*10;
        $length = $end - $start;

        $slicedExamplesData = array_slice($examplesData, $start, $length);
    
        $exampleData = $slicedExamplesData[$page-1];
    
        $isDone = checkExampleDoneBefore($currentUser['userID'],$title,$test,$page);
        $exampleFinished = checkExamplesDone($currentUser['userID'],$title,$test);

        $a = htmlspecialchars($exampleData['a']);
        $b = htmlspecialchars($exampleData['b']);
        $c = htmlspecialchars($exampleData['c']);
        $d = htmlspecialchars($exampleData['d']);
    
    
    } 
    
    require pages("example.view.php");
}else redirect("404");

