<?php
/**
 * This is your child theme functions file.  In general, most PHP customizations should be placed within this
 * file.  Sometimes, you may have to overwrite a template file.  However, you should consult the theme 
 * documentation and support forums before making a decision.  In most cases, what you want to accomplish
 * can be done from this file alone.  This isn't a foreign practice introduced by parent/child themes.  This is
 * how WordPress works.  By utilizing the functions.php file, you are both future-proofing your site and using
 * a general best practice for coding.
 *
 * All style/design changes should take place within your style.css file, not this one.
 *
 * The functions file can be your best friend or your worst enemy.  Always double-check your code to make
 * sure that you close everything that you open and that it works before uploading it to a live site.
 *
 * @package Adroa
 * @subpackage Functions
 */

/* Adds the child theme setup function to the 'after_setup_theme' hook. */
add_action( 'after_setup_theme', 'adroa_theme_setup', 11 );

/**
 * Setup function.  All child themes should run their setup within this function.  The idea is to add/remove 
 * filters and actions after the parent theme has been set up.  This function provides you that opportunity.
 *
 * @since 0.1.0
 */
function adroa_theme_setup() {

	/* Get the theme prefix ("picturesque"). */
	$prefix = hybrid_get_prefix();

    /* Load some required font styles */
    add_action( 'wp_enqueue_scripts', 'adroa_load_font_styles' );
}

/**
 * Load specific font stylesheets needed by the theme.
 *
 * @since 0.1.0
 */
function adroa_load_font_styles() {

    wp_register_style( 'openSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,400italic' );
    wp_enqueue_style( 'openSans' );

    wp_register_style( 'ptSerif', 'http://fonts.googleapis.com/css?family=PT+Serif' );
    wp_enqueue_style( 'ptSerif' );
}

?>