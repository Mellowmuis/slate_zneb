<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
	
	<div class="banner">
        <div class="pattern">
            <div class="u-gridRow smartlink_wrap">
                <div class="smartlink">
                    <a href="/over-ons/">Over ons</a>
                </div>
                <div class="smartlink">
                    <a href="/expertise/">Expertise</a>
                </div>
                <div class="smartlink">
                    <a href="/contact/">Contact</a>
                </div>
            </div>
        </div>
    </div>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="overonsbanner" id="post-<?php the_ID(); ?>">
			<div class="u-gridContainer">
				<div class="u-gridRow">
					<div class="u-gridCol10">
					<h2>Over ons</h2>
						<div class="homepage">
							<?php the_content(); ?>
						</div>
					</div>
					<div class="u-gridCol2">
						<img class="zneblogo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/zneb.png" />
					</div>
				</div>
			</div>
		</article>
	<?php endwhile; endif; ?>
	<div class="u-gridContainer">
		<h2 class="expertisetitel">Diensten</h2>
		<div class="u-gridRow expertises">
			<div class="u-gridCol4">
				<img class="expertiseimage" src="<?php echo get_stylesheet_directory_uri(); ?>/img/brand.svg" /><br/>
				Brandschade
			</div>
			<div class="u-gridCol4">
				<img class="expertiseimage" src="<?php echo get_stylesheet_directory_uri(); ?>/img/storm.svg" /><br/>
				Storm
			</div>
			<div class="u-gridCol4">
				<img class="expertiseimage" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slot.svg" /><br/>
				Diefstal
			</div>
		</div>
		<div class="u-gridRow expertises">
			<div class="u-gridCol4">
				<img class="expertiseimage" src="<?php echo get_stylesheet_directory_uri(); ?>/img/bedrijf.svg" /><br/>
				Bedrijfschade
			</div>
			<div class="u-gridCol4">
				<img class="expertiseimage" src="<?php echo get_stylesheet_directory_uri(); ?>/img/inboedel.svg" /><br/>
				Inboedel
			</div>
			<div class="u-gridCol4">
				<img class="expertiseimage" src="<?php echo get_stylesheet_directory_uri(); ?>/img/boeken.svg" /><br/>
				Winkelinventarissen
			</div>
		</div>
	</div>


<?php get_footer(); ?>
