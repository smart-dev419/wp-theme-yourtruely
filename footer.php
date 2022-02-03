<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Your_Truely
 * @since Your Truely 1.0
 */
?>

	</main><!-- #main -->

	<footer id="site-footer" role="contentinfo">

		<div id="footer_wrapper">
			<?php 
			$menu_attr = array(
				'container_id'    => 'footer-menu',
				'container_class'    => 'menu-wrapper',
				'theme_location'  => 'footer',
				'menu_class'      => 'menu'
				);
			wp_nav_menu( $menu_attr );
			?>

			<div id="branding_footer">
				<?php $footer_logo = get_field('footer_logo', 'options'); ?>
				<a href="<?=home_url()?>">
					<img src="<?=$footer_logo['sizes']['thumbnail']?>" alt="footer logo">
				</a>
			</div>

			<?php $socials = get_field('social_links', 'options'); ?>
			<ul class="social_list">
				<li>
					<a class="icon_facebook" target="_blank" href="<?=$socials[0]['facebook_link']?>">facebook</a>
				</li>
				<li>
					<a class="icon_twitter" target="_blank" href="<?=$socials[0]['twitter_link']?>">twitter</a>
				</li>				
				<li>
					<a class="icon_instagram" target="_blank" href="<?=$socials[0]['instagram_link']?>">instagram</a>
				</li>
				<li>
					<a class="icon_linkedin" target="_blank" href="<?=$socials[0]['linkedin_link']?>">linkedin</a>
				</li>
			</ul>

		</div>

		<div class="other_elements">
			<input type="hidden" value="<?php bloginfo('template_directory');?>" id="theme_url"/>
			<input type="hidden" value="<?=home_url();?>" id="site_url"/>
		</div>
	</footer><!-- #footer -->

</div><!-- #wrapper -->

<?php
	/*
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

</body>
</html>
