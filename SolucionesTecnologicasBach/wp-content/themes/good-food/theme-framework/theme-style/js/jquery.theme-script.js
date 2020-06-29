/**
 * @package 	WordPress
 * @subpackage 	Good Food
 * @version		1.0.7
 * 
 * Theme Scripts
 * Created by CMSMasters
 * 
 */


jQuery(document).ready(function() { 
	"use strict";
	
	/* Menu item custom colors */
	(function ($) { 
		$('.menu-item > a[data-color]').each(function () {
			$(this).attr('style', $(this).data('color'));
		} );
	} )(jQuery);
	


	/* Header Top Hide Toggle */
	(function ($) { 
		$('.header_top_but').on('click', function () { 
			var headerTopBut = $(this), 
				headerTopButArrow = headerTopBut.find('> span'), 
				headerTopOuter = headerTopBut.parents('.header_top').find('.header_top_outer');
			
			if (headerTopBut.hasClass('opened')) {
				headerTopOuter.slideUp();
				
				headerTopButArrow.removeClass('cmsmasters_theme_icon_slide_top').addClass('cmsmasters_theme_icon_slide_bottom');
				
				headerTopBut.removeClass('opened').addClass('closed');
			} else if (headerTopBut.hasClass('closed')) {
				headerTopOuter.slideDown();
				
				headerTopButArrow.removeClass('cmsmasters_theme_icon_slide_bottom').addClass('cmsmasters_theme_icon_slide_top');
				
				headerTopBut.removeClass('closed').addClass('opened');
			}
		} );
	} )(jQuery);
	
	
	
	/* Header Search Form */
	(function ($) { 
		$('.cmsmasters_header_search_but').on('click', function () { 
			$('.cmsmasters_header_search_form').addClass('cmsmasters_show');
			
			$('.cmsmasters_header_search_form').find('input[type=search]').focus();
		} );
		
		
		$('.cmsmasters_header_search_form_close').on('click', function () { 
			$('.cmsmasters_header_search_form').removeClass('cmsmasters_show');
		} );
	} )(jQuery);
	
	
	
	/* Stats Run */
	(function ($) { 
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android && 
			!checker.ua.ie9 
		) {
			$('.cmsmasters_stats.stats_mode_circles').waypoint(function () { 
				var i = 1;
				
				
				$(this).find('.cmsmasters_stat').each(function () { 
					var el = $(this);
					
					
					setTimeout(function () { 
						el.easyPieChart( { 
							size : 			220, 
							lineWidth : 	5, 
							lineCap : 		'square', 
							animate : 		1000, 
							scaleColor : 	false, 
							trackColor : 	false, 
							barColor : function () { 
								return ($(this.el).data('bar-color')) ? $(this.el).data('bar-color') : cmsmasters_theme_script.primary_color;
							}, 
							onStep : function (from, to, val) { 
								$(this.el).find('.cmsmasters_stat_counter').text(~~val);
							} 
						} );
					}, 500 * i);
					
					
					i += 1;
				} );
			}, { 
				offset : 		'100%' 
			} );
		} else {
			$('.cmsmasters_stats.stats_mode_circles').find('.cmsmasters_stat').easyPieChart( { 
				size : 			220, 
				lineWidth : 	5, 
				lineCap : 		'square', 
				animate : 		1000, 
				scaleColor : 	false, 
				trackColor : 	false, 
				barColor : function () { 
					return ($(this.el).data('bar-color')) ? $(this.el).data('bar-color') : cmsmasters_theme_script.primary_color;
				}, 
				onStep : function (from, to, val) { 
					$(this.el).find('.cmsmasters_stat_counter').text(~~val);
				} 
			} );
		}
		
		
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android && 
			!checker.ua.ie9 
		) {
			$('.cmsmasters_counters').waypoint(function () { 
				var i = 1;
				
				
				$(this).find('.cmsmasters_counter').each(function () { 
					var el = $(this);
					
					
					setTimeout(function () { 
						el.easyPieChart( { 
							size : 			220, 
							lineWidth : 	0, 
							lineCap : 		'square', 
							animate : 		1500, 
							scaleColor : 	false, 
							trackColor : 	false, 
							barColor : 		'#ffffff', 
							onStep : function (from, to, val) { 
								$(this.el).find('.cmsmasters_counter_counter').text(~~val);
							} 
						} );
					}, 500 * i);
					
					
					i += 1;
				} );
			}, { 
				offset : 		'100%' 
			} );
		} else {
			$('.cmsmasters_counters').find('.cmsmasters_counter').easyPieChart( { 
				size : 			220, 
				lineWidth : 	0, 
				lineCap : 		'square', 
				animate : 		1500, 
				scaleColor : 	false, 
				trackColor : 	false, 
				barColor : 		'#ffffff', 
				onStep : function (from, to, val) { 
					$(this.el).find('.cmsmasters_counter_counter').text(~~val);
				} 
			} );
		}
		
		
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android && 
			!checker.ua.ie9 
		) {
			$('.cmsmasters_stats.stats_mode_bars').waypoint(function () { 
				$(this).addClass('shortcode_animated').find('.cmsmasters_stat').each(function () { 
					var el = $(this);
					
					
					el.easyPieChart( { 
						size : 			220, 
						lineWidth : 	0, 
						lineCap : 		'square', 
						animate : 		1500, 
						scaleColor : 	false, 
						trackColor : 	false, 
						barColor : 		'#ffffff', 
						onStep : function (from, to, val) { 
							$(this.el).find('.cmsmasters_stat_counter').text(~~val);
						} 
					} );
				} );
			}, { 
				offset : 		'100%' 
			} );
		} else {
			$('.cmsmasters_stats.stats_mode_bars').addClass('shortcode_animated').find('.cmsmasters_stat').easyPieChart( { 
				size : 			220, 
				lineWidth : 	0, 
				lineCap : 		'square', 
				animate : 		1500, 
				scaleColor : 	false, 
				trackColor : 	false, 
				barColor : 		'#ffffff', 
				onStep : function (from, to, val) { 
					$(this.el).find('.cmsmasters_stat_counter').text(~~val);
				} 
			} );
		}
	} )(jQuery);
	
	
	
	/* Remove empty div in single posts & projects */
	(function ($) { 
		$('.single article > div:empty').remove();
	} )(jQuery);
	
	
	
	/* Add class to middle inner if headline disabled */
	(function ($) { 
		if ($('.headline_outer').hasClass('cmsmasters_headline_disabled')) {
			$('.middle_inner').addClass('cmsmasters_middle_headline_disabled');
		}
	} )(jQuery);
	
	
	
	/* Add events on Touch Devices */
	(function ($) { 
		$('body').bind('touchstart', function() {});
	} )(jQuery);
} );



/*!
 * Fixed Header Function
 */
!function(e){"use strict";e.fn.cmsmastersFixedHeaderScroll=function(o){var i={headerTop:".header_top",headerMid:".header_mid",headerBot:".header_bot",navBlock:"nav",navList:"#navigation",navTopList:"#top_line_nav",respNavButton:".responsive_nav",respTopNavButton:".responsive_top_nav",fixedClass:".fixed_header",fixedClassBlock:"#page",respHideBlocks:"",maxWidthMid:1024,maxWidthBot:1024,changeTopHeight:!0,changeMidHeight:!0,mobileDisabled:!0},t=this,s={};(s={init:function(){s.options=s.o=e.extend({},i,o),s.el=t,s.vars=s.v={},s.v.newTopHeight=0,s.v.newMidHeight=0,s.setHeaderVars(),s.startHeader()},setHeaderVars:function(){s.v.headerMidString=s.o.headerMid,s.v.headerTop=s.el.find("> "+s.o.headerTop),s.v.headerMid=s.el.find("> "+s.v.headerMidString),s.v.headerBot=s.el.find("> "+s.o.headerBot),s.v.respNavButton=s.el.find(s.o.respNavButton),s.v.respTopNavButton=s.el.find(s.o.respTopNavButton),s.v.respHideBlocks=e(s.o.respHideBlocks),s.v.fixedClassBlock=e(s.o.fixedClassBlock),s.v.navListString=s.o.navList,s.v.navTopListString=s.o.navTopList,s.v.navBlockString=s.o.navBlock,s.v.navBlock=s.el.find(s.v.navListString).parents(s.v.navBlockString),s.v.navTopBlock=s.el.find(s.v.navTopListString).parents(s.v.navBlockString),s.v.midChangeHeightBlocks=e(s.v.headerMidString),s.v.midChangeHeightBlocksResp=e(s.v.headerMidString),s.v.topHeight=0,s.v.botHeight=0,s.v.midHeight=Number(s.v.headerMid.attr("data-height")),s.v.win=e(window),s.v.winScrollTop=s.v.win.scrollTop(),s.v.winMidScrollTop=s.v.winScrollTop-s.v.topHeight,s.v.isMobile="ontouchstart"in document.documentElement,s.v.mobileDisabled=cmsmasters_media_width()<s.o.maxWidthMid},startHeader:function(){s.v.headerTop.length>0&&(s.v.topHeight=Number(s.v.headerTop.attr("data-height"))),s.v.headerBot.length>0&&(s.v.botHeight=Number(s.v.headerBot.attr("data-height"))),s.attachEvents(),s.v.win.trigger("scroll")},attachEvents:function(){s.v.respNavButton.bind("click",function(){return s.v.respNavButton.is(":not(.active)")?(s.v.navBlock.css({display:"block"}),s.v.respHideBlocks.css({display:"none"}),s.v.respNavButton.addClass("active")):(s.v.navBlock.css({display:"none"}),s.v.respHideBlocks.css({display:"block"}),s.v.respNavButton.removeClass("active")),!1}),s.v.respTopNavButton.bind("click",function(){return s.v.respTopNavButton.is(":not(.active)")?(s.v.navTopBlock.css({display:"block"}),s.v.respHideBlocks.css({display:"none"}),s.v.respTopNavButton.addClass("active")):(s.v.navTopBlock.css({display:"none"}),s.v.respHideBlocks.css({display:"block"}),s.v.respTopNavButton.removeClass("active")),!1}),s.v.win.bind("scroll",function(){return!(s.el.parents(s.o.fixedClassBlock).is(":not("+s.o.fixedClass+")")||s.v.mobileDisabled&&s.v.isMobile)&&void(cmsmasters_media_width()>s.o.maxWidthMid&&(s.getScrollTop(),s.headerTransform()))}),s.v.win.bind("resize",function(){return!(s.el.parents(s.o.fixedClassBlock).is(":not("+s.o.fixedClass+")")||s.v.mobileDisabled&&s.v.isMobile)&&void(s.v.headerBot.length>0?s.headerResize(s.o.maxWidthBot):s.headerResize(s.o.maxWidthMid))})},getScrollTop:function(){s.v.winScrollTop=s.v.win.scrollTop(),s.v.winMidScrollTop=s.v.winScrollTop-s.v.topHeight},headerTransform:function(){s.v.fixedClassBlock.hasClass("fixed_header")&&(s.v.headerBot.length>0?s.v.winScrollTop>s.v.topHeight+s.v.midHeight?s.el.css({marginTop:-(s.v.topHeight+s.v.midHeight),paddingTop:s.v.midHeight,opacity:1}).addClass("navi_scrolled"):s.el.removeClass("navi_scrolled").css({marginTop:-s.v.winScrollTop,paddingTop:0,opacity:1}):s.v.winScrollTop<s.v.topHeight?(s.v.headerMid.removeClass("header_mid_scroll"),s.v.headerBot.removeClass("header_bot_scroll"),s.v.newTopHeight=s.v.topHeight-s.v.winScrollTop,s.v.headerTop.css({overflow:"hidden",height:s.v.newTopHeight+"px"}),s.v.winScrollTop<=3&&s.v.headerTop.css({overflow:"inherit"}),s.v.midChangeHeightBlocks.css({height:s.v.midHeight+"px"})):(s.v.headerTop.css({overflow:"hidden",height:0}),s.v.winMidScrollTop<s.v.midHeight/3?(s.v.headerMid.removeClass("header_mid_scroll"),s.v.headerBot.removeClass("header_bot_scroll"),s.v.newMidHeight=s.v.midHeight-s.v.winMidScrollTop):(s.v.headerMid.addClass("header_mid_scroll"),s.v.headerBot.addClass("header_bot_scroll"),s.v.newMidHeight=s.v.midHeight/1.5),s.v.midChangeHeightBlocks.css({height:s.v.newMidHeight+"px"})))},headerResize:function(e){cmsmasters_media_width()>e?(s.v.navBlock.removeAttr("style"),s.v.respHideBlocks.removeAttr("style"),s.v.respNavButton.removeClass("active"),s.getScrollTop(),s.headerTransform()):s.v.headerBot.length>0?(s.v.headerTop.removeAttr("style"),s.el.removeAttr("style").removeClass("navi_scrolled").css({opacity:1})):(s.v.headerTop.removeAttr("style"),s.v.midChangeHeightBlocksResp.css("height","auto"),s.el.removeAttr("style").removeClass("navi_scrolled").css({opacity:1}))}}).init()}}(jQuery);



/*!
 * Responsive Navigation Function
 */
!function(s){"use strict";s.fn.cmsmastersResponsiveNav=function(n){var t={submenu:"ul.sub-menu, ul.children",respButton:".responsive_nav",startWidth:1024},e=this,i={};i={init:function(){i.o=s.extend({},t,n),i.el=e,i.v={},i.v.pLinkText="",i.v.subLinkToggle=void 0,i.setVars(),i.restartNav()},setVars:function(){i.v.submenu=i.el.find(i.o.submenu),i.v.subLink=i.v.submenu.closest("li").find("> a"),i.v.respButton=s(i.o.respButton),i.v.startWidth=i.o.startWidth,i.v.win=s(window),i.v.trigger=!1,i.v.counter=0,i.startEvent()},buildNav:function(){i.v.trigger=!0,i.v.counter=1,i.v.subLink.each(function(){""===s(this).text()&&(i.v.pLinkText=s(this).closest("ul").closest("li").find("> a").text(),s(this).addClass("cmsmasters_resp_nav_custom_text").html('<span class="nav_item_wrap"><span class="nav_title">'+i.v.counter+'. '+i.v.pLinkText+'</span></span>'),i.v.counter+=1),s(this).append('<span class="cmsmasters_resp_nav_toggle cmsmasters_theme_icon_resp_nav_slide_down" />')}),i.v.subLinkToggle=i.v.subLink.find("> span.cmsmasters_resp_nav_toggle"),i.v.submenu.hide(),i.attachEvents()},restartNav:function(){!i.v.trigger&&cmsmasters_media_width()<=i.v.startWidth?i.buildNav():i.v.trigger&&cmsmasters_media_width()>i.v.startWidth&&i.destroyNav()},resetNav:function(){i.v.subLinkToggle.removeClass("cmsmasters_theme_icon_resp_nav_slide_up").addClass("cmsmasters_theme_icon_resp_nav_slide_down"),i.v.submenu.hide()},destroyNav:function(){i.v.subLink.each(function(){s(this).hasClass("cmsmasters_resp_nav_custom_text")&&s(this).removeClass("cmsmasters_resp_nav_custom_text").text(""),s(this).find("span.cmsmasters_resp_nav_toggle").remove()}),i.v.submenu.css("display",""),i.v.trigger=!1,i.detachEvents()},startEvent:function(){i.v.win.on("resize",function(){i.restartNav()})},attachEvents:function(){i.v.subLinkToggle.on("click",function(){return s(this).hasClass("cmsmasters_theme_icon_resp_nav_slide_up")?(s(this).removeClass("cmsmasters_theme_icon_resp_nav_slide_up").addClass("cmsmasters_theme_icon_resp_nav_slide_down").closest("li").find("ul.sub-menu, ul.children").hide(),s(this).closest("li").find("span.cmsmasters_resp_nav_toggle").removeClass("cmsmasters_theme_icon_resp_nav_slide_up").addClass("cmsmasters_theme_icon_resp_nav_slide_down")):(s(this).removeClass("cmsmasters_theme_icon_resp_nav_slide_down").addClass("cmsmasters_theme_icon_resp_nav_slide_up"), s(this).closest("li").find("> ul.sub-menu, > ul.children").show(),s(this).closest("li").find("> div > ul.sub-menu, > div > ul.children").show()),!1}),i.v.respButton.on("click",function(){i.v.trigger&&s(this).hasClass("active")&&i.resetNav()})},detachEvents:function(){i.v.subLinkToggle.off("click")}},i.init()}}(jQuery);

