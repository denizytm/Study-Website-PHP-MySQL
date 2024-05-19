<?php

$isAvailable = false;
$myProfile = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $errors = [];

    if (array_key_exists("imageFile", $_FILES)) {
        
        $errors = updateUserImage();

        if(!count($errors))
            $currentUser = getUserByID($currentUser['userID']);
            $userData = $currentUser;
            $myProfile = true;

        require pages("profile.view.php");
    } else {
        $firstNameInput = $_POST["firstName"];
        $lastNameInput = $_POST["lastName"];
        $emailInput = $_POST["email"];
        $usernameInput = $_POST["username"];

        $errors = handleSaveUserData($_POST);

        $isAvailable = true;

        if (!count($errors)) {

            $errors = handleChangeData($firstNameInput, $lastNameInput, $emailInput, $usernameInput);

            $currentUser = getUserByID($currentUser['userID']);

            $userData = $currentUser;

            $myProfile = true;

            if($myProfile){
                $htmlProgress = 0;
                $cssProgress = 0;
                $javascriptProgress = 0;
                $cProgress = 0;
                $cppProgress = 0;
                $pythonProgress = 0;
        
                $studies = [
                    $htmlProgress,
                    $cssProgress,
                    $javascriptProgress,
                    $cProgress,
                    $cppProgress,
                    $pythonProgress
                ];
        
                $studiesProgress = getStudyProgress($currentUser['userID']);
        
                $index = 0;
        
                foreach($studiesProgress as $studyProgress) {
                    if($studyProgress){
                        $userProgress = count(explode("-",$studyProgress));
                        $studies[$index] = intval($userProgress / 7 *100);
                    }else $studies[$index] = 0;
                    $index++;
                }
        
            }

            require pages("profile.view.php");
        } else require pages("profile.view.php");
    }
} else if ($_SERVER["REQUEST_METHOD"] === "GET") {

    if (array_key_exists("QUERY_STRING", $_SERVER)) {

        parse_str($_SERVER["QUERY_STRING"], $parameters);

        $username = $parameters["username"];

        $userData = getUserByUsername($username);
        if($currentUser['username'] != $userData['username']){
            seeUserProfile($userData);
            $userData['profileViews'] += 1;
        }

        if($userData){
            $isAvailable = true;
        }else $isAvailable = false;

        $questionsData = getQuestionsByUsername($userData['username']);

        if($currentUser['username'] === $username) $myProfile = true;

    } else {
        $myProfile = true;
        $userData = $currentUser;
        $isAvailable = true;
    }
    
    $htmlProgress = 0;
    $cssProgress = 0;
    $javascriptProgress = 0;
    $cProgress = 0;
    $cppProgress = 0;
    $pythonProgress = 0;

    $studies = [
        $htmlProgress,
        $cssProgress,
        $javascriptProgress,
        $cProgress,
        $cppProgress,
        $pythonProgress
    ];

    if($myProfile){
            $studiesProgress = getStudyProgress($currentUser['userID']);
    }else {
        $studiesProgress = getStudyProgress($userData['userID']);
    }
    $index = 0;

    foreach($studiesProgress as $studyProgress) {
        if($studyProgress){
            $userProgress = count(explode("-",$studyProgress));
            $studies[$index] = intval($userProgress / 7 *100);
        }else $studies[$index] = 0;
        $index++;
    }

    if ($isAvailable) {
        $errors = [];
        require pages("profile.view.php");
    } else redirect("/404");
} else redirect("/404");
