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
  <?php
include 'db.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $conn->query("INSERT INTO enquiries (name, phone, message)
                  VALUES ('$name', '$phone', '$message')");

    echo "<script>alert('Enquiry submitted successfully!');</script>";
}


?>


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
  <div class="hero-about-us">
    <div class="container-fluid hero-container">
      <div class="row">
        <div class="col-md-6 light ms-auto me-auto mt-5 hero-content">
          <h1 class="display fw-bold">Contact Us- Get in Touch with Mind Space</h1>
          <p class="lead">
            Looking to get in touch with us

            Whether you have questions about our courses, need more information about enrollment,
            or want to explore partnership opportunities, our team is here to assist you.
          </p>
        </div>
      </div>
    </div>
  </div>


  <!-- contact section -->
  <section class="contact-section">
  <div class="contact-container">
    
    <!-- Left -->
    <div class="contact-box">
      <h2>Our Address</h2>
      <p><strong>Mind Space</strong></p>
      <p>SCO 112-113, 1st Floor, Sector 34A</p>
      <p>Chandigarh</p>
      <p>Mail: mail@mindspace.com</p>
      <p>Ph. +918699-644644</p>

      <a href="https://share.google/k13D7WI5HXr0vQKQW" target="_blank" class="btn">Location</a>
    </div>

    <!-- Divider -->
    <div class="divider"></div>

    <!-- Right -->
    <div class="contact-box">
      <h2>Get In Touch For Training Courses In Chandigarh</h2>
      <p>
        Are you ready to advance your skills with industry-leading training in
        fields like <strong>Digital Marketing, Data Science</strong>, or
        <strong>Full Stack Development</strong>?
      </p>
      <p>
        Contact <strong>Mind Space in Chandigarh</strong> today for more
        information on our comprehensive training programs.
      </p>

      <a href="tel:+8054003455" class="btn">Call Us</a>
    </div>

  </div>
</section>

<!-- map section -->
 <section id="nm-about-section">
    <div class="nm-about-container">
        <div id="nm-about-text-content">
            <h2 id="nm-about-heading">About Mind Space</h2>
            <p id="nm-about-description">
                <span class="nm-highlight">Mind Space</span> is one of the leading web Development and IT training (R&D) company located in Chandigarh. Since 2001, we have developed a number of hardware and software products for defence, automobile, manufacturing industries. We also have a training division to provide job oriented training courses like <span class="nm-highlight">Python</span>, web development, <span class="nm-highlight">Machine learning</span>, <span class="nm-highlight">Data science</span>, Java, full stack, cyber security, cloud computing and other popular technologies.
            </p>
        </div>

        <div id="nm-about-map-container">
            <div id="nm-about-map-frame">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.222387123456!2d76.768225!3d30.712345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed123456789%3A0xabcdef123456789!2sNetmax%20Technologies!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                    width="100%" 
                    height="350" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</section>


<!-- demo section -->

<div class="nt-demo-section">
  <div class="nt-demo-container">

    <!-- Left Content -->
    <div class="nt-demo-left">
      <h2>Want To Know More ? Request<br>A Free Demo .</h2>

      <p>
        <strong>Mind Space</strong> has been providing top-tier training in IT
        since 2001. We are committed to delivering the best education to
        prepare you for the future. Our experienced faculty ensures that
        you gain practical knowledge and skills tailored to industry needs.
      </p>
    </div>

    <!-- Right Form -->
    <div class="nt-demo-right" id="contact-form">
      <form method="POST">

  <div class="nt-row">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="text" name="phone" placeholder="Phone Number" required>
  </div>

  <textarea name="message" placeholder="Message" required></textarea>

 
  <button type="submit" name="submit">Submit Enquiry</button>

</form>
    </div>

  </div>
</div>
  
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



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>