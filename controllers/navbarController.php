<?php 

if(isset($_SERVER["PATH_INFO"])) $requestData = $_SERVER["PATH_INFO"];
else $requestData = $_SERVER["REQUEST_URI"]; 

require components("global/navbar.php");