<?php 

if(array_key_exists("QUERY_STRING",$_SERVER)){
    
    parse_str($_SERVER["QUERY_STRING"], $parameters);

    $questionId = $parameters["id"];

    $isAvailable = true;

    if($isAvailable) {
        
        $questionsData = [
            [
                "image" => "./views/assets/person.png",
                "username" => "Mekaratas",
                "answer" => "Lorem ipsum dolor
                 sit amet consectetur adipisicing elit. Dignissimos provident qui
                  modi delectus excepturi sed? Lorem ipsum dolor sit amet, consectetur adipisicing
                   elit. Aliquam odio quasi laborum nobis deleniti nam. Lorem, ipsum dolor sit
                    amet consectetur adipisicing elit. Laboriosam, fugit! Consequatur id fugit 
                    alias tempora sed harum, modi nihil ullam molestias nemo nesciunt, 
                    officiis dignissimos?"
            ]
        ];

        require pages("question.view.php");
    }
    else 
    redirect("/404");

}else
    require pages("questions.view.php"); 