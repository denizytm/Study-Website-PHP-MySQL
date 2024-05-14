<?php

require "./core/Functions/functions.php";

require "./core/Database/database.php";

require "./core/Examples/examples.php";

$currentUser;

if(isset($_COOKIE['login-data'])) {
    $currentUser = getUserByID($_COOKIE['login-data']);
}else $currentUser = false;

/* dd($currentUser);  */

require "./views/screen.php";
