<?php
/*
Template Name: Toelichting
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

    </div>

            <!--<a class="scroll-to-bottom" href="#bottom"><img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/v.svg"/></a>-->
    <div class="u-gridContainer"></div>
	<div class="u-gridContainer uitleg">
        <div class="u-gridRow">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  
            <?php the_content(); ?>       
            <?php endwhile; endif; ?>
        </div>

        
        <div class="u-gridRow">
           <!-- <a href="javascript:history.back()">Go Back</a> -->
        </div>

    </div>


<?php get_footer(); ?>
