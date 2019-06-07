<?php 

// სტილების შემოტანა
function add_theme_styles() {
 
  wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');


}
// სკრიპტების შემოტანა
function add_theme_scripts(){
    // wp_deregister_script('jquery');

    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array ( 'jquery' ), 1.1, true);

}


// მენიუს გამოტანა
function add_menu(){

  register_nav_menu('top_menu','header_menu');

}




// ვორდპრესის ჰედერის წაშლა
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

// სტილების ფუნქციის გამოძახება
add_action( 'wp_enqueue_scripts', 'add_theme_styles' );

// სკრიპტების ფუნქციის გამოძახება
add_action( 'wp_footer', 'add_theme_scripts' );

// მენიუს შექმნის ფუნქციის გამოძახება
add_action( 'after_setup_theme', 'add_menu' );



// სიახლეში მთავარი სურათის დამატება
add_theme_support('post-thumbnails');



// ვორდპრესის ჰედერის წაშლის გამოძახება
add_action('get_header', 'remove_admin_login_header');

