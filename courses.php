<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="courses.css">

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
  <div class="hero-about-us">
    <div class="container-fluid hero-container">
      <div class="row">
        <div class="col-md-6 light ms-auto me-auto text-center mt-5 hero-content">
          <h1 class="display-4 fw-bold">Welcome to Mind Space</h1>
          <p class="lead">
            This is a simple hero unit
          </p>
        </div>
      </div>
    </div>
  </div>


  <!-- machine learning section -->
  <div class="container mt-5">
    <h1 class="display-4 fw-bold" id="machineLearningSection">What is machine learning?</h1>
    <p class="lead muted-text mt-4">
      Machine learning is the subset of artificial intelligence (AI) focused on algorithms that can “learn”
      the patterns of training data and, subsequently, make accurate inferences about new data. This pattern
      recognition ability enables machine learning models to make decisions or predictions without explicit,
      hard-coded instructions.

    </p>Machine learning has come to dominate the field of AI: it provides the backbone of most modern AI systems,
    from forecasting models to autonomous vehicles to large language models (LLMs) and other generative AI tools.</p>

    <p>The central premise of machine learning (ML) is that if you optimize a model’s performance on a dataset of tasks
      that adequately resemble the real-world problems it will be used for—through a process called model training—the
      model can make accurate predictions on the new data it sees in its ultimate use case.</p>

    <p>Training itself is simply a means to an end: generalization, the translation of strong performance on training data
      to useful results in real-world scenarios, is the fundamental goal of machine learning. In essence, a trained model
      is applying patterns it learned from training data to infer the correct output for a real-world task: the deployment
      of an AI model is therefore called AI inference.</p>

    <div id="courseBarX">

      <div class="cb-container">

        <div class="cb-item">
          <div class="cb-title">Course Duration</div>
          <div class="cb-sub">3 Months (Weekend)</div>
        </div>

        <div class="cb-item">
          <div class="cb-title">Course Fee</div>
          <div class="cb-sub">₹15,000</div>
        </div>

        <div class="cb-item">
          <div class="cb-title">Mode</div>
          <div class="cb-sub">Online + offline</div>
        </div>

        <div class="cb-item">
          <button class="cb-btn" onclick="cbShowNumber()">Call to Know More</button>
          <div class="cb-phone" id="cbPhone">📞 +91 9876543210</div>
        </div>

      </div>

    </div>


    <!--  data science section -->

    <div class="container mt-5">
      <h1 class="display-4 fw-bold" id="dataScienceSection">What is data science?</h1>
      <p class="lead muted-text mt-4">
        Data science combines math and statistics, specialized programming, advanced analytics, artificial intelligence (AI) and machine learning with specific subject matter expertise to uncover actionable insights hidden in an organization’s data. These insights can be used to guide decision making and strategic planning. </p>
      <p class="lead muted-text mt-4">
        The accelerating volume of data sources, and subsequently data, has made data science is one of the fastest growing field across every industry. As a result, it is no surprise that the role of the data scientist was dubbed the “sexiest job of the 21st century” by Harvard Business Review. Organizations are increasingly reliant on them to interpret data and provide actionable recommendations to improve business outcomes.
      </p>
      <p>The data science lifecycle involves various roles, tools, and processes, which enables analysts to glean actionable insights. Typically, a data science project undergoes the following stages:</p>

      <p><strong>Data ingestion:</strong> The lifecycle begins with the data collection, both raw structured and unstructured data from all relevant sources using a variety of methods. These methods can include manual entry, web scraping, and real-time streaming data from systems and devices. Data sources can include structured data, such as customer data, along with unstructured data like log files, video, audio, pictures, the Internet of Things (IoT), social media, and more.</p>

      <p><strong>Data analysis:</strong> Here, data scientists conduct an exploratory data analysis to examine biases, patterns, ranges, and distributions of values within the data. This data analytics exploration drives hypothesis generation for a/b testing. It also allows analysts to determine the data’s relevance for use within modeling efforts for predictive analytics, machine learning, and/or deep learning. Depending on a model’s accuracy, organizations can become reliant on these insights for business decision making, allowing them to drive more scalability.</p>

      <div id="courseBarX">

        <div class="cb-container">

          <div class="cb-item">
            <div class="cb-title">Course Duration</div>
            <div class="cb-sub">3 Months (Weekend)</div>
          </div>

          <div class="cb-item">
            <div class="cb-title">Course Fee</div>
            <div class="cb-sub">₹15,000</div>
          </div>

          <div class="cb-item">
            <div class="cb-title">Mode</div>
            <div class="cb-sub">Online + offline</div>
          </div>

          <div class="cb-item">
            <button class="cb-btn" onclick="cbShowNumber()">Call to Know More</button>
            <div class="cb-phone" id="cbPhone">📞 +91 9876543210</div>
          </div>

        </div>

      </div>



      <!-- generativ ai -->

      What is generative AI<div class="container mt-5">
        <h1 class="display-4 fw-bold" id="generativeAIsection">What is generative AI?</h1>
        <p class="lead muted-text mt-4">
          Generative AI, sometimes called gen AI, is artificial intelligence (AI) that can create original content such as text, images, video, audio or software code in response to a user’s prompt or request.
        <p class="lead muted-text mt-4">
Generative AI relies on sophisticated machine learning models called deep learning models algorithms that simulate the learning and decision-making processes of the human brain. These models work by identifying and encoding the patterns and relationships in huge amounts of data, and then using that information to understand users' natural language requests or questions and respond with relevant new content.        </p>
        <p>AI has been a hot technology topic for the past decade, but generative AI, and specifically the arrival of ChatGPT in 2022, has thrust AI into worldwide headlines and launched an unprecedented surge of AI innovation and adoption. Generative AI offers enormous productivity benefits for individuals and organizations, and while it also presents very real challenges and risks, businesses are forging ahead, exploring how the technology can improve their internal workflows and enrich their products and services. </p>

        <p> According to research by the management consulting firm McKinsey, one third of organizations are already using generative AI regularly in at least one business function.¹ Industry analyst Gartner projects more than 80% of organizations will have deployed generative AI applications or used generative AI application programming interfaces (APIs) by 2026.2</p>

        <div id="courseBarX">

          <div class="cb-container">

            <div class="cb-item">
              <div class="cb-title">Course Duration</div>
              <div class="cb-sub">3 Months (Weekend)</div>
            </div>

            <div class="cb-item">
              <div class="cb-title">Course Fee</div>
              <div class="cb-sub">₹15,000</div>
            </div>

            <div class="cb-item">
              <div class="cb-title">Mode</div>
              <div class="cb-sub">Online + offline</div>
            </div>

            <div class="cb-item">
              <button class="cb-btn" onclick="cbShowNumber()">Call to Know More</button>
              <div class="cb-phone" id="cbPhone">📞 +91 9876543210</div>
            </div>

          </div>

        </div>


        <!-- full stack -->

        <div class="container mt-5">
          <h1 class="display-4 fw-bold" id="fullStackSection">What is Full stack devaloper?</h1>
          <p class="lead muted-text mt-4">
A full-stack developer is a software professional capable of creating both the front-end (user-facing) and back-end (server-side, database) components of websites and applications. They manage the entire development process, including coding, databases, APIs, and debugging, offering high flexibility and proficiency in multiple technologies to build functional, end-to-end applications.</p>
          <p class="lead muted-text mt-4">
The world of full-stack development is large, and many new and evolving technologies continually push the limits of what a full-stack developer can create. Staying on top of cutting-edge technology and techniques in the full-stack development field is one of the many exciting aspects of working in this role.           </p>
          <p>Full-stack developers design and create websites and applications for various platforms. </p>

          <p>According to the 2025 Stack Overflow Developer Survey, full-stack developer was the most popular role among developers worldwide, with 27 per cent of 43,560 respondents indicating they worked in this role [1]. It was also the most popular developer role in India, with 25.3 per cent of respondents working in this role in 2025 [1].</p>

          <div id="courseBarX">

            <div class="cb-container">

              <div class="cb-item">
                <div class="cb-title">Course Duration</div>
                <div class="cb-sub">3 Months (Weekend)</div>
              </div>

              <div class="cb-item">
                <div class="cb-title">Course Fee</div>
                <div class="cb-sub">₹15,000</div>
              </div>

              <div class="cb-item">
                <div class="cb-title">Mode</div>
                <div class="cb-sub">Online + offline</div>
              </div>

              <div class="cb-item">
                <button class="cb-btn" onclick="cbShowNumber()">Call to Know More</button>
                <div class="cb-phone" id="cbPhone">📞 +91 9876543210</div>
              </div>

            </div>

          </div>


          <!-- digital marketing -->

          <div class="container mt-5">
            <h1 class="display-4 fw-bold" id="digitalMarketingSection">What is digital marketing?</h1>
            <p class="lead muted-text mt-4">
Digital marketing refers to the use of digital technologies and platforms to promote products, services or concepts to potential customers. It encompasses a wide range of marketing techniques that are intended to increase brand awareness, drive website traffic, generate leads and increase customer conversion rates.</p>
            <p class="lead muted-text mt-4">
Digital marketing, sometimes referred to as online marketing, is often the first point of contact in the customer experience. It uses various strategies and tools to reach and engage targeted audiences or organizations through the internet and electronic devices.             </p>
            <p>Generally, B2B commerce involves a longer decision-making process and might involve a broader team of stakeholders. B2C commerce, by contrast, tends to be more personal and its consumers more impulsive. Nonetheless, Gartner has estimated that by 2025, 80% of commerce between businesses will take place digitally. Given this, digital marketing is essential for lead generation and customer retention for B2B organizations.</p>

            <p>Concurrently, advances in artificial intelligence (AI), machine learning (ML) and associated technologies have transformed the digital marketing landscape, paving the way for more advanced personalization practices and intelligent digital marketing campaigns. Today, businesses use marketing automations, AI-assisted virtual agents and generative content products to attract customers and nurture potential leads.</p>

            <div id="courseBarX">

              <div class="cb-container">

                <div class="cb-item">
                  <div class="cb-title">Course Duration</div>
                  <div class="cb-sub">3 Months (Weekend)</div>
                </div>

                <div class="cb-item">
                  <div class="cb-title">Course Fee</div>
                  <div class="cb-sub">₹15,000</div>
                </div>

                <div class="cb-item">
                  <div class="cb-title">Mode</div>
                  <div class="cb-sub">Online + offline</div>
                </div>

                <div class="cb-item">
                  <button class="cb-btn" onclick="cbShowNumber()">Call to Know More</button>
                  <div class="cb-phone" id="cbPhone">📞 +91 9876543210</div>
                </div>

              </div>

            </div>


            <!-- java -->

            <div class="container mt-5">
              <h1 class="display-4 fw-bold" id="javaSection">What is Java?</h1>
              <p class="lead muted-text mt-4">
Java is a widely used object-oriented programming language and software platform that runs on billions of devices, including notebook computers, mobile devices, gaming consoles, medical devices and many others. The rules and syntax of Java are based on the C and C++ languages.     </p>       
  <p class="lead muted-text mt-4">
One major advantage of developing software with Java is its portability. Once you wrote code for a Java program on a notebook computer, it can be easily moved to a mobile device. When the language was invented in 1991 by James Gosling of Sun Microsystems (later acquired by Oracle), the primary goal was to be able to "write once, run anywhere."              </p>
              <p>The Java development lifecycle involves various roles, tools, and processes, which enables developers to create robust and scalable applications. Typically, a Java project undergoes the following stages:</p>

              <p>It's also important to understand that Java is much different from JavaScript. JavaScript does not need to be compiled, while Java code needs to be. Also, Javascript only runs on web browsers, while Java can be run anywhere.</p>

              <p>New and improved software development tools are coming to the market at a remarkable pace, displacing incumbent products once thought to be indispensable. In light of this continual turnover, Java’s longevity is impressive; more than two decades after its creation, Java is still the most popular language for application software development. Developers continue to choose it over languages such as Python, Ruby, PHP, Swift, C++ and others. As a result, Java remains to be an important requirement for competing in the job market.</p>

              <div id="courseBarX">

                <div class="cb-container">

                  <div class="cb-item">
                    <div class="cb-title">Course Duration</div>
                    <div class="cb-sub">3 Months (Weekend)</div>
                  </div>

                  <div class="cb-item">
                    <div class="cb-title">Course Fee</div>
                    <div class="cb-sub">₹15,000</div>
                  </div>

                  <div class="cb-item">
                    <div class="cb-title">Mode</div>
                    <div class="cb-sub">Online + offline</div>
                  </div>

                  <div class="cb-item">
                    <button class="cb-btn" onclick="cbShowNumber()">Call to Know More</button>
                    <div class="cb-phone" id="cbPhone">📞 +91 9876543210</div>
                  </div>

                </div>

              </div>


              <!-- c & c++ -->

              <div class="container mt-5">
                <h1 class="display-4 fw-bold" id="cAndCppSection">C and C++</h1>
                <p class="lead muted-text mt-4">
These manuals provide guidance and reference material for the American National Standards Institute (ANSI) Standard C++ Library and the Integrated Language Environment® (ILE) versions of the C and C++ programming languages. </p>
                <p class="lead muted-text mt-4">
ILE C/C++ Compiler Reference
This information contains reference information about using preprocessor statements in your program, macros defined by the ILE C/C++ compiler, command line options, and input/output considerations.                </p>
                <p>ILE C/C++ Language Reference
This information contains reference information about the elements of C and C++, declarations, definitions, functions, expressions, and operators. It also contains a reference of C-language statements, preprocessor directives, and input/output considerations.</p>

                <p>ILE C/C++ Programmer’s Guide
This information contains instructions on entering source statements, creating, running, and debugging programs, and managing streams and record files. You can learn how to write programs that use externally described files, device files, database files, or distributed data management files, and that handle exceptions.</p>

                <p>ILE C/C++ Runtime Library Functions
This information provides reference information about include files, runtime functions, and runtime considerations.</p>

                <div id="courseBarX">

                  <div class="cb-container">

                    <div class="cb-item">
                      <div class="cb-title">Course Duration</div>
                      <div class="cb-sub">3 Months (Weekend)</div>
                    </div>

                    <div class="cb-item">
                      <div class="cb-title">Course Fee</div>
                      <div class="cb-sub">₹15,000</div>
                    </div>

                    <div class="cb-item">
                      <div class="cb-title">Mode</div>
                      <div class="cb-sub">Online + offline</div>
                    </div>

                    <div class="cb-item">
                      <button class="cb-btn" onclick="cbShowNumber()">Call to Know More</button>
                      <div class="cb-phone" id="cbPhone">📞 +91 9876543210</div>
                    </div>

                  </div>

                </div>



<!-- footer -->
  <footer class="footer mt-5">
    <div class="footer-container">

      <div class="footer-section">
        <h3><img src="./images/finallogo.png" alt="Logo" width="200"></h3>
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


                <script>
                  function cbShowNumber() {
                    document.getElementById("cbPhone").style.display = "block";
                  }
                </script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                  crossorigin="anonymous"></script>
</body>

</html>