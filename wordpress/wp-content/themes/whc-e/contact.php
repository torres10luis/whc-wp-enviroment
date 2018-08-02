<?php
/**
 * The template for displaying all single posts 
 * 
 * Template Name: Contact Page 
 * 
 */

get_header();
?>
    
    <div class="col-md-12 text-uppercase text-center">
        <h4>Hello, Welcome to the Contact Page</h4> <hr>   
        <p>Please Feel free to follow us to stay up to date with the most recent news!</p> <hr>
    </div>

        <div class="col-md-12 d-flex justify-content-around text-center">

        <?php
		while ( have_posts() ) :
			the_post();
			
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
        </div>
     


<div class="col-md-12 d-flex justify-content-center">
       <?php get_sidebar(); ?>
    </div>
<?php
get_footer();