<?php get_header() 
/** template for displaying pages  */

?>

<?php 
if(is_page("about-us")){



    get_template_part( "template-parts/content/content", "about" );

}

?>


<?php get_footer() ?>