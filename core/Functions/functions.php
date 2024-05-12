<?php

// ADDRESS

function assets($address){
    return "./views/assets/".$address;
}

function pages($address){
    return "./views/pages/".$address;
}

function components($address){
    return "./views/components/".$address;
}

function globalPartials($address){
    return "./views/partials/global/".$address;
}

function partialsHead($address){
    return "./views/partials/head/".$address;
}

function partialsBody($address){
    return "./views/partials/body/".$address;
}

function controllers($address){
    return "./controllers/".$address;
}

// CONSOLE LOG

function dd($data){
    echo "<pre>";

    var_dump($data);

    echo "</pre>";
}

// URL

function redirect($address){
    header("location: {$address}");
    exit(); 
}

// DATABASE

function query($query,$params = []){
    global $conn;
    $data = $conn->prepare($query);
    $data->execute($params);
    return $data;
}

// USER

function getUserByID($id) {
    $userData = query("
        SELECT userID, username, firstName, lastName, email, image, level, totalPost, html, css, javascript, c, cpp, python
        FROM users 
        WHERE userID = :userID",[
            "userID" => $id
        ]
    )->fetch();

    if($userData) return $userData;
    return false;
}

function getUserByEmail($email){
    $userData = query("
        SELECT *
        FROM users 
        WHERE email = :email",[
            "email" => $email
        ]
    )->fetch();

    if($userData) return $userData;
    return false;
}

function getUserByUsername($username){
    $userData = query("
        SELECT * FROM users 
        WHERE username = :username",[
            "username" => $username
        ]
    )->fetch();

    if($userData) return $userData;
    return false;
}

function handleSaveUserData($postData){

    $errors = [];

    if(!strlen($postData['firstName'])) $errors['firstName'] = "Please enter your name.";
    if(!strlen($postData['lastName'])) $errors['lastName'] = "Please enter your last name.";
    if(!strlen($postData['email'])) $errors['email'] = "Please enter your email.";
    
    if(hasSpecialCharactersRegex($postData['username'])) $errors['username'] = "Please do not use special characters.";
    if(hasSpecialCharactersRegex($postData['firstName'])) $errors['firstName'] = "Please do not use special characters.";
    if(hasSpecialCharactersRegex($postData['lastName'])) $errors['lastName'] = "Please do not use special characters.";
    if(!validateEmail($postData['email'])) $errors['email'] = "Please enter valid email";
    
    return $errors;
}

function handleChangeData($firstNameInput,$lastNameInput,$emailInput,$usernameInput){

    $errors = [];

    global $currentUser;

    if($firstNameInput !== $currentUser['firstName']) {} changeUserData("firstName",$firstNameInput,$currentUser['userID']);
    if($lastNameInput !== $currentUser['lastName']) changeUserData("lastName",$lastNameInput,$currentUser['userID']);
    if($emailInput !== $currentUser['email']) {
        $result = changeUserData('email',$emailInput,$currentUser['userID']);
        if(!$result) $errors['email'] = "That email has already been taken";
    }
    if($usernameInput !== $currentUser['username']) {
        $result = changeUserData("username",$usernameInput,$currentUser['userID']);
        if(!$result) $errors['username'] = "That username has already been taken";
    }

    return $errors;
}

function changeUserData($column,$value,$id){
    try {
        $data = query("UPDATE users SET $column = :value WHERE userID = :id",[
            "value" => $value,
            "id" => $id
        ]);
        return true;
    }catch(Exception $e) {
        return false;
    }
}

// LESSON

function getLessons() {
    $data = query("SELECT * FROM lessons ORDER BY date DESC");

    $returnData = $data->fetchAll();
    if(!empty($returnData)) return $returnData;

    return false;
}

function getSelectedLessonContent($id) {
    $data = query("SELECT * FROM lesson_content WHERE lessonID = :id",[
        "id" => $id
    ]);

    $returnData = $data->fetchAll();
    if(isset($returnData)) return $returnData;

    return false;
}

function insertLesson($name,$language,$promotion,$tags) {
    query("INSERT INTO lessons (name,language,promotion,tags) VALUES(:name,:language,:promotion,:tags)",[
        "name" => $name,
        "language" => $language,
        "promotion" => $promotion,
        "tags" => $tags
    ]);
}

function insertLessonContent($page,$content,$lessonID) {
    $data = query("INSERT INTO lesson_content (page,content,lessonID) VALUES(:page,:content,:lessonID)",[
        "page" => $page,
        "content" => $content,
        "lessonID" => $lessonID
    ]);
}

// FEEDBACK

function saveFeedback($name,$email,$message) {
    query("INSERT INTO feedbacks (name,email,message) VALUES(:name,:email,:message)",[
        "name" => $name,
        "email" => $email,
        "message" => $message
    ]);
}

// REGISTER ERROR HANDLER

function isRegisterValid($postData) {
    $errors = [];
    if(!strlen($postData["name"])) $errors["name"] = "Please enter your first name";
    if(!strlen($postData["lastName"])) $errors["lastName"] = "Please enter your last name";
    if(!strlen($postData["email"])) $errors["email"] = "Please enter an email";
    if(!strlen($postData["password"])) $errors["password"] = "Please enter a password";
    else if($postData["password"] !== $postData["confirmPassword"]) $errors["confirmPassword"] = "Your password and confirm password are different";
    return $errors;
}

// LOGIN ERROR HANDLER

function isLoginValid($postData){
    $errors = [];
    if(!strlen($postData["email"])) $errors["email"] = "Please enter your email";
    if(!strlen($postData["password"])) $errors["password"] = "Please enter your password";
    return $errors;
}

// AUTHENTICATE FUNCTIONS

function checkPassword($email,$password){
    $data = query("SELECT * FROM users WHERE email = :email AND password = :password",[
        "email" => $email,
        "password" => $password
    ]);
    
    $returnData = $data->fetch();
    if(isset($returnData)) return $returnData;

    return false;
}

function validateEmail($email){
    return preg_match("/^[A-Za-z0-9]+@[A-Za-z]+\.[A-Za-z0-9]{2,6}$/",$email);
}

function hasSpecialCharactersRegex($str) {
    return preg_match('/[*<>|&|^!~#]/', $str);
}

function validatePassword($password){
    if(strlen($password) <6 || strlen($password) > 25) return false;
    return true;
}

function checkIfUsernameSet(){
    global $currentUser;
    if($currentUser && !$currentUser['username']) redirect("profile");
}
