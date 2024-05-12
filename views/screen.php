<?php

if(isset($_SERVER["PATH_INFO"])) $requestData = $_SERVER["PATH_INFO"];
else $requestData = $_SERVER["REQUEST_URI"]; 

if($requestData === "/") {
    checkIfUsernameSet();
    require pages("home.view.php");
}
else if($requestData === "/myQuestions"){
    if($currentUser) {
        checkIfUsernameSet();
        require controllers("myQuestionsController.php");
    }else redirect("login");
}
else if($requestData === "/progress"){
    if($currentUser){
        checkIfUsernameSet();
        require controllers("progressController.php");
    }else redirect ("login");
}
else if($requestData === "/profile"){
    if($currentUser){
        require controllers("profileController.php");
    }else redirect ("login");
}
else if($requestData === "/study"){
    checkIfUsernameSet();
    require controllers("studyController.php");
}
else if($requestData === "/questions"){
    checkIfUsernameSet();
    require controllers("questionsController.php");
}
else if($requestData === "/contact"){
    checkIfUsernameSet();
    require controllers("contactController.php");
}
else if($requestData === "/register"){
    require controllers("registerController.php");
}
else if($requestData === "/login"){
    require controllers("loginController.php");
}
else if($requestData === "/search"){
    checkIfUsernameSet();
    require controllers("searchController.php");
}
else 
    require pages("404.view.php");
