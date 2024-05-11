
<?php

$studiesData = [
    [
        "image" => "./views/assets/html.png",
        "title" => "HTML",
        "text" => "Hypertext Markup Language is the standard text markup language used to create web pages.",
        "comingSoon" => false
    ],
    [
        "image" => "./views/assets/css.png",
        "title" => "CSS",
        "text" => "Cascading Style Sheets is a markup language that offers extra possibilities in the field of text and formatting in addition to HTML.",
        "comingSoon" => false
    ],
    [
        "image" => "./views/assets/javascript.jpg",
        "title" => "JavaScript",
        "text" => "JavaScript is a programming language that, along with HTML and CSS, is one of the core technologies of the World Wide Web.",
        "comingSoon" => false
    ],
    [
        "image" => "./views/assets/c.png",
        "title" => "C",
        "text" => "C programming language is in the mid-level language category and very flexible compared to high-level languages.",
        "comingSoon" => false
    ],
    [
        "image" => "./views/assets/cpp.png",
        "title" => "CPP",
        "text" => "It is a widely used, general-purpose programming language that includes C and is multi-paradigm.",
        "comingSoon" => false
    ],
    [
        "image" => "./views/assets/python.png",
        "title" => "Python",
        "text" => "Python is an object-oriented, interpretive, unitary and interactive high-level programming language.",
        "comingSoon" => false
    ],
    [
        "image" => "./views/assets/java.png",
        "title" => "Java",
        "text" => "Java is an open source, object-oriented, platform independent, highly efficient, multifunctional, high-level, interpreted and compiled language.",
        "comingSoon" => true
    ],
    [
        "image" => "./views/assets/php.png",
        "title" => "PHP",
        "text" => "PHP is a server-side, widely used, general-purpose scripting and programming language that can be embedded into HTML.",
        "comingSoon" => true
    ],
];

if(array_key_exists("QUERY_STRING",$_SERVER)){
    
    parse_str($_SERVER["QUERY_STRING"], $parameters);

    $studyTitle = $parameters["title"];

    $page = $parameters["page"];

    $isAvailable = false;

    foreach ($studiesData as $studyData) {
        if (strcasecmp($studyData["title"], $parameters["title"]) === 0 && !$studyData["comingSoon"]) {
            $isAvailable = true;
            break;
        }
    }

    if($isAvailable) 
        require pages("studyData.view.php");
    else 
    redirect("/404");

}else
    require pages("study.view.php");
