<?php
/**
 * Template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Your_Truely
 * @since Your Truely 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="page_wrapper">
	
	<?php $featured_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full'); ?>
	<section class="page-header" style="background-image:url(<?=$featured_img[0];?>)" data-speed="3" data-type="background">
		<div class="heading_contents">
			<?php  $logo = get_field('logo', $post->ID); ?>
			<figure class="head_logo">
				<img src="<?=$logo['sizes']['medium']?>" alt="logo">
			</figure>
			<h1><?php the_title(); ?></h1>
		</div>
	</section>

	<section class="page-main">
		<div class="wrapper">
			<?php the_content(); ?>
		</div>
	</section>

</div>

<?php endwhile; ?>		

<?php get_footer(); ?>
