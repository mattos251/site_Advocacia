<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php 
        if(is_home() || is_front_page()){
            bloginfo('name'); 
        }elseif(is_single()) {

        }elseif(is_page()){

        }
    ?></title>
    <meta name="Description" content="<?php bloginfo("description")?>">
    <meta name="keywords" content="advocacia, advogado, processos"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Charm:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="home">
        <div class="TopFaixa">         
            <div class="LogoMarca">
                <?php the_custom_logo(); ?>
            </div>
        
            <nav class="MenuSup">
                <a href="#">HOME</a>
                <div class="Barra"></div>
                <a href="#">CONTATO</a>
                <a href="#">SOBRE</a>
            </nav>  

            <div class="Telefone"></div>

            <div class="BotaoMobile">
                <img src="<?php echo $template_directory;?>http://localhost/wp-content/uploads/2021/02/BotaoMobile.png" alt="Menu para mobile" title="Menu mobile">
            </div>
        </div>  
        
        <div class="MidFaixaVerde">
            <div class="MidFaixaAmarelo"></div>
        </div>
        <div class="PaginaInicial">
            <div class="LogoBalanca">
                <img src="<?php echo $template_directory;?>http://localhost/wp-content/uploads/2021/02/justice-2747368_640-1.png" alt="Menu " title="Menu ">
            </div> 

            <div class="AreaPrincipal">
                <p> <h1>Francisco Chagas Oliveira</h1></p>
                <p><h1>Advogado</h1></p>
                <p><h1>OAB-SP:43.9472</h1></p>
            </div>
        </div>

    </div>

    <div class="Artigos">

    </div>

    <div class="Palestras">

    </div>
    
    