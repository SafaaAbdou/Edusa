<?php get_header(); ?>

<!-- start head section -->

<div class="head-sec">
        <div class="head-content">
            <span>Online Course</span>
            <h2>Build your future <br>career easily and <br> directed with us.</h2>
            <p>Now you can easily deepen your chosen career<br> 
               so that you can get the job you dream of now </p>
            
            <button class="get-start-btn" onclick= "open_courses();">Get Started </button>
        </div>
        <div class="head-image">
            <image class="image" src="<?php bloginfo('template_directory'); ?>/assets/images/img-content.png" alt="head-img">

        </div>
    </div>
    <!-- end head section -->

    <!-- start parteners section -->
    <div class="partners">
        <div class="container">
            <h3>Trusted by more than +100 companies</h3>
        </div>
        <div class="logos">
        <div class="logo-div">
        <image  src="<?php bloginfo('template_directory'); ?>/assets/images/Udemy-Logo.wine 2.svg" alt="udemy-logo">

        </div>
        <div class="logo-div">
        <image  src="<?php bloginfo('template_directory'); ?>/assets/images/Microsoft-Logo.wine 4.svg" alt="microsoft-logo">

        </div>
        <div class="logo-div">
        <image  src="<?php bloginfo('template_directory'); ?>/assets/images/Google-Logo.wine 5.svg" alt="google-logo">

        </div>
        <div class="logo-div">
        <image  src="<?php bloginfo('template_directory'); ?>/assets/images/Facebook-Logo.wine 3.svg" alt="facebook-logo">

        </div>
        </div>

    </div>
    <!-- end parteners section -->

    <!-- start advantages section -->
    <div class="advant">
        <div class="container">
            <h2>How it works?</h2>
            <p>We will help you to realize your dreams by studying <br> 
             with experienced mentors in their fields</p>
        </div>
        <div class="show-advant">
            <div class="advant-div">
                <image src="<?php bloginfo('template_directory'); ?>/assets/images/advant-one.svg" alt="advantage-one"/>
                <h4>Best quality video</h4>
                <p>We provide videos with super HD <br>
                quality so that it makes you more <br>
                comfortable when studying</p>
            </div>
            <div class="advant-div">
                <image src="<?php bloginfo('template_directory'); ?>/assets/images/advant-two.svg" alt="advantage-two"/>
                <h4>Learn with expert</h4>
                <p>We provide videos with super HD <br>
                quality so that it makes you more <br>
                comfortable when studying</p>
            </div>
            <div class="advant-div">
                <image src="<?php bloginfo('template_directory'); ?>/assets/images/advant-three.svg" alt="advantage-three"/>
                <h4>Learn Anywhere </h4>
                <p>We provide videos with super HD <br>
                quality so that it makes you more <br>
                comfortable when studying</p>
            </div>


        </div>
    </div>
    <!-- end advantages section -->

    <!-- start popular courses section -->

    <div class="popular-courses">
    <span>Our Popular</span>
    <div class="pop-div"><h2>Popular Courses</h2>
    <div class="course-arrow">
            
            <a   onclick="get_course(-1)"><i class="fa-solid fa-chevron-left"></i></a>
            <a  class="active" onclick="get_course(1)"><i class="fa-solid fa-chevron-right active"></i></a>
        </div>
        </div>

    <p>Choose the course you want from basic to expert</p>
    

     
     
<article class="pop-items" >

<?php

//display popular courses

$query = new WP_Query(
    array( 
        'post_type'=> 'course',
        "posts_per_page"      => 4,
        'tax_query' => array(
            array(
                'taxonomy' => 'course-category',
                'field'    => 'slug',
                'terms'    => "popular" //taxnomy term name 
            ),
        ),
)); 

if($query ->have_posts() ){

while($query ->have_posts()){

  $query->the_post(); ?>
  


  <div class="pop-item">
             
  <img src="<?php the_post_thumbnail_url()?>" alt="course-image">

  <div class="course-data">
 


    <img src="<?php echo wp_get_attachment_image_url(get_post_meta(get_the_ID(),"author-image",true))?>" alt="course-author">
    <span><?php echo get_post_meta(get_the_ID(),"course-author",true);?></span>
  </div>

 <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
  <div class="course-body"> <span><?php echo get_post_meta(get_the_ID(),"watch-time",true);?>  </span> 
    <span> . <?php echo get_post_meta(get_the_ID(),"course_lessons",true);?></span></div>
  
</div>

<?php
   
  }
}


?>
</article>


    </div>
     <!-- end popular courses section -->

     <!-- start about section -->

     
<div class="about-sec">
       
        <div class="about-image">
            <image class="ab-image" src="<?php bloginfo('template_directory'); ?>/assets/images/about-img.png" alt="about-img">

        </div>
        <div class="about-content">
            <span>ABOUT US</span>
            <h2>Learn anywhere with quality directed learning from the experts mentor</h2>
            <p>Consectetur adipiscing In parturient sapienelementum eurat tellus enim nec lectus ac morbi 
                amet in the Puus 
                 inaliquet vitae aliquam nunc varius adipiscing In worl parturient sapienelementum eurat.</p>
            
            <button class="learn-more-btn" onclick= "open_about();">Explore More </button>
        </div>
       
    </div>
    
     <!-- end about section -->

     <!-- start testimonial section -->
    <div class="testimonials" >
        <div class="container">
            <h2>What student’s say</h2>
            <p>Consectetur adipiscing elit. Porttitor eu fames quis tincidunt dapibus<br>
           interdum scelerisque ultrices sit Orci maecenas integer ve</p>
        </div>
        <div class="show-testimonials">
            <div class="slides fade-in">
            <div class="testimonial-div" >
            <p>“I am very grateful for the class give 
                    because it is very easy to understa 
                    and the quality of the video is very 
                    clear very comfortable to learn”</p>
                    <div class="testimonial-media">
                <image src="<?php bloginfo('template_directory'); ?>/assets/images/test1.svg" alt="testimonial-one"/>
                <div class="testimonial-text"><h4>Antonio Belinco</h4>
                <h6>Web Developper</h6>
                </div>

                </div>
               
            </div>

            <div class="testimonial-div" >
            <p>“I am very grateful for the class give 
                    because it is very easy to understa 
                    and the quality of the video is very 
                    clear very comfortable to learn”</p>
                    <div class="testimonial-media">
                <image src="<?php bloginfo('template_directory'); ?>/assets/images/test2.svg" alt="testimonial-two"/>
                <div class="testimonial-text">
                    <h4>Ferland Mendy</h4>
                <h6>Web Design</h6>
                </div>

                </div>
               
            </div>

            <div class="testimonial-div" >
            <p>“I am very grateful for the class give 
                    because it is very easy to understa 
                    and the quality of the video is very 
                    clear very comfortable to learn”</p>
                    <div class="testimonial-media">
                <image src="<?php bloginfo('template_directory'); ?>/assets/images/test3.svg" alt="testimonial-three"/>
                <div class="testimonial-text"><h4>Lucas Ardelino</h4>
                <h6>UI&UX Design</h6>
                </div>

                </div>
               
            </div>
            </div>
            
            <div class="slides slide-left">
            <div class="testimonial-div">
            <p>“I am very grateful for the class give 
                    because it is very easy to understa 
                    and the quality of the video is very 
                    clear very comfortable to learn”</p>
                    <div class="testimonial-media">
                <image src="<?php bloginfo('template_directory'); ?>/assets/images/Ellipse 31.svg" alt="testimonial-one"/>
                <div class="testimonial-text"><h4>Angelina Sed</h4>
                <h6>Graphic Designer</h6>
                </div>

                </div>
               
            </div>

            <div class="testimonial-div">
            <p>“I am very grateful for the class give 
                    because it is very easy to understa 
                    and the quality of the video is very 
                    clear very comfortable to learn”</p>
                    <div class="testimonial-media">
                <image src="<?php bloginfo('template_directory'); ?>/assets/images/Ellipse 31 (1).svg" alt="testimonial-two"/>
                <div class="testimonial-text">
                    <h4>Henry Aroon</h4>
                <h6>Tech Instructor</h6>
                </div>

                </div>
               
            </div>
            
            <div class="testimonial-div">
            <p>“I am very grateful for the class give 
                    because it is very easy to understa 
                    and the quality of the video is very 
                    clear very comfortable to learn”</p>
                    <div class="testimonial-media">
                <image src="<?php bloginfo('template_directory'); ?>/assets/images/Ellipse 31 (2).svg" alt="testimonial-two"/>
                <div class="testimonial-text">
                    <h4>Marky Ardy</h4>
                <h6>Language Inst</h6>
                </div>

                </div>
               
            </div>
            
            
</div>
            

            <div class="indicators">
            <span class="dot"></span>
            <span class="dot"></span>
            
             
             </div>

            

        </div>
    </div>
    <!-- end testimonial  section -->



    <?php include(get_template_directory() . "../contact.php");?>




<?php get_footer(); ?>


