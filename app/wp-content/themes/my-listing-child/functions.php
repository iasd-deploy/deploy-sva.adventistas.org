<?php

// Enqueue child theme style.css
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );

    if ( is_rtl() ) {
    	wp_enqueue_style( 'mylisting-rtl', get_template_directory_uri() . '/rtl.css', [], wp_get_theme()->get('Version') );
    }
}, 500 );

// Happy Coding :)
// 
add_action( 'mylisting/submission/done', function( $id ){
   ?> <script type='text/javascript'>window.location.href='https://sva.adventistas.org//obrigado'</script> 
   <?php
}, 999, 1);