<?php
//mostrar dados da pagina
function show($data)
{
    echo "<pre>";
    print_r($data); 
    echo "</pre>";
}

//função require para leitura da view
function views_path($view)
{
    if(file_exists("../app/views/$view.view.php")){
        return "../app/views/$view.view.php";
    }else{
        echo  "Visualização '$view' não foi encontrado";
    }
}

//função do esc
function esc($str)
{
    return htmlspecialchars($str);
}