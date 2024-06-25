@include('header')

<body>
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="{{asset('images/hero.jpg')}}" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid header_top_container">

          <div class="contact_nav">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Gym: SJA Martial Arts, 1 The Kingsway
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 123455678990
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                contact-us@sjamartialarts.co.uk
              </span>
            </a>
          </div>
          <div class="social_box">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand " href="index.html"> SJA Martial Arts </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> MMA Classes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html">BJJ Classes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="team.html"> Blogs </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://api.leadconnectorhq.com/widget/group/AOK2OZGakUKjlGZ1MlIV">Book a Call</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->

    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-lg-10 col-md-11 mx-auto">
                  <div class="detail-box">
                    <h1>
                    Our MMA Program <br>
                    is designed to
                    </h1>
                    <p>
                      introduce beginners into Mixed Martial Arts through fundamental techniques, welcoming coaches and students. We have newcomers almost every session and our experienced coaches will be there to make your first class as enjoyable as possible!
                    </p>
                    <div class="btn-box">
                      <a href="https://api.leadconnectorhq.com/widget/form/TBmLsbOisJBOh2tDIa8F" class="btn1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-lg-10 col-md-11 mx-auto">
                  <div class="detail-box">
                    <h1>
                      We have a wide <br>
                      range of BJJ
                    </h1>
                    <p>
                        Programs at our academy starting from 
                        fundamentals all the way to advances! 
                        These classes are taught by some of the 
                        most accomplished Grapplers in the UK. 
                        A great hobby to get started with if you 
                        would like a mental and physical challenge!
                    </p>
                    <div class="btn-box">
                      <a href="https://api.leadconnectorhq.com/widget/form/TBmLsbOisJBOh2tDIa8F" class="btn1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-lg-10 col-md-11 mx-auto">
                  <div class="detail-box">
                    <h1>
                     Our Self Defence <br>
                     Program for kids
                    </h1>
                    <p>
                        consists of real self defence 
                        skills including physical and 
                        verbal techniques to keep you safe. 
                        More importantly the programs 
                        emphasis on life skills such as 
                        respect, discipline and many others!
                    </p>
                    <div class="btn-box">
                      <a href="https://api.leadconnectorhq.com/widget/form/TBmLsbOisJBOh2tDIa8F" class="btn1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

@include('footer')