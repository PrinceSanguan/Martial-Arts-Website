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
  <meta property="og:image" content="{{ url(asset('images/logo-image.png')) }}" />
  <meta property="og:url" content="http://martial-arts.free.nf/" />
  <meta property="og:site_name" content="Blogs" />
  <meta property="og:description" content="Blogs" />

@include('navbar')

<!-- blog section -->

<section class="blog_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Blogs</h2>
      <hr>
    </div>
    <div class="row">

      <!-- Blog item 1 -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="blog-item rounded-3 shadow d-flex flex-column h-100">
          <img src="images/blog-image-1.jpg" class="img-fluid rounded-3" alt="Blog Image 1">
          <div class="blog-detail p-3 flex-grow-1">
            <h5 class="blog-title">Our Gibbon Nabil earned the Black Belt of the Week</h5>
            <p class="blog-description">Our little Lemur Mali got the chance of taking Lilo the Lemur home for this week! </p>
            <a href="#" class="read-more-btn">Read More</a>
          </div>
        </div>
      </div>
      <!-- Blog item 2 -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="blog-item rounded-3 shadow d-flex flex-column h-100">
          <img src="images/blog-image-2.jpg" class="img-fluid rounded-3" alt="Blog Image 2">
          <div class="blog-detail p-3 flex-grow-1">
            <h5 class="blog-title">🏅𝗦𝘁𝘂𝗱𝗲𝗻𝘁 𝗼𝗳 𝘁𝗵𝗲 𝗠𝗼𝗻𝘁𝗵: 𝐌𝐚𝐲 🥋</h5>
            <p class="blog-description">Alfie has been awarded for his dedication and commitment to training, he has shown great improvements throughout the month,</p>
            <a href="#" class="read-more-btn">Read More</a>
          </div>
        </div>
      </div>
      <!-- Blog item 3 -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="blog-item rounded-3 shadow d-flex flex-column h-100">
          <img src="images/blog-image-3.jpg" class="img-fluid rounded-3" alt="Blog Image 3">
          <div class="blog-detail p-3 flex-grow-1">
            <h5 class="blog-title">Keep it up, Theo! 🙌</h5>
            <p class="blog-description">Huge well done to our lemur Theo from our Neath Academy smashing his techniques in BJJ and earned the chance to take Lilo the Lemur home for this week!! 👏</p>
            <a href="#" class="read-more-btn">Read More</a>
          </div>
        </div>
      </div>
      <!-- Blog item 4 -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="blog-item rounded-3 shadow d-flex flex-column h-100">
          <img src="images/blog-image-4.jpg" class="img-fluid rounded-3" alt="Blog Image 4">
          <div class="blog-detail p-3 flex-grow-1">
            <h5 class="blog-title">Way to go Mila, huge well done! ✨</h5>
            <p class="blog-description">Mila earned the chance to take Charlie home for the week for having a positive attitude and training on her BJJ classes 💪🏽</p>
            <a href="#" class="read-more-btn">Read More</a>
          </div>
        </div>
      </div>
      
    </div>
    <!-- Pagination -->
    <div class="pagination-container d-flex justify-content-center">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
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
    background-image: url("/images/gallery-image-2.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    opacity: .50;
    filter: brightness(50%);
  }

  .heading_container {
    margin-bottom: 40px;
  }

  .blog-item {
    background-color: #1a1a1a;
    border: 2px solid #00ffcc;
    border-radius: 10px;
    overflow: hidden;
  }

  .blog-item img {
    width: 100%;
    height: 200px; /* Set a fixed height for uniformity */
    object-fit: cover; /* Ensure images cover the entire space without distortion */
    transition: transform 0.3s ease;
  }

  .blog-item:hover img {
    transform: scale(1.05);
  }

  .blog-detail {
    padding: 20px;
    height: 100%; /* Ensures the blog detail section fills the height of its container */
  }

  .blog-title {
    font-size: 24px;
    font-weight: bold;
    color: #00ffcc;
    margin-bottom: 10px;
    font-family: 'Orbitron', sans-serif;
  }

  .blog-description {
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 20px;
  }

  .read-more-btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    font-family: 'Orbitron', sans-serif;
    color: #000;
    background-color: #00ffcc;
    border-radius: 5px;
    text-transform: uppercase;
    transition: background-color 0.3s ease;
  }

  .read-more-btn:hover {
    background-color: #00e6b8;
    text-decoration: none;
  }

  .pagination-container {
    margin-top: 30px;
  }

  .pagination {
    display: flex;
    list-style: none;
    padding: 0;
  }

  .page-item {
    margin: 0 5px;
  }

  .page-link {
    display: block;
    padding: 10px 15px;
    color: #00ffcc;
    background-color: #1a1a1a;
    border: 1px solid #00ffcc;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }

  .page-link:hover {
    background-color: #00e6b8;
    text-decoration: none;
  }
</style>

<!-- Script to limit blog description to 50 letters -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const blogDescriptions = document.querySelectorAll(".blog-description");

    blogDescriptions.forEach(description => {
      let content = description.innerHTML.trim();

      // Check if content exceeds 100 letters
      if (content.length > 100) {
        // Truncate content to 100 letters
        const truncatedContent = content.slice(0, 100) + "...";
        description.innerHTML = truncatedContent;
      }
    });
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const itemsPerPage = 3;
    const blogItems = document.querySelectorAll(".blog-item");
    const paginationLinks = document.querySelectorAll(".page-link");
    let currentPage = 1;

    function showPage(page) {
      const start = (page - 1) * itemsPerPage;
      const end = start + itemsPerPage;

      blogItems.forEach((item, index) => {
        if (index >= start && index < end) {
          item.parentElement.style.display = "block";
        } else {
          item.parentElement.style.display = "none";
        }
      });
    }

    function handlePaginationClick(event) {
      event.preventDefault();
      const target = event.target;
      if (target.classList.contains("page-link")) {
        if (target.textContent === "Previous") {
          if (currentPage > 1) {
            currentPage--;
          }
        } else if (target.textContent === "Next") {
          if (currentPage * itemsPerPage < blogItems.length) {
            currentPage++;
          }
        } else {
          currentPage = parseInt(target.textContent);
        }
        showPage(currentPage);
      }
    }

    paginationLinks.forEach(link => {
      link.addEventListener("click", handlePaginationClick);
    });

    // Show the first page initially
    showPage(currentPage);
  });
</script>

<!--end of blog section -->

@include('footer')

