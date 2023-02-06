<?php
/*
search results template
*/
?>
<?php
get_header(); ?>



<div class="search">

<div class="search-head">
	  <h1>Search Results for : <?php echo get_search_query();?></h1>
	  </div>

<article class="results" >
	<?php
   
   if ( have_posts()) {

		while ( have_posts() ) {

			the_post();
    
    
          get_template_part( "template-parts/content/content", "search" );
        }
      }//end if 
      else{
         ?>
        <div class="no-content" style=" position: relative;
        width: 100%;
        text-align: center;
        display: flex;
        flex-flow: column;
        border: 1px solid #4e4e4e;
        border-radius: 15px;
        left:100%;
        padding:35px;
        ">
  
    
    <h4 style="position: relative;
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        line-height: 24px;
        text-align: center;
        color: var(--main-color);
        padding: 5px;
        top:20px;
        bottom: 30px;
        text-align: center;"
        
        >No Results Found For : <?php echo get_search_query();?> </h4>
    
    
    
    </div>
    
<?php
    }
      
	
	
    ?>
</article>

   <?php the_posts_pagination() ?>


</div>
  </div>

      


<?php get_footer();