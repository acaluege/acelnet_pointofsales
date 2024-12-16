<?php
//roteamento - buscar as funções
require "../app/core/config.php";
require "../app/core/functions.php";
//1º se <page_name> estiver presente na URL atribui o seu valor ao $controller, caso contrário, $controller receberá o valor "home".
$controller = $_GET['pg'] ?? "home";
$controller = strtoLower($controller);

//2º se o ficheiro existir dentro da pasta controller
if(file_exists("../app/controllers/".$controller . ".php"))
{
    //pega e atribui ao controller
    require "../app/controllers/".$controller . ".php";
}else{
    echo "Não existe controlador";
}
