<?php
/*
Template Name: App page
*/
?>

<?php get_header(); ?>

	<div class="banner contraexpertise">
        <div class="pattern">
        	<div class="bannerinhoud u-gridContainer">
        		<h2><?php the_title(); ?></h2>
        		<hr />
        		<p class="bannerparagraph">
        			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien vive
        			rra, rutrum lacus quis, maximus tellus. Suspendisse sit amet massa nulla. Donec et port
        			a turpis, sed molestie urna. Sed nec mi eu nibh malesuada volutpat. Morbi lacinia mag
        			na velit, in condimentum risus dapibus nec. 
        		</p>
        	</div>
        </div>
    </div>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="Content Content--app" id="post-<?php the_ID(); ?>">
			<div class="u-gridContainer">
				<aside class="u-gridCol4">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/phone.png" width="300" class="App-iphone" />
				</aside>
				<article class="Content-article u-gridCol8" id="post-<?php the_ID(); ?>">
					Bekijk nu ook de informatie van ons bedrijf vanuit de app! De app is beschikbaar in Google Play voor Android apparaten en als webapp voor iOS van Apple telefoons.

					Voor Apple iPhone gebruikers: scan de QR-code of surf naar de website. 

					<a href="#">Download de app hier</a>



					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/qr_code.png" />
				</article>
			</div>
		</div>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>


