<?php get_header();
/* *
archive templete for displaying courses  */

?>

<div class="courses">

<div class="courses-head">
	  <h1><?php wp_title()?></h1>
	  </div>

<article class="course-items" >

	<?php

  
	
  $query = new WP_Query(array( 'post_type'=> 'course',


)); 
  
  if($query ->have_posts()& is_post_type_archive("course") ){
  
  while($query ->have_posts()){
  
      $query->the_post(); 
      
  
  
        get_template_part( "template-parts/content/content-archive", "course" );
      }
    }
  
  
    ?>
</article>


</div>



<?php include(get_template_directory() . "../contact.php");?>



  


  
<?php get_footer();
?>

