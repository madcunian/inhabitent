(function($) {
  
  $('.search-form').hide();

  $('.fa-search').on('click', function(event){
    event.preventDefault();

    $('.search-form').animate({width:'toggle'},350);
  });
})(jQuery);