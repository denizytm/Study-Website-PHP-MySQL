<?php

if(isset($_COOKIE["login-data"])) redirect("/");

if($_SERVER["REQUEST_METHOD"] === "GET") {
    $errors = [];
    require pages("login.view.php");
} else if($_SERVER["REQUEST_METHOD"] === "POST") {

    $errors = isLoginValid($_POST);

    if(count($errors)){
        require pages("login.view.php");
    }else {
        $emailInputData = $_POST['email'];
        $passwordInputdata = $_POST['password'];
        $data = getUserWithEmail($emailInputData);
        
        if(!$data){
            $errors = [
                "email" => "There's no user with that email"
            ];
            require pages("login.view.php");
        }else {
            $checkedData = checkPassword($emailInputData,$passwordInputdata);
            if(!$checkedData) {
                $errors = [
                    "password" => "Invalid password"
                ];
                require pages("login.view.php");
            }else {
                setcookie("login-data",$data["userID"]);
                redirect("/");
            }
        }
    }

}else redirect("/404");

