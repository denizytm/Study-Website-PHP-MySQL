<?php

$myProfile = false;
$isAvailable = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $errors = [];

    if (array_key_exists("imageFile", $_FILES)) {

        $file_tmp = $_FILES['imageFile']['tmp_name'];

        $target_directory = "./views/assets/users";

        $file_name = $_FILES['imageFile']['name'];

        if (move_uploaded_file($file_tmp, "$target_directory/$file_name")) {
            dd ("success");
            changeUserData("image","$target_directory/$file_name",$currentUser['userID']);
        }

        $currentUser = getUserByID($currentUser['userID']);

        $myProfile = true;
        $isAvailable = true;

        require pages("profile.view.php");
        
    } else {
        $firstNameInput = $_POST["firstName"];
        $lastNameInput = $_POST["lastName"];
        $emailInput = $_POST["email"];
        $usernameInput = $_POST["username"];

        $errors = handleSaveUserData($_POST);

        $myProfile = true;
        $isAvailable = true;

        if (!count($errors)) {

            $errors = handleChangeData($firstNameInput, $lastNameInput, $emailInput, $usernameInput);

            $currentUser = getUserByID($currentUser['userID']);

            require pages("profile.view.php");
        } else require pages("profile.view.php");
    }
} else if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (array_key_exists("QUERY_STRING", $_SERVER)) {

        parse_str($_SERVER["QUERY_STRING"], $parameters);

        $username = $parameters["username"];

        global $isAvailable;

        $isAvailable = true;

        if ($isAvailable)
            $isAvailable = true;
        else $isAvailable = false;
    } else {
        global $myProfile;
        $myProfile = true;
        global $isAvailable;
        $isAvailable = true;
    }

    if ($isAvailable) {
        $errors = [];
        require pages("profile.view.php");
    } else redirect("/404");
} else redirect("/404");
