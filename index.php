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
      <a class="navbar-brand" href="./index.php"><img src="./images/finallogo.png" alt="Logo" width="150"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about-us.html">About Us</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Software
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="./courses.php#machineLearningSection">Machine Learning</a></li>
            <li><a class="dropdown-item" href="./courses.php#dataScienceSection">Data Science</a></li>
            <li><a class="dropdown-item" href="./courses.php#generativeAIsection">Generative AI</a></li>
            <li><a class="dropdown-item" href="./courses.php#cAndCppSection">C & C++</a></li>
          </ul>
        </li>
          
           <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Web
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="./courses.php#fullStackSection">Full Stack</a></li>
            <li><a class="dropdown-item" href="./courses.php#javaSection">Java</a></li>
            <li><a class="dropdown-item" href="./courses.php#digitalMarketingSection">Digital Marketing</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact.php">contact</a>
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
            “Dive into the latest in technology, AI, and digital trends.”
          </p>
          <a class="btn btn-primary btn-lg button-1" href="./about-us.html" role="button">Learn more</a>
          <a class="btn btn-primary btn-lg button-2" href="./courses.php" role="button">Visit Courses</a>
        </div>
      </div>
    </div>
  </div>


  <!-- About us -->
  <div class="heading container">
    <h2 class="text-center cex-title fs-1 mt-5 fw-bold">Awesome Features</h2>
    <p class="text-center cex-title lead fw-bold mt-3 mb-5">
      “Dive into the latest in technology, AI, and digital trends.” </p>
    <div class="row row-cols-1 row-cols-md-3">
      <div class="col">
        <div class="about-card h-100 w-100">
          <div class="card-body">
            <i class="fas fa-graduation-cap fa-3x"></i>
            <h5 class="card-title">Scholorship Facility</h5>
            <p class="card-text">Expert-led courses designed to give you in-demand tech skills with real-world applications.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="about-card h-100 w-100 ms-auto me-auto">
          <div class="card-body">
            <i class="fas fa-book fa-3x"></i>
            <h5 class="card-title">Dell Online Course</h5>
            <p class="card-text">Hands-on projects and practical learning experiences to help you build and showcase your knowledge.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="about-card h-100 w-100 ms-auto">
          <div class="card-body">
            <i class="fas fa-award fa-3x"></i>
            <h5 class="card-title">Global Certification</h5>
            <p class="card-text">Flexible and easy-to-follow content that lets you learn anytime, anywhere at your own pace.</p>
          </div>
        </div>
      </div>
    </div>
  </div>





  <!-- features cards -->
  <div class="heading container">
    <h2 class="text-center cex-title fs-1 mt-5 fw-bold">Our Popular Courses</h2>
    <p class="text-center cex-title lead fw-bold mt-3 mb-5">
      “Dive into the latest in technology, AI, and digital trends.”</p>
    <div class="card-group g-3">
      <div class="card">
        <img src="./images/c1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Full Stack Development (Mern Stack)</h5>
          <p class="card-text">A full-stack developer is a software professional capable of creating both the front-end (user-facing) and back-end (server-side, database) components of websites and applications.</p>
        </div>
      </div>
      <div class="card">
        <img src="./images/c2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">
            Data Science, Machine Learning & Gen AI + Python</h5>
          <p class="card-text">Data science combines math and statistics, specialized programming, advanced analytics, artificial intelligence (AI) and machine learning with specific subject matter expertise</p>
        </div>
      </div>
      <div class="card">
        <img src="./images/c3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Data Analytics + Python Programming</h5>
          <p class="card-text"> data scientists conduct an exploratory data analysis to examine biases, patterns, ranges, and distributions of values within the data. </p>
        </div>
      </div>
    </div>

    <div class="card-group mt-5 g-3">
      <div class="card">
        <img src="./images/c4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Digital Marketing Training Program (WordPress)
          </h5>
          <p class="card-text">Digital marketing refers to the use of digital technologies and platforms to promote products, services or concepts to potential customers..</p>
        </div>
      </div>
      <div class="card">
        <img src="./images/c5.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Cyber Security with CCNA, Linux & Cloud</h5>
          <p class="card-text">Cybersecurity courses prepare individuals to protect systems and data from digital attacks, covering areas like network security, ethical hacking, and risk management.</p>
        </div>
      </div>
      <div class="card">
        <img src="./images/c6.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Cyber Security with CCNA, Linux & Cloud</h5>
          <p class="card-text">Cybersecurity courses prepare individuals to protect systems and data from digital attacks, covering areas like network security, ethical hacking, and risk management.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- review section -->

  <section class="reviews-section" id="reviews">
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
<footer class="footer">
  <div class="footer-container">

    <div class="footer-section">
        <h3><img src="./images/finallogo.png" alt="Logo" width="200"></h3>
      <p>Learning web development step by step.</p>
    </div>


     <div class="footer-section">
      <h3>Company</h3>
      <a href="./about-us.html">About us</a><br>
      <a href="./courses.php">Courses</a><br>
      <a href="./courses.php#machineLearningSection">Machine Learning</a><br>
      <a href="./courses.php#fullStackSection">Full Stack</a>
    </div>

      <div class="footer-section">
      <h3>Resources</h3>
      <a href="./signup.php">Sign Up</a><br>
      <a href="./index.php#reviews">Reviews</a><br>
      <a href="./index.php#contact-form">Demo</a><br>
      <a href="./courses.php#cAndCppSection">C & C++</a>
    </div>

    <div class="footer-section">
      <h3>Links</h3>
      <a href="./index.php">Home</a><br>
      <a href="login.php">Login</a><br>
      <a href="contact.php">Contact</a>
    </div>

    <div class="footer-section">
      <h3>Contact</h3>
      <p>Email: nidaparveen634@email.com</p>
      <p><div class="cex-socials">
          <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
        </div></p>
    </div>

  </div>

  <p class="footer-bottom">© 2026 All rights reserved</p>
</footer>




    <link rel="stylesheet" href="script.js">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>