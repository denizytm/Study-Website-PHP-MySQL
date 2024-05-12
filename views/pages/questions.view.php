<?php

$headData = partialsHead("questionsHead.php");
$bodyData = partialsBody("questionsBody.php");

$searchData = "";

$questionsData = [
    [
        "id" =>  1,
        "image" => "./views/assets/person.png",
        "title" => "How to center a div?",
        "username" => "Mekaratas",
        "text" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis ut cupiditate, quae sint neque placeat.",
        "tags" => ["#html","#css","#javascript","#bootstrap"],
        "views" => 5,
        "answers" => 2,
        "minutesSincePosted" => 53    
    ],
    [
        "id" => 2,
        "image" => "./views/assets/person.png",
        "title" => "How to fill in between two lines in python?",
        "username" => "MehmetJiyan13",
        "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta rem iusto minima eos velit, quasi sapiente quam provident voluptatum! Deleniti?",
        "tags" => ["#python"],
        "views" => 2,
        "answers" => 0,
        "minutesSincePosted" => 12    
    ]
];

require globalPartials("head.php");
require globalPartials("body.php");