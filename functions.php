
<?php

// Register custom navigation walker 
require_once('wp-bootstrap-navwalker.php');

//add post thumbnail feature for my theme 
add_theme_support('post-thumbnails');

//add title tag feature for my theme 
add_theme_support( 'title-tag');

//support my theme for custom post type thumbnail
add_post_type_support( 'course', 'thumbnail' );


function add_style(){

    wp_enqueue_style("fontawesome-css", get_template_directory_uri() . "/assets/css/all.min.css",array(),"1.0" , "all");
    wp_enqueue_style("bootstrap-css", get_template_directory_uri() . "/assets/css/bootstrap.min.css",array(),"1.0" , "all");
    wp_enqueue_style( "google-fonts", "https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap","1.0" , "all"); 

    wp_enqueue_style("main-css", get_template_directory_uri() . "/assets/css/main.css" ,array() ,"1.0" , "all");



}


function add_scripts(){
   
    wp_enqueue_script("bootstrap-js ", get_template_directory_uri() . "/assets/js/bootstrap.min.js", array(), false, true);
    wp_enqueue_script("main-js ", get_template_directory_uri() . "/assets/js/main.js", array(), false, true);
}



add_action("wp_enqueue_scripts","add_style");


add_action("wp_enqueue_scripts","add_scripts");

/** add custom menu  */

function nav_menu(){ //register nav menu into theme 
    register_nav_menus(array(

        "main-menu" => "Header Menu" ,
        "footer-menu" => "Footer Menu",
        "mobile-menu" => "Mobile Menu"

    ));



}

function display_nav_menu()//display nav menu 
{

    wp_nav_menu(array(

        "theme-location" => "Header Menu",
        "menu_class"     =>  " navbar-nav ms-auto mb-2 mb-lg-0 " ,
        "container"      =>   false,
        "depth"          => 2    ,
        "Walker"         => new WP_Bootstrap_Navwalker(),
    ));
}
add_action("init","nav_menu");


/** customize excerpt length */

function sa_excerpt_length($words_length){
    return 40;

}

/** excerpt more string */


function sa_excerpt_more($more){
    return "";

}

add_filter("excerpt_length" ,"sa_excerpt_length");


add_filter("excerpt_more" ,"sa_excerpt_more");


//register side Bar

function main_sidebar(){

    register_sidebar(
        array(

            "name" => __("Main SideBar"),
            "id" => "main-sidebar",
            "description" => __("Main SideBar for Edusa Theme"),
            "class" => __("main-sideBar"),


        )
    );
}
add_action("widgets_init","main_sidebar");