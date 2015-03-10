<?php
/*
Template Name: Mediation
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
        <ul class="tabs clearfix" data-tabgroup="first-tab-group">
          
          <li><a href="#tab1" class="active"><img class="expertiseimage-con" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon9.png" /><br>WANNEER?</a></li>
          <li><a href="#tab2"><img class="expertiseimage-con" src="<?php echo get_stylesheet_directory_uri(); ?>/img/why.png" /><br>WAAROM?</a></li>
          <li><a href="#tab3"><img class="expertiseimage-con" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon10.png" /><br>VOOR WIE?</a></li>
          <li><a href="#tab4"><img class="expertiseimage-con" src="<?php echo get_stylesheet_directory_uri(); ?>/img/how.png" /><br>HOE?</a></li>
          
        </ul>
        <section id="first-tab-group" class="tabgroup">
          
          <div id="tab1">
            <h3>WANNEER?</h3>
            <p>
                Indien er in een conflictsituatie geen wederzijds begrip bestaat tussen de partijen.
                Vaak is miscommunicatie de basis van het probleem.
                 Door de autonome en neutrale visie van de derde deskundigekan er veel duidelijk worden voor partijen.
            </p>
          </div>
          <div id="tab2">
            <h3>WAAROM?</h3>
            <p> Mediation is een vorm van conflictbemiddeling door een derde deskundige. De derde deskundige bemiddelt tussen de partijen en helpt de partijen inzicht te geven in elkaars standpunten. 
                De stap naar de rechter is vaak ingrijpend en vijandig. Mediation kan u veel ergernis, energie, tijd en geld besparen. De deskundige derde gaat samen met partijen op zoek naar een aanvaardbare en passende oplossing voor beide partijen. 
            </p>
          </div>
          <div id="tab3">
            <h3>VOOR WIE?</h3>
            <p>Voor alle partijen die een conflict hebben met een organisatie of persoon waar zij samen niet uitkomen. </p>
          </div>
          <div id="tab4">
            <h3>HOE?</h3>
            <p>
                Samen met een onafhankelijke bemiddelaar gaan partijen met elkaar in gesprek. 
                De bemiddelaar zal het gesprek leiden en sturen zodat er ruimte ontstaat om elkaar aan het woord te laten. 
                Beide partijen kunnen hun standpunten uiteenzetten in het kader hoor en wederhoor. 
                De deskundige derde zal trachten partijen in elkaars belevingswerelden te laten kijken zodat het wederzijds begrip leidt tot een aanvaardbare oplossing.
            </p> 
          </div>
         
        </section>
        </div>
        <div class="u-gridCol8">
        <b>Bij lopende conflicten zullen wij in overleg met u allereerst de haalbaarheid inschatten alvorens de zaak aan te nemen.

        Wilt u meer informatie over mediation, download <a href="">hier</a> de informatiefolder of neem vrijblijvend contact met ons op:<br><br>
        </b>
        </div>
	</div>


<?php get_footer(); ?>
