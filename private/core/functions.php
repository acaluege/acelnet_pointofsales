<?php

function debug($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function views_path($view)
{
    if(file_exists("../private/view/$view.view.php")){
        return "../private/view/$view.view.php";
    }else{
        echo "view '$view' not found";
    }      
}