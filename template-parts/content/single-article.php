
 <?php 

$all_categories= get_the_category();

?>
   <div class="post-head">
   <?php the_post_thumbnail();?>
    
    <h1 class="artilce-title"><?php the_title();?> </h1>
    </div>
    
    <div class="article-content">


   <ol class="breadcrumb-container">

        <li> <a href="<?php echo get_home_url(); ?>">Home <span>/</span></a></li>
        <li> <a href="<?php echo esc_url(get_category_link($all_categories[0] ->term_id)) ?>">
        <?php echo esc_html($all_categories[0]->name) ?><span> /</span></a></li>
        <li class="active"> <?php echo the_title()?></li>
    </ol>

         <h4><span>Published At : </span><?php the_date();?></h4>
         <p>
         <?php the_content(); ?> </p>

         

         <?php comments_template();?>
    




         <div class="related-posts">

            <h3 class="related-head">Related Posts</h3>
            
            <div class="posts-items">

              
            <?php
            
                $rel_posts = array(
                "posts_per_page"      => 3,
                "orderby"             =>"rand",
                "category__in"        => wp_get_post_categories(get_queried_object_id()),
                "post__not_in"        => array(get_queried_object_id()) , //exclude this post
                
    

            );

            $query = new WP_Query($rel_posts); //display latest posts for this category 
            if($query ->have_posts()){

            while($query ->have_posts()){

                    $query->the_post();  ?>
                
                <div class="post-item">
                    <?php the_post_thumbnail();?>
                    <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                    
                        <?php  the_excerpt();?>
                    
                    
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

            



    </div>
       
      