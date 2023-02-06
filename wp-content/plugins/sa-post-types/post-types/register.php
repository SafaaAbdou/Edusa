<?php


// register post types with its label
function sa_register_posts(){

    $labels = array(

        "name"                  =>__("Courses" ,SADOMAIN),
        "singular_name"         =>__("Course",SADOMAIN),
        "featured_image"        =>__("Course Image",SADOMAIN),
        "set_featured_image"    =>__("Set Course Image"),
        "remove_featured_image" =>__("Remove Course Image",SADOMAIN),
        "use_featured_image"    =>__("Use Course Image",SADOMAIN),
        "archives"              => __("Courses Directory",SADOMAIN),
        "add_new"               =>__("Add New Course",SADOMAIN),
        "add_new_item"          =>__("Add New Course",SADOMAIN),

    );

    $args = array(

        "labels"            =>  $labels ,
        "public"            =>  true ,
        "taxonomies "       => array("course-categories"),
        "has_archive"       =>true,
        "show_ui "          => true,
        'rewrite'           => array('slug' => 'course'),
        "show_in_rest "     => true,
        "menu_icon"         =>"dashicons-welcome-learn-more",
        "supports "         => array('title', 'editor', 'author', 'thumbnail', 'custom-fields', 'excerpt', 'comments' ),
        
    );

    //register our post types

    register_post_type("course", $args);

}