<?php

parse_str($_SERVER["QUERY_STRING"], $parameters);

$searchData = $parameters['searchData'];

if(hasSpecialCharactersRegex($searchData)){
    $searchData = "warning";
}

else {
    $pageData = $parameters['page'];

    $lessons = getSearchedLessons2($searchData);
    $questions = getQuestions2($searchData);

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $dateFilter = $_POST["radioDate"];
        $typeFilter = $_POST["checkboxType"];
        $languageFilter = $_POST["checkboxLanguage"];

        if($dateFilter != "anytime") {

            $now = strtotime("now");
            $oneDayAgo = strtotime("-1 $dateFilter", $now);
            if($lessons != false || $lessons != []) {
                $filteredArray1 = array_filter($lessons, function($item) use($oneDayAgo) {
                    $itemDate = strtotime($item['date']);
                    return ($itemDate >= $oneDayAgo);
                });
                $lessons = array_values($filteredArray1);
            }
            if($questions != false || $questions != []) {
                $filteredArray2 = array_filter($questions, function($item) use($oneDayAgo) {
                    $itemDate = strtotime($item['date']);
                    return ($itemDate >= $oneDayAgo);
                });
                $questions = array_values($filteredArray2);
            }
        }
        if($typeFilter != "anyone") {
            if($lessons != false || $lessons != []) {
                $filteredArray1 = array_filter($lessons, function($item) use($typeFilter) {
                    return $item['type'] == $typeFilter;
                });
                $lessons = array_values($filteredArray1);
            }
            if($questions != false || $questions != []) {
                $filteredArray2 = array_filter($questions, function($item) use($typeFilter) {
                    return $item['type'] == $typeFilter;
                });
                $questions = array_values($filteredArray2);
            }
            
        }
        if($languageFilter != "anyone") {
            if($lessons != false || $lessons != []) {
                $filteredArray1 = array_filter($lessons, function($item) use($languageFilter) {
                    if (strpos($item["tags"], $languageFilter) !== false) {
                        return true;
                    }
                    return false;
                });
                $lessons = array_values($filteredArray1);
            }
            if($questions != false || $questions != []) {
                $filteredArray2 = array_filter($questions, function($item) use($languageFilter) {
                    if (strpos($item["tags"], $languageFilter) !== false) {
                        return true;
                    }
                    return false;
                });
                $questions = array_values($filteredArray2);
            }
        }

        if(array_key_exists("byPublisher",$_POST)){
            $questions = getQuestionsByPublisher($_POST['searchData']);
        }

    }

    if($lessons == false && $questions == false) {
        $datas = [];
    }
    else if ($lessons == false || $lessons == []){
        $datas = $questions;
    } else if ($questions == false || $questions == []){
        $datas = $lessons;
    } else {
        $datas = array_merge($lessons, $questions);
    }

    require pages("search.view.php");
}