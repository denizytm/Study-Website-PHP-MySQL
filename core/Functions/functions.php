<?php

// ADDRESS

function assets($address){
    return "./views/assets/".$address;
}

function publicImage($imageName){
    return "./views/assets/public/".$imageName;
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
        SELECT userID, username, firstName, lastName, email, userImage, profileViews, totalAnswers, totalPost, levelProgress, nextLevelBound, level, trueExample, falseExample
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

function getExtras($userData,$experience){
    return $experience - ($userData['nextLevelBound'] - $userData['levelProgress']);
}

function levelUp($username,$extra){

    $userData = getUserByUsername($username);

    query("
        UPDATE users
        SET level = :level, nextLevelBound =:nextLevelBound, levelProgress =:extra
        WHERE username = :username
    ",[
        "level" => $userData['level'] + 1,
        "nextLevelBound" => $userData['nextLevelBound'] * 1.1,
        "extra" => $extra,
        "username" => $userData['username']
    ]);
}   

function gainExperience($experience,$username){

    $userData = getUserByUsername($username);

    if($userData['levelProgress'] + $experience >= $userData['nextLevelBound']){
        $extra = getExtras($userData,$experience);
        levelUp($username,$extra);
    } 
    else query("
        UPDATE users
        SET levelProgress = :levelProgress
        WHERE username = :username
    ",[
        "levelProgress" => $userData['levelProgress'] + $experience,
        "username" => $userData['username']
    ]);
}

function updateUserImage(){
    global $currentUser;
    $file_tmp = $_FILES['imageFile']['tmp_name'];
    $target_directory = "./views/assets/users";
    $file_name = $_FILES['imageFile']['name'];

    if (move_uploaded_file($file_tmp, "$target_directory/$file_name")) {
        changeUserData("userImage","$target_directory/$file_name",$currentUser['userID']);
        return [];
    }

    return [
        "image" => "There was a problem on uploading the image."
    ];

}

function seeUserProfile($userData){
    query("
        UPDATE users
        SET profileViews = :profileViews
        WHERE username = :username
    ",[
        "profileViews" => $userData['profileViews'] + 1,
        "username" => $userData['username']
    ]);
}

// STUDY

function getStudies(){
    $data = query("SELECT * FROM studies")->fetchAll();

    return $data;
}

function getStudyContentByPage($studyID,$page){

    $studyContentPageData = query("
        SELECT * FROM study_content
        WHERE studyID = :studyID AND page = :page
    ",[
        "studyID" => $studyID,
        "page" => $page
    ])->fetch();

    return $studyContentPageData;
}

function getStudyPageTitles($studyID){
    $studyPageTitles = query("
        SELECT * FROM study_content
        WHERE studyID = :studyID
    ",[
        "studyID" => $studyID
    ])->fetchAll();
    
    $index = 0;

    $returnData = [];

    foreach($studyPageTitles as $studyPageTitle){
        $returnData[$index] = $studyPageTitle['pageTitle'];
        $index++;
    }

    return $returnData;
}

function getStudyByTitle($title){
    return query("SELECT * FROM studies WHERE title = :title",["title"=>$title])->fetch();
}

function getStudyProgress($userID){
    $studyProgress = query("SELECT html, css, javascript, c, cpp, python, java, php FROM study_progress WHERE userID =:userID",[
        "userID" => $userID
    ])->fetch();
    return $studyProgress;
}

function createStudyProgress($userID){

    query("
        INSERT INTO study_progress
        (userID,html,css,javascript,c,cpp,python,java,php,total)
        VALUES(:userID,:html,:css,:javascript,:c,:cpp,:python,:java,:php,:total)
    ",[
        "userID" => $userID,
        "html" => "",
        "css" => "",
        "javascript" => "",
        "c" => "",
        "cpp" => "",
        "python" => "",
        "java" => "",
        "php" => "",
        "total" => 50
    ]);
    
    return true;
}

function editStudyProgress($userID,$title,$page){

    $studyProgress = getStudyProgress($userID);

    if($studyProgress){
        $datas = explode('-',$studyProgress[$title]);

        if(!$datas[0]){
            query("
                UPDATE study_progress
                SET $title = :newData
                WHERE userID = :userID
            ",[
                "newData" => $page,
                "userID" => $userID
            ]);
            return true;
        }

        $isDoneBefore = false;

        foreach($datas as $data) if($data == $page) $isDoneBefore = true;

        if(!$isDoneBefore){

            $newData = $studyProgress[$title]."-".$page;

            query("
            UPDATE study_progress
            SET $title = :newData
            WHERE userID = :userID
        ",[
            "newData" => $newData,
            "userID" => $userID
        ]);
        return true;
        }else return false;

    }
    return false;
}

// LESSON

function getLessons() {
    $data = query("SELECT * FROM lessons ORDER BY date DESC");

    $returnData = $data->fetchAll();
    if(!empty($returnData)) return $returnData;

    return false;
}

function getSearchedLessons($searchedData,$page) {
    $amount = 5;
    $offset = ($page-1) * $amount;

    $data = query("SELECT * FROM lessons WHERE name LIKE '%$searchedData%' OR language LIKE '%$searchedData%' OR promotion LIKE '%$searchedData%' OR tags LIKE '%$searchedData%' ORDER BY date DESC")->fetchAll();
    $count = count($data);
    $totalPage = ceil($count / $amount);

    if($page <= 0 || $page > $totalPage) return false;

    $data2 = query("SELECT * FROM lessons WHERE name LIKE '%$searchedData%' OR language LIKE '%$searchedData%' OR promotion LIKE '%$searchedData%' OR tags LIKE '%$searchedData%' ORDER BY date DESC LIMIT $amount OFFSET $offset");

    $returnData = $data2->fetchAll();
    if(!empty($returnData)) return $returnData;

    return false;
}

function getSearchedLessons2($searchedData) {

    $data2 = query("SELECT * FROM lessons WHERE name LIKE '%$searchedData%' OR language LIKE '%$searchedData%' OR promotion LIKE '%$searchedData%' OR tags LIKE '%$searchedData%' ORDER BY date DESC");

    $returnData = $data2->fetchAll();
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

// QUESTIONS 

function getQuestions() {
    $data = query("SELECT * FROM questions ORDER BY date DESC LIMIT 10");

    $returnData = $data->fetchAll();
    if(!empty($returnData)) return $returnData;

    return false;
}

function getQuestions2($searchedData = "") {

    $data2 = query("SELECT * FROM questions WHERE username LIKE '%$searchedData%' OR title LIKE '%$searchedData%' OR content LIKE '%$searchedData%' OR tags LIKE '%$searchedData%' ORDER BY date DESC");

    $returnData = $data2->fetchAll();
    if(!empty($returnData)) return $returnData;

    return false;
}

function getQuestionsByPublisher($byPublisher){
    $returnData = query("
        SELECT * FROM questions WHERE username LIKE :byPublisher
    ",[
        "byPublisher" => "%$byPublisher%"
    ])->fetchAll();
        
    return $returnData;
}

function getQuestionsbyPage($page,$searchedData = "") {
    
    $amount = 5;
    $offset = ($page-1) * $amount;

    $data = query("SELECT * FROM questions WHERE username LIKE '%$searchedData%' OR title LIKE '%$searchedData%' OR content LIKE '%$searchedData%' OR tags LIKE '%$searchedData%' ORDER BY date DESC")->fetchAll();

    $count = count($data);
    $totalPage = ceil($count / $amount);

    if($page <= 0 || $page > $totalPage) return false;


    $data2 = query("SELECT * FROM questions WHERE username LIKE '%$searchedData%' OR title LIKE '%$searchedData%' OR content LIKE '%$searchedData%' OR tags LIKE '%$searchedData%' ORDER BY date DESC LIMIT $amount OFFSET $offset");

    $returnData = $data2->fetchAll();
    if(!empty($returnData)) return $returnData;

    return false;
}

function getQuestionByID($questionID){
    $questionData = query("SELECT * FROM questions WHERE questionID = :questionID",[
        "questionID" => $questionID
    ])->fetch();

    if(!empty($questionData)) return $questionData;

    return false;
}

function getQuestionsByUsername($username){
    $questionData = query("SELECT * FROM questions WHERE username = :username",[
        "username" => $username
    ])->fetchAll();

    if(count($questionData)) return $questionData;

    return false;
}

function postQuestion($username,$title,$content,$tags,$userImage,$postImage){

    query("
        INSERT INTO questions
        (username,title,content,tags,userImage,postImage)
        VALUES(:username,:title,:content,:tags,:userImage,:postImage)
    ",[
        "username" => $username,
        "title" => $title,
        "content" => $content,
        "tags" => $tags,
        "userImage" => $userImage,
        "postImage" => $postImage
    ]);

    $postUserData = getUserByUsername($username);

    gainExperience(20,$username);

    query("
        UPDATE users
        SET totalPost = :totalPost
        WHERE username = :username
    ",[
        "totalPost" => $postUserData['totalPost'] + 1,
        "username" => $username
    ]);

    return true;
} 

function closeQuestion($questionID){
    query("
        UPDATE questions
        SET isOpen = 0
        WHERE questionID = :questionID
    ",[
        "questionID" => $questionID
    ]);
}

// ANSWERS

function getAnswersByQuestionID($questionID){
    $data = query("SELECT * FROM answers WHERE questionID = :questionID ",[
        "questionID" => $questionID
    ])->fetchAll();
    return $data;
}

function submitAnswer($userImage,$username,$answer,$totalAnswers,$questionID){

    query("
        INSERT INTO answers
        (userImage,username,text,questionID)
        VALUES (:userImage,:username,:text,:questionID)
    ",[
        "userImage" => $userImage,
        "username" => $username,
        "text" => $answer,
        "questionID" => $questionID        
    ]);
    
    gainExperience(10,$username);

    query("
        UPDATE users
        SET totalAnswers = :totalAnswers
        WHERE username = :username
    ",[
        "totalAnswers" => $totalAnswers + 1,
        "username" => $username
    ]);

    $questionData = getQuestionByID($questionID);

    query("
        UPDATE questions
        SET answers = :answers
        WHERE questionID = :questionID
    ",[
        "answers" => $questionData['answers'] + 1,
        "questionID" => $questionID
    ]);

}

// EXAMPLES

function getExamplesForLanguage($studyID){
    $questions = query("
        SELECT * FROM study_example WHERE studyID = :id
    ",[
        "id" => $studyID
    ])->fetchAll();

    return $questions;
}

function getExampleByIdandPage($studyID,$page){
    $exampleData = query("
        SELECT * FROM study_example WHERE studyID = :id AND page = :page
    ",[
        "id" => $studyID,
        "page" => $page
    ])->fetch();

    return $exampleData;
}

function getExampleProgress($userID,$test){

    $exampleProgressData = query("SELECT html, css, javascript, c, cpp, python, java, php, total FROM example_progress WHERE userID =:userID AND test =:test ",[
        "userID" => $userID,
        "test" => $test
    ])->fetch();

    return $exampleProgressData;
}

function createExampleProgress($userID){

    $arrayData = [1,2,3];

    foreach($arrayData as $test) {
        query("
        INSERT INTO example_progress
        (userID,test,html,css,javascript,c,cpp,python,java,php,total)
        VALUES(:userID,:test,:html,:css,:javascript,:c,:cpp,:python,:java,:php,:total)
        ",[
            "userID" => $userID,
            "test" => $test,
            "html" => "",
            "css" => "",
            "javascript" => "",
            "c" => "",
            "cpp" => "",
            "python" => "",
            "java" => "",
            "php" => "",
            "total" => 60
        ]);
    };
    
}

function editExampleProgress($userID,$test,$title,$page){

    $exampleProgress = getExampleProgress($userID,$test);

    if($exampleProgress){
        $datas = explode('-',$exampleProgress[$title]);

        if(!$datas[0]){
            query("
            UPDATE example_progress
            SET $title = :newData
            WHERE userID = :userID AND test = :test
            ",[
                "newData" => $page,
                "userID" => $userID,
                "test" => $test,
            ]);
            return true;
        }

        $isDoneBefore = false;

        foreach($datas as $data) if($data == $page) $isDoneBefore = true;

        if(!$isDoneBefore){
            $newData = $exampleProgress[$title]."-".$page;

            query("
            UPDATE example_progress
            SET $title = :newData
            WHERE userID = :userID AND test = :test
            ",[
                "newData" => $newData,
                "userID" => $userID,
                "test" => $test,
            ]);
            return true;
        }else return false;
    }
    return false;
}

function checkExampleDoneBefore($userID,$title,$test,$page){
    $exampleData = getExampleProgress($userID,$test);

    $doneExamples = explode("-",$exampleData[$title]);

    if($doneExamples[0]){
        foreach($doneExamples as $doneExample){
            if($doneExample == $page) return true;
        }
    }else return false;
    return false;
}

function checkExamplesDone($userID,$title,$test){
    $isExamplesDone = query("
        SELECT $title FROM example_progress
        WHERE test = :test AND userID = :userID
    ",[
        "test" => $test,
        "userID" => $userID
    ])->fetch();

    $examples = explode("-",$isExamplesDone[$title]);

    if(count($examples) === 10) return true;

    return false;
}

function increaseTrueExamples($userID){

    $userData = getUserByID($userID);

    query("
        UPDATE users
        SET trueExample = :trueExample
        WHERE userID = :userID
    ",[
        "trueExample" => $userData['trueExample'] + 1,
        "userID" => $userID
    ]);
}

function increaseFalseExamples($userID){

    $userData = getUserByID($userID);

    query("
        UPDATE users
        SET falseExample = :falseExample
        WHERE userID = :userID
    ",[
        "falseExample" => $userData['falseExample'] + 1,
        "userID" => $userID
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
    return preg_match('/[*<>|&^~#]/', $str);
}

function validatePassword($password){
    if(strlen($password) <6 || strlen($password) > 25) return false;
    return true;
}

function checkIfUsernameSet(){
    global $currentUser;
    if($currentUser && !$currentUser['username']) redirect("profile");
}
