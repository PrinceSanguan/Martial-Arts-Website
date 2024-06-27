@include('header')

@include('navbar')

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

    <!-- about section -->
    
    <section class="video_section layout_padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="video-box">
              <div class="row">
                <div class="col-lg-6">
                  <div class="video-item">
                    <h3>Start your martial arts journey!</h3>
                    <p class="video-description">Listen to coach Ethan in the short video below as he talks you through some of the areas we pride ourselves in!</p>
                    <div class="video-container">
                      <video controls class="video-element">
                        <source src="{{asset('videos/5 things Pride SJA.mp4')}}" type="video/mp4">
                        Your browser does not support the video tag.
                      </video>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="video-item">
                    <h3>Learn BJJ in Swansea</h3>
                    <p class="video-description">We have a wide range of BJJ Programs at our academy starting from fundamentals all the way to advances! These classes are taught by some of the most accomplished Grapplers in the UK. A great hobby to get started with if you would like a mental and physical challenge!</p>
                    <div class="video-container">
                      <video controls class="video-element">
                        <source src="{{asset('videos/SJA Ads 1 Adults.mp4')}}" type="video/mp4">
                        Your browser does not support the video tag.
                      </video>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="video-item">
                    <h3>Learn MMA in Swansea</h3>
                    <p class="video-description">Our MMA Program is designed to introduce beginners into Mixed Martial Arts through fundamental techniques, welcoming coaches and students. We have newcomers almost every session and our experienced coaches will be there to make your first class as enjoyable as possible!</p>
                    <div class="video-container">
                      <video controls class="video-element">
                        <source src="{{asset('videos/SJA Ads 2 Adults.mp4')}}" type="video/mp4">
                        Your browser does not support the video tag.
                      </video>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="video-item">
                    <h3>No Gi Grappling Swansea</h3>
                    <p class="video-description">Our Submission Grappling program, focuses on wrestling, submissions and grappling techniques. This class is slightly more physical than our BJJ program and is coached by some of the highest level athletes in the UK.</p>
                    <div class="video-container">
                      <video controls class="video-element">
                        <source src="{{asset('videos/SJA Ads 3.mp4')}}" type="video/mp4">
                        Your browser does not support the video tag.
                      </video>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <style>
      .video_section {
        padding: 60px 0;
        position: relative; /* Ensure positioning context for pseudo-element */
        background-color: #ffffff; /* White background color */
        color: #0b0a0a; /* Light text color for contrast */
      }
    
      .video_section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url("/images/logo-image.png");
        background-size: cover; /* Single image covering the background */
        background-repeat: no-repeat;
        background-position: center;
        opacity: .50;
        filter: brightness(50%);
      }
    
      .video-box {
        display: flex;
        flex-direction: column; /* Display videos in a column by default */
        gap: 20px;
      }
    
      .row {
        margin-left: -10px; /* Adjust for Bootstrap grid column padding */
        margin-right: -10px; /* Adjust for Bootstrap grid column padding */
      }
    
      .col-lg-6 {
        padding-left: 10px; /* Adjust for Bootstrap grid column padding */
        padding-right: 10px; /* Adjust for Bootstrap grid column padding */
      }
    
      .video-item {
        width: 100%; /* Full width for each video item */
      }
    
      .video-item h3,
      .video-item p {
        text-align: center;
        color: #000000;
        font-family: 'Orbitron', sans-serif;
      }
    
      .video-item h3 {
        font-size: 26px;
        margin-bottom: 10px;
        font-weight: bold;
      }
    
      .video-description {
        font-size: 18px;
        margin-bottom: 10px;
      }
    
      .video-container {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 aspect ratio */
        height: 0;
        overflow: hidden;
        max-width: 100%;
        background: #000;
        border: 2px solid #00ffcc;
        border-radius: 10px;
      }
    
      .video-container video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: transform 0.3s ease, width 0.3s ease, height 0.3s ease;
        border-radius: 10px;
      }
    
      .video-container.portrait {
        padding-bottom: 75%; /* 4:3 aspect ratio (50% of original 16:9) */
      }
    
      .video-container.portrait video {
        width: 100%;
        height: auto;
        max-width: 100%; /* Ensure the video doesn't overflow parent */
        max-height: 100%; /* Ensure the video doesn't overflow parent */
      }
    
      .read-more-btn {
        text-align: center;
        margin-top: 10px;
        cursor: pointer;
        color: #040505;
      }
    
      .read-more-btn:hover {
        text-decoration: underline;
      }
    
      @media (min-width: 992px) {
        .video-box .row {
          display: flex; /* Use flexbox for rows on larger screens */
          flex-wrap: wrap; /* Allow items to wrap */
          gap: 20px; /* Adjust gap between items */
        }
    
        .video-box .col-lg-6 {
          flex: 0 0 calc(50% - 20px); /* 50% width for each item, accounting for gap */
          max-width: calc(50% - 20px); /* 50% width for each item, accounting for gap */
        }
      }
    </style>

    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const descriptions = document.querySelectorAll(".video-description");
        descriptions.forEach(description => {
          const text = description.textContent.trim();
          const maxLength = 30; // Maximum characters to display before truncating
          if (text.length > maxLength) {
            const truncatedText = text.slice(0, maxLength) + "...";
            description.textContent = truncatedText;

            const readMoreBtn = document.createElement("span");
            readMoreBtn.classList.add("read-more-btn");
            readMoreBtn.textContent = "Read More";
            description.insertAdjacentElement("beforeend", readMoreBtn);

            readMoreBtn.addEventListener("click", function() {
              description.textContent = text;
            });
          }
        });
      });
    </script>
    
    
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const videos = document.querySelectorAll('.video-element');
      
        videos.forEach(video => {
          video.addEventListener('click', function () {
            const container = video.parentElement;
            if (container.classList.contains('portrait')) {
              container.classList.remove('portrait');
            } else {
              container.classList.add('portrait');
            }
          });
      
          video.addEventListener('ended', function () {
            const container = video.parentElement;
            container.classList.remove('portrait');
          });
        });
      });
      </script>

    <!-- about section ends -->

    <!-- client section -->

<!-- client section -->
<section class="client_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Testimonials</h2>
      <hr>
    </div>
    <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <div class="client_container">
                <div class="detail-box">
                  <h5 style="color: #fffdfd">James Evans<i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></h5>
                  <p style="color: #fffdfd">
                    I trained here as a visitor and was really impressed with both the atmosphere and the level of coaching. Classes are well structured for all levels and the principles are well explained with each technique, which will give students a deeper understanding over time. Everyone I’ve met from the coaches to the students have been friendly and welcoming and I look forward to coming back again in the future. Highly recommend SJA to anyone and everyone in the area.
                  </p>
                  <span>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <div class="client_container">
                <div class="detail-box">
                  <h5 style="color: #fffdfd">Damien Hann <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></h5>
                  <p style="color: #fffdfd">
                    This place is a great place to learn Martial Arts. Been going there almost 5 years now and a lot has changed, great staff and spacious gym. Overall it's a great place and I recommend you try it!
                  </p>
                  <span>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <div class="client_container">
                <div class="detail-box">
                  <h5 style="color: #fffdfd">Emma Owen<i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></h5>
                  <p style="color: #fffdfd">
                    My son loved it! He can't wait to go again. Really informative and helpful staff. They seem very organised and professional
                  </p>
                  <span>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel_btn-box">
        <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
          <span>
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
          </span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
          <span>
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
          </span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</section>

<style>
  .client_section {
    padding: 60px 0;
    position: relative;
    background-color: #020202;
    color: #fffdfd;
  }

  .client_section::before {
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

  .client_container {
    display: flex;
    gap: 20px;
    align-items: center;
    justify-content: center;
  }

  .detail-box {
    text-align: center;
  }

  .detail-box h5 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
  }

  .detail-box p {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 20px;
  }

  .carousel_btn-box {
    text-align: center;
    margin-top: 20px;
  }

  .carousel-control-prev,
  .carousel-control-next {
    color: #fff;
    font-size: 24px;
    width: auto;
    height: auto;
    background-color: transparent;
  }

  .carousel-control-prev {
    left: -50px;
  }

  .carousel-control-next {
    right: -50px;
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    background-color: rgba(255, 255, 255, 0.5);
    border-radius: 50%;
    padding: 10px;
  }

  .carousel-control-prev-icon {
    margin-right: 5px;
  }

  .carousel-control-next-icon {
    margin-left: 5px;
  }

  @media (max-width: 768px) {
    .client_container {
      flex-direction: column;
    }

    .carousel-control-prev,
    .carousel-control-next {
      left: 0;
      right: 0;
      top: -40px;
    }
  }
</style>

  <!-- end client section -->

@include('footer')