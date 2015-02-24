<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>

	<?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    $image = $image[0]; ?>
    <?php else :
    $image = get_bloginfo( 'stylesheet_directory') . '/img/img-contraexpertise.jpg'; ?>
    <?php endif; ?>   
	    <div class="banner-melle"><!-- niet absolute maar relative -->
        <div class="navigationwrap" > <!-- absolute  top 0 width 100% height 200px-->
            <?php include_once('nav.php'); ?>
        </div>
        <div class="imagewrap">
            <img class="header-image-block"  src="<?php echo $image; ?>" />
            <div class="pattern"> <!-- abs 100% / 100% -->
                   
            </div> 
            <div class="overlayuberwrap" style=""><!-- absolute -->
                <div class="" style="position: relative; height: 100%">
                    <div class="overlaywrap bannerinhoud">
                        <h2><?php the_title(); ?></h2>
                        <hr />
                        <span class="bannerparagraph">
                             <?php echo get_post_meta($post->ID, 'banner_titel', true); ?> 
                        </span> 
                        <a class="scroll-to-bottom-gray" href="#bottom"><img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/v.svg"/></a>
                    </div>

                 </div>
            </div> 
        </div>
      
       
    </div>
	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div id="map_canvas"></div>
			<div class="Content-entry">
				<div class="Content-text">

					<div class="u-gridRow">					
						<div class="adress u-gridCol4">
							<div class="adress-info">
								<h3>Contactgegevens</h3>
								<p>ZNEB</p>
								<p>Kalshoven 8</p>
								<p>4825AM Breda</p>
								<p>Email: info@zneb.nl</p>
								<p>Tel: 076-5879355</p>
							</div>
	
						</div>	
						<div class="u-gridCol8">
								<p class="contact-page-p">
									<h3>Heeft u vragen?</h3>
								Neem dan hieronder contact met ons op. </p>
								<?php the_content(); ?>
							
								<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

						</div>				

					</div> <!-- /gridRow -->

				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

