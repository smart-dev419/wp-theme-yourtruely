<?php
/**
 * Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Your_Truely
 * @since Your Truely 1.0
 */

get_header(); ?>

		<div id="single-container">

			<?php
			/*
			 * Run the loop to output the post.
			 * If you want to overload this in a child theme then include a file
			 * called loop-single.php and that will be used instead.
			 */
			get_template_part( 'loop', 'single' );
			?>

		</div><!-- #single-container -->


<?php get_footer(); ?>
