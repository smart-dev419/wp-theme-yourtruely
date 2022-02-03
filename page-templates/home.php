<?php
/**
 * Template Name: Home
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div id="home_page" class="page_wrapper">
	
	<?php $featured_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full'); ?>
	<section class="page-header" style="background-image:url(<?=$featured_img[0];?>)" data-speed="3" data-type="background">
		<div class="heading_contents">
			<?php  
			$logo = get_field('logo', $post->ID);
			$tagline = get_field('heading_tagline', $post->ID);
			$head_action = get_field('heading_call_to_action', $post->ID);
			?>
			<figure class="head_logo">
				<img src="<?=$logo['sizes']['medium']?>" alt="logo">
			</figure>
			<h6><?=$tagline?></h6>
			<a href="<?=$head_action[0]['action_link']?>" class="head_action"><?=$head_action[0]['action_label']?></a>
		</div>
	</section>

	<section id="home-main">
		<div class="wrapper">
			<figure class="content_logo">
				<?php $content_logo = get_field('content_logo', $post->ID); ?>
				<img src="<?=$content_logo['sizes']['thumbnail']?>" alt="content logo">
			</figure>

			<ul class="contact_infos">
				<?php $contact_infos = get_field('contact_information', 'options'); ?>
				<li class="address">
					<span>address: &nbsp; </span>
					<address><?=$contact_infos[0]['address']?></address>
				</li>
				<li class="phone">
					<span>phone: &nbsp; </span>
					<a href="tel:<?=$contact_infos[0]['phone']?>"><?=$contact_infos[0]['phone']?></a>
				</li>
				<li class="hours">
					<span>hours: &nbsp; </span>
					<time><?=$contact_infos[0]['hours']?></time>
				</li>
			</ul>

			<div class="content_action">
				<?php  $content_action = get_field('content_action', $post->ID); ?>
				<a href="<?=$content_action[0]['action_link']?>">
					<img src="<?=$content_action[0]['action_image']['url']?>" alt="content action">
				</a>
			</div>

			<div class="details">
				<?php the_content(); ?>
			</div>

			<div class="short_about">
				<p><?php the_field('short_about', $post->ID); ?></p>
			</div>

			<div class="instagram_section">
				<?php $instagram_info = get_field('instagram_information', $post->ID); ?>
				<h3><?=$instagram_info[0]['title']?></h3>
				<div class="instagram_wrapper">
					<?php 
					$instance = array(
						'title'   => $instagram_info[0]['title'],	
						'username' => $instagram_info[0]['username'],						
						'number'   => $instagram_info[0]['number_of_photos'],	
						'size'   => 'small',	
						'target'   => $instagram_info[0]['target'],	
						'link' => ''
						);
					echo instagram_widget($instance);
					?>
				</div>
			</div>

			<div class="newest">
				<h3><?php the_field('news_title', $post->ID); ?></h3>
				<ul class="blog_list">
				<?php 
				$args = array(
					'posts_per_page'   => 3,	
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
		</div>
	</section>

</div>

<?php endwhile; ?>		

<?php get_footer(); ?>