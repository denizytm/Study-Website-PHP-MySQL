<?php 

$errors = [];

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $postData = $_POST['content'];

    if(hasSpecialCharactersRegex($postData)) $errors['content'] = "Please do not use special characters.";

    dd($_FILES);

    if (array_key_exists("image", $_FILES)) {
        $file_tmp = $_FILES['image']['tmp_name'];
        $target_directory = "./views/assets/posts";
        $file_name = $_FILES['image']['name'];

        $errors = [];

        if (move_uploaded_file($file_tmp, "$target_directory/$file_name")) {
            postQuestion($currentUser['username'],$_POST['title'],$_POST['content'],$_POST['tags'],$currentUser['image'],"$target_directory/$file_name");
        }else $errors['image'] = "There was a problem on uploading the image";
    }else postQuestion($currentUser['username'],$_POST['title'],$_POST['content'],$_POST['tags'],$currentUser['image'],"");

}else if($_SERVER["REQUEST_METHOD"] === "GET"){
    $questionsData = getQuestionsByUsername($currentUser['username']);
}else redirect("404");

require pages("myQuestions.view.php");