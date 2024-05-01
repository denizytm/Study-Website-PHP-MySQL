

<?php


if($_SERVER["REQUEST_URI"] === "/") {
    require "./views/pages/home.php";
}else if($_SERVER["REQUEST_URI"] === "/study"){
    require "./views/pages/study.php";
}else if($_SERVER["REQUEST_URI"] === "/questions"){
    require "./views/pages/questions.php";
}else if($_SERVER["REQUEST_URI"] === "/contact"){
    require "./views/pages/contact.php";
}else if($_SERVER["REQUEST_URI"] === "/register"){
    require "./views/pages/register.php";
}else if($_SERVER["REQUEST_URI"] === "/login"){
    require "./views/pages/login.php";
}else {
    require "./views/pages/404.php";
}

?>

