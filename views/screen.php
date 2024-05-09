<?php

if(isset($_SERVER["PATH_INFO"])) $requestData = $_SERVER["PATH_INFO"];
else $requestData = $_SERVER["REQUEST_URI"]; 

if($requestData === "/") 
    require pages("home.view.php");
else if($requestData === "/study")
    require controllers("study.php");
else if($requestData === "/questions")
    require pages("questions.view.php");
else if($requestData === "/contact")
    require pages("contact.view.php");
else if($requestData === "/register")
    require controllers("register.php");
else if($requestData === "/login")
    require controllers("login.php");
else if($requestData === "/search")
    require controllers("search.php");
else 
    require pages("404.view.php");
