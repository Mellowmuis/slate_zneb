
<div class="">
	<div class="upper-header">

		<div class="logo">
			<div> 
				<img class="logo-for-large" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" />
				<img class="logo-for-small" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo3.png" />
			</div>
		</div>
	</div>            
	<div class="Bot-Nav">
		<div>
			<div class="Nav-toggle u-cf">
				<a class="Navigation-menuToggle" id="js-navCollapse">
					<svg class="Icon Icon--inline" viewBox="0 0 128 128">
						<use xlink:href="#icon-menu2"></use>
					</svg>
				</a>

				<?php include 'includes/navigation.php'; ?>

				<div class="sidenav">
					<div class="sidenav_buttons">
						<a href="https://www.linkedin.com/company/2477887"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linkedin.png" /></a>
						<a href="mailto:info@zneb.nl"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/email.png" /></a>
						<a href="tel:0765879355"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/telefoon.png" /></a>
					</div>
					<?php get_search_form(); ?>
				</div>

				<div class="Mob-contact-ico">
					<a class="Button Button--transparent u-textInverted u-noLine telsvg" href="tel:076-5879355">
						<svg class="Icon Icon--inline" viewBox="0 0 128 128">
							<use xlink:href="#icon-phone"></use>
						</svg>
					</a>

					<a class="Button Button--transparent u-textInverted u-noLine mailsvg" href="mailto:info@zneb.nl">
						<svg class="Icon Icon--inline" viewBox="0 0 128 128">
							<use xlink:href="#icon-envelope"></use>
						</svg>
					</a>
				</div><!-- header-contact -->
			</div>

		</div>
	</div>
</div>

<?php ?>