jQuery(document).ready(function(){jQuery(".desktop_menu_wrapper ul#menu-menu-1 > li > ul.sub-menu").wrapInner("<div class='inner_drown_wrapper'></div>");for(var e=jQuery(".desktop_menu_wrapper ul#menu-menu-1 > li > ul.sub-menu > .inner_drown_wrapper > li"),r=0;r<e.length;r+=2)e.slice(r,r+2).wrapAll("<div class='menu_col'></div>");jQuery("<a class='see_all_products' href='/shop'>See All Products</a>").insertBefore(".menu_col:first-of-type"),jQuery(".dropdown-total").click(function(){jQuery(this).toggleClass("open"),jQuery(".desktop_menu").removeClass("hide"),jQuery(".mysearch_wrapper.desktop").removeClass("show")}),jQuery("html").click(function(e){jQuery(".dropdown-total").removeClass("open")}),jQuery(".new_arrival_slideshow").slick({prevArrow:".prev",nextArrow:".next",slidesToShow:5,slidesToScroll:5,responsive:[{breakpoint:1400,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:750,settings:{slidesToShow:1}}]}),jQuery(".up-sells ul.products").slick({slidesToShow:5,slidesToScroll:5,responsive:[{breakpoint:1400,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:750,settings:{slidesToShow:1,slidesToScroll:1}}]}),"seen"!=$.cookie("popup")&&($.cookie("popup","seen",{expires:365,path:"/"}),jQuery(".mycookie").delay(2e3).fadeIn(),jQuery(".mycookie_close").click(function(e){jQuery(".mycookie").fadeOut()})),jQuery(".header_special_deal").click(function(){jQuery(".discount_verbiage").fadeIn()}),jQuery(".discount_close").click(function(){jQuery(".discount_verbiage").fadeOut()}),jQuery("li.menu-item-7459").click(function(){jQuery(".join_email_verbiage").fadeIn()}),jQuery(".join_email_close").click(function(){jQuery(".join_email_verbiage").fadeOut()}),jQuery(".keyholder span.transparent_button, .member_banner span.transparent_button").click(function(){jQuery(".keyholder_verbiage").fadeIn()}),jQuery(".keyholder_close").click(function(){jQuery(".keyholder_verbiage").fadeOut()});var o=new Waypoint.Sticky({element:jQuery(".mobile_fixed_wrapper")[0]}),i=new Waypoint.Sticky({element:jQuery("#outer_wrapper_id")[0],offset:63});jQuery(".mobile_dropdown_inner ul#menu-menu-2 > li.menu-item-has-children > a").click(function(){jQuery(this).next("ul.sub-menu").slideToggle(200),jQuery(this).toggleClass("active")}),jQuery(".mobile_menu_wrapper").click(function(){jQuery(".mobile_dropdown_wrapper").slideToggle(200),jQuery(this).toggleClass("open"),jQuery(".menu_bar").toggleClass("open"),jQuery(".mysearch_wrapper.mobile").fadeOut(200)}),jQuery(".filter_header_wrapper.mobile").click(function(){jQuery(this).next("ul").slideToggle(200),jQuery(".my_filter_title").toggleClass("open")}),jQuery("img.search_img.mobile").click(function(){jQuery(".mysearch_wrapper.mobile").slideToggle(200),jQuery(".mobile_dropdown_wrapper").fadeOut(200),jQuery(".mobile_menu_wrapper").removeClass("open")}),jQuery("img.search_img.desktop").click(function(){jQuery(".desktop_menu").toggleClass("hide"),jQuery(".mysearch_wrapper.desktop").toggleClass("show")})});