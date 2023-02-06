
<?php get_header();


/* *
archive templete for displaying blog posts  */

?>

<div class="blog">

<div class="blog-head">
	  <h1><?php wp_title()?></h1>
	  </div>

<article class="blog-posts" >
	<?php

	if ( have_posts()) {

		while ( have_posts() ) {

			the_post();

            get_template_part( "template-parts/content/content", "archive" );

			
		} 
	}

	
	
    ?>
</article>

   <?php the_posts_pagination() ?>


</div>
  </div>


  
<?php get_footer();
?>

