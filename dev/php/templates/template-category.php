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

    <div class="banner" style="background-image: url('<?php echo $image; ?>')">
            <div class="upperbase">
            <div class="pattern">
                <div class="bannerinhoud u-gridContainer">
                    <h2><?php the_title(); ?></h2>
                    <hr />
                    <p class="bannerparagraph">
                        <?php echo get_post_meta($post->ID, 'paragraph', true); ?> 
                    </p>
                </div>
            </div>
            </div>
    </div>


	<div class="u-gridContainer">
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
