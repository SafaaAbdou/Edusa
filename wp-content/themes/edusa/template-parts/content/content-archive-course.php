


              <div class="course-item">
             
                  <img src="<?php the_post_thumbnail_url()?>" alt="course-image">

                  <div class="course-data">
                 


                    <img src="<?php echo wp_get_attachment_image_url(get_post_meta(get_the_ID(),"author-image",true))?>" alt="course-author">
                    <span><?php echo get_post_meta(get_the_ID(),"course-author",true);?></span>
                  </div>
   
                 <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                  <div class="course-body"> <span><?php echo get_post_meta(get_the_ID(),"watch-time",true);?>  </span> 
                    <span> . <?php echo get_post_meta(get_the_ID(),"course_lessons",true);?></span></div>
                  
              </div>