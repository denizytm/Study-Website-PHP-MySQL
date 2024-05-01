<?php

require "../core/database.php";

$userData = $_POST;

foreach($users as $user){
    if($user['email'] === $userData['email']) echo "email already exists";
}
