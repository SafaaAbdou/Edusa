 <?php 




function  sa_register_tax(){


     $labels = array(

         "name"                  => __("Course Categories", SADOMAIN),
         "singular_name"         => __("Course Category", SADOMAIN),
         "all_items"             =>__("All Categories",SADOMAIN),
         "add_new_item"          =>__("Add New Category",SADOMAIN),
         "edit_item"             =>__("Edit Category",SADOMAIN),
         "view_item"             =>__("View Category",SADOMAIN),
         "update_item"           =>__("Update Category",SADOMAIN),

     );

     $args = array(

         "labels"                => $labels,
         "public"                => true,
         "show_in_rest "         =>true,
         "show_admin_column"     =>true ,
         "has_archive"       =>true,
         "show_ui"               =>true,
         "show_in_menu"          =>true,
         "show_in_quick_edit"    =>true ,
         "hierarchical"          => true,

     );

     $post_types = array("course"); //associalted our taxonomies with our custom post types
 
     register_taxonomy("course-category",$post_types , $args);  //register out taxonomies
}