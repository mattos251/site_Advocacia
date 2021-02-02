<?php
    
    add_theme_support( 'custom-background' );
    add_theme_support( 'custom-logo', array(
        'height'      => 200,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description'),
    ));

    #link do CSS
    wp_enqueue_style( 'style', get_stylesheet_uri() );  
?>
