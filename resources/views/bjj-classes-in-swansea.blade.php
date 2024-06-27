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
  <title>BJJ Classes in Swansea</title>

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
  <meta property="og:title" content="BJJ Classes in Swansea" />
  <meta property="og:image" content="{{ url(asset('images/logo-image-black.png')) }}" />
  <meta property="og:url" content="http://martial-arts.free.nf/" />
  <meta property="og:site_name" content="BJJ Classes in Swansea" />
  <meta property="og:description" content="BJJ Classes in Swansea" />

@include('navbar')


<!--bjj Section --->
<section class="bjj_section layout_padding">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="bjj-box">
          <div class="bjj-item">
            <h2>Learn BJJ in Swansea</h2>
            <br>
            <h3>BJJ Programs designed to take you from a Beginner to Advanced</h3>
            <br>
            <p class="bjj-description">Our BJJ Programs are taught by some of the best athletes in EUROPE! This means not only will you be joining a welcoming community but getting some of the highest level tuition! Hit the "Book a Call" button below!</p>
            <div class="carousel-container">
              <div id="bjj-carousel" class="carousel slide rounded-3 shadow" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/gallery-image-6.jpg" class="d-block w-100 rounded-3" alt="bjj Image 1">
                    <div class="carousel-caption d-none d-md-block text-white">
                      <h5>Training Sessions</h5>
                      <p>Join us for intense training sessions designed to improve your skills.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/gallery-image-7.jpg" class="d-block w-100 rounded-3" alt="bjj Image 2">
                    <div class="carousel-caption d-none d-md-block text-white">
                      <h5>Community Spirit</h5>
                      <p>Experience a strong community spirit with fellow martial artists.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/gallery-image-5.jpg" class="d-block w-100 rounded-3" alt="bjj Image 3">
                    <div class="carousel-caption d-none d-md-block text-white">
                      <h5>Coaching Excellence</h5>
                      <p>Receive coaching from experts who are passionate about bjj.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#bjj-carousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#bjj-carousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <br>
            <div class="cta-container">
              <a href="https://api.leadconnectorhq.com/widget/group/AOK2OZGakUKjlGZ1MlIV" class="cta-btn">Book a Call</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .bjj_section {
    padding: 60px 0;
    position: relative;
    background-color: #000;
    color: #fff;
  }

  .bjj_section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("/images/gallery-image-2.jpg");
    background-size: cover; /* Single image covering the background */
    background-repeat: no-repeat;
    background-position: center;
    opacity: .50;
    filter: brightness(70%);
  }

  .bjj-box {
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .bjj-item h2,
  .bjj-item h3,
  .bjj-item p {
    text-align: center;
    color: #ffffff;
    font-family: 'Orbitron', sans-serif;
  }

  .bjj-item h2 {
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 10px;
  }

  .bjj-item h3 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
  }

  .bjj-description {
    font-size: 18px;
    margin-bottom: 20px;
  }

  .carousel-container {
    position: relative;
    width: 100%;
    max-width: 100%;
    overflow: hidden;
    border-radius: 15px;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
  }

  .carousel-inner img {
    border-radius: 15px;
  }

  .carousel-caption {
    background-color: rgba(0, 0, 0, 0.7);
    padding: 15px;
    border-radius: 10px;
  }

  .cta-container {
    display: flex;
    justify-content: center;
  }

  .cta-btn {
    display: inline-block;
    padding: 12px 24px;
    background-color: #00ffcc;
    color: #000;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
    border-radius: 30px;
    transition: background-color 0.3s ease;
    text-decoration: none;
  }

  .cta-btn:hover {
    background-color: #00e6b8;
  }

  @media (max-width: 768px) {
    .bjj-box {
      padding: 0 15px;
    }

    .carousel-caption {
      background-color: rgba(0, 0, 0, 0.9);
    }
  }
</style>
<!--bjj Section --->

@include('footer')