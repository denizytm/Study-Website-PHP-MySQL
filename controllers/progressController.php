<?php 

$myProfile = false;
$isAvailable = true;

if(array_key_exists("QUERY_STRING",$_SERVER)){
    
    parse_str($_SERVER["QUERY_STRING"], $parameters);

    $username = $parameters["username"];

    global $isAvailable;

    if($isAvailable) 
        $isAvailable =true;
    else $isAvailable = false;

}else 
    {
        global $myProfile;
        $myProfile = true;
    }
    
if($isAvailable){
    $studiesData = [
        [   
            "image" => publicImage("study.png"),
            "title" => "Let's get started!",
            "text" => "Start your journey with any language",
            "isDone" => true
        ],
        [
            "image" => publicImage("study.png"),
            "title" => "Making some marks",
            "text" => "Finish 3 languages.",
            "isDone" => true
        ],
        [
            "image" => publicImage("study.png"),
            "title" => "Getting into OOP",
            "text" => "Finish a lanugage based on object oriented programming.",
            "isDone" => false
        ]
    ];
    $questionsData = [
        [
            "image" => publicImage("solve.png"),
            "title" => "Just a hobby.",
            "text" => "Answer 5 people's questions.",
            "isDone" => true
        ],
        [
            "image" => publicImage("solve.png"),
            "title" => "A savior.",
            "text" => "Answer 30 people's questions.",
            "isDone" => false
        ],
        [
            "image" => publicImage("solve.png"),
            "title" => "Part time job, maybe ?",
            "text" => "Answer 15 people's questions.",
            "isDone" => false
        ],
        [
            "image" => publicImage("solve.png"),
            "title" => "Curious..",
            "text" => "Post 5 questions.",
            "isDone" => true
        ],
    ];
    $generalDatas = [
        [
            "image" => publicImage("library.png"),
            "title" => "Warming up...",
            "text" => "Get level 5.",
            "isDone" => true
        ],
        [
            "image" => publicImage("library.png"),
            "title" => "Getting serious...",
            "text" => "Get level 20.",
            "isDone" => true
        ],
        [
            "image" => publicImage("library.png"),
            "title" => "Ready for a job...",
            "text" => "Get level 50.",
            "isDone" => false
        ],
        [
            "image" => publicImage("library.png"),
            "title" => "Popular guy...",
            "text" => "Get 150 views.",
            "isDone" => false
        ],
    ];

    require pages("progress.view.php");

} else redirect("/404");

    



