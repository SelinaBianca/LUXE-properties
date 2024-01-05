<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <meta name="description" content="" />
        <meta name="keywords" content="bootstrap, bootstrap5" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet"
        />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="stylesheet" href="asset/fonts/icomoon/style.css" />
        <link rel="stylesheet" href="asset/fonts/flaticon/font/flaticon.css" />

        <link rel="stylesheet" href="asset/css/tiny-slider.css" />
        <link rel="stylesheet" href="asset/css/aos.css" />
        <link rel="stylesheet" href="asset/css/style.css" />

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />
        @livewire('navigation-menu')
        <main>
            {{ $slot }}
        </main>
        

        <div class="site-footer">
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <div class="widget">
                    <h3>Contact</h3>
                    <address>232/7 Colombo road, Negombo</address>
                    <ul class="list-unstyled links">
                      <li><a href="tel://94762616332">(+94)76-2616332</a></li>
                      <li><a href="tel://94777511115">(+94)77-7511115</a></li>
                      <li>
                        <a href="mailto:selinabianca22@icloud.com">selinabianca22@icloud.co</a>
                      </li>
                    </ul>
                  </div>
                  <!-- /.widget -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                  <div class="widget">
                    <h3>Sources</h3>
                    <ul class="list-unstyled float-start links">
                      <li><a href="#">About us</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Vision</a></li>
                      <li><a href="#">Mission</a></li>
                      <li><a href="#">Terms</a></li>
                      <li><a href="#">Privacy</a></li>
                    </ul>
                    <ul class="list-unstyled float-start links">
                      <li><a href="#">Partners</a></li>
                      <li><a href="#">Business</a></li>
                      <li><a href="#">Careers</a></li>
                      <li><a href="#">Blog</a></li>
                      <li><a href="#">FAQ</a></li>
                      <li><a href="#">Creative</a></li>
                    </ul>
                  </div>
                  <!-- /.widget -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                  <div class="widget">
                    <h3>Links</h3>
                    <ul class="list-unstyled links">
                      <li><a href="#">Our Vision</a></li>
                      <li><a href="#">About us</a></li>
                      <li><a href="#">Contact us</a></li>
                    </ul>
      
                    <ul class="list-unstyled social">
                      <li>
                        <a href="#"><span class="icon-instagram"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="icon-twitter"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="icon-facebook"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="icon-linkedin"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="icon-pinterest"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="icon-dribbble"></span></a>
                      </li>
                    </ul>
                  </div>
                  <!-- /.widget -->
                </div>
                <!-- /.col-lg-4 -->
              </div>
              <!-- /.row -->
      
              <div class="row mt-5">
                <div class="col-12 text-center">
                  <!-- 
                    **==========
                    NOTE: 
                    Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
                    **==========
                  -->
      
                  <p>
                    Copyright &copy;Selina Bianca
                    {{-- <script>
                      document.write(new Date().getFullYear());
                    </script> --}}
                    {{-- . All Rights Reserved. &mdash; Designed with love by
                    <a href="https://untree.co">Untree.co</a> --}}
                    <!-- License information: https://untree.co/license/ -->
                  </p>
                  {{-- <div>
                    Distributed by
                    <a href="https://themewagon.com/" target="_blank">themewagon</a>
                  </div> --}}
                </div>
              </div>
            </div>
            <!-- /.container -->
          </div>
          <!-- /.site-footer -->
      
          <!-- Preloader -->
          <div id="overlayer"></div>
          <div class="loader">
            <div class="spinner-border" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
          </div>
      
          <script src="/asset/js/bootstrap.bundle.min.js"></script>
          <script src="/asset/js/tiny-slider.js"></script>
          <script src="/asset/js/aos.js"></script>
          <script src="/asset/js/navbar.js"></script>
          <script src="/asset/js/counter.js"></script>
          <script src="/asset/js/custom.js"></script>
        @stack('modals')

        @livewireScripts
    </body>
</html>
