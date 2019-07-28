<!doctype html>
<html lang="en">
  <head>
    <title>Careers &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/frontend_css/custom-bs.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend_css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend_css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/frontend_fronts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/frontend_fronts/line-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend_css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend_css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend_css/style.css')}}">   
  
  


   
  
  </head>
  <body id="top">


<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
      @include('layouts.frontend_layout.front_header')

    <!-- HOME -->
    @yield('contents')
    
  @include('layouts.frontend_layout.main_content')

    @include('layouts.frontend_layout.front_footer')
   
  </div>

    <!-- SCRIPTS -->
    <script src="{{asset('js/frontend_js/jquery.min.js')}}"></script>
    <script src="{{asset('js/frontend_js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/frontend_js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/frontend_js/stickyfill.min.js')}}"></script>
    <script src="{{asset('js/frontend_js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/frontend_js/jquery.easing.1.3.js')}}"></script>
    
    <script src="{{asset('js/frontend_js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/frontend_js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('js/frontend_js/owl.carousel.min.js')}}"></script>
    
    <script src="{{asset('js/frontend_js/custom.js')}}"></script><script>



     
  </body>
</html>