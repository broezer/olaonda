(function($){

  $(document).ready(function(){
    console.log('Hello World');
  });


  if(isMobile.phone) {
  $('.phone-number').each(function() {
    $(this).replaceWith(
      $('<a href="tel:' + this.innerHTML + '">' + this.innerHTML + '</a>')
    );
  });
}

})(jQuery);
