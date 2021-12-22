$ = jQuery
jQuery(document).ready(function () {

  $(".mouse-scroll a").click(function () {
    $('html,body').animate({
        scrollTop: $("#content").offset().top
      },
      'slow');
  });

  /* body add-class */
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 500) {
      $("body").addClass("sticky-header");
    } else {
      $("body").removeClass("sticky-header");
    }
  });

  // search toggle
  var removeClass = true;
  $(".search-toggle").click(function () {
    $(".search-section").toggleClass('search-open');
    removeClass = false;
  });
  // when clicking the div : never remove the class
  $(".site-header .search-form label input").click(function () {
    removeClass = false;
  });
  // when click event reaches "html" : remove class if needed, and reset flag
  $("html, .close-icon").click(function () {
    if (removeClass) {
      $(".search-section").removeClass('search-open');
    }
    removeClass = true;
  });



  jQuery('.menu-top-menu-container').meanmenu({
    meanMenuContainer: '.main-navigation',
    meanScreenWidth: "1023",
    meanRevealPosition: "right",
  });


  /* back-to-top button*/

  $('.back-to-top').hide();
  $('.back-to-top').on("click", function (e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, 'slow');
  });


  $(window).scroll(function () {
    var scrollheight = 400;
    if ($(window).scrollTop() > scrollheight) {
      $('.back-to-top').fadeIn();

    } else {
      $('.back-to-top').fadeOut();
    }
  });


  // slider


  $('.banner-slider').slick({
    dots: true,
    infinite: true,
    speed: 700,
    slidesToShow: 1,
    autoplay: true,
    fade: true,
    arrows: false,
  });
  $('.product-slider').slick({
    dots: true,
    infinite: true,
    speed: 700,
    slidesToShow: 2,
    arrows: false,
    autoplay: true,
    responsive: [{
        breakpoint: 767,
        settings: {
          slidesToShow: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  $('.partner-slider').slick({
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 4,
    arrows: false,
    autoplay: true,
    responsive: [{
        breakpoint: 1023,
        settings: {
          slidesToShow: 3
        },
        breakpoint: 479,
        settings: {
          slidesToShow: 2
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  $('.testimonial-slider').slick({
    dots: true,
    infinite: true,
    speed: 700,
    slidesToShow: 1,
    autoplay: true,
    fade: true,
    arrows: false,
    adaptiveHeight: true
  });


  // counter js

  function count($this) {
    var current = parseInt($this.html(), 10);
    current = current + 1; /* Where 1 is increment */

    $this.html(++current);
    if (current > $this.data('count')) {
      $this.html($this.data('count'));
    } else {
      setTimeout(function () {
        count($this)
      }, 550);
    }
  }



  // sticky sidebar
  jQuery('#primary , #secondary').theiaStickySidebar({
    // Settings
    additionalMarginTop: 30
  });


  // counter

  var a = 0;
  jQuery(window).scroll(function ($) {

    var oTop = jQuery('.counter-section').offset().top - window.innerHeight;
    if (a == 0 && jQuery(window).scrollTop() > oTop) {
      jQuery('.counter-value').each(function () {
        var $this = jQuery(this),
          countTo = $this.attr('data-count');
        jQuery({
          countNum: $this.text()
        }).animate({
            countNum: countTo
          },

          {

            duration: 8000,
            easing: 'swing',
            step: function () {
              $this.text(Math.floor(this.countNum));
            },
            complete: function () {
              $this.text(this.countNum);
              //alert('finished');
            }

          });
      });
      a = 1;
    }

  });

  /*for pop up video*/
  jQuery('.popup-video').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

});