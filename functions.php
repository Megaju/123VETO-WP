<?php add_theme_support( 'post-thumbnails' ); ?>


<<<<<<< HEAD
=======
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


 ?>

>>>>>>> f6177a12c57d2ae232ad253f41aa7f1b2c5288d3
