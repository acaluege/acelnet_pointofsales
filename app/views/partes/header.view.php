<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title><?=esc(APP_NAME)?></title> 
    
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
</head>
<body>
    
    <?php 
        //inicia array do controlador de login
        $no_nav[] = "login";
    ?>
    <!--verifica se o controlador login está presente no array $no_nav[]--->
    <?php if(!in_array($controller, $no_nav)):?>
    
        <?php require_once views_path('partes/nav')?>
    
    <!---caso não fecha a navegação-->
    <?php endif;?>
    
    <!--fim do container de estilo alargado-->
    <div class="container-fluid" style="min-width: 350px;">