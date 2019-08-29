<?php

/* ---------------------------------------------------------------------------
 * White Label
 * --------------------------------------------------------------------------- */
define( 'WHITE_LABEL', true );


/* ---------------------------------------------------------------------------
 * Enqueue Style
 * --------------------------------------------------------------------------- */
add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style', 101 );
function enqueue_parent_theme_style() {
	wp_enqueue_style( 'mfn-parent-style', get_template_directory_uri() .'/style.css' );
	wp_enqueue_style( 'mfn-child-style', get_stylesheet_directory_uri() .'/style.css' );
}

?>