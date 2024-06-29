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
  <title>SJA Martial Arts - Mixed Martial Arts</title>

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
  <meta property="og:title" content="SJA Martial Arts - Mixed Martial Arts" />
  <meta property="og:image" content="{{ url(asset('images/logo-image-black.png')) }}" />
  <meta property="og:url" content="http://martial-arts.free.nf/" />
  <meta property="og:site_name" content="SJA Martial Arts - Mixed Martial Arts" />
  <meta property="og:description" content="SJA Martial Arts - Mixed Martial Arts" />

@include('navbar')


<!--MMA Section --->

<section class="mma_section layout_padding">
  <div class="container">
    <div class="row">
      <!-- Content Column -->
      <div class="col-lg-12">
        <div class="content-container rounded-3 shadow p-4">
          <h1>MMA (Mixed Martial Arts)</h1>
          <div class="heading_container">
            <h2>What is MMA?</h2>
            <span>MMA stands for Mixed Martial Arts.</span>
          </div>
          <p>
            Mixed Martial Arts has been made famous by the UFC. 
            MMA is a combination of all styles of combat like boxing, 
            wrestling, karate etc. Our MMA programme is run following 
            the guidelines of the IMMAF organisation with a great structure 
            for promoting people and giving them the tools necessary to 
            become a well rounded martial artist.
          </p>
        </div>
      </div>
      <!-- Left Top Image -->
      <div class="col-lg-6 col-md-12 mb-4 order-lg-1 order-md-2">
        <div class="image-item rounded-3 shadow">
          <img src="{{ asset('images/mma-image-1.jpg') }}" class="img-fluid rounded-3" alt="mma Left Top">
        </div>
      </div>
      <!-- Right Top Image -->
      <div class="col-lg-6 col-md-12 mb-4 order-lg-2 order-md-1">
        <div class="image-item rounded-3 shadow">
          <img src="{{ asset('images/mma-image-2.jpg') }}" class="img-fluid rounded-3" alt="mma Right Top">
        </div>
      </div>
      <!-- Left Bottom Image -->
      <div class="col-lg-6 col-md-12 mb-4 order-lg-3 order-md-4">
        <div class="image-item rounded-3 shadow">
          <img src="{{ asset('images/mma-image-3.jpg') }}" class="img-fluid rounded-3" alt="mma Left Bottom">
        </div>
      </div>
      <!-- Right Bottom Image -->
      <div class="col-lg-6 col-md-12 mb-4 order-lg-4 order-md-3">
        <div class="image-item rounded-3 shadow">
          <img src="{{ asset('images/mma-image-4.jpg') }}" class="img-fluid rounded-3" alt="mma Right Bottom">
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .mma_section {
    padding: 60px 0;
    position: relative;
    background-color: #ffffff;
    color: #000000;
  }

  .mma_section::before {
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

  .image-item {
    overflow: hidden;
    border-radius: 10px;
    height: 300px; /* Set a fixed height */
  }

  .image-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
    cursor: pointer;
  }

  .image-item:hover img {
    transform: scale(1.05);
  }

  .content-container {
    background-color: #1a1a1a;
    border: 2px solid #00ffcc;
    border-radius: 10px;
    padding: 20px;
    margin-top: 30px;
  }

  .heading_container {
    margin-bottom: 20px;
  }

  h1, h2 {
    color: #00ffcc;
    font-family: 'Orbitron', sans-serif;
    font-weight: bold;
  }

  h2 {
    font-size: 28px;
    margin-bottom: 10px;
  }

  span {
    color: #00ffcc;
    font-style: italic;
    display: block;
    margin-bottom: 20px;
  }

  p {
    font-size: 16px;
    line-height: 1.6;
    color: #ffffff;
  }

  @media (max-width: 768px) {
    .col-lg-6 {
      max-width: 100%;
    }
  }

  @media (max-width: 576px) {
    .col-lg-6 {
      max-width: 100%;
    }
  }
</style>

<!--MMA Section --->

@include('footer')