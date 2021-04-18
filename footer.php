<?php
	/**
	 * The template for displaying the footer
	 *
	 * Contains the closing of the #content div and all content after
	 *
	 * @package UnderStrap
	 */
	
	// Exit if accessed directly.
	defined( 'ABSPATH' ) || exit;
	
	$container = get_theme_mod( 'understrap_container_type' );
	?>
<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<?php
	$explore_title = get_field ('explore_title', 'option');
	$contact_title = get_field ('contact_title', 'option');
	$email = get_field ('email', 'option');
	$phone = get_field ('phone', 'option');
	$storyteller_text = get_field ('storyteller_text', 'option');
	$storyteller_text2 = get_field ('storyteller_text2', 'option');
	$footer_text = get_field ('footer_text', 'option');
	$secondary_color = get_field ('secondary_color', 'option');
	
	?>
<div class="wrapper" id="wrapper-footer">
	<div class="container wrapper-container">
		<div class="top-row">
			<div class="left-col">
				<div class="explore-title">
					<?php if ($explore_title):?>
					<?php echo ($explore_title);?>
					<?php endif;?>
				</div>
				<div class="footer-menu">
					<nav class="nav-container">
						<?php
							wp_nav_menu(
								array(
									'theme_location'  => 'primary',
									'container_class' => '',
									'container_id'    => 'footer-menu',
									'menu_class'      => '',
									'fallback_cb'     => '',
									'menu_id'         => 'main-menu',
									'depth'           => 2,
									'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
								)
							);
						?> 
					</nav>
				</div>
				<!-- footer-menu end -->

				
					<div class="contact-title">
						<?php if ($contact_title):?>
						<?php echo ($contact_title);?>
						<?php endif;?>
					</div>

					<div class="contact-wrapper">

					<div class="email-wrapper">
						<div class="email-title">
							<span>EMAIL</span>
						</div>
						<div class="email">
							<?php if ($email):?>
							<?php echo ($email);?>
							<?php endif;?>
						</div>
					</div>
					<div class="phone-wrapper">
						<div class="phone-title">
							<span>PHONE</span>
						</div>
						<div class="phone">
							<?php if ($phone):?>
							<?php echo ($phone);?>
							<?php endif;?>
						</div>
					</div>
				</div>
			</div>

			<div class="right-col">
				<div class="storyteller-text">
					<?php if ($storyteller_text):?>
					<?php echo ($storyteller_text);?>
					<?php endif;?>
				</div>
				<div class="storyteller-text2">
					<?php if ($storyteller_text2):?>
					<?php echo ($storyteller_text2);?>
					<?php endif;?>
				</div>
				<div class="form">
					<?php echo do_shortcode('[contact-form-7 id="150" title="Contact form 1"]'); 
						?>
				</div>
			</div>
		</div>
		
		<div class="bottom-row">
			<div class="footer-text">

				<div class="left-col">
					<?php if ($footer_text):?>
						<?php echo ($footer_text);?>
					<?php endif;?>
				</div>

				<div class="separator">
					 |
				</div>

				<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'secondary',
							'container_class' => '',
							'container_id'    => 'footer-link',
							'menu_class'      => '',
							'fallback_cb'     => '',
							'menu_id'         => 'footer-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
				?>

			</div>
			<div class="social-icons">
				<a href="#" class="button"><i class="fa fa-facebook-official" aria-hidden="true"></i>
				</a>
				<a href="#" class="button"><i class="fa fa-instagram" aria-hidden="true"></i>
				</a>
				<a href="#" class="button"><i class="fa fa-linkedin-square" aria-hidden="true"></i>
				</a>
				<a href="#" class="button"><i class="fa fa-twitter-square" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</div>
	<!-- container end -->
</div>
<!-- wrapper end -->
</div><!-- #page we need this extra closing tag here -->
<?php wp_footer(); ?>
</body>
</html>