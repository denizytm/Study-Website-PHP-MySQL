<?php

$studiesData = getStudies();

if(array_key_exists("QUERY_STRING",$_SERVER)){
    
    parse_str($_SERVER["QUERY_STRING"], $parameters);

    $studyTitle = $parameters["title"];

    $page = $parameters["page"];

    $isAvailable = false;

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
