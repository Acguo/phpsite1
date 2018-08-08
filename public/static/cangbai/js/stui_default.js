/*!


 * Stui v1.1.0 Copyright 2016-2018 http://v.shoutu.cn
 * Email 726662013@qq.com,admin@shoutu.cn
 */
var stui = {
	browser: {
		url: document.URL,
		domain: document.domain,
		title: document.title,
		language: (navigator.browserLanguage || navigator.language).toLowerCase(),
		canvas: function() {
			return !!document.createElement("canvas").getContext
		}(),
		useragent: function() {
			var a = navigator.userAgent;
			return {
				mobile: !! a.match(/AppleWebKit.*Mobile.*/),
				ios: !! a.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),
				android: -1 < a.indexOf("Android") || -1 < a.indexOf("Linux"),
				iPhone: -1 < a.indexOf("iPhone") || -1 < a.indexOf("Mac"),
				iPad: -1 < a.indexOf("iPad"),
				trident: -1 < a.indexOf("Trident"),
				presto: -1 < a.indexOf("Presto"),
				webKit: -1 < a.indexOf("AppleWebKit"),
				gecko: -1 < a.indexOf("Gecko") && -1 == a.indexOf("KHTML"),
				weixin: -1 < a.indexOf("MicroMessenger")
			}
		}()
	},

	mobile: {
		popup: function() {
			$popblock = $(".popup");
			$(".open-popup").click(function() {
				$popblock.addClass("popup-visible");
				$("body").append('<div class="mask"></div>');
				$(".close-popup").click(function() {
					$popblock.removeClass("popup-visible");
					$(".mask").remove();
					$("body").removeClass("modal-open")
				});
				$(".mask").click(function() {
					$popblock.removeClass("popup-visible");
					$(this).remove();
					$("body").removeClass("modal-open")
				})
			})
		},
		slide: function() {
			$.getScript("https://cdn.bootcss.com/flickity/2.0.10/flickity.pkgd.min.js", function() {
				$(".type-slide").each(function(a) {
					$index = $(this).find('.active').index()*1;
					if($index > 3){
						$index = $index-3;
					}else{
						$index = 0;
					}
					$(this).flickity({
						cellAlign: 'left',
						freeScroll: true,
						contain: true,
						prevNextButtons: false,				
						pageDots: false,
						initialIndex: $index
					});
				})
			})
		},
		share: function() {
			$(".open-share").click(function() {
				stui.browser.useragent.weixin ? $("body").append('<div class="mobile-share share-weixin"></div>') : $("body").append('<div class="mobile-share share-other"></div>');
				$(".mobile-share").click(function() {
					$(".mobile-share").remove();
					$("body").removeClass("modal-open")
				})
			})
		}
	},
	flickity: {
		carousel: function() {
			$.getScript("https://cdn.bootcss.com/flickity/2.0.10/flickity.pkgd.min.js", function() {
				$('.carousel_default').flickity({
				  	cellAlign: 'left',
				  	contain: true,
				  	wrapAround: true,
				  	autoPlay: true,
				  	prevNextButtons: false
				});
				$('.carousel_wide').flickity({
				  	cellAlign: 'center',
				  	contain: true,
				  	wrapAround: true,
				  	autoPlay: true,
				});
				$('.carousel_center').flickity({
				  	cellAlign: 'center',
				  	contain: true,
				  	wrapAround: true,
				  	autoPlay: true,
				  	prevNextButtons: false
				});
				$('.carousel_right').flickity({
				  	cellAlign: 'left',
				  	wrapAround: true,
				  	contain: true,
				  	pageDots: false
				});
			})
		}
	},
	images: {
		lazyload: function() {
			$.getScript("https://cdn.bootcss.com/jquery_lazyload/1.9.7/jquery.lazyload.js", function() {
				$(".lazyload").lazyload({
					effect: "fadeIn",
					threshold: 200,
					failurelimit: 15,
					skip_invisible: !1
				})
			})
		},
	},
	common: {
		bootstrap: function() {
			$.getScript("https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js", function() {
				$('a[data-toggle="tab"]').on("shown.bs.tab", function(a) {
					var b = $(a.target).text();
					$(a.relatedTarget).text();
					$("span.active-tab").html(b)
				})
			})
		},
		headroom: function() {
			$.getScript("https://cdn.bootcss.com/headroom/0.9.4/headroom.min.js", function() {
				$("#header-top", function() {
					(new Headroom(document.querySelector("#header-top"), {
						tolerance: 5,
						offset: 205,
						classes: {
							initial: "top-fixed",
							pinned: "top-fixed-up",
							unpinned: "top-fixed-down"
						}
					})).init()
				});
				$("#header-bottom", function() {
					(new Headroom(document.querySelector("#header-bottom"), {
						tolerance: 5,
						offset: 205,
						classes: {
							initial: "bottom-fixed",
							pinned: "bottom-fixed-up",
							unpinned: "bottom-fixed-down"
						}
					})).init()
				})
			})
		},
		collapse: function() {
			$(".detail").on("click", ".detail-more", function() {
				$detailContent = $(".detail-content");
				$detailSketch = $(".detail-sketch");
				"none" == $detailContent.css("display") ? ($(this).html('\u6536\u8d77 <i class="icon iconfont icon-less"></i>'), $detailContent.show(), $detailSketch.hide()) : ($(this).html('\u8be6\u60c5 <i class="icon iconfont icon-moreunfold"></i>'), $detailContent.hide(), $detailSketch.show())
			})
		},
		scrolltop: function() {
			var a = $(window);
			$scrollTopLink = $("a.backtop");
			a.scroll(function() {
				500 < $(this).scrollTop() ? $scrollTopLink.css("display", "block") : $scrollTopLink.css("display", "none")
			});
			$scrollTopLink.on("click", function() {
				$("html, body").animate({
					scrollTop: 0
				}, 400);
				return !1
			})
		}
	}
};
$(document).ready(function() {
	if(stui.browser.useragent.mobile){	
		stui.mobile.slide();
		stui.mobile.popup();
		stui.mobile.share();
	}
	stui.flickity.carousel();
	stui.images.lazyload();
	stui.common.bootstrap();
	stui.common.headroom();
	stui.common.collapse();
	stui.common.scrolltop()
});