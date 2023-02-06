  
  
  

                  <div class="blog-post-item">
               <div class="post-media"><img src="<?php the_post_thumbnail_url()?>" alt="post-image"></div> 
               <div class="post-content">
                 <h3><a href="<?php the_permalink();?>"><?php the_title()?></a></h3>
                  <div class="post-body"> <span><?php the_date();?> / </span> 
                    <span><?php comments_number(); ?></span></div>
                   <div class="blog-excerpt">
                   <?php the_excerpt()?>
                 </div>
                   <a class="read-more" href="<?php the_permalink();?>"> Read More&rarrap; </a> 
                  </div>


                </div>



                  
