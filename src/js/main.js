(function($){
  var introHeight = $('header.intro-box').height();
  var menuHeight = $('nav.main-menu').height();

  $(document).ready(function(){
    console.log('Hello World');
    menuPosition();
    checkPosition();
    animateLogo();
  });

  $(window).resize(function(){
    var introHeight = $('header.intro-box').height();
    var menuHeight = $('nav.main-menu').height();
    newHeight = introHeight - menuHeight;
    menuPosition();
    checkPosition();
  });


  var animateLogo = function(){
    $(window).scroll(function(){
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
    })
  }



  var checkPosition = function(){
    $(window).scroll( function (){
           //console.log('scroll');
           var introHeight = $('header.intro-box').height();
           var menuHeight = $('nav.main-menu').height();
           newHeight = introHeight - menuHeight;
           //console.log($(window).scrollTop());
           if ($(window).scrollTop() > newHeight) {
             $('nav.scroll').addClass('fixed');
               $('nav.main-menu').css('transform', 'translateY(0)');
           } else {
             $('nav.scroll').removeClass('fixed');
             $('nav.main-menu').css('transform', 'translateY(' + newHeight + 'px)');
           }
       });
  }

  var menuPosition = function(){
    var introHeight = $('header.intro-box').height();
    var menuHeight = $('nav.main-menu').height();
    newHeight = introHeight - menuHeight;
    $('nav.main-menu').css('transform', 'translateY(' + newHeight + 'px)');

    if ($(window).scrollTop() > newHeight) {
      $('nav.main-menu').css('transform', 'translateY(0)');

    } else {
      $('nav.main-menu').css('transform', 'translateY(' + newHeight + 'px)');
    }
  }







})(jQuery);
