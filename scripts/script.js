!function(n){function e(e){e.addEventListener("click",function(e){e.preventDefault(),this.classList.contains("is-active")===!0?this.classList.remove("is-active"):this.classList.add("is-active"),n(".menu-button").hasClass("is-active")?(console.log("current "+a),n(".main-menu").addClass("is-active"),n("body").css({position:"fixed",top:-a}),localStorage.cachedScrollPos=a,console.log("localStorage.cachedScrollPos "+localStorage.cachedScrollPos)):(n(".main-menu").removeClass("is-active"),n("body").css({position:"relative",top:0}),n("body").scrollTop(localStorage.cachedScrollPos))})}var o=n("header.intro-box").height(),a=(n("nav.main-menu").height(),0);n(document).ready(function(){console.log("Hello World"),i(),s(),t()}),n(window).resize(function(){var e=n("header.intro-box").height(),o=n("nav.main-menu").height();newHeight=e-o,i(),s()});var t=function(){n(window).scroll(function(){var e=80,a=o,t=n("div.logo"),s=n(document).scrollTop(),i=0,l=s-e;s<=e?(l=0,i=1):s<=a&&(l=s-e,i=1-s/a),t.css("opacity",i),t.css("transform","translateY(-"+l+"px)")})},s=function(){n(window).scroll(function(){var e=n("header.intro-box").height(),o=n("nav.main-menu").height();newHeight=e-o,n(window).scrollTop()>newHeight?n(".main-menu").hasClass("is-active")||(n("nav.scroll").addClass("fixed"),n("nav.main-menu").css("transform","translateY(0)")):(n("nav.scroll").removeClass("fixed"),n("nav.main-menu").css("transform","translateY("+newHeight+"px)"))})},i=function(){var e=n("header.intro-box").height(),o=n("nav.main-menu").height();newHeight=e-o,n("nav.main-menu").css("transform","translateY("+newHeight+"px)"),n(window).scrollTop()>newHeight?n("nav.main-menu").css("transform","translateY(0)"):n("nav.main-menu").css("transform","translateY("+newHeight+"px)")};n(window).scroll(function(){a=n(document).scrollTop(),console.log("scroll"+a)});for(var l=document.querySelectorAll(".menu-button"),c=l.length-1;c>=0;c--){var r=l[c];e(r)}}(jQuery);