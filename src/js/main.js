(function($){
  var introHeight = $('header.intro-box').height();
  var menuHeight = $('nav.main-menu').height();
  var $currentScrollPos = 0;


  $(document).ready(function(){
    //console.log('Hello World');
    //menuPosition();
    //checkPosition();
    animateLogo();
    fixLater();
    //loadInstagram();

    $('.ola-slider').lightSlider({
        gallery: true,
        item: 1,
        loop:true,
        slideMargin: 0,
        thumbItem: 5,
        controls: false,
        vertical:false,
        vThumbWidth:200
      }

    );
  });

  $(window).resize(function(){
    var introHeight = $('header.intro-box').height();
    var menuHeight = $('nav.main-menu').height();
    newHeight = introHeight - menuHeight;
    //menuPosition();
    //checkPosition();
    fixLater();
  });


  var animateLogo = function(){
    $(window).scroll(function(e){
      e.preventDefault();
      var fadeStart = 80 ;// 100px scroll or less will equiv to 1 opacity
      var fadeUntil = introHeight ; // 200px scroll or more will equiv to 0 opacity
      var fading = $('div.logo');

      var offset = $(document).scrollTop()
          ,opacity=0
      ;

      var newOffset = offset - fadeStart;
      if( offset<=fadeStart ){
          newOffset = 0;
          opacity=1;
      }else if( offset<=fadeUntil ){
          newOffset = offset - fadeStart;
          opacity=1-offset/fadeUntil;
      }
      fading.css('opacity',opacity)
      fading.css('transform', 'translateY(-' + newOffset + 'px)');


        if ($(document).scrollTop() > 5) {
          $('.menu-button').addClass('move-down');
        } else {
          $('.menu-button').removeClass('move-down');
        }


    })
  }


  /*
  var checkPosition = function(){
    $(window).scroll( function (){
           //console.log('scroll');
           var introHeight = $('header.intro-box').height();
           var menuHeight = $('nav.main-menu').height();
           newHeight = introHeight - menuHeight;
           //console.log($(window).scrollTop());
           if ($(window).scrollTop() - 60 > newHeight) {

              if ($('.main-menu').hasClass('is-active')){

              }else{
                $('nav.scroll').addClass('fixed');
                $('nav.main-menu').css('transform', 'translateY(0)');
              }

           } else {
             $('nav.scroll').removeClass('fixed');
             $('nav.main-menu').css('transform', 'translateY(' + newHeight + 'px)');
           }
       });
  }

  var menuPosition = function(){
    var introHeight = $('header.intro-box').height()  ;
    var menuHeight = $('nav.main-menu').height();
    newHeight = introHeight  - menuHeight;
    $('nav.main-menu').css('transform', 'translateY(' + newHeight + 'px)');

    if ($(window).scrollTop() - 60 > newHeight) {
      $('nav.main-menu').css('transform', 'translateY(0)');

    } else {
      $('nav.main-menu').css('transform', 'translateY(' + newHeight + 'px)');
    }
  }
  */

  var fixLater = function(){
    $(window).scroll( function (){
           //console.log('scroll');
           var introHeight = $('header.intro-box').height();
           var menuHeight = $('nav.main-menu').height();
           newHeight = introHeight;
           //console.log($(window).scrollTop());
           if ($(window).scrollTop() > newHeight) {
             $('nav.main-menu.fixed--later').addClass('is-active');
           } else {
             $('nav.main-menu.fixed--later').removeClass('is-active');
           }
       });

       console.log($(window).scrollTop());

  }






  /*Mobile Menu*/

  $(window).scroll(function () {
       $currentScrollPos = $(document).scrollTop();
      //console.log('scroll' + $currentScrollPos);

   });

  var toggles = document.querySelectorAll(".menu-button");
    for (var i = toggles.length - 1; i >= 0; i--) {
      var toggle = toggles[i];
      toggleHandler(toggle);
    };
    function toggleHandler(toggle) {
      toggle.addEventListener( "click", function(e) {
        e.preventDefault();
        (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");


        if($('.menu-button').hasClass('is-active')){
           //console.log('current ' + $currentScrollPos);

          $('.main-menu').addClass('is-active');
          $('body').css({
                        'position': 'fixed',
                        'top' : -$currentScrollPos
                    });
          localStorage.cachedScrollPos = $currentScrollPos;
          //console.log('localStorage.cachedScrollPos ' + localStorage.cachedScrollPos);
        }else{
            $('.main-menu').removeClass('is-active');
            $('body').css({
                          'position': 'relative',
                           'top' : 0
                      });
          $('body').scrollTop(localStorage.cachedScrollPos);
        }
      });
    }


    var loadInstagram = function(){

      $.ajax({
          url: "https://api.instagram.com/v1/users/4493500693/media/recent/?access_token=4493500693.1677ed0.ba6587e1f9004855b04648af332997c4&count=2",

          // The name of the callback parameter, as specified by the YQL service
          jsonp: "callback",

          // Tell jQuery we're expecting JSONP
          dataType: "jsonp",

          // Tell YQL what we want and that we want JSON
          data: {
              q: "select title,abstract,url from search.news where query=\"cat\"",
              format: "json"
          },

          // Work with the response
          success: function( response ) {
              console.log( response ); // server response
          }
      });

    }



})(jQuery);
