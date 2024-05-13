<?php

parse_str($_SERVER["QUERY_STRING"], $parameters);

$searchData = $parameters['searchData'];

if(preg_match("/[^a-zA-Z0-9]/",$searchData)){
    $searchData = "warning";
}

if(strlen($searchData) === 0) redirect("/");

else {

    $pageData = $parameters['page'];

    $datas = getSearchedLessons($searchData,$pageData);

    if($pageData != 1)
        if($pageData <= 0 || !$datas) {
            redirect("/search?searchData=$searchData&page=1");
        }


    $isFinal = !getSearchedLessons($searchData,$pageData+1);


    require pages("search.view.php");
}
