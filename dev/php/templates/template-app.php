<?php
/*
Template Name: App page
*/
?>

<?php get_header(); ?>
	
	<?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    $image = $image[0]; ?>
    <?php else :
    $image = get_bloginfo( 'stylesheet_directory') . 'img/img-contraexpertise.jpg'; ?>
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
                <div class="u-gridContainer" style="position: relative; height: 100%">
                    <div class="overlaywrap bannerinhoud">
                        <h2><?php the_title(); ?></h2>
                        <hr />
                        <span class="bannerparagraph">
                            <?php echo get_post_meta($post->ID, 'paragraph', true); ?>  
                        </span>
                        <a class="scroll-to-bottom-gray" href="#bottom"><img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/v.svg"/></a>
                    </div>

                 </div>
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
					<br /><br/>
					Voor Apple iPhone gebruikers: scan de QR-code of surf naar de website. <br /><br />

					<a href="#">Download de app hier</a>



					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/qr_code.png" />
				</article>
			</div>
		</div>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>


