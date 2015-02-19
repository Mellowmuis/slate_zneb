jQuery(document).ready(function($) {

	function getOffset( el ) {
		var _x = 0;
		var _y = 0;
		while( el && !isNaN( el.offsetLeft ) && !isNaN( el.offsetTop ) ) {
			_x += el.offsetLeft - el.scrollLeft;
			_y += el.offsetTop - el.scrollTop;
			el = el.offsetParent;
		}
		return { top: _y, left: _x };
	}

	var offsets = $('.Slider').find('.scroll-to-bottom-gray').first().offset();

	var scrollerButton = $('.Slider').find('.scroll-to-bottom-gray').first();
	var st = offsets.top;
	var sl = offsets.left;
	var sw = scrollerButton.width();
	var sh = scrollerButton.height();

	$('body').prepend('<div class="scrollclickbox"  style="cursor: pointer; background-color: none; '+
			'position: absolute; top: '+st+'px; left: '+sl+'px;width: '+sw+'px; height: '+sh+'px"></div>');
	$('.scrollclickbox').on('click', function(elt){
		var pos = parseInt($(".overonsbanner").offset().top) - 55;
		$('html, body').animate({
			scrollTop: pos
		}, 1500);
	});

	var slider = $('.Slider').bxSlider({
		mode: 'fade',
		minSlides: 1,
		maxSlides: 1,
		startSlide: 0,
		//slideWidth: 1200,
		slideMargin: 0,
		// captions: true,
		pause: 6000,
		auto: true,
		speed: 1000,
		infiniteLoop: true,
		hideControlOnEnd: true,
		touchEnabled: false,
		pager: false,
		controls: false,

		onSliderLoad: function() {
			$('.Slider').css('visibility', 'visible');
		},
		onSlideAfter: function(slideElement, oldIndex, newIndex) {
			var banner = slideElement.find('.bannerinhoud');
			var l = banner.offset().left;
			var t = banner.offset().top;
			var h = banner.height();
			var w = banner.width();
			var href = banner.attr('href');
			console.log('href: '+href);
			
			var hrefcode;
			if(href == undefined || href == null){
				hrefcode = '';
			} else {
				hrefcode = 'href="'+href+'"';
			}

			$('.overlayclickbox').remove();

			$('body').prepend('<div class="overlayclickbox" '+hrefcode+' style="cursor: pointer; background-color: none; '+
					'position: absolute; top: '+t+'px; left: '+l+'px;width: '+w+'px; height: '+h+'px" ></div>');

			$('.overlayclickbox').on('click',function(evt){
				window.open($(this.currentTarget).attr('href'), '_blank');
			});

		}
	});
});

/*
 *   sticky
 */
$(document).ready(function() {

  var stickyNavTop = $('.Bot-Nav').offset().top;

  var stickyNav = function() {
    var scrollTop = $(window).scrollTop();

    if (scrollTop > stickyNavTop) {
      $('.Bot-Nav').addClass('sticky')

    } else {
      $('.Bot-Nav').removeClass('sticky');

    }
  };

  stickyNav();

  $(window).scroll(function() {
    if ($(window).width() > 1040) {
      stickyNav();
    } else {

    }
  });
});
$('.totop').click(function() {
  $("html, body").animate({
    scrollTop: 0
  }, 600);
  return false;
});
