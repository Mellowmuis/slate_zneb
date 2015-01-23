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
                    <a href="/expertise/">Expertise</a>
                </div>
                <div class="smartlink">
                    <a href="/contact/">Contact</a>
                </div>
            </div>
        </div>
    </div>


	<?php if (have_posts()) : ?>

		<h2>Search Results</h2>
		<nav>
			<div><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		<nav>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?>>
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<span><?php the_time('l, F jS, Y') ?></span>
				<p><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<nav>
			<div><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</nav>

	<?php else : ?>

		<div class="u-gridContainer">
			<h2>Geen resultaten gevonden.</h2>
			<?php get_search_form(); ?><br/>
		</div>

	<?php endif; ?>


<?php get_footer(); ?>