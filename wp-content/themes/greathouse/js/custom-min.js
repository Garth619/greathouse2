jQuery(document).ready(function(){jQuery(".desktop_menu_wrapper ul#menu-menu-1 > li > ul.sub-menu").wrapInner("<div class='inner_drown_wrapper'></div>");for(var e=jQuery(".desktop_menu_wrapper ul#menu-menu-1 > li > ul.sub-menu > .inner_drown_wrapper > li"),r=0;r<e.length;r+=2)e.slice(r,r+2).wrapAll("<div class='menu_col'></div>");jQuery("<a class='see_all_products' href='/shop'>See All Products</a>").insertBefore(".menu_col:first-of-type"),jQuery(".dropdown-total").click(function(){jQuery(this).toggleClass("open"),jQuery(".desktop_menu").removeClass("hide"),jQuery(".mysearch_wrapper.desktop").removeClass("show")}),jQuery("html").click(function(e){jQuery(".dropdown-total").removeClass("open")}),jQuery(".new_arrival_slideshow").slick({prevArrow:".prev",nextArrow:".next",slidesToShow:5,slidesToScroll:5,responsive:[{breakpoint:1400,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:750,settings:{slidesToShow:1,slidesToScroll:1}}]}),jQuery(".up-sells ul.products").slick({slidesToShow:5,slidesToScroll:5,responsive:[{breakpoint:1400,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:750,settings:{slidesToShow:1,slidesToScroll:1}}]}),"seen"!=$.cookie("popup")&&($.cookie("popup","seen",{expires:7,path:"/"}),jQuery(".mycookie").delay(2e3).fadeIn(),jQuery(".mycookie_close").click(function(e){jQuery(".mycookie").fadeOut()})),jQuery(".header_special_deal").click(function(){jQuery(".discount_verbiage").fadeIn()}),jQuery(".discount_close").click(function(){jQuery(".discount_verbiage").fadeOut()}),jQuery("li.menu-item-7459").click(function(){jQuery(".join_email_verbiage").fadeIn()}),jQuery(".join_email_close").click(function(){jQuery(".join_email_verbiage").fadeOut()}),jQuery(".keyholder span.transparent_button, .member_banner span.transparent_button").click(function(){jQuery(".keyholder_verbiage").fadeIn()}),jQuery(".keyholder_close").click(function(){jQuery(".keyholder_verbiage").fadeOut()}),jQuery(function(){var e=["91901","92037","92123","92132","91912","92055","92134","91913","92056","92135","91914","92057","92136","91915","92058","92137","91916","92059","92138","91917","92060","92139","91921","92061","92140","92142","91932","92065","92143","91933","92145","91934","92067","92147","91935","92149","91941","92069","92150","91942","92070","92152","91943","92071","91944","91945","92074","92155","91946","92075","92158","91947","92078","92159","91948","92160","91950","92081","92161","91951","92082","92162","91962","92083","92163","91963","92084","92164","91976","92085","92165","91977","92086","92166","91978","92088","92167","91979","92090","92168","91980","92091","92169","91987","92092","92170","92003","92093","92171","92004","92096","92172","92007","92101","92173","92008","92102","92174","92009","92103","92175","92010","92104","92176","92011","92105","92177","92013","92106","92178","92014","92107","92179","92018","92108","92182","92019","92109","92184","92020","92110","92186","92021","92111","92187","92022","92112","92190","92113","92191","92024","92114","92192","92025","92115","92193","92026","92116","92194","92027","92117","92195","92028","92118","92196","92029","92119","92197","92030","92120","92198","92033","92121","92199","92122"];jQuery("#zip_code_confirmation, #zip_code_no_access").hide(),jQuery("#zip_form").submit(function(){return jQuery("#zip_code_confirmation, #zip_code_no_access").hide(),jQuery.inArray(jQuery("#id_zip_code").val(),e)>-1?(jQuery('.zipcode_checker input[type="text"]').css("background","#effaee"),jQuery(".inital_content, .overlay_inner").fadeOut(),jQuery("#zip_code_confirmation").delay(300).fadeIn(),jQuery(".overlay_inner").fadeIn(),jQuery(".zip_code_button").click(function(){jQuery(".overlay").fadeOut()})):(jQuery("#zip_code_no_access").css("display","block"),jQuery('.zipcode_checker input[type="text"]').css("background","#ebbbc3"),jQuery("#myvalidation").delay(300).fadeIn().css("display","block")),!1})});var i=jQuery(".inital_content").height();jQuery(".overlay_inner").css("min-height",i+"px"),jQuery(function(){null==$.cookie("disablecart")&&jQuery(".single_add_to_cart_button").show(),"activated"==$.cookie("disablecart")&&(jQuery(".single_add_to_cart_button").hide(),jQuery(".zipcode_checker").hide()),jQuery(".remove_add_to_cart").click(function(){jQuery(".single_add_to_cart_button").hide(),jQuery(".zipcode_checker").fadeOut(),$.cookie("disablecart","activated",{expires:7,path:"/"})})}),jQuery(function(){"success"==$.cookie("zipcodesuccess")&&jQuery(".zipcode_checker").hide(),jQuery(".zip_code_button").click(function(){jQuery(".zipcode_checker").fadeOut(),$.cookie("zipcodesuccess","success",{expires:7,path:"/"})})});var o=new Waypoint.Sticky({element:jQuery(".mobile_fixed_wrapper")[0]});jQuery(".mobile_dropdown_inner ul#menu-menu-2 > li.menu-item-has-children > a").click(function(){jQuery(this).next("ul.sub-menu").slideToggle(200),jQuery(this).toggleClass("active")}),jQuery(".mobile_menu_wrapper").click(function(){jQuery(".mobile_dropdown_wrapper").slideToggle(200),jQuery(this).toggleClass("open"),jQuery(".menu_bar").toggleClass("open"),jQuery(".mysearch_wrapper.mobile").fadeOut(200)}),jQuery(".my_filter_title").addClass("open"),jQuery(".filter_header_wrapper.mobile").click(function(){jQuery(this).next("ul").slideToggle(200),jQuery(".my_filter_title").toggleClass("open")}),jQuery("img.search_img.mobile").click(function(){jQuery(".mysearch_wrapper.mobile").slideToggle(200),jQuery(".mobile_dropdown_wrapper").fadeOut(200),jQuery(".mobile_menu_wrapper").removeClass("open")}),jQuery("img.search_img.desktop").click(function(){jQuery(".desktop_menu").toggleClass("hide"),jQuery(".mysearch_wrapper.desktop").toggleClass("show")}),jQuery('[data-term="start-of-quick-ship-fabrics"]').addClass("variation_seperator"),jQuery(".variation_seperator").before("<strong style='margin-top:15px' class='ivpa_title'>Quick Ship Fabrics</strong>"),jQuery(".ivpa_term").mouseenter(function(){jQuery(this).children("img").clone().appendTo(".overlay_pattern_inner"),jQuery(".overlay_pattern").fadeIn(500),jQuery(".overlay_pattern_inner img").show()}),jQuery(".ivpa_term").mouseleave(function(){jQuery(".overlay_pattern").hide(),jQuery(".overlay_pattern_inner").find("img").remove().end().appendTo(".overlay_pattern_inner")}),jQuery("#tab-additional_information").hide(),jQuery("#tab-description").show(),jQuery(".social_icons a").mouseenter(function(){jQuery(this).find(".social_icon").fadeOut(200),jQuery(this).find(".social_icon_hover").fadeIn(200)}),jQuery(".social_icons a").mouseleave(function(){jQuery(this).find(".social_icon").fadeIn(200),jQuery(this).find(".social_icon_hover").fadeOut(200)})});