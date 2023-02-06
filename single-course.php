


<?php get_header();


/* *
single templete for displaying single course  */

?>
 

<article class="course" >

	<?php

if ( have_posts() ) {

	while ( have_posts() ) {
		the_post(); 


		get_template_part( "template-parts/content/content-single", "course" );

		
	}
}
	?>

</article>




<?php get_footer();
?>