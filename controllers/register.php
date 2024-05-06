<?php

if(isset($_COOKIE["login-data"])) redirect("/");

if($_SERVER["REQUEST_METHOD"] === "GET") {
    $errors = [];
    require pages("register.view.php");
}else if($_SERVER["REQUEST_METHOD"] === "POST") {
 
    $errors = isRegisterValid($_POST);

    $firstName = $_POST["name"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(!count($errors)){
        $emailInputData = $_POST['email'];
        $userData = getUserWithEmail($emailInputData);
        if(!validateEmail($emailInputData)) {
            $errors = [
                "email" => "Please enter a valid email"
            ];
            require pages("register.view.php");
        }
        if(!$userData) {
            query("INSERT INTO users (firstName,lastName,email,password) VALUES(:firstName,:lastName,:email,:password)",[
                "firstName" => $firstName,
                "lastName" => $lastName,
                "email" => $email,
                "password" => $password
            ]);
            redirect("/login");
        } else echo "user already exists";
    }else {
        require pages("register.view.php");
    }
}else redirect("/404");
