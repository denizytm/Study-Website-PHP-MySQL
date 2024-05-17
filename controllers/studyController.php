<?php

$studiesData = getStudies();

if(array_key_exists("QUERY_STRING",$_SERVER)){
    parse_str($_SERVER["QUERY_STRING"], $parameters);
    
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $isAvailable = false;

        $currentPage = $_POST["currentPage"];
        $title = $parameters['title']; 
        $nextPage = $parameters['page'];

        if(editStudyProgress($currentUser['userID'],$title,$currentPage)) gainExperience(25,$currentUser['username']);

        $currentUser = getUserByID($currentUser['userID']);

        $isAvailable = true;

    }

    $studyTitle = $parameters["title"];

    $page = $parameters["page"];

    $isAvailable = false;

    $studyData = getStudyByTitle($studyTitle);

    $pageContent = getStudyContentByPage($studyData['studyID'],$page);

    $pagesTitleData = getStudyPageTitles($studyData['studyID']);

    foreach ($studiesData as $studyData) {
        if (strcasecmp($studyData["title"], $parameters["title"]) === 0 && !$studyData["comingSoon"]) {
            $isAvailable = true;
            break;
        }
    }
    
    if($isAvailable) 
        require pages("studyData.view.php");
    else 
    redirect("/404");

}else {
    $index = 0;
    foreach($studiesData as $studyData){
        $studiesData[$index]['title'] =   ucfirst(strtolower($studiesData[$index]['title']));
        $index += 1; 
    }
    require pages("study.view.php");
}
