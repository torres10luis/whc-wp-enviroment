<?php
/**
 * The template for displaying all single posts 
 * 
 * Template Name: MoreInfo
 * 
 */

get_header();
?>
    <div class="col-md-12 text-uppercase text-center">
        <h1>Hello, Welcome to the Contact Page</h1> <hr>   
        <p>Please Feel free to follow us to stay up to date with the most recent news!</p> <hr>    

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

<div class="col-md-4">
       <?php get_sidebar(); ?>
    </div>
<?php
get_footer();