/*global $*/
/*
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
INDEX

#A001 スムーズスクロール for jQuery.js 1.9+

※ Checked with ESLint
*/

$(function () {
	"use strict";

/* #A001  スムーススクロール for jQuery.js 1.9+ */
	$('a[href^="#"]').click(function () {
		var href = $(this).attr("href"),
			speed = 500,
			target = $(href === "#" || href === "" ? 'html' : href),
			position = target.offset().top;
		$('body,html').animate({scrollTop : position}, speed, 'swing');
		return false;
	});

});

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/

/*index: mobileナビゲーションメニュー */

$(function() {
	var $header = $('#header');
	var $toggle = $('#nav-toggle');
	var $menu = $('#global-nav-sp');

	function setMenu(isOpen) {
		$header.toggleClass('open', isOpen);
		$toggle.attr('aria-expanded', isOpen ? 'true' : 'false');
		$toggle.attr('aria-label', isOpen ? 'メニューを閉じる' : 'メニューを開く');
		$menu.attr('aria-hidden', isOpen ? 'false' : 'true');
	}

	$toggle.on('click', function() {
		setMenu(!$header.hasClass('open'));
	});

	$menu.find('a').on('click', function() {
		setMenu(false);
	});

	$(window).on('resize', function() {
		if (window.innerWidth > 768) {
			setMenu(false);
		}
	});
});

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/

/*index: 検索メニュー */

$(function() {
	var $search = $('#search');
	$('#search_btn').click(function(){
		$search.toggleClass('open');
	});
	$(window).on('resize', function(){
		$search.removeClass('open');
	});
});

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/

/*index: slickスライダー */

$(function(){
	$('.hero-slider').slick({
		autoplaySpeed: 3000,
		speed: 2000,
		infinite: true,
		autoplay: true,
		dots: false,
		arrows: false,
		fade: true,
		pauseOnHover: false,
	})
	$('.item-slider').slick({
		speed: 500,
		infinite: true,
		autoplay: true,
		slidesToShow: 3,
		centerPadding: '0',
		responsive: [
			{
				breakpoint: 641,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 426,
				settings: {
					slidesToShow: 1,
				}
			},
		]
	})
	$('.footer-slider').slick({
		speed: 500,
		infinite: true,
		autoplay: true,
		slidesToShow: 3,
		centerMode: true,
		centerPadding: '0',
		responsive: [
			{
				breakpoint: 641,
				settings: {
					slidesToShow: 2,
					centerPadding: '0',
				}
			},
			{
				breakpoint: 426,
				settings: {
					slidesToShow: 1,
					centerPadding: '0',
				}
			},
		]
	})
});

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/

/*index: トップへ戻るボタン */

$(function(){
	var totop = $(".totop-button");
//	$(totop).hide();
//	$(window).on("scroll", function() {
//		if ($(this).scrollTop() > 100) {
//			$(totop).fadeIn("fast");
//		} else {
//			$(totop).fadeOut("fast");
//		}
//		//		scrollHeight = $(document).height(); //ドキュメントの高さ
//		//		scrollPosition = $(window).height() + $(window).scrollTop() - 20; //現在地
//		//		footHeight = $(".copyright").innerHeight(); //footerの高さ（＝止めたい位置）
//		//		if ( scrollHeight - scrollPosition  <= footHeight ) { //ドキュメントの高さと現在地の差がfooterの高さ以下になったら
//		//			$(totop).removeClass("fixed");
//		//		} else { //それ以外の場合は
//		//			$(totop).addClass("fixed");
//		//		}
//	});
	$(totop).click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});
});

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/

/*index: フッターグループ アコーディオン（1029px以下） */

$(function() {
	var query = window.matchMedia('(max-width: 1029px)');

	function syncAccordion() {
		var accordion = query.matches;
		$('.js-listlink-trigger').each(function() {
			var $trigger = $(this);
			var $item = $trigger.parent();
			var $target = $item.children('.js-listlink-target');
			if (accordion) {
				var isOpen = $item.hasClass('is-open');
				$trigger.attr({
					role: 'button',
					tabindex: '0',
					'aria-expanded': isOpen ? 'true' : 'false'
				});
				$target.attr('aria-hidden', isOpen ? 'false' : 'true');
			} else {
				$item.removeClass('is-open');
				$trigger.removeAttr('role tabindex aria-expanded');
				$target.removeAttr('aria-hidden');
			}
		});
	}

	function toggleItem($trigger) {
		if (!query.matches) {
			return;
		}
		var $item = $trigger.parent();
		var $target = $item.children('.js-listlink-target');
		var isOpen = !$item.hasClass('is-open');
		$item.toggleClass('is-open', isOpen);
		$trigger.attr('aria-expanded', isOpen ? 'true' : 'false');
		$target.attr('aria-hidden', isOpen ? 'false' : 'true');
	}

	$('.l-group, #sub-footer').on('click', '.js-listlink-trigger', function() {
		toggleItem($(this));
	});

	$('.l-group, #sub-footer').on('keydown', '.js-listlink-trigger', function(event) {
		if (event.key === 'Enter' || event.key === ' ') {
			event.preventDefault();
			toggleItem($(this));
		}
	});

	if (typeof query.addEventListener === 'function') {
		query.addEventListener('change', syncAccordion);
	} else if (typeof query.addListener === 'function') {
		query.addListener(syncAccordion);
	}

	syncAccordion();
});

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/

/*index: slickスライダー(bunner) */


$(function(){
$('.bunner-slider').slick({
  dots: false,
  autoplay:true,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  slideWidth:960,
  responsive: [
    {
      breakpoint: 640,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      }
    },
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
});
