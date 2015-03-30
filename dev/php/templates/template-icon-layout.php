<?php
/*
Template Name: Icoon layout
*/
?>

<?php get_header(); ?>
<script type="text/javascript">  
 $('.tabgroup > div').hide();
$('.tabgroup > div:first-of-type').show();
$('.tabs a').click(function(e){
  e.preventDefault();
    var $this = $(this),
        tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
        others = $this.closest('li').siblings().children('a'),
        target = $this.attr('href');
    others.removeClass('active');
    $this.addClass('active');
    $(tabgroup).children('div').hide();
    $(target).show();
  
})
</script>
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



	<div class="u-gridContainer contra-tabs">
		<div class="wrapper">
      <?php the_content();
       $image1 = get_field('icoon_1'); 
       $image2 = get_field('icoon_2'); 
       $image3 = get_field('icoon_3');
       $image4 = get_field('icoon_4'); 

       ?>
        <ul class="tabs clearfix" data-tabgroup="first-tab-group"> 
          
          <li><a href="#tab1" class="active"><img class="expertiseimage-cont" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>"/> <br><?php echo get_post_meta($post->ID, 'icoon_naam_1', true); ?></a></li>
          <li><a href="#tab2"><img class="expertiseimage-cont" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>"/><br><?php echo get_post_meta($post->ID, 'icoon_naam_2', true); ?></a></li>
         
          <?php if($image3 != null && $image3['url'] != null) { ?>
          <li><a href="#tab3"><img class="expertiseimage-cont" src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>"/><br><?php echo get_post_meta($post->ID, 'icoon_naam_3', true); ?></a></li>
          <?php } ?>


          <?php if($image4 != null && $image4['url'] != null) { ?>
          <li><a href="#tab4"><img class="expertiseimage-cont" src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt']; ?>"/><br><?php echo get_post_meta($post->ID, 'icoon_naam_4', true); ?></a></li>
          <?php } ?>
        </ul>
        <section id="first-tab-group" class="tabgroup">
          
          <div id="tab1">
            <h3><?php echo get_post_meta($post->ID, 'icoon_naam_1', true); ?></h3>
            <p> <?php echo get_post_meta($post->ID, 'tekst_1', true); ?></p>
          </div>
          <div id="tab2">
            <h3><?php echo get_post_meta($post->ID, 'icoon_naam_2', true); ?></h3>
            <p> <?php echo get_post_meta($post->ID, 'tekst_2', true); ?></p>
          </div>
          <?php 
            $p3 =  get_post_meta($post->ID, 'icoon_naam_3', true);
            $t3 =  get_post_meta($post->ID, 'tekst_3', true); 
            if($p3 != null && $p3 != '') {?>
            <div id="tab3">
              <h3><?php echo get_post_meta($post->ID, 'icoon_naam_3', true); ?></h3>
              <p><?php echo get_post_meta($post->ID, 'tekst_3', true); ?></p>
            </div>
          <?php } ?>
         <?php 
            $p4 =  get_post_meta($post->ID, 'icoon_naam_4', true);
            $t4 =  get_post_meta($post->ID, 'tekst_4', true); 
            if($p4 != null && $p4 != '') {?>
            <div id="tab4">
              <h3><?php echo get_post_meta($post->ID, 'icoon_naam_4', true); ?></h3>
              <p><?php echo get_post_meta($post->ID, 'tekst_4', true); ?></p>
            </div>
          <?php } ?>
         
        </section>
        </div>
        <div class="u-gridCol8" style="margin-bottom:20px;">
          <b>
            <?php echo get_post_meta($post->ID, 'text_onderkant', true); ?>
          </b>
        </div>
	</div>


<?php get_footer(); ?>
