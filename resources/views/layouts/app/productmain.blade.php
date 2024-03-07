<!doctype >
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
      <link rel="stylesheet" href="{{ asset('assets/css/main.css?v4') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/s') }}">
      <linkrel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
      <link rel="stylesheet" href="{{ asset('assets/css/webslidemenu.css?v1') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/white-gry.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/fade-down.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
   </head>
   <body>
@include('frontend.common.header')
  
        
  @yield('content')
  @include('frontend.common.footer')



  <button class="btn btn__enquiry" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Enquire Now</button>

<div class="offcanvas offcanvas-end enquiry-off-canvas" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Enquire Now</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  
   <form>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your name">
      </div>
      <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Email</label>
         <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email">
       </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Phone</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter your phone">
      </div>
      <div class="mb-3">
        <textarea name="" class="form-control" id="" cols="30" rows="10" placeholder="Enter your message"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   
  </div>
</div>
   



   <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
   <script src="{{ asset('assets/js/AppMeasurement.min.js') }}"></script>
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   <script src="{{ asset('assets/js/AppMeasurement_Module_ActivityMap.min.js') }}"></script>
   <script src="{{ asset('assets/js/jquery.hiSlider.js') }}"></script>
   <script src="{{ asset('assets/js/jquery.scrollbar.js') }}"></script>
   <script src="{{ asset('assets/js/custom.js') }}"></script>
   <script src="{{ asset('assets/js/launch-b43d331c5522-development.min.js') }}"></script>
   <script src="{{ asset('assets/js/laydate.js') }}"></script>
   <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
   <script src="{{ asset('assets/js/scrolltopcontrol.js') }}"></script>
   <script src="{{ asset('assets/js/tc.js') }}"></script>
   <script src="{{ asset('assets/js/video.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
   <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
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
   </script>


   

   </body>
</html>