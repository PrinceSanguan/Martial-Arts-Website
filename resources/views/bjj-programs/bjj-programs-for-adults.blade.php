<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="{{asset('saru_logo.ico')}}" type="image/x-icon">
  <title>BJJ for Adults Classes in Swansea</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('css/responsive.css')}}" rel="stylesheet" />
</head>

  <!-- Open Graph meta tags -->
  <meta property="og:title" content="BJJ for Adults Classes in Swansea" />
  <meta property="og:image" content="{{ url(asset('images/logo-image-black.png')) }}" />
  <meta property="og:url" content="http://martial-arts.free.nf/" />
  <meta property="og:site_name" content="BJJ for Adults Classes in Swansea" />
  <meta property="og:description" content="BJJ for Adults Classes in Swansea" />

  @include('navbar')

  
</div>

  <!--BJJ For Adults In Swansea-->


  <section class="bjj_for_adults_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>BJJ Programs for Adults</h2>
        <hr>
        <p class="section-description">Join our Brazilian Jiu-Jitsu programs designed for adults at SJA Martial Arts. Enhance your skills, discipline, and physical fitness with our expert training.</p>
      </div>
  
      <!-- Carousel -->
      <div id="bjjAdultsCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <!-- Slide 1 -->
          <div class="carousel-item active">
            <img src="{{ asset('images/mma-image-3.jpg') }}" class="d-block w-100" alt="BJJ Programs for Adults Slide 1">
          </div>
          <!-- Slide 2 -->
          <div class="carousel-item">
            <img src="{{ asset('images/mma-image-2.jpg') }}" class="d-block w-100" alt="BJJ Programs for Adults Slide 2">
          </div>
          <!-- Slide 3 -->
          <div class="carousel-item">
            <img src="{{ asset('images/mma-image-1.jpg') }}" class="d-block w-100" alt="BJJ Programs for Adults Slide 3">
          </div>
        </div>
        <a class="carousel-control-prev" href="#bjjAdultsCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#bjjAdultsCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  
    </div>
  </section>
  
  <style>
    .bjj_for_adults_section {
      padding: 60px 0;
      position: relative;
      background-color: #ffffff;
      color: #0b0a0a;
    }
  
    .bjj_for_adults_section::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url("/images/logo-image.png");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      opacity: .50;
      filter: brightness(50%);
    }
  
    .heading_container {
      margin-bottom: 40px;
    }
  
    .section-description {
      font-size: 18px;
      max-width: 600px;
      margin: 0 auto;
      margin-bottom: 40px;
    }
  
    .carousel-item img {
      border-radius: 10px;
    }
  
    @media (max-width: 768px) {
      .section-description {
        font-size: 16px;
        padding: 0 20px;
      }
    }
  
    @media (max-width: 576px) {
      .section-description {
        font-size: 14px;
        padding: 0 10px;
      }
    }
  </style>
  
  <script>
    $(document).ready(function() {
      $('#bjjAdultsCarousel').carousel({
        interval: 5000, // Time in milliseconds between each slide (5 seconds here)
        pause: "hover", // Pause the carousel on mouse hover
        wrap: true // Enable continuous looping of slides
      });
    });
  </script>

   <!--End of BJJ For Adults In Swansea-->

@include('footer')
