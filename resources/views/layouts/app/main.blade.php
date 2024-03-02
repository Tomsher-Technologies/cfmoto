<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title></title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('assets/css/clientlib-all.lc-202401081956-lc.min.f12464e7415ea6247b9e9c9d91a43427.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/css.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/jquery.hiSlider.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/s') }}">
      <linkrel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
      <link rel="stylesheet" href="{{ asset('assets/css/webslidemenu.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/white-gry.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/fade-down.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
   
    <title>{{ env('APP_NAME') }}</title>
    @stack('header')
   
</head>

<body>
  
        @include('frontend.common.header')
  
        
                @yield('content')
                @include('frontend.common.footer')
        
    <!-- JavaScript -->
    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
      <script src="{{ asset('assets/js/AppMeasurement.min.js') }}"></script>
      <script src="{{ asset('assets/js/AppMeasurement_Module_ActivityMap.min.js') }}"></script>
      <script src="{{ asset('assets/js/clientlib-all.lc-202401081956-lc.min.92f1e1eb72923682eeedfbc16eb72d32.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.hiSlider.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.scrollbar.js') }}"></script>
      <script src="{{ asset('assets/js/launch-b43d331c5522-development.min.js') }}"></script>
      <script src="{{ asset('assets/js/laydate.js') }}"></script>
      <script src="{{ asset('assets/js/main.js') }}"></script>
      <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
      <script src="{{ asset('assets/js/scrolltopcontrol.js') }}"></script>
      <script src="{{ asset('assets/js/tc.js') }}"></script>
      <script src="{{ asset('assets/js/video.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
      
      <script src="{{ asset('assets/js/webslidemenu.js') }}"></script>
      <script type='text/javascript'>
         $(document).ready(function () {
           $("a[data-theme]").click(function () {
             $("head link#theme").attr("href", $(this).data("theme"));
             $(this).toggleClass('active').siblings().removeClass('active');
           });
           $("a[data-effect]").click(function () {
             $("head link#effect").attr("href", $(this).data("effect"));
             $(this).toggleClass('active').siblings().removeClass('active');
           });
         
         });
         
         var swiper = new Swiper('.product-slider', {
            spaceBetween: 30,
            effect: 'fade',
            // initialSlide: 2,
            loop: false,
            navigation: {
                nextEl: '.next',
                prevEl: '.prev'
            },
            // mousewheel: {
            //     // invert: false
            // },
            on: {
                init: function(){
                    var index = this.activeIndex;
         
                    var target = $('.product-slider__item').eq(index).data('target');
         
                    console.log(target);
         
                    $('.product-img__item').removeClass('active');
                    $('.product-img__item#'+ target).addClass('active');
                }
            }
         
         });
         
         swiper.on('slideChange', function () {
            var index = this.activeIndex;
         
            var target = $('.product-slider__item').eq(index).data('target');
         
            console.log(target);
         
            $('.product-img__item').removeClass('active');
            $('.product-img__item#'+ target).addClass('active');
         
            if(swiper.isEnd) {
                $('.prev').removeClass('disabled');
                $('.next').addClass('disabled');
            } else {
                $('.next').removeClass('disabled');
            }
         
            if(swiper.isBeginning) {
                $('.prev').addClass('disabled');
            } else {
                $('.prev').removeClass('disabled');
            }
         });
         
         $(".js-fav").on("click", function() {
            $(this).find('.heart').toggleClass("is-active");
         });
         
         
         (function ($) {
            $(function () {
              $(document).off('click.bs.tab.data-api', '[data-hover="tab"]');
              $(document).on('mouseenter.bs.tab.data-api', '[data-toggle="tab"], [data-hover="tab"]', function () {
                $(this).tab('show');
              });
            });
          })(jQuery);
      </script>
      <script>
         $(document).ready(function(){
            $('.nav-tabs > li > a').hover(function() {
                 $(this).tab('show');
            });
         })

         $(document).ready(function(){
            tippy('.tippy', {
              theme: 'light',
              size: 'big',
              arrow: true
            })
        });
      </script>
    
    @stack('footer')

    </body>
</html>