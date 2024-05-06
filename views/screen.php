<?php

if(isset($_SERVER["PATH_INFO"])) $requestData = $_SERVER["PATH_INFO"];
else $requestData = $_SERVER["REQUEST_URI"]; 

$isLoggedIn = false;

if(isset($_COOKIE["login-data"])) $isLoggedIn = true;

if($requestData === "/") {
    $headData = partialsHead("homeHead.php");
    $bodyData = partialsBody("homeBody.php");
    require pages("home.view.php");
}else if($requestData === "/study"){
    $headData = partialsHead("studyHead.php");
    $bodyData = partialsBody("studyBody.php");
    require pages("study.view.php");
}else if($requestData === "/questions"){
    $headData = partialsHead("questionsHead.php");
    $bodyData = partialsBody("questionsBody.php");
    require pages("questions.view.php");
}else if($requestData === "/contact"){
    $headData = partialsHead("contactHead.php");
    $bodyData = partialsBody("contactBody.php");
    require pages("contact.view.php");
}else if($requestData === "/register"){
    $headData = partialsHead("registerHead.php");
    $bodyData = partialsBody("registerBody.php");
    require controllers("register.php");
}else if($requestData === "/login"){
    $headData = partialsHead("loginHead.php");
    $bodyData = partialsBody("loginBody.php");
    require controllers("login.php");
}else if($requestData === "/search"){
    $headData = partialsHead("searchHead.php");
    $bodyData = partialsBody("searchBody.php");
    require controllers("search.php");
}else {
    $headData = partialsHead("404Head.php");
    $bodyData = partialsBody("404Body.php");
    require pages("404.view.php");
}

?>