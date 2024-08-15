/*
	Template Name: Cornike - Business HTML5 Template
	Author: Tripples
	Author URI: https://themeforest.net/user/tripples
	Description: Cornike - Business HTML5 Template
	Version: 1.0

	1. Fixed header
	2. Main slideshow
	3. Site search
	4. Owl Carousel
	5. Video popup
	6. Counter
	7. Contact form
	8. Back to top
  
*/


jQuery(function ($) {
   "use strict";

   $(window).on('load', function () {
      checkScreenSize();
   });

   // detect touch 
   if (!("ontouchstart" in document.documentElement)) {
   document.documentElement.className += "no-touch";
   }
   $('.ts-service-overlay').on('touchstart touchend', function(e) {
       $(this).toggleClass('over');         
   });


   /* ----------------------------------------------------------- */
   /*  Mobile Menu
   /* ----------------------------------------------------------- */

   function checkScreenSize() {
      var newWindowWidth = $(window).width();
      if (newWindowWidth < 991) {
         $(".nav.navbar-nav li a").on("click", function () {
            $(this).parent("li").find(".dropdown-menu").slideToggle();
            $(this).find("i").toggleClass("fa-angle-down fa-angle-up");
         });
      } else {
         $(".nav.navbar-nav li a").on("click", function () {
            console.log('do nothing');
         });
      }
   }

   

   /* ----------------------------------------------------------- */
   /*  Main slideshow
   /* ----------------------------------------------------------- */

   $('#main-slide').carousel({
      pause: true,
      interval: 100000,
      dots:true
   });




   /* ----------------------------------------------------------- */
   /*  Site search
   /* ----------------------------------------------------------- */

   $('.nav-search').on('click', function () {
      $('.search-block').fadeIn(350);
      $('.nav-search').addClass('hide');
   });

   $('.search-close').on('click', function () {
      $('.search-block').fadeOut(350);
      $('.nav-search').removeClass('hide');
   });



   /* ----------------------------------------------------------- */
   /*  Owl Carousel
   /* ----------------------------------------------------------- */

   //Testimonial slide

   $("#testimonial-slide").owlCarousel({

      loop: false,
      autoplay: false,
      autoplayHoverPause: true,
      nav: true,
      margin: 0,
      dots: false,
      mouseDrag: true,
      touchDrag: true,
      slideSpeed: 500,
      navText: ["<i class='icon icon-left-arrow2'></i>", "<i class='icon icon-right-arrow2'></i>"],
      items: 1,
      responsive: {
         0: {
            items: 1
         },


         600: {
            items: 1
         }
      }

   });



   //Partners slide

   $("#partners-carousel").owlCarousel({

      loop: true,
      autoplay: false,
      autoplayHoverPause: true,
      nav: true,
      margin: -50,
      dots: false,
      mouseDrag: true,
      touchDrag: true,
      slideSpeed: 500,
      navText: ["<i class='icon icon-left-arrow2'></i>", "<i class='icon icon-right-arrow2'></i>"],
      items: 5,
      responsive: {
         0: {
            items: 1
         },
         600: {
            items: 3
         },
         1000: {
            items: 5,
         }
      }

   });
   //testimonial slide

   $(".testimonial-carousel").owlCarousel({

      loop: true,
      autoplay: false,
      autoplayHoverPause: true,
      nav: true,
      dots: false,
      mouseDrag: true,
      touchDrag: true,
      slideSpeed: 500,
      navText: ["<i class='icon icon-chevron-left'></i>", "<i class='icon icon-chevron-right'></i>"],
      items: 1,
      responsive: {
         0: {
            items: 1
         },
         600: {
            items: 1
         },
         1000: {
            items: 1,
         }
      }

   });
   //testimonial slide

   $(".testimonial-slide").owlCarousel({

      loop: true,
      autoplay: false,
      autoplayHoverPause: true,
      margin: 30,
      mouseDrag: true,
      touchDrag: true,
      smartSpeed: 900,
      nav: true,
      dots: false,
      navText: ["<i class='icon icon-left-arrow2'></i>", "<i class='icon icon-right-arrow2'></i>"],
      items: 3,
      responsive: {
         0: {
            items: 1
         },
         600: {
            items: 1
         },
         1000: {
            items: 3,
         }
      }

   });


   //testimonial slide

   $(".testimonial-classic-slider").owlCarousel({

      loop: true,
      autoplay: false,
      autoplayHoverPause: true,
      nav: true,
      dots: false,
      margin: 30,
      mouseDrag: true,
      touchDrag: true,
      smartSpeed: 900,
      nav: false,
      dots: false,
      navText: ["<i class='icon icon-left-arrow2'></i>", "<i class='icon icon-right-arrow2'></i>"],
      items: 3,
      responsive: {
         0: {
            items: 1
         },
         600: {
            items: 2
         },
         1000: {
            items: 3,
         }
      }

   });


   //Page slide

   $(".page-slider").owlCarousel({

      loop: true,
      animateOut: 'fadeOut',
      autoplay: false,
      autoplayHoverPause: true,
      nav: true,
      margin: 0,
      dots: false,
      mouseDrag: true,
      touchDrag: true,
      slideSpeed: 500,
      navText: ["<i class='icon icon-left-arrow2'></i>", "<i class='icon icon-right-arrow2'></i>"],
      items: 1,
      responsive: {
         0: {
            items: 1
         },
         600: {
            items: 1
         }
      }

   });

   //Page slide
   $(".featured-cases-slide").owlCarousel({

      loop: false,
      animateOut: 'fadeOut',
      autoplay: false,
      autoplayHoverPause: true,
      nav: true,
      margin: 0,
      dots: false,
      mouseDrag: true,
      touchDrag: true,
      slideSpeed: 500,
      navText: ["<i class='icon icon-left-arrow2'></i>", "<i class='icon icon-right-arrow2'></i>"],
      items: 1,
      responsive: {
         0: {
            items: 1
         },
         600: {
            items: 1
         }
      }

   });


   //Team slide

   $("#team-slide").owlCarousel({

      loop: false,
      animateOut: 'fadeOut',
      nav: true,
      navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
      margin: 0,
      dots: false,
      mouseDrag: true,
      touchDrag: true,
      slideSpeed: 800,
      items: 4,
      responsive: {
         0: {
            items: 1
         },
         480: {
            items: 2
         },
         1000: {
            items: 4,
            loop: false
         }
      }

   });


   /* ----------------------------------------------------------- */
   /*  Counter
   /* ----------------------------------------------------------- */

   $('.counterUp').counterUp({
      delay: 10,
      time: 1000
   });



   /* ----------------------------------------------------------- */
   /*  Contact form
   /* ----------------------------------------------------------- */

   $('#contact-form').submit(function () {

      var $form = $(this),
         $error = $form.find('.error-container'),
         action = $form.attr('action');

      $error.slideUp(750, function () {
         $error.hide();

         var $name = $form.find('.form-control-name'),
            $email = $form.find('.form-control-email'),
            $subject = $form.find('.form-control-subject'),
            $message = $form.find('.form-control-message');

         $.post(action, {
               name: $name.val(),
               email: $email.val(),
               subject: $subject.val(),
               message: $message.val()
            },
            function (data) {
               $error.html(data);
               $error.slideDown('slow');

               if (data.match('success') != null) {
                  $name.val('');
                  $email.val('');
                  $subject.val('');
                  $message.val('');
               }
            }
         );

      });

      return false;

   });

   /* ----------------------------------------------------------- */
   /*  Back to top
   /* ----------------------------------------------------------- */

   $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
         $('#back-to-top').fadeIn();
      } else {
         $('#back-to-top').fadeOut();
      }
   });
   // scroll body to 0px on click
   $('#back-to-top').click(function () {
      $('#back-to-top').tooltip('hide');
      $('body,html').animate({
         scrollTop: 0
      }, 800);
      return false;
   });

   $('#back-to-top').tooltip('hide');



});