<?php

require "../private/core/init.php";

$controller = $_GET['page_name'] ?? "home";
$controller = strtoLower($controller);

if(file_exists("../app/controllers/".$controller . ".php"))
{
    require "../app/controllers/".$controller . ".php";
}else{
    echo "controller not found";
}
    


debug($controller);