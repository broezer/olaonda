!function(o){function e(e){e.addEventListener("click",function(e){e.preventDefault(),this.classList.contains("is-active")===!0?this.classList.remove("is-active"):this.classList.add("is-active"),o(".menu-button").hasClass("is-active")?(console.log("current "+i),o(".main-menu").addClass("is-active"),o("body").css({position:"fixed",top:-i}),localStorage.cachedScrollPos=i,console.log("localStorage.cachedScrollPos "+localStorage.cachedScrollPos)):(o(".main-menu").removeClass("is-active"),o("body").css({position:"relative",top:0}),o("body").scrollTop(localStorage.cachedScrollPos))})}var n=o("header.intro-box").height(),i=(o("nav.main-menu").height(),0);o(document).ready(function(){console.log("Hello World"),t(),a()}),o(window).resize(function(){var e=o("header.intro-box").height(),n=o("nav.main-menu").height();newHeight=e-n,a()});var t=function(){o(window).scroll(function(){var e=80,i=n,t=o("div.logo"),a=o(document).scrollTop(),c=0,l=a-e;a<=e?(l=0,c=1):a<=i&&(l=a-e,c=1-a/i),t.css("opacity",c),t.css("transform","translateY(-"+l+"px)")})},a=function(){o(window).scroll(function(){var e=o("header.intro-box").height();o("nav.main-menu").height();newHeight=e,o(window).scrollTop()>newHeight?o("nav.main-menu.fixed--later").addClass("is-active"):o("nav.main-menu.fixed--later").removeClass("is-active")})};o(window).scroll(function(){i=o(document).scrollTop(),console.log("scroll"+i)});for(var c=document.querySelectorAll(".menu-button"),l=c.length-1;l>=0;l--){var s=c[l];e(s)}}(jQuery);