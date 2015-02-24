<?php
/*
Template Name: Category
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

                    <!--
                    <a class="scroll-to-bottom" href="#bottom"><img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/v.svg"/></a>
-->
	<div class="u-gridContainer">
        <div class="banner-small-screen">
            <h2><?php the_title(); ?></h2>
            <hr />
            <p class="bannerparagraph">
                <?php echo get_post_meta($post->ID, 'paragraph', true); ?> 
            </p>
        </div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="Content homepage" id="post-<?php the_ID(); ?>">
				<p>
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</p>
			</article>
		<?php endwhile; endif; ?>
	</div>


<?php get_footer(); ?>
