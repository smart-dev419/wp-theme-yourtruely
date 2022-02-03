<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	
<section class="post-header">
	<?php  $logo = get_field('logo', 'options'); ?>
	<figure class="head_logo">
		<img src="<?=get_template_directory_uri()?>/images/logo-healine.png" alt="logo">
	</figure>

	<h1><?php the_title(); ?></h1>

	<?php if ( has_post_thumbnail() ) { ?>
	<figure class="post-featured">
		<?php the_post_thumbnail( 'full' ); ?>
	</figure>
	<?php } ?>
</section>

<section class="post-main">
	<div class="post-content">
		<?php the_content(); ?>
	</div>
	<div class="post-sidebar">
		<?php get_sidebar('post'); ?>
	</div>
</section>


<?php endwhile; ?>	
