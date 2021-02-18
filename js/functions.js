( function($) {

  $('body').on('mouseenter mouseleave', '.dropdown', function (e) {
      var dropdown = $(e.target).closest('.dropdown');
      var menu = $('.dropdown-menu', dropdown);
      dropdown.addClass('show');
      menu.addClass('show');
      setTimeout(function () {
          dropdown[dropdown.is(':hover') ? 'addClass' : 'removeClass']('show');
          menu[dropdown.is(':hover') ? 'addClass' : 'removeClass']('show');
      }, 300);
  });

  /**
   * Match Height (Including Safari onload fix)
   */
  function startMatchHeight() {
    $('.matchheight').matchHeight();
  }
  window.onload = startMatchHeight;

  // fancybox
  $(document).ready(function() {
  		$(".fancybox").fancybox();
  	});

  $('.navbar ul.navbar-nav > .dropdown > a[href]').click(function() {
  var dropdown = $(this).next('.dropdown-menu');
  /*
   * The dropdown can be non-existent
   * The dropdown can be already open by css
   * (for instance display: block from a custom :hover setting)
   * or a "show" class on the element which also sets a display: block;
   */
  if (dropdown.length == 0 || $(dropdown).css('display') !== 'none') {
      if (this.href) {
          location.href = this.href;
      }
  }
});

} ) (jQuery);

window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#31404E",
      "text": "#AAAEB2"
    },
    "button": {
      "background": "#14191F"
    }
  },
  "theme": "edgeless",
  "position": "bottom",
  "static": true,
  "content": {
    "message": "This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies.",
    "dismiss": "Close This",
    "link": "Find out more",
    "href": "/privacy-policy/"
  }
});

var mySwiper = new Swiper('.swiper-container', {
   // Optional parameters
   direction: 'horizontal',
   loop: true,

   // If we need pagination
   // pagination: {
   //   el: '.swiper-pagination',
   // },

   // Navigation arrows
   navigation: {
     nextEl: '.swiper-button-next',
     prevEl: '.swiper-button-prev',
   },

   // And if we need scrollbar
   scrollbar: {
     el: '.swiper-scrollbar',
   },
 });

 var swiperMultipe = new Swiper('.swiper-multiple', {

      loop: true,
      simulateTouch:false,
      draggable: false,
      allowTouchMove: false,

      breakpoints: {
        // when window width is >= 576px
        576: {
          slidesPerView: 1,
        },
        // when window width is >= 992px
        992: {
          slidesPerView: 2,
          spaceBetween: 50,
        },
      },

      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });

 var swiperPortfolio = new Swiper('.swiper-products', {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 0,

  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 1,
      spaceBetween: 0,
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 4,
      spaceBetween: 25,
    }
  },

  // freeMode: true,
  navigation: {
    nextEl: '.swiper-button-next-unique',
    prevEl: '.swiper-button-prev-unique',
  },
});
