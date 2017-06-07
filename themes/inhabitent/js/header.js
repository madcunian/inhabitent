(function($) {

   $(window).scroll(function() {

    var winH = $(window).height();

    if ($(window).scrollTop() > winH) {
      $('.home header, .page-template-page-about header').addClass('site-header-green');
      $('.home header, .page-template-page-about header').removeClass('site-header');

    } else if ($(window).scrollTop() < winH) {
      $('.home header, .page-template-page-about header').removeClass('site-header-green');
      $('.home header, .page-template-page-about header').addClass('site-header');
    }

    var advWinH = $('.adventure-image img').height();

    if ($(window).scrollTop() > advWinH) {
      $('.adventure-template-default header').addClass('site-header-green');
      $('.adventure-template-default header').removeClass('site-header');

    } else if ($(window).scrollTop() < advWinH) {
      $('.adventure-template-default header').removeClass('site-header-green');
      $('.adventure-template-default header').addClass('site-header');
    }
  });

 })(jQuery);