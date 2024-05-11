<?php

if(isset($_SERVER["PATH_INFO"])) $requestData = $_SERVER["PATH_INFO"];
else $requestData = $_SERVER["REQUEST_URI"]; 

if($requestData === "/") 
    require pages("home.view.php");
else if($requestData === "/myQuestions")
    require controllers("myQuestionsController.php");
else if($requestData === "/progress")
    require controllers("progressController.php");
else if($requestData === "/profile")
    require controllers("profileController.php");
else if($requestData === "/study")
    require controllers("studyController.php");
else if($requestData === "/questions")
    require controllers("questionsController.php");
else if($requestData === "/contact")
    require controllers("contactController.php");
else if($requestData === "/register")
    require controllers("registerController.php");
else if($requestData === "/login")
    require controllers("loginController.php");
else if($requestData === "/search")
    require controllers("searchController.php");
else 
    require pages("404.view.php");
