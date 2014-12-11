<?php
/*
Template Name: Contactpage
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

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<div class="Content-text">

					<div class="u-gridRow">					
						<div class="adress u-gridCol4">
							<div class="adress-info">
								<p>zneb</p>
								<p>Kalshoven 8</p>
								<p>4825AM BReda</p>
								<p>Email: info@zneb.nl</p>
								<p>Tel: 076-5879355</p>
							</div>
	
						</div>					
						<div class="adress-map u-gridCol8">
							<div id="map_canvas"></div>
						</div>

					</div> <!-- /gridRow -->

					<div class="hr-style super-margin">
						<hr>
					</div>
					<div class="u-gridRow">						
						<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
						<?php the_content(); ?>
					
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>

				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

