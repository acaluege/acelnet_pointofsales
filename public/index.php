<?php

require "../private/core/init.php";

$controller = $_GET['pg'] ?? "home";
$controller = strtoLower($controller);
 
if(file_exists("../private/controllers/".$controller . ".php"))
{
    require "../private/controllers/".$controller . ".php";
}else{
    echo "controller not found";
}
    

