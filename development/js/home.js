$(document).ready(function() {
  $('.tieuchi-main').on({
        beforeChange: function(event, slick, currentSlide, nextSlide) {
            myLazyLoad.update();
        }
    }).slick({
        lazyLoad: 'ondemand',
        infinite: false,
        accessibility: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: js_autoplay,
        autoplaySpeed: 3000,
        speed: 1000,
        arrows: true,
        centerMode: false,
        dots: false,
        draggable: true,
        responsive: [{
            breakpoint: 830,
            settings: {
                slidesToShow: 3
            }
        },{
            breakpoint: 500,
            settings: {
                slidesToShow: 2
            }
        },{
            breakpoint: 330,
            settings: {
                slidesToShow: 1
            }
        }]
    });
    $('.doitac-main').on({
          beforeChange: function(event, slick, currentSlide, nextSlide) {
              myLazyLoad.update();
          }
      }).slick({
          lazyLoad: 'ondemand',
          infinite: false,
          accessibility: false,
          slidesToShow: 6,
          slidesToScroll: 1,
          autoplay: js_autoplay,
          autoplaySpeed: 3000,
          speed: 1000,
          arrows: true,
          centerMode: false,
          dots: false,
          draggable: true,
          responsive: [{
              breakpoint: 830,
              settings: {
                  slidesToShow: 4
              }
          },{
              breakpoint: 500,
              settings: {
                  slidesToShow: 3
              }
          },{
              breakpoint: 330,
              settings: {
                  slidesToShow: 2
              }
          }]
      });
      $('.giaychungnhan-main').on({
            beforeChange: function(event, slick, currentSlide, nextSlide) {
                myLazyLoad.update();
            }
        }).slick({
            lazyLoad: 'ondemand',
            infinite: false,
            accessibility: false,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: js_autoplay,
            autoplaySpeed: 3000,
            speed: 1000,
            arrows: true,
            centerMode: false,
            dots: false,
            draggable: true,
            responsive: [{
                breakpoint: 830,
                settings: {
                    slidesToShow: 4
                }
            },{
                breakpoint: 500,
                settings: {
                    slidesToShow: 3
                }
            },{
                breakpoint: 330,
                settings: {
                    slidesToShow: 2
                }
            }]
        });
  $('.tinnb-main').on({
        beforeChange: function(event, slick, currentSlide, nextSlide) {
            myLazyLoad.update();
        }
    }).slick({
        lazyLoad: 'ondemand',
        infinite: false,
        accessibility: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: js_autoplay,
        autoplaySpeed: 3000,
        speed: 1000,
        arrows: true,
        centerMode: false,
        dots: false,
        draggable: true,
        responsive: [{
            breakpoint: 830,
            settings: {
                slidesToShow: 3
            }
        },{
            breakpoint: 500,
            settings: {
                slidesToShow: 1
            }
        },{
            breakpoint: 330,
            settings: {
                slidesToShow: 1
            }
        }]
    });
      });