<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php
        wp_head();
    ?>
    <?php
        $title = get_the_title();
        if($title == ''){
            $title = 'Home';
        }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!--icons font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" href="https://cursos.dankicode.com/app/Views/public/favicon.ico" type="image/x-icon" /><!--incluir link-->
    <link href="<?php echo get_theme_root_uri(); ?>/danki/style.css" rel="stylesheet">
</head>
<body>
    <section class="topo">
        <div class="center">
            <header>
                <div class="logo"><a href="<?php echo '/wordpress'?>">
                    <img src="<?php echo get_theme_root_uri(); ?>/danki/img/logo.png"/></a>
                </div>
            </header>
            <ul class="menu-desktop">
                <li><a href="/wordpress/">HOME</a></li>
                <li><a href="/wordpress/sobre">SOBRE</a></li>
                <li><a href="/wordpress/contato">CONTATO</a></li>
            </ul><!--menu-desktop-->
            <div class="menu-mobile">
                <i class="fas fa-align-right"></i>
                <ul>
                    <li><a href="/wordpress/">HOME</a></li>
                    <li><a href="/wordpress/sobre">SOBRE</a></li>
                    <li><a href="/wordpress/contato">CONTATO</a></li>
                </ul>
            </div><!--menu-mobile-->
