  <!-- info section -->

  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_top">
        <div class="row align-items-center">
          <div class="col-md-3 ">
            <a class="navbar-brand" href="index.html">
              SJA Martial Arts
            </a>
          </div>
          <div class="col-md-5 ">
            <div class="info_contact">
              <a href="https://www.google.com/maps?ll=51.619543,-3.950811&z=15&t=m&hl=fil&gl=PH&mapclient=embed&q=1+The+Kingsway+Swansea+SA1+5JQ+United+Kingdom">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span style="font-size: .8em">
                  Gym: SJA Martial Arts, 1 The Kingsway
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  0333 242 3919
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="social_box">
              <a href="https://www.facebook.com/SJAmartialarts" target="blank">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="https://x.com/sarujujitsu" target="blank">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="https://www.instagram.com/accounts/login/?next=https%3A%2F%2Fwww.instagram.com%2Fsjamartialarts%2F&is_from_rle" target="blank">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="info_bottom">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="info_detail">
              <h5>
                Company
              </h5>
              <p>
                MMA Programs designed to take you from a Beginner to Advanced.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info_detail">
              <h5>
                OPEN HOURS
              </h5>
              <p>
                Mon – Thur 12pm – 9:00pm
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="info_detail">
              <h5>
                Find Us Here
              </h5>
              <div class="map_container">
                <div>
                  <figure>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.2001209453583!2d-3.9508114!3d51.61954319999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486ef53376f1226d%3A0xb8dff3f743d5fcc2!2s1%20The%20Kingsway%2C%20Swansea%20SA1%205JQ%2C%20United%20Kingdom!5e0!3m2!1sfil!2sph!4v1719492849198!5m2!1sfil!2sph" width="100%" height="250" loading="lazy"></iframe>
                  </figure>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6">
            <div class="">
              <h5>
                Useful links
              </h5>
              <ul class="info_menu">
                <li>
                  <a href="{{route('cjj')}}">
                    Combat Jiu Jitsu
                  </a>
                </li>
                <li>
                  <a href="{{route('mma')}}">
                    Mixed Martial Arts
                  </a>
                </li>
                <li>
                  <a href="{{route('bjj')}}">
                    Brazilian Jiu Jitsu
                  </a>
                </li>
                <li>
                  <a href="{{route('sg')}}">
                    Submission Grappling
                  </a>
                </li>
                <li class="mb-0">
                  <a href="https://api.leadconnectorhq.com/widget/form/TBmLsbOisJBOh2tDIa8F">
                    Contact Us
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <style>
    .info_section {
      padding: 60px 0;
      background-color: #43574e;
      color: #ffffff;
    }
  
    .info_top {
      margin-bottom: 40px;
    }
  
    .navbar-brand {
      font-size: 1.5em;
      font-weight: bold;
      color: #ffffff;
    }
  
    .info_contact a {
      display: block;
      color: #ffffff;
      font-size: 1em;
      margin-bottom: 10px;
      text-decoration: none;
    }
  
    .social_box a {
      display: inline-block;
      color: #ffffff;
      font-size: 1.2em;
      margin-right: 10px;
    }
  
    .info_detail {
      margin-bottom: 30px;
    }
  
    .info_detail h5 {
      font-size: 1.2em;
      font-weight: bold;
      margin-bottom: 10px;
    }
  
    .info_detail p {
      font-size: 1em;
      line-height: 1.5;
    }
  
    .map_container {
      margin-top: 20px;
    }
  
    .info_menu {
      list-style: none;
      padding: 0;
    }
  
    .info_menu li {
      margin-bottom: 10px;
    }
  
    .info_menu a {
      color: #ffffff;
      text-decoration: none;
      font-size: 1em;
    }
  
    .info_menu a:hover {
      text-decoration: underline;
    }
  </style>
  
  <script src="https://www.google.com/maps/search/?api=1&query=Google&query_place_id=ChIJbSLxdjP1bkgRwvzVQ_fz37g"></script>

  <!-- end info_section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://www.prince-sanguan.free.nf">Student Web Solution</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->




  <!-- jQery -->
  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- custom js -->
  <script src="{{asset('js/custom.js')}}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
</body>

</html>