<?php
/**
 * Template Name: News
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div id="news_page" class="page_wrapper">
	
	<?php $featured_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full'); ?>
	<section class="page-header" style="background-image:url(<?=$featured_img[0];?>)" data-speed="3" data-type="background">
		<div class="heading_contents">
			<?php  
			$logo = get_field('logo', $post->ID);
			$tagline = get_field('heading_tagline', $post->ID);
			?>
			<figure class="head_logo">
				<img src="<?=$logo['sizes']['medium']?>" alt="logo">
			</figure>
			<h1><?=$tagline?></h1>
		</div>
	</section>

	<section id="news-main">
		<div class="wrapper">

			<h3>salon news</h3>
			<ul class="blog_list">
			<?php 
			$args = array(
				'posts_per_page'   => 12,	
				'post_type' => 'post',
				'post_status' => 'publish'
				);
			$blog_posts = get_posts( $args );

			foreach ($blog_posts as $post) { 
				setup_postdata($post); 
			?>

			    <li class="blog-item">
					<div class="post_head">
						<h5 class="post_title">
							<a href="<?=get_permalink()?>"><?php the_title(); ?></a>
						</h5>
						<time class="post_date"><?php echo get_the_date('F j'); ?></time>
					</div>

					<div class="post_excerpt">
						<p><?php echo excerpt(50); ?></p>
					</div>
				</li>
				
			<?php
			}		
			wp_reset_postdata();
			
			?>
			</ul>
		</div>
	</section>

</div>

<?php endwhile; ?>		

<?php get_footer(); ?>