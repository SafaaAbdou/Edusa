 
<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 * edusa 1.0
 */
?>


<div class="comments" id="comments">

	<?php if ( comments_open() ) : ?>
		<h3 class="comments-title">
			<?php
					comments_number();
					
			?>
		</h3>

		<ul class="edu-comments-list">
			<?php
			wp_list_comments( array(

				"max_depth"   =>  3,
				'style'       => 'ul',
				'avatar_size' => 64,
                'per_page' => 100,
				"type "    => "comment",
                
			) );
			?>
		</ul><!-- .comment-list -->

	<?php endif; // have_comments() ?>

	<ul class="edu-comment-form">
    
	<?php if (comments_open()) {

      comment_form(array(
		 
	       "title_reply"           =>  "Leave a Comment",
	       "comment_notes_before"  =>"",
	       "label_submit"          =>"Post",
	
     ));
	} else {

		echo __("Comments are Closed !");
	}?>
	</ul>

     </div><!-- #comments -->

 </div>