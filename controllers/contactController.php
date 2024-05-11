<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {

    if(!isset($_COOKIE["login-data"])) {
        $emailData = $_POST['email'];
        $nameData = $_POST['name'];
        $messageData = $_POST['message'];
    
        saveFeedback($nameData,$emailData,$messageData);
    
    } else {
        $cookieData = (int)$_COOKIE["login-data"];
        $xxx = getUserForProfile($cookieData);
    
        $emailData = $xxx["email"];
        $nameData = $xxx["firstName"];
        $messageData = $_POST['message'];
    
        saveFeedback($nameData,$emailData,$messageData);
    }

    redirect("/");

}else require pages("contact.view.php");

