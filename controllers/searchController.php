<?php

$searchData = $_GET['searchData'];

if(preg_match("/[^a-zA-Z0-9]/",$searchData)){
    $searchData = "warning";
}

if(strlen($searchData) === 0) redirect("/");
else require pages("search.view.php"); 
