

<div class="course-head">
   <div class="course-text">
    
    <h1 class="course-title"><?php the_title();?> </h1>
    <p><?php echo get_post_meta(get_the_ID(),"short_description_",true);?></p>
    <h5>Created By : <span><?php echo get_post_meta(get_the_ID(),"course-author",true);?></span></h5>
            
         <h5>Last Updated : <span><?php the_date();?> </span></h5>
         
    </div>
    <div class="course-vid">

    <img src="<?php the_post_thumbnail_url()?>" alt="course-image">
    
    <h5>Price : <span> <?php echo get_post_meta(get_the_ID(),"price",true);?></span> $</h5>

    <a href="<?php echo get_post_meta(get_the_ID(), "course-source", true) ?>" target="_blank">Get it</a>
    
    </div>
    </div>
    
    <div class="course-content">

         <h3>Description</h3>

         <?php the_content(); ?> 
    </div>


         

         <div class="related-courses">

            <h3 class="related-head">Related Courses</h3>
            
            <div class="rel-courses">

              
            <?php

            // fetch taxonomy terms for current course 
            
               $courses_terms = get_the_terms(get_the_ID(), 'course-category');
                 			
			// set up the query arguments 
			$args = array (
                    "posts_per_page"      => 3,
				'post_type' => 'course',
                    "post__not_in"        => array(get_the_ID()) ,
				'tax_query' => array(
					array(
						'taxonomy' => 'course-category',
						'field'    => 'slug',
						'terms'    => esc_html($courses_terms[0]->name), //taxnomy term name 
					),
				),
			);
           
			
	

            $query = new WP_Query($args); //display latest courses for this category 

            if($query ->have_posts()){

            while($query ->have_posts()){

                    $query->the_post();  ?>
                
                <div class="rel-course">
                    <?php the_post_thumbnail();?>
                    <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                    
                    <p><?php echo get_post_meta(get_the_ID(),"short_description_",true);?></p>
                    
                    
                    </div>
                    
         
 
          <?php
                       
            } //end while loop 
            

            }//end if condition 
            else{
                
               
		get_template_part( "template-parts/content/content", "none" );


              
            }
            wp_reset_postdata();  // rest posts loop query
          

            ?>
                  
      
      </div>
         </div>

        

            
     
