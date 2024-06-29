@include('header')

@include('navbar')

<style>
  .hero_area {
    position: relative;
    min-height: 100vh;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
}
  </style>

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
                    <p style="color: #fffdfd";>
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

<!-- Video Section -->
<section class="video_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="video-box">
          <!-- Main Video Thumbnail and Popup -->
          <div class="video-item main-video">
            <h2>Start your martial arts journey!</h2>
            <p class="video-description">Listen to coach Ethan in the short video below as he talks you through some of the areas we pride ourselves in!</p>
            <div class="video-container">
              <img src="{{ asset('thumbnails/main-video-thumbnail.png') }}" alt="Main Video Thumbnail" class="thumbnail-image main-thumbnail">
              <button class="play-button"></button>
              <video controls class="video-element main-video-element">
                <source src="{{asset('videos/5 things Pride SJA.mp4')}}" type="video/mp4">
                Your browser does not support the video tag.
              </video>
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
    position: relative;
    background-color: #ffffff;
    color: #0b0a0a;
  }

  .video_section::before {
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

  .video-box {
    display: flex;
    justify-content: center;
    flex-direction: column; /* Align items in a column */
    align-items: center; /* Center align horizontally */
  }

  .video-item {
    text-align: center;
    margin-bottom: 20px;
  }

  .video-item h2 {
    font-size: 28px;
    margin-bottom: 10px;
    font-weight: bold;
  }

  .video-description {
    font-size: 18px;
    margin-bottom: 20px;
  }

  .video-container {
    position: relative;
    cursor: pointer;
    text-align: center;
  }

  .thumbnail-image {
    display: inline-block;
    max-width: 100%;
    height: auto;
    border-radius: 10px;
  }

  .play-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80px;
    height: 80px;
    background-color: rgba(0, 0, 0, 0.6);
    border: none;
    border-radius: 50%;
    cursor: pointer;
    outline: none;
    z-index: 2;
    transition: background-color 0.3s ease;
  }

  .play-button::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-40%, -50%);
    width: 0;
    height: 0;
    border-left: 32px solid white;
    border-top: 20px solid transparent;
    border-bottom: 20px solid transparent;
  }

  .play-button:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }

  /* Added to ensure landscape mode */
  .video-element {
    object-fit: contain; /* Ensure video fits container */
    width: 100%; /* Ensure video takes full width */
    height: auto; /* Allow height to adjust */
    max-height: 100vh; /* Limit height to viewport height */
    max-width: 100%; /* Limit width to viewport width */
  }

  @media (max-width: 768px) {
    .video-item {
      text-align: center;
    }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const mainVideo = document.querySelector(".main-video-element");
    const mainThumbnail = document.querySelector(".main-thumbnail");
    const playButton = document.querySelector(".play-button");

    // Initially hide the main video element
    mainVideo.style.display = "none";

    playButton.addEventListener("click", function() {
      if (mainVideo.paused) {
        mainVideo.play();
        mainVideo.style.display = "block"; // Show the main video element
        mainThumbnail.style.display = "none"; // Hide the main thumbnail
        mainVideo.classList.add("landscape-mode"); // Optional: Add a class for styling purposes
      } else {
        mainVideo.pause();
      }
    });

    mainVideo.addEventListener("pause", function() {
      mainVideo.style.display = "none"; // Hide the main video element when paused
      mainThumbnail.style.display = "block"; // Show the main thumbnail
      mainVideo.classList.remove("landscape-mode"); // Optional: Remove landscape mode class
    });

    // Optional: Click on thumbnail to play in landscape mode
    mainThumbnail.addEventListener("click", function() {
      mainVideo.style.objectFit = "contain"; // Ensure video fits container
    });
  });
</script>

<!-- end of Video Section -->

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
    filter: brightness(40%);
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


<!-- Discipline section -->

<section class="discipline_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Disciplines</h2>
      <hr>
    </div>
    <div class="row">
      <!-- Discipline 1 -->
      <div class="col-lg-6 col-md-12 mb-4">
        <a href="{{route('cjj')}}" class="discipline-link">
          <div class="discipline-item rounded-3 shadow">
            <img src="{{ asset('images/cjj-image.jpg') }}" class="img-fluid rounded-3" alt="Combat Jiu-Jitsu">
            <div class="discipline-detail p-3">
              <h5 class="discipline-title">Combat Jiu-Jitsu</h5>
              <p class="discipline-description">CJJ stands for Combat Jiu-Jitsu. Our programme focuses on self defence and confidence in confrontational situations.</p>
            </div>
          </div>
        </a>
      </div>
      <!-- Discipline 2 -->
      <div class="col-lg-6 col-md-12 mb-4">
        <a href="{{ route('bjj') }}" class="discipline-link">
          <div class="discipline-item rounded-3 shadow">
            <img src="{{ asset('images/bjj-image.jpg') }}" class="img-fluid rounded-3" alt="Brazilian Jiu-Jitsu">
            <div class="discipline-detail p-3">
              <h5 class="discipline-title">Brazilian Jiu-Jitsu</h5>
              <p class="discipline-description">Brazilian Jiu-Jitsu is currently one of the fastest growing martial arts in the world made famous by the Gracies in the early days of the UFC.</p>
            </div>
          </div>
        </a>
      </div>
      <!-- Discipline 3 -->
      <div class="col-lg-6 col-md-12 mb-4">
        <a href="{{route('sg')}}" class="discipline-link">
          <div class="discipline-item rounded-3 shadow">
            <img src="{{ asset('images/sg-image.jpg') }}" class="img-fluid rounded-3" alt="Submission Grappling">
            <div class="discipline-detail p-3">
              <h5 class="discipline-title">Submission Grappling</h5>
              <p class="discipline-description">Submission grappling has been made popular in recent years by Jiu-Jitsu superstars like Gordon Ryan. With tournaments like ADCC becoming more popular and being described as the olympics of grappling.</p>
            </div>
          </div>
        </a>
      </div>
      <!-- Discipline 4 -->
      <div class="col-lg-6 col-md-12 mb-4">
        <a href="{{ route('mma') }}" class="discipline-link">
          <div class="discipline-item rounded-3 shadow">
            <img src="{{ asset('images/mma-image.jpg') }}" class="img-fluid rounded-3" alt="Mixed Martial Arts">
            <div class="discipline-detail p-3">
              <h5 class="discipline-title">Mixed Martial Arts</h5>
              <p class="discipline-description">Mixed Martial Arts has been made famous by the UFC. MMA is a combination of all styles of combat like boxing, wrestling, karate etc.</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<style>
  .discipline_section {
    padding: 60px 0;
    position: relative;
    background-color: #ffffff;
    color: #000000;
  }

  .discipline_section::before {
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

  .discipline-item {
    background-color: #1a1a1a;
    border: 2px solid #00ffcc;
    border-radius: 10px;
    overflow: hidden;
    height: 100%;
    display: flex;
    flex-direction: column;
  }

  .discipline-item img {
    width: 100%;
    height: auto;
    object-fit: cover;
    transition: transform 0.3s ease;
    cursor: pointer;
  }

  .discipline-item:hover img {
    transform: scale(1.05);
  }

  .discipline-detail {
    padding: 20px;
    flex-grow: 1;
  }

  .discipline-title {
    font-size: 24px;
    font-weight: bold;
    color: #00ffcc;
    margin-bottom: 10px;
    font-family: 'Orbitron', sans-serif;
  }

  .discipline-description {
    font-size: 16px;
    line-height: 1.6;
    color: #00ffcc;
  }

  @media (max-width: 768px) {
    .col-md-12 {
      max-width: 100%;
    }
  }

  @media (max-width: 576px) {
    .col-md-12 {
      max-width: 100%;
    }
  }
</style>

<!--end of Discipline section -->

<!-- FAQ section -->

<section class="faq_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Frequently Asked Questions</h2>
      <hr>
    </div>
    <div class="row justify-content-center">
      <!-- Question 1 -->
      <div class="col-lg-12 col-md-12 mb-4 d-flex justify-content-center">
        <div class="faq-item rounded-3 shadow text-center">
          <div class="faq-question p-3" data-toggle="collapse" data-target="#answer1">
            <h5 class="faq-title">What events are upcoming?</h5>
          </div>
          <div id="answer1" class="faq-answer collapse p-3">
            <p>We have a yearly calendar in our membership hub under the calendar tab!</p>
          </div>
        </div>
      </div>
      <!-- Question 2 -->
      <div class="col-lg-12 col-md-12 mb-4 d-flex justify-content-center">
        <div class="faq-item rounded-3 shadow text-center">
          <div class="faq-question p-3" data-toggle="collapse" data-target="#answer2">
            <h5 class="faq-title">When can my child grade for CJJ (Combat Jiu Jitsu)?</h5>
          </div>
          <div id="answer2" class="faq-answer collapse p-3">
            <p>We operate a tag testing system whereby, during classes after your child has gained minimum attendance we will test the child on certain techniques required to pass their upcoming grading/belt.</p>
          </div>
        </div>
      </div>
      <!-- Question 3 -->
      <div class="col-lg-12 col-md-12 mb-4 d-flex justify-content-center">
        <div class="faq-item rounded-3 shadow text-center">
          <div class="faq-question p-3" data-toggle="collapse" data-target="#answer3">
            <h5 class="faq-title">How do I know my child is eligible to grade for CJJ (Combat Jiu Jitsu)?</h5>
          </div>
          <div id="answer3" class="faq-answer collapse p-3">
            <p>When your child has passed both tags required for the next grading we will send parents/guardians a text message with all information required for the event.</p>
          </div>
        </div>
      </div>
      <!-- Question 4 -->
      <div class="col-lg-12 col-md-12 mb-4 d-flex justify-content-center">
        <div class="faq-item rounded-3 shadow text-center">
          <div class="faq-question p-3" data-toggle="collapse" data-target="#answer4">
            <h5 class="faq-title">When can my child grade for BJJ (Brazilian Jiu Jitsu)?</h5>
          </div>
          <div id="answer4" class="faq-answer collapse p-3">
            <p>Once your child has reached their minimum number of classes to be eligible for the next tag/belt, our senior coaches will assess your child's performance during classes and inform the admin team after testing that they are ready to grade.</p>
          </div>
        </div>
      </div>
      <!-- Question 5 -->
      <div class="col-lg-12 col-md-12 mb-4 d-flex justify-content-center">
        <div class="faq-item rounded-3 shadow text-center">
          <div class="faq-question p-3" data-toggle="collapse" data-target="#answer5">
            <h5 class="faq-title">When can my child grade for MMA (Mixed Martial Arts)?</h5>
          </div>
          <div id="answer5" class="faq-answer collapse p-3">
            <p>Once your child has reached their minimum number of classes to be eligible for the next tag/belt, our senior coaches will assess your child's performance during classes and inform the admin team after testing that they are ready to grade.</p>
          </div>
        </div>
      </div>
      <!-- Question 6 -->
      <div class="col-lg-12 col-md-12 mb-4 d-flex justify-content-center">
        <div class="faq-item rounded-3 shadow text-center">
          <div class="faq-question p-3" data-toggle="collapse" data-target="#answer6">
            <h5 class="faq-title">How do I join SJA Martial Arts?</h5>
          </div>
          <div id="answer6" class="faq-answer collapse p-3">
            <p>To join SJA Martial Arts, we request you complete the joining form pop up on entrance to our website. This will give you a free class trial and allow you to start your martial arts journey!</p>
          </div>
        </div>
      </div>
      <!-- Question 7 -->
      <div class="col-lg-12 col-md-12 mb-4 d-flex justify-content-center">
        <div class="faq-item rounded-3 shadow text-center">
          <div class="faq-question p-3" data-toggle="collapse" data-target="#answer7">
            <h5 class="faq-title">Where are the academies located?</h5>
          </div>
          <div id="answer7" class="faq-answer collapse p-3">
            <p>Head over to the 'Affiliates' option in the navigation bar to find out the location of the gym closest to you.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .faq_section {
    padding: 60px 0;
    position: relative;
    background-color: #020202;
    color: #fffdfd;
  }

  .faq_section::before {
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

  .faq-item {
    background-color: #1a1a1a;
    border: 2px solid #00ffcc;
    border-radius: 10px;
    overflow: hidden;
    height: 100%;
    width: 100%;
  }

  .faq-question {
    background-color: #00ffcc;
    color: #020202;
    cursor: pointer;
  }

  .faq-title {
    font-size: 24px;
    font-weight: bold;
    color: #020202;
    margin-bottom: 0;
    font-family: 'Orbitron', sans-serif;
  }

  .faq-answer {
    display: none;
  }

  .faq-answer p {
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 0;
  }

  @media (max-width: 768px) {
    .col-md-12 {
      max-width: 100%;
    }
  }

  @media (max-width: 576px) {
    .col-md-12 {
      max-width: 100%;
    }
  }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('.faq-question').click(function() {
      var answer = $(this).next('.faq-answer');
      $('.faq-answer').not(answer).slideUp();
      answer.slideToggle();
    });
  });
</script>


<!-- end of FAQ section -->

<!-- Timetable section -->

<section class="timetable_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Timetable</h2>
      <hr>
    </div>
    <div class="row">
      <!-- Timetable 1 -->
      <div class="col-lg-6 col-md-12 mb-4">
        <div class="timetable-item rounded-3 shadow">
          <a href="{{asset('images/timetable.png')}}" class="timetable-link" target="_blank">
            <img src="{{asset('images/timetable.png')}}" class="img-fluid rounded-3" alt="Timetable 1">
          </a>
        </div>
      </div>
      <!-- Timetable 2 -->
      <div class="col-lg-6 col-md-12 mb-4">
        <div class="timetable-item rounded-3 shadow">
          <a href="{{asset('images/timetable2.png')}}" class="timetable-link" target="_blank">
            <img src="{{asset('images/timetable2.png')}}" class="img-fluid rounded-3" alt="Timetable 2">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .timetable_section {
    padding: 60px 0;
    position: relative;
    background-color: #ffffff;
    color: #000000;
  }

  .timetable_section::before {
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

  .timetable-item {
    background-color: #1a1a1a;
    border: 2px solid #00ffcc;
    border-radius: 10px;
    overflow: hidden;
    height: 100%;
    display: flex;
    flex-direction: column;
    position: relative;
  }

  .timetable-item img {
    width: 100%;
    height: auto;
    object-fit: cover;
    transition: transform 0.3s ease;
    cursor: pointer;
  }

  .timetable-item:hover img {
    transform: scale(1.05);
  }

  .timetable-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.8);
    z-index: 999;
    justify-content: center;
    align-items: center;
  }

  .timetable-overlay.active {
    display: flex;
  }

  .timetable-overlay img {
    max-width: 90%;
    max-height: 90%;
    object-fit: contain;
  }

  @media (max-width: 768px) {
    .col-md-12 {
      max-width: 100%;
    }
  }

  @media (max-width: 576px) {
    .col-md-12 {
      max-width: 100%;
    }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const timetableLinks = document.querySelectorAll(".timetable-link");

    timetableLinks.forEach(link => {
      link.addEventListener("click", function(event) {
        event.preventDefault();
        const imageUrl = this.getAttribute("href");

        const overlay = document.createElement("div");
        overlay.classList.add("timetable-overlay");

        const image = document.createElement("img");
        image.src = imageUrl;

        overlay.appendChild(image);
        document.body.appendChild(overlay);

        overlay.addEventListener("click", function() {
          overlay.classList.remove("active");
          setTimeout(() => overlay.remove(), 300);
        });

        setTimeout(() => overlay.classList.add("active"), 50);
      });
    });
  });
</script>

<!--end of Timetable section -->


@include('footer')