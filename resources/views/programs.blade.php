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
  <title>Blogs</title>

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
  <meta property="og:title" content="Blogs" />
  <meta property="og:image" content="{{ url(asset('images/logo-image-black.png')) }}" />
  <meta property="og:url" content="http://martial-arts.free.nf/" />
  <meta property="og:site_name" content="Blogs" />
  <meta property="og:description" content="Blogs" />

@include('navbar')

<!-- blog section -->

<section class="blog_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Our Programs</h2>
      <hr>
    </div>
    <div class="row">
      <!-- Program 1 -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="program-item rounded-3 shadow">
          <a href="images/combat-jiu-jitsu.jpg" target="_blank">
            <img src="{{asset('images/blog-image-1.png')}}" class="img-fluid rounded-3" alt="Combat Jiu-Jitsu">
          </a>
          <div class="program-detail p-3">
            <h5 class="program-title">Mixed Martial Arts</h5>
            <p class="program-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis...</p>
          </div>
        </div>
      </div>
      <!-- Program 2 -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="program-item rounded-3 shadow">
          <a href="" target="_blank">
            <img src="{{asset('images/blog-image-2.png')}}" class="img-fluid rounded-3" alt="Brazilian Jiu-Jitsu">
          </a>
          <div class="program-detail p-3">
            <h5 class="program-title">Brazilian Jiu-Jitsu</h5>
            <p class="program-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis...</p>
          </div>
        </div>
      </div>
      <!-- Program 3 -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="program-item rounded-3 shadow">
          <a href="images/sub-grappling.jpg" target="_blank">
            <img src="{{asset('images/blog-image-3.png')}}" class="img-fluid rounded-3" alt="Sub Grappling">
          </a>
          <div class="program-detail p-3">
            <h5 class="program-title">Sub Grappling</h5>
            <p class="program-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis...</p>
          </div>
        </div>
      </div>
      <!-- Program 4 -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="program-item rounded-3 shadow">
          <a href="images/self-defense-kids.jpg" target="_blank">
            <img src="{{asset('images/blog-image-4.png')}}" class="img-fluid rounded-3" alt="Self Defense for Kids">
          </a>
          <div class="program-detail p-3">
            <h5 class="program-title">Self Defense for Kids</h5>
            <p class="program-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis...</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .blog_section {
    padding: 60px 0;
    position: relative;
    background-color: #020202;
    color: #fffdfd;
  }

  .blog_section::before {
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

  .program-item {
    background-color: #1a1a1a;
    border: 2px solid #00ffcc;
    border-radius: 10px;
    overflow: hidden;
    height: 100%;
  }

  .program-item img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: transform 0.3s ease;
  }

  .program-item:hover img {
    transform: scale(1.05);
  }

  .program-detail {
    padding: 20px;
  }

  .program-title {
    font-size: 24px;
    font-weight: bold;
    color: #00ffcc;
    margin-bottom: 10px;
    font-family: 'Orbitron', sans-serif;
  }

  .program-description {
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 20px;
  }

  @media (max-width: 768px) {
    .col-md-6 {
      max-width: 50%;
    }
  }

  @media (max-width: 576px) {
    .col-md-6 {
      max-width: 100%;
    }
  }
</style>

<!--end of blog section -->

@include('footer')

