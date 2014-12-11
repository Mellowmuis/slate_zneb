<?php
/*
Template Name: Category
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
