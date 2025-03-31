<?php 
function my_theme_enqueue_styles() {
    // Enqueue the local Tailwind CSS file
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/style.css'); // If this is your custom Tailwind file


    // Enqueue the theme's main style.css (this file includes Tailwind)
    wp_enqueue_style('my-theme-style', get_stylesheet_uri());

    // Enqueue additional CSS (carousel.css)
    wp_enqueue_style('carousel-style', get_template_directory_uri() . '/carousel.css');
    wp_enqueue_style( 'flickity-css', 'https://unpkg.com/flickity@2.2.2/dist/flickity.min.css' );

    // Enqueue JavaScript files
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/script.js', array(), false, true);
    wp_enqueue_script('customa-js', get_template_directory_uri() . '/carousel.js', array('flickity-js'), false, true);
    wp_enqueue_script( 'flickity-js', 'https://unpkg.com/flickity@2.2.2/dist/flickity.pkgd.min.js', array(), null, true );
  

   
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
?>
