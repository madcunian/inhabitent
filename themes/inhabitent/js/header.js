(function($) {

   $(window).scroll(function() {

    var winH = $(window).height();

    if ($(window).scrollTop() > winH) {
      $('.home header, .page-template-page-about header, .single-adventure header').addClass('site-header-green');
      $('.home header, .page-template-page-about header, .single-adventure header').removeClass('site-header');
      $('.page-template-page-about .site-content header.site-header-green').not(this).removeClass('site-header-green');

    } else if ($(window).scrollTop() < winH) {
      $('.home header, .page-template-page-about header, .single-adventure header').removeClass('site-header-green');
      $('.home header, .page-template-page-about header, .single-adventure header').addClass('site-header');
    }
  });

 })(jQuery);