var hs_height;
jQuery(window).load(function(){

  //jQuery(".slick_pause").insertBefore(jQuery(".carousel-next"));
	jQuery('body').addClass('pageLoaded');

    // jQuery('.home_top_slider .inner_slider').height(jQuery(window).height() -156);
    //jQuery('.home_section_two').height(jQuery(window).height() -156);
    // jQuery('.home_section_three').height(jQuery(window).height() -156);
    // hs_height =  jQuery('.home_section_three').height();
    //


    jQuery('iframe').contents().find("head").append(jQuery("<style type='text/css'>  .myclss{background-color:#ccc;}  </style>"));
});

jQuery(window).resize(function() {
    //hs_height =  jQuery('.home_section_three').height();
    //console.log(hs_height);
    // jQuery('.home_top_slider .inner_slider').height(jQuery(window).height() -156);
    // jQuery('.home_section_two').height(jQuery(window).height() -156);
    // jQuery('.home_section_three').height(jQuery(window).height() -156);
   // jQuery('.row_sec3').height(hs_height / 2);
});

jQuery(window).trigger('resize');


jQuery(document).ready(function($) {

	//add menu hovers for single posts
	jQuery(".sub-menu .current-post-ancestor").parents("li").addClass("current-menu-ancestor current-menu-parent");

   create_articles_slider();
   home_top_slider();

	 jQuery( ".toggle_search" ).click(function(e) {
        e.preventDefault();
        jQuery( ".abs_from" ).slideToggle( "fast", function() {

        });
    });

    jQuery( ".close_search" ).click(function(e) {
        e.preventDefault();
        jQuery( ".abs_from" ).slideToggle( "fast", function() {

        });
    });

    jQuery('.slick_pause a').click(function(e) {
      e.preventDefault();
      jQuery('.home_top_slider').slick('slickPause');
    });

    jQuery('.slick_play').on('click', function() {
        jQuery('.home_top_slider').slick('slickPlay');
    });



    // jQuery(".checkbox_designed label").click(function(){
    //   if(jQuery(this).find("input").is(":checked")){
    //     jQuery(this).parents(".checkbox_designed").addClass("active");
    //   }else{
    //     jQuery(this).parents(".checkbox_designed").removeClass("active");
    //   }
    // });

    //===================   S E C T I O N   S C R O L L  =================
    var parPosition = [];

    jQuery('.par').each(function() {
        parPosition.push(jQuery(this).offset().top);
    });

    jQuery('.vNav ul li a').click(function(){
      jQuery('html, body').animate({
        scrollTop: jQuery( jQuery.attr(this, 'href') ).offset().top -156
      }, 500);
        jQuery('.vNav ul li a').removeClass('active');
        jQuery(this).addClass('active');
      return false;
    });

    jQuery(document).scroll(function(){
      var position = jQuery(document).scrollTop(),
          index;
          for (var i=0; i<parPosition.length; i++) {
          if (position <= parPosition[i]) {
              index = i;
              break;
                  }
          }

          jQuery('.vNav ul li a').removeClass('active');
          jQuery('.vNav ul li a:eq('+index+')').addClass('active');
    });

      // jQuery('.fancybox').length && (function(){
      //   jQuery('.fancybox').fancybox({
      //     openEffect  : 'elastic',
      //     closeEffect : 'elastic',
      //     padding   : 5,
      //     helpers: {
      //       overlay: {
      //         locked: false
      //       }
      //     },
      //     afterClose: function(){
      //       jQuery(".topSearch_main_wrapper").attr("aria-hidden","true");
      //     }
      //   });
      // }());

      jQuery(".various").fancybox({
        openEffect  : 'elastic',
        closeEffect : 'elastic',
        maxWidth  : 350,
        maxHeight : 250,
        fitToView : false,
        autoSize  : false,
        closeClick  : false,
        openEffect  : 'none',
        closeEffect : 'none',
        wrapCSS : 'moxo_wrap'
      });

         // var $iframe = $('#iframe');
         //  $iframe.ready(function() {
         //      $iframe.contents().find("body").append('Test');
         //  });


        jQuery('#fancybox-frame1478440367252').contents().find("body").append("TESTTTTT");






	jQuery(document).foundation();
});


function create_articles_slider(){
  article_slider = jQuery(".wrap_articles");
  article_slider.slick({
    infinite: true,
    speed: 500,
    autoplay: true,
    fade: false,
    autoplaySpeed: 2000,
    slidesToShow: 3,
    slidesToScroll: 1,
    rtl: global_rtl,
    focusOnSelect: false,
    arrows: true,
    prevArrow: '<div class="carousel-prev carousel-arr"></div>',
    nextArrow: '<div class="carousel-next carousel-arr"></div>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows:false,
          slidesToShow: 2
        }
      },
      {
        breakpoint: 640,
        settings: {
          arrows:false,
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          dots:false,
          arrows:false,
          slidesToShow: 1
        }
      }
    ]
  });
}

function home_top_slider(){
  home_top_slider = jQuery(".home_top_slider");
  home_top_slider.slick({
    infinite: true,
    speed: 800,
    autoplay: true,
    fade: true,
    autoplaySpeed: 3000,

    slidesToShow: 1,
    slidesToScroll: 1,
    rtl: global_rtl,
    focusOnSelect: false,
    arrows: true,
    prevArrow: '<div class="carousel-prev carousel-arr"></div>',
    nextArrow: '<div class="carousel-next carousel-arr"></div>',
    responsive: [
      {
        breakpoint: 640,
        settings: {
          arrows:false,
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          dots:false,
          arrows:false,
          slidesToShow: 1
        }
      }
    ]
  });
}
