<?php 

// სტილების შემოტანა
function add_theme_styles() {
    
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style( 'football_style', get_template_directory_uri() . '/assets/css/style.css');
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  

}
// სკრიპტების შემოტანა
function add_theme_scripts(){
    // wp_deregister_script('jquery');
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/app.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array( 'jquery' ) );

}


function add_theme_custom_logo(){
  add_theme_support( 'custom-logo', array(
    'height'      => 47,
    'width'       => 187,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),

    ) 
  );
}



function football_widget_setup() {
  register_sidebar( array( 
    'name' => 'sidebar',
    'id' => 'sidebar-1',
    'description' => 'test sidebar',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
    ) );
  }
  
  add_action( 'widgets_init', 'football_widget_setup' );



// მენიუს გამოტანა
function add_menu(){

  register_nav_menu('top_menu','header_menu');
  register_nav_menu('footer_menu','social_links_menu');
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
add_action( 'after_setup_theme', 'add_theme_custom_logo' );



// სიახლეში მთავარი სურათის დამატება
add_theme_support('post-thumbnails');



// ვორდპრესის ჰედერის წაშლის გამოძახება
add_action('get_header', 'remove_admin_login_header');

