<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{secure_asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{secure_asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{secure_asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{secure_asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{secure_asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{secure_asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{secure_asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{secure_asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{secure_asset('assets/css/style.css')}}" rel="stylesheet">
  
  

  <!-- =======================================================
  * Template Name: Green - v4.6.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script src="https://kit.fontawesome.com/385cab091d.js" crossorigin="anonymous"></script>
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

     
      <a href="{{ action('Admin\AnsenaController@home') }}" class="logo me-auto"><img src="{{secure_asset('assets/img/logo.png')}}" alt="ぐり〜んりぷる" class="img-fluid"></a>
      
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
      
          <li><a class="nav-link scrollto" href="{{ action('Admin\AnsenaController@about') }}">ABOUT US</a></li>
          <li class="dropdown"><a href="#"><span>MENU</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
           
               <li class="dropdown"><a href="#menu3"><span>フェイシャル</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ action('Admin\AnsenaController@menu1') }}">金箔エステ</a></li>
                  <li><a href="{{ action('Admin\AnsenaController@menu2') }}">フォースカッターfacial</a></li>
                  <li><a href="{{ action('Admin\AnsenaController@menu3') }}">フォトフェイシャル</a></li>
                </ul>
              </li>
              
             <li class="dropdown"><a href="#menu2"><span>BODY</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ action('Admin\AnsenaController@menu4') }}">フォースカッターBODY</a></li>
                  <li><a href="{{ action('Admin\AnsenaController@menu5') }}">脱毛</a></li>
                  
                  
                </ul>
              </li>
              
              
              
               <li class="dropdown"><a href="#menu1"><span>マシンメンテナンス</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ action('Admin\AnsenaController@menu6') }}">酸素カプセル</a></li>
                  <li><a href="{{ action('Admin\AnsenaController@menu7') }}">コラーゲンマシン</a></li>
                  <li><a href="{{ action('Admin\AnsenaController@menu8') }}">高濃度水素吸入（suisonia)</a></li>
                </ul>
              </li>
        
        
          <li class="dropdown"><a href="#menu4"><span>その他</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
            　　　　<li><a href="{{ action('Admin\AnsenaController@menu9') }}">布施治療（完全紹介制）</a></li>
                  <li><a href="{{ action('Admin\AnsenaController@menu10') }}">ファスティング</a></li>
                  <li><a href="{{ action('Admin\AnsenaController@menu11') }}">ブライダル</a></li>
                 
                </ul>
              </li>
              
            </ul>
          </li>
          
             
          
          <li><a class="nav-link scrollto" href="{{ action('Admin\AnsenaController@topics') }}">TOPICS</a></li>
          <li><a class="nav-link scrollto" href="https://docs.google.com/forms/d/e/1FAIpQLSeuqIEo6cN37INCrLz2ksrT8lRfnYY91C4i4fo57nKeJ0fvcA/viewform">CONTACT</a></li>
          <li><a class="nav-link scrollto" href="#contact">ACCESS</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


<main> @yield('content')</main>

 <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
       <a href="https://ansena.jp/" class="logo me-auto"><img src="{{secure_asset('assets/img/logo.png')}}" alt="あんせな" class="img-fluid"></a>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>株式会社あんせな</span></strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{secure_asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{secure_asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{secure_asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{secure_asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{secure_asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{secure_asset('assets/js/main.js')}}"></script>

</body>

</html>