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
    
if($isAvailable)
    require pages("profile.view.php");
else redirect("/404");


