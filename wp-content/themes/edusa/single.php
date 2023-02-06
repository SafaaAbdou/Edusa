<?php get_header();


/* *
single templete for displaying single post  */

?>

    
<article class="post" >
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post(); 


            get_template_part( "template-parts/content/single", "article" );

			
		}
	}
    ?>
</article>

   


<?php get_footer();
?>