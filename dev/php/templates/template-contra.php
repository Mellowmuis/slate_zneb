<?php
/*
Template Name: Contra
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
          
          <li><a href="#tab1" class="active"><img class="expertiseimage-cont" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon9.png" /><br>WANNEER?</a></li>
          <li><a href="#tab2"><img class="expertiseimage-cont" src="<?php echo get_stylesheet_directory_uri(); ?>/img/why.png" /><br>WAAROM?</a></li>
          <li><a href="#tab3"><img class="expertiseimage-cont" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon10.png" /><br>VOOR WIE?</a></li>
          <li><a href="#tab4"><img class="expertiseimage-cont" src="<?php echo get_stylesheet_directory_uri(); ?>/img/how.png" /><br>HOE?</a></li>
          
        </ul>
        <section id="first-tab-group" class="tabgroup">
          
          <div id="tab1">
            <h3>WANNEER?</h3>
            <p>Een contra-expert schakelt u in bij een grote of complexe schade. <br><br>

                In de eerste uren na een calamiteit worden cruciale beslissingen gemaakt die het verloop van uw schadeafhandeling kunnen  beïnvloeden. 
                De salvagecoördinator zal gedupeerden tijdens de eerste  uren bijstaan met praktische steun en advies. 
                Wanneer de salvagecoördinator zijn eerste werk heeft gedaan, is het aan u te beslissen door welke partij u zich laat bijstaan. <br><br>

                U heeft het recht een expertisebureau in te schakelen om u persoonlijk te laten vertegenwoordigen door een eigen expert. 
                Van belang is dat u een onafhankelijke expert inschakelt en er geen belangenverstrengeling is met welke verzekeraar dan ook. 
                Veel expertisebureaus zijn namelijk onzichtbaar gelieerd aan verzekeringsmaatschappijen.<br><br>

                Wij adviseren u daarom een goede keuze te maken in overleg met uw tussenpersoon of via een onafhankelijk adviseur. </p>
          </div>
          <div id="tab2">
            <h3>WAAROM?</h3>
            <p>Schade door brand, water, inbraak, diefstal, blikseminslag en overige oorzaken is altijd vervelend!  <br><br>

                Als u de schade heeft gemeld zal verzekeraar een eigen schade-expert sturen om de schade vast te stellen. 
                Deze schade-expert vertegenwoordigt de verzekeringsmaatschappij en zijn erg ervaren in het regelen van schades. 
                Zij kennen zij de polisvoorwaarden hoogstwaarschijnlijk beter dan u waardoor u een behoorlijke achterstand kunt hebben. 
                Dit hoeft echter niet per definitie negatief te zijn. <br><br>

                Verzekeraars zijn zich ervan bewust dat zij met een eigen expert in het voordeel zijn. 
                Om het gevoel van ongelijkheid te compenseren staat in vrijwel iedere verzekeringspolis vermeld dat u recht heeft op een eigen deskundige, 
                een zgn. contra-expert. 
                De mogelijkheid tot het inzetten van een eigen expert om uw belangen te behartigen is geen motie van wantrouwen naar uw verzekeraar maar een aan u geboden recht als consument. 
                <br><br>
                De contra-expert behartigt uw belangen en staat u bij tijdens het gehele schade afhandelingsproces
                en is terzake deskundig. Het scheelt u en betrokken partijen veel tijd en ergernis. 
                <br><br>
                Als door de tussenkomst van een eigen onafhankelijke expert de schade naar tevredenheid wordt afgewikkeld ontstaat er een win-win situatie voor alle betrokken partijen</p>
          </div>
          <div id="tab3">
            <h3>VOOR WIE?</h3>
            <p>Voor alle zakelijke en particuliere partijen die schade lijden door een calamiteit waarvan zij zelf de gevolgen niet kunnen overzien. </p>
          </div>
          <div id="tab4">
            <h3>HOE?</h3>
            <p>Een contra-expertise heeft voor u de meeste toegevoegde waarde als de contra-expert vanaf een vroeg stadium wordt ingeschakeld en u kan bijstaan in het schaderegelingsproces. 
                <br><br>
                Na ontvangst van uw contraverzoek vraagt het door u gekozen expertisebureau een Akte van Benoeming op bij de expert welke door verzekeraar is benoemd. 
                Na ondertekening van de Akte van Benoeming zal een bezoek worden ingepland op de schadelocatie. Tijdens dit bezoek zal de behandelende eigen expert u volledig bijpraten over de te nemen stappen met betrekking tot de voortgang van het schadeafhandelingstraject. 
                <br><br>
                Tevens worden alle benodigde relevante stukken bij u en derden opgevraagd om u zou goed mogelijk bij te staan. Hierbij kunt u denken aan nota's, polisvoorwaarden, foto's en eventueel het expertiserapport van een eerder benoemd expert. </p>
          </div>
         
        </section>
        </div>
        <div class="u-gridCol8">
        <b>Bij lopende conflicten zullen wij in overleg met u allereerst de haalbaarheid inschatten alvorens de zaak aan te nemen.

        Wilt u meer informatie over contra-expertises, download <a href="">hier</a> de informatiefolder of neem vrijblijvend contact met ons op:<br><br>
        </b>
        </div>
	</div>


<?php get_footer(); ?>
