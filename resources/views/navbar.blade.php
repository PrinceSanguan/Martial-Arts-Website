<body>
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="{{asset('images/gallery-image-10.jpg')}}" alt="">
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
                  Call : 0333 242 3919
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
      <div class="header_bottom">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
               <a class="navbar-brand " href="{{route('welcome')}}"> SJA Martial Arts </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class=""> </span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                     <li class="nav-item active">
                        <a class="nav-link" href="{{route('welcome')}}">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('mma')}}" id="mmaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        MMA Programs
                        </a>
                        <div class="dropdown-menu" aria-labelledby="mmaDropdown">
                           <a class="dropdown-item" href="{{route('mma.for.kids')}}">Kids Classes</a>
                           <a class="dropdown-item" href="{{route('mma.for.adults')}}">Adults Classes</a>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('bjj')}}" id="bjjDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        BJJ Programs
                        </a>
                        <div class="dropdown-menu" aria-labelledby="bjjDropdown">
                           <a class="dropdown-item" href="{{route('bjj.for.kids')}}">Kids Classes</a>
                           <a class="dropdown-item" href="{{route('bjj.for.adults')}}">Adults Classes</a>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="subgrapplingDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sub Grappling Programs
                        </a>
                        <div class="dropdown-menu" aria-labelledby="subgrapplingDropdown">
                           <a class="dropdown-item" href="{{route('sub.grappling.for.kids')}}">Kids Classes</a>
                           <a class="dropdown-item" href="{{route('sub.grappling.for.adults')}}">Adults Classes</a>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="subgrapplingDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Self Defense Programs
                        </a>
                        <div class="dropdown-menu" aria-labelledby="subgrapplingDropdown">
                           <a class="dropdown-item" href="{{route('self.defense.for.kids')}}">Kids Classes</a>

                        </div>
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
   <style>

/* Add dropdown styling */
.navbar-nav .dropdown-menu {
    background-color: #000; /* Example background color */
    border: none;
    border-radius: 0;
    text-align: center; /* Center text */
    margin-top: 0; /* Adjust as needed */
}

/* Dropdown item styling */
.navbar-nav .dropdown-item {
    color: #fff; /* White text color */
    font-size: 14px; /* Adjust font size as needed */
}

/* Dropdown item hover effect */
.navbar-nav .dropdown-item:hover {
    background-color: rgba(0, 230, 184, 0.1); /* Light background color on hover */
    color: #00e6b8; /* Text color on hover */
}

/* Override bootstrap default toggler icon color */
.navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 255, 204, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

/* Navbar link colors */
.navbar-nav .nav-link {
    color: #00ffcc;
}

.navbar-nav .nav-link:hover,
.navbar-nav .nav-link:focus {
    color: #00e6b8;
}
    </style>
    <!-- end header section -->