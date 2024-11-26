<?php
// function debug
function debug($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
//function redirect path
function views_path($view)
{
    if(file_exists("../private/views/$view.view.php")){
        return "../private/views/$view.view.php";
    }else{
        echo "views '$view' not found";
    }      
}
//function uppercase
function esc($str) 
{
    return htmlspecialchars($str);
}