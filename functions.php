<?php
/**
 * Fonction pour ajouter les Font Awesome à WordPress
 */

function add_font_awesome()
{
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'font-awesome', get_template_directory_uri().'youropotionalfolder/font-awesome/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'add_font_awesome' );

register_nav_menus( array(
        'Top' => 'Navigation principale',
    ) );
 ?>

<?php add_theme_support( 'post-thumbnails' ); ?>
