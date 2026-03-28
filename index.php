<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

</head>

<body>
  <!-- navbar  -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.html"><img src="./images/finallogo.png" alt="Logo" width="150"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about-us.html">About Us</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Software
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="./blog.html">Machine Learning</a></li>
            <li><a class="dropdown-item" href="#">Data Science</a></li>
            <li><a class="dropdown-item" href="#">6 Weeks & 6 Months Industrial Training</a></li>
            <li><a class="dropdown-item" href="#">Generative AI</a></li>
            <li><a class="dropdown-item" href="#">AI Prompt Engineering</a></li>
            <li><a class="dropdown-item" href="#">Agentic AI</a></li>
            <li><a class="dropdown-item" href="#">Data Analytics</a></li>
            <li><a class="dropdown-item" href="#">Business Analytics</a></li>
            <li><a class="dropdown-item" href="#">C & C++</a></li>
            <li><a class="dropdown-item" href="#">MySQL</a></li>
          </ul>
        </li>
          
           <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Web
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="./courses.html">Python</a></li>
            <li><a class="dropdown-item" href="#">MERN and MEAN</a></li>
            <li><a class="dropdown-item" href="#">Full Stack</a></li>
            <li><a class="dropdown-item" href="#">Java</a></li>
            <li><a class="dropdown-item" href="#">PHP Web Development</a></li>
            <li><a class="dropdown-item" href="#">Digital Marketing</a></li>
            <li><a class="dropdown-item" href="#">Web Designing</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact.html">contact</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <a href="login.php" class="btn btn-outline-success ms-2">Login</a>
          <a href="signup.php" class="btn btn-outline-success ms-2">Sign Up</a>
        </form>
      </div>
    </div>
  </nav>



  <!-- hero section -->
  <div class="hero">
    <div class="container-fluid hero-container">
      <div class="row">
        <div class="col-md-6 light ms-auto me-auto text-center mt-5 hero-content">
          <h1 class="display-4 fw-bold">Welcome to Mind Space</h1>
          <p class="lead">
            This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured
            content or information.
          </p>
          <a class="btn btn-primary btn-lg button-1" href="./about-us.html" role="button">Learn more</a>
          <a class="btn btn-primary btn-lg button-2" href="./courses.html" role="button">Visit Courses</a>
        </div>
      </div>
    </div>
  </div>


  <!-- About us -->
  <div class="heading container">
    <h2 class="text-center cex-title fs-1 mt-5 fw-bold">Awesome Features</h2>
    <p class="text-center cex-title lead fw-bold mt-3 mb-5">
      Replenish man have thing gathering lights yielding shall you </p>
    <div class="row row-cols-1 row-cols-md-3">
      <div class="col">
        <div class="about-card h-100 w-100">
          <div class="card-body">
            <i class="fas fa-graduation-cap fa-3x"></i>
            <h5 class="card-title">Scholorship Facility</h5>
            <p class="card-text">One make creepeth, man bearing theira firmament won't great heaven.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="about-card h-100 w-100 ms-auto me-auto">
          <div class="card-body">
            <i class="fas fa-book fa-3x"></i>
            <h5 class="card-title">Dell Online Course</h5>
            <p class="card-text">One make creepeth, man bearing theira firmament won't great heaven</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="about-card h-100 w-100 ms-auto">
          <div class="card-body">
            <i class="fas fa-award fa-3x"></i>
            <h5 class="card-title">Global Certification</h5>
            <p class="card-text">One make creepeth, man bearing theira firmament won't great heaven</p>
          </div>
        </div>
      </div>
    </div>
  </div>





  <!-- features cards -->
  <div class="heading container">
    <h2 class="text-center cex-title fs-1 mt-5 fw-bold">Our Popular Courses</h2>
    <p class="text-center cex-title lead fw-bold mt-3 mb-5">
      Replenish man have thing gathering lights yielding shall you</p>
    <div class="card-group g-3">
      <div class="card">
        <img src="./images/c1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Full Stack Development (Mern Stack)</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="./images/c2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">
            Data Science, Machine Learning & Gen AI + Python</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="./images/c3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Data Analytics + Python Programming</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>

    <div class="card-group mt-5 g-3">
      <div class="card">
        <img src="./images/c4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Digital Marketing Training Program (WordPress)
          </h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="./images/c5.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Cyber Security with CCNA, Linux & Cloud</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="./images/c6.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Cyber Security with CCNA, Linux & Cloud</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>

  <!-- review section -->

  <section class="reviews-section">
    <h2>Our Student's Reviews</h2>

    <div class="reviews-container">

      <!-- Left Summary -->
      <div class="reviews-summary">
        <h3>EXCELLENT</h3>
        <div class="stars">★★★★★</div>
        <p>Based on 938 reviews</p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" class="google-logo">
      </div>

      <!-- Reviews Slider -->
      <div class="reviews-slider">

        <button class="nav prev">&#10094;</button>

        <div class="reviews-wrapper" id="reviewsWrapper">

          <div class="review-card">
            <div class="review-header">
              <div class="avatar">K</div>
              <div>
                <h4>Kushal Saini</h4>
                <span>2025-09-05</span>
              </div>
            </div>
            <div class="stars">★★★★★</div>
            <p>Good place must come</p>
          </div>

          <div class="review-card">
            <div class="review-header">
              <div class="avatar">P</div>
              <div>
                <h4>Piyush Walia</h4>
                <span>2025-09-05</span>
              </div>
            </div>
            <div class="stars">★★★★★</div>
            <p>The institute provides a well-structured and practical approach to data science.</p>
          </div>



          <div class="review-card">
            <div class="review-header">
              <div class="avatar">R</div>
              <div>
                <h4>Ramandeep Kaur</h4>
                <span>2025-09-04</span>
              </div>
            </div>
            <div class="stars">★★★★★</div>
            <p>I successfully completed my Cybersecurity training here. Highly practical training.</p>
          </div>

        </div>

        <button class="nav next">&#10095;</button>

      </div>
    </div>
  </section>



  <!-- section 3 -->


  <section id="nx-wrapper">

  <!-- Top Section -->
  <div id="nx-row-1" class="nx-row">
    
    <div id="nx-img-box-1" class="nx-col">
      <img src="./images/section3(1).webp" alt="Student working">
    </div>

    <div id="nx-text-box-1" class="nx-col">
      <h2 id="nx-heading-1">Best selection of Job Oriented courses</h2>
      <p>
        Netmax Technologies, an ISO certified institution, stands as a model of excellence in Chandigarh, delivering unparalleled training across a spectrum of cutting-edge courses.
      </p>
      <p>
        Hands-on training in Data Science, Game Development, Web Development, Automation, Digital Marketing and App Development.
      </p>
    </div>

  </div>

  <!-- Bottom Section -->
  <div id="nx-row-2" class="nx-row nx-reverse">
    
    <div id="nx-text-box-2" class="nx-col">
      <h2 id="nx-heading-2">Product Design and Development</h2>
      <p>Netmax has completed various projects. Such as :</p>
      <ul id="nx-list-1">
        <li>Bullet Velocity Measurement (CSIO), and Shadowgraphy for TBRL(DRDO).</li>
        <li>IIOT Sensors, Smart Energy Meters, CNC/PLC Digitisation & Machine Learning Based Sensors.</li>
        <li>Industry-focused learning aligned with Industry 4.0, Computer Vision, and Smart City Solutions</li>
      </ul>
    </div>

    <div id="nx-img-box-2" class="nx-col">
      <img src="./images/section3(2).webp" alt="Engineering work">
    </div>

  </div>

</section>


  <!-- expert card -->

  <section class="cex-section">

    <h1 class="cex-title fs-1">Community Experts</h1>
    <p class="text-center cex-title lead fw-bold mt-3 mb-5">
      Replenish man have thing gathering lights yielding shall you </p>
    <div class="cex-cards">

      <div class="cex-card">
        <img src="./images/t1.jpg" alt="">
        <h3>Ema Ernik</h3>
        <span>Python & Algorithms Expert</span>

        <div class="cex-socials">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>

      <div class="cex-card">
        <img src="./images/t2.jpg" alt="">
        <h3>Jason Chua</h3>
        <span>Data Design Expert</span>

        <div class="cex-socials">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>

      <div class="cex-card">
        <img src="./images/t3.jpg" alt="">
        <h3>Maalik Halper</h3>
        <span>Full Stack Developer</span>

        <div class="cex-socials">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>

      <div class="cex-card">
        <img src="./images/t4.jpg" alt="">
        <h3>Jennifer Lopez</h3>
        <span>Design Expert</span>

        <div class="cex-socials">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>

    </div>
  </section>


  <!-- footer -->
  <footer class="footer mt-5">
    <div class="footer-container">

      <div class="footer-section">
        <h3>My Website</h3>
        <p>Learning web development step by step.</p>
      </div>


      <div class="footer-section">
        <h3>Company</h3>
        <a href="#">About us</a><br>
        <a href="#">Hire our students</a><br>
        <a href="#">Blogs</a><br>
        <a href="#">Podcasts</a>
      </div>

      <div class="footer-section">
        <h3>Resources</h3>
        <a href="#">Hacker block</a><br>
        <a href="#">IDE</a><br>
        <a href="#">Blogs</a><br>
        <a href="#">Podcasts</a>
      </div>

      <div class="footer-section">
        <h3>Links</h3>
        <a href="#">Home</a><br>
        <a href="#">Login</a><br>
        <a href="#">Contact</a>
      </div>

      <div class="footer-section">
        <h3>Contact</h3>
        <p>Email: my@email.com</p>
      </div>

    </div>

    <p class="footer-bottom mt-5">Copyright © 2026 All rights reserved</p>
  </footer>




    <link rel="stylesheet" href="script.js">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>