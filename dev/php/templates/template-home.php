<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
	
	<?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    $image = $image[0]; ?>
    <?php else :
    $image = get_bloginfo( 'stylesheet_directory') . ''; ?>
    <?php endif; ?>
	
	<div class="banner" style="background-image: url('<?php echo $image; ?>')">
        <div class="pattern">
            <div class="u-gridRow smartlink_wrap">
                <div class="smartlink">
                    <a href="/over-ons/">Over ons</a>
                </div>
                <div class="smartlink">
                    <a href="/expertise/">Diensten</a>
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
					<div class="u-gridCol12">
					<h2>Over ons</h2>
						<div class="homepage">
							<?php the_content(); ?>
						</div>
					</div>

				</div>
			</div>
		</article>
	<?php endwhile; endif; ?>
	<div class="u-gridContainer expertisecontainer">
		<h2 class="expertisetitel">Diensten</h2>
		<div class="u-gridRow expertises">
			<a href="/expertise"><div class="u-gridCol3">
				
				<img class="expertiseimage" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon1.png" />
				<div class="expertiseimagetitel">Expertise</div><br/>
				
			</div></a>
			<a href="/contra-expertise"><div class="u-gridCol3">
				
				<img class="expertiseimage" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon2.png" />
				<div class="expertiseimagetitel">Contra-expertise</div><br/>
				
			</div></a>
			<a href="/mediation-2"><div class="u-gridCol3">
				
				<img class="expertiseimage" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon3.png" />
				<div class="expertiseimagetitel">Mediation</div><br/>
				
			</div></a>
			<a href="/voortaxatie-opstallen"><div class="u-gridCol3">
				
				<img class="expertiseimage" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon4.png" />
				<div class="expertiseimagetitel">Voortaxatie opstal</div><br/>
				
			</div></a>
		</div>
		<div class="u-gridRow expertises">
			<a href="/voortaxatie-inventarissen"> <div class="u-gridCol3">
				
				<img class="expertiseimage" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon5.png" />
				<div class="expertiseimagetitel">Voortaxatie inventaris</div><br/>
				
			</div></a>
			<a href="/bedrijfseconomische-taxaties"><div class="u-gridCol3">
				
				<img class="expertiseimage" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon6.png" />
				<div class="expertiseimagetitel">Bedrijfseconomische taxaties</div><br/>
				
			</div></a>
			<a href="/bouwkundige-vooropnames"><div class="u-gridCol3">
				
				<img class="expertiseimage" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon7.png" />
				<div class="expertiseimagetitel">Bouwkundige vooropname</div><br/>
				
			</div></a>
			<a href="/gebouwtotaal"><div class="u-gridCol3">
				
				<img class="expertiseimage" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon8.png" />
				<div class="expertiseimagetitel">Gebouw totaal</div><br/>
				
			</div></a>
		</div>
	</div>


<?php get_footer(); ?>
