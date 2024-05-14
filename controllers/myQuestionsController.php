<?php 

$errors = [];

if($_SERVER["REQUEST_METHOD"] === "POST"){

    
    $title = $_POST['title'];
    
    if(hasSpecialCharactersRegex($title)) $errors['title'] = "Please do not use special characters.";
    if(!strlen($title)) $errors['title'] = "Please enter a title.";

    $content = $_POST['content'];

    if(hasSpecialCharactersRegex($content)) $errors['content'] = "Please do not use special characters.";
    if(!strlen($content)) $errors['content'] = "Please enter a content";

    $tags = explode(" ",$_POST["tags"]);

    if(count($tags) > 5) $errors['tags'] = "Please enter less tags.";

    $file_tmp = $_FILES['image']['tmp_name'];
    $target_directory = "./views/assets/posts";
    $file_name = $_FILES['image']['name'];

    
    if(!$errors){
        if (move_uploaded_file($file_tmp, "$target_directory/$file_name")) {
            postQuestion($currentUser['username'],$_POST['title'],$_POST['content'],$_POST['tags'],$currentUser['image'],"$target_directory/$file_name");
        }else 
            postQuestion($currentUser['username'],$_POST['title'],$_POST['content'],$_POST['tags'],$currentUser['image'],"");
    }

    $currentUser = getUserByID($currentUser['userID']);

    $questionsData = getQuestionsByUsername($currentUser['username']);

}else if($_SERVER["REQUEST_METHOD"] === "GET"){
    $questionsData = getQuestionsByUsername($currentUser['username']);
}else redirect("404");

require pages("myQuestions.view.php");