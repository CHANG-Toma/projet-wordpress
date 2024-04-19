<?php

function esgi_enqueue_assests() {
    wp_enqueue_style( 'main', get_stylesheet_uri() );

}

add_action( 'wp_enqueue_scripts', 'esgi_enqueue_assests' );