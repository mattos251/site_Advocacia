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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Charm:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> class="TelaCheia">
    <header>
        <div class="TopFaixa">         
            <div class="LogoMarca">
                <?php the_custom_logo(); ?>
            </div>
        
            <nav class="MenuSup">

                <div class="MenuHome">
                    <a href="#PaginaInicial">HOME</a>
                    <div class="Barra"></div>
                </div>

                <div class="MenuArtigos">
                    <a href="#Artigos">ARTIGOS</a>
                    <div class="Barra"></div>
                </div>

                <div class="MenuPalestras">
                    <a href="#Palestras">PALESTRAS</a>
                    <div class="Barra"></div>
                </div>

                <div class="Telefone">
                    <a href="#FooterInformacoes"><img src="<?php echo $template_directory;?>http://localhost/wp-content/uploads/2021/02/social-networking-icon-2898676.png" alt="telefone logo"></a>
                </div>
            </nav>  

            <div class="BotaoMobile">
                <img src="<?php echo $template_directory;?>http://localhost/wp-content/uploads/2021/02/BotaoMobile.png" alt="Menu para mobile" title="Menu mobile">
            </div>
        </div>  
        
        <div class="MidFaixaVerde">
            <div class="MidFaixaAmarelo"></div>
        </div>
    </header>
    <main>
        <!-- <div class="EspacoSup"></div> -->
        <div id="PaginaInicial">
                <div class="LogoBalanca">
                    <img src="<?php echo $template_directory;?>http://localhost/wp-content/uploads/2021/02/justice-2747368_640-1.png" alt="Menu " title="Menu ">
                </div> 

                <div class="AreaPrincipal">
                    <p><h1>Francisco Chagas Oliveira</h1></p>
                    <p><h1>Advogado</h1></p>
                    <p><h1>OAB-SP:43.9472</h1></p>
                </div>
            </div>  
    </main>
    <div id="Artigos">
        
    </div>

    <div id="Palestras">
        <div class="PalestrasTitulo">
            <h1>PALESTRAS</h1>
        </div>
        <div class="PalestrasVideo">
            <div class="VideoPrincipal">
                <iframe width="720" height="450" src="https://www.youtube.com/embed/yw6i1SAHetc?start=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h2>twenty one pilots - Cancer (My Chemical Romance Cover) [Official Lyric Video]</h2>
            </div>
            <div class="ListaVideos">
                <iframe width="168" height="94" src="https://www.youtube.com/embed/Pmv8aQKO6k0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="168" height="94" src="https://www.youtube.com/embed/gOdBRGvXhkM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="168" height="94" src="https://www.youtube.com/embed/RSAoJJzVXYY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="168" height="94" src="https://www.youtube.com/embed/j_MlBCb9-m8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
            <div class="BotaoProximo">
                <button>PRÓXIMO</button>
            </div>
        </div>
    </div>
    
    