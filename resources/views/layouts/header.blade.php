<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Barakah Money Transfer</title>
  <meta content="description" name="Barakah">
  <meta content="author" name="Muhammad Ibrahim Bin Karim || www.devsstream.com">
  <meta content="keyword" name="Barakah">

  <!-- Favicons -->
  <link href="{{ asset('fontend/assets/img/barakah/Fav-icon.png')}}" rel="icon">
  <link href="{{ asset('fontend/assets/img/barakah/Fav-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('fontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('fontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('fontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('fontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('fontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="{{ asset('fontend/assets/css/variables.css')}}" rel="stylesheet">
  <!-- <link href="{{ asset('fontend/assets/css/variables-blue.css')}}" rel="stylesheet"> -->
  <!-- <link href="{{ asset('fontend/assets/css/variables-green.css')}}" rel="stylesheet"> -->
  <!-- <link href="{{ asset('fontend/assets/css/variables-orange.css')}}" rel="stylesheet"> -->
  <!-- <link href="{{ asset('fontend/assets/css/variables-purple.css')}}" rel="stylesheet"> -->
  <!-- <link href="{{ asset('fontend/assets/css/variables-red.css')}}" rel="stylesheet"> -->
  <!-- <link href="{{ asset('fontend/assets/css/variables-pink.css')}}" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="{{ asset('fontend/assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Razikeen - v2.1.0
  * Template URL: https://bootstrapmade.com/Razikeen-bootstrap-business-template/
  * Author: Md Ibrahim Bin Karim
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('fontend/assets/img/barakah/Al-baraka-logo.png')}}" alt="">
        <!-- <h1>Razikeen<span>.</span></h1> -->
      </a>

      <nav id="navbar" class="navbar">
        <ul>

          <li class=""><a href="/"><span>Home</span> <!-- <i class="bi bi-chevron-down dropdown-indicator"></i> --></a>
            <!-- <ul>
              <li><a href="index.html" class="active">Home 1 - index.html</a></li>
              <li><a href="index-2.html">Home 2 - index-2.html</a></li>
              <li><a href="index-3.html">Home 3 - index-3.html</a></li>
              <li><a href="index-4.html">Home 4 - index-4.html</a></li>
            </ul> -->
          </li>

          <li><a class="nav-link scrollto" href="{{url('/about/')}}">About</a></li>
          {{-- <li><a class="nav-link scrollto" href="{{url('/')}}#about">About</a></li> --}}
          <li><a class="nav-link scrollto" href="{{url('/services/')}}">Services</a></li>
          <li><a class="nav-link scrollto" href="{{url('/contact/')}}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

       <a class="btn-getstarted scrollto d-none d-md-block" href="https://worldwide.barakahmoneytransfer.com/">Get Started</a>

    </div>
  </header><!-- End Header -->
