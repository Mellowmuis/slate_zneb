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
    	<div class="navigationwrap" > <!-- absolute  top 0 width 100% height 200px-->
            <?php include_once('nav.php'); ?>
        </div>
	    <div class="Slider">

			<?php

				$args = array(
					'post_type' => 'slides',
					'posts_per_page'=>999
				);
				$slides = new WP_Query( $args );
				$num = count($slides);
				$counter = 0;
				if( $slides->have_posts() ) {
					while( $slides->have_posts() ) {
						$slides->the_post();
						$counter++;
						?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
							  $image_url = $image[0];
						?>
						<div class="banner-melle">
							<img class="header-image-block" src="<?php echo $image_url; ?>" >
							<div class="pattern">
					            
					        </div>
					        
						        <div class="overlaywrap bannerinhoud">
			                        <h2><?php the_title(); ?></h2>
			                        <hr />
			                        <span class="bannerparagraph">
			                            <?php the_content(); ?>  
			                        </span>
			                        <a class="scroll-to-bottom-gray" href="#bottom"><img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/v.svg"/></a>
			                    </div>
			                
						</div>
						<?php
					}
				}
			?>		
		</div>
	
	<!--    <div class="banner-melle2">
			<img class="header-image-block" src="<?php echo $image_url; ?>" >
			<div class="pattern">
	            
	        </div>
	        <div class="bannerinhoud u-gridContainer">
                    <h2><?php the_title(); ?></h2>
                    <hr />
                    
                        <?php the_content(); ?>
                    
                </div>
		</div>-->

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="overonsbanner" id="post-<?php the_ID(); ?>">
			<div class="u-gridContainer">
				<div class="u-gridRow">
					<div class="u-gridCol12">
						<div class="homepage">
							<p>ZNEB Expertise en Taxatie B.V. zorgt voor inzicht en overzicht van uw situatie en staat u bij in het beheersen en beperken van niet calculeerbare risico’s.
							Vanuit de overtuiging dat anders zien anders beleven is gaan onze experts middels een open dialoog met respect en vertrouwen voor u aan het werk.
						</p>
						</div>
					</div>

				</div>
			</div>
		</article>
	<?php endwhile; endif; ?>
	<div class="u-gridContainer expertisecontainer">
		<h3>Diensten</h3>
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
