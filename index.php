<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Charity Donation</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="5335745.png" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com/dist/email.min.js"></script>
  <script type="text/javascript">
    (function(){
      emailjs.init("nAkjihhNffAsKt6Wl");
    })();
 
    function sendMail() {
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var message = document.getElementById("message").value;
      var number = document.getElementById("number").value;
      var valid = true;
 
      if (name.trim() === "") {
        alert("Please enter your name");
        valid = false;
      }
 
       else if (email.trim() === "") {
        alert("Please enter your email");
        valid = false;
      } else if (!validateEmail(email)) {
        alert("Please enter a valid email address");
        valid = false;
      }
 
      else if (message.trim() === "") {
        alert("Please enter your message");
        valid = false;
      }
 
     else if (number.trim() === "") {
        alert("Please enter your mobile number");
        valid = false;
      } else if (!validatePhoneNumber(number)) {
        alert("Please enter a valid phone number");
        valid = false;
      }
 
      if (valid) {
        var params = {
          name: name,
          email: email,
          message: message,
          number: number
        };
 
        const serviceID = "service_pxthz8b";
        const templateID = "template_oltz14i";
 
        emailjs.send(serviceID, templateID, params)
          .then(function(response) {
            console.log("SUCCESS", response);
            alert("Your message has been sent successfully!");
            document.getElementById("contact-form").reset();
            window.location.href = "index.html";
          }, function(error) {
            console.log("FAILED", error);
            alert("Sorry, there was an error sending your message. Please try again later.");
          });
      }
    }
 
    function validateEmail(email) {
      // Regular expression for email validation
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
    }
 
    function validatePhoneNumber(number) {
      // Regular expression for phone number validation
      var numberRegex = /^\d{10}$/;
      return numberRegex.test(number);
    }
  </script>
</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <h1>
        <a href="#" class="logo">The Hope</a>
      </h1>

      <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <a href="#" class="logo">THE HOPE</a>

        <ul class="navbar-list">

          <li>
            <a href="#home" class="navbar-link" data-nav-link>
              <span>Home</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#about" class="navbar-link" data-nav-link>
              <span>About</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#service" class="navbar-link" data-nav-link>
              <span>Service</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#event" class="navbar-link" data-nav-link>
              <span>Event</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#contact" class="navbar-link" data-nav-link>
              <span>Contact</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

      <div class="header-action">

        <button class="search-btn" aria-label="Search">
          <ion-icon name="search-outline"></ion-icon>
        </button>

        <a href="login.html" class="btn btn-primary">
          <span>Donation</span>

          <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
        </a>

        <div class="login-btn">
          <a class="btn btn-primary" href="login.html">Login</a>
        </div>

      </div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <p class="section-subtitle">
            <img src="./assets/images/subtitle-img-white.png" width="32" height="7" alt="Wavy line">

            <span>Welcome to WorldWide</span>
          </p>

          <h2 class="h1 hero-title">
            Give Love for Saving <strong>World People</strong>
          </h2>

          <p class="hero-text" style="letter-spacing: 1px;">
            Charity donations for impoverished individuals serve a crucial purpose in addressing socio-economic disparities and improving the quality of life for those facing financial hardship. These contributions provide essential resources such as food, shelter, education, and healthcare, which are often out of reach for marginalized communities. By donating to charities focused on supporting the poor, individuals can actively participate in reducing inequality, promoting social justice, and enabling opportunities for those less fortunate. 
          </p>

          <a href="registration.html">
            <button class="btn btn-primary">
              <span>Donation</span>
  
              <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
            </button>
          </a>

        </div>
      </section>





      <!-- 
        - #FEATURES
      -->

      <section class="section features">
        <div class="container">

          <ul class="features-list">

            <li class="features-item">
              <div class="item-icon">
                <ion-icon name="fast-food-outline"></ion-icon>
              </div>

              <div>
                <h3 class="h4 item-title">Donate Food</h3>

                <p class="item-text">
                  "Share a Plate, Spread the Love"
                </p>
              </div>
            </li>

            <li class="features-item">
              <div class="item-icon">
                <ion-icon name="book-outline"></ion-icon>
              </div>

              <div>
                <h3 class="h4 item-title">Quality Education</h3>

                <p class="item-text">
                  "Education: The Gift of a Lifetime"
                </p>
              </div>
            </li>

            <li class="features-item">
              <div class="item-icon">
                <ion-icon name="home-outline"></ion-icon>
              </div>

              <div>
                <h3 class="h4 item-title">Comfort Shelter</h3>

                <p class="item-text">
                  "Bringing Comfort, Creating Homes"
                </p>
              </div>
            </li>

            <li class="features-item">
              <div class="item-icon">
                <ion-icon name="shirt-outline"></ion-icon>
              </div>

              <div>
                <h3 class="h4 item-title">Outfit Contributions</h3>

                <p class="item-text">
                  "Threads of Love, Weaving Possibilities"
                </p>
              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about">
        <div class="container">

          <div class="about-banner">

            <h2 class="deco-title">About Us</h2>

            <img src="./assets/images/deco-img.png" width="58" height="261" alt="" class="deco-img">

            <div class="banner-row">

              <div class="banner-col">
                <img src="./assets/images/about-banner-1.png" width="315" height="380" loading="lazy" alt="Tiger"
                  class="about-img w-100">

                <img src="./assets/images/about-banner-2.png" width="386" height="250" loading="lazy" alt="Panda"
                  class="about-img about-img-2 w-100">
              </div>

              <div class="banner-col">
                <img src="./assets/images/about-banner-3.png" width="250" height="277" loading="lazy" alt="Elephant"
                  class="about-img about-img-3 w-100">

                <img src="./assets/images/about-banner-4.png" width="315" height="380" loading="lazy" alt="Deer"
                  class="about-img w-100">
              </div>

            </div>

          </div>

          <div class="about-content">

            <p class="section-subtitle">
              <img src="./assets/images/subtitle-img-green.png" width="32" height="7" alt="Wavy line">

              <span>Why Choose Us</span>
            </p>

            <h2 class="h2 section-title">
              Touching Hearts, Changing Destinies: <strong>Give to Empower</strong>
            </h2>

            <ul class="tab-nav">

              <li>
                <button class="tab-btn" id="mission" onclick="changeToMission()">Our Mission</button>
              </li>

              <li>
                <button class="tab-btn color" id="vision" onclick="changeToVision()">Our Vision</button>
              </li>

              <li>
                <button class="tab-btn" id="next-plan" onclick="changeToNextPlan()">Next Plan</button>
              </li>

            </ul>

            <div class="tab-content">

              <p class="section-text" id="about-section">
                These donations act as a lifeline, offering a chance for recipients to break the cycle of poverty, access education and vocational training, and ultimately build a better future for themselves and their families.
              </p>

              <ul class="tab-list">

                <li class="tab-item">
                  <div class="item-icon">
                    <ion-icon name="checkmark-circle"></ion-icon>
                  </div>

                  <p class="tab-text">Charity For Foods</p>
                </li>

                <li class="tab-item">
                  <div class="item-icon">
                    <ion-icon name="checkmark-circle"></ion-icon>
                  </div>

                  <p class="tab-text">Charity For Education</p>
                </li>

                <li class="tab-item">
                  <div class="item-icon">
                    <ion-icon name="checkmark-circle"></ion-icon>
                  </div>

                  <p class="tab-text">Charity For Shelter</p>
                </li>

                <li class="tab-item">
                  <div class="item-icon">
                    <ion-icon name="checkmark-circle"></ion-icon>
                  </div>

                  <p class="tab-text">Charity For Outfits</p>
                </li>

              </ul>

              <button class="btn btn-secondary">
                <span>Learn More Us</span>

                <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
              </button>

            </div>

          </div>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="section cta">
        <div class="container">

          <div class="cta-content">
            <h2 class="h2 section-title">324+ Trusted Global Partners</h2>

            <button class="btn btn-outline">
              <span>Kind-hearted Individual</span>

              <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
            </button>
          </div>

          <figure class="cta-banner">
            <img src="./assets/images/social.jpeg" width="520" height="228" loading="lazy" alt="Fox"
              class="img-cover">
          </figure>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" id="service" style="background-image: url('./assets/images/service-map.png')">
        <div class="container">

          <p class="section-subtitle">
            <img src="./assets/images/subtitle-img-green.png" width="32" height="7" alt="Wavy line">

            <span>What We Do</span>
          </p>

          <h2 class="h2 section-title">
            We Work Differently to
          </h2>

          <ul class="service-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="medkit-outline"></ion-icon>
                </div>

                <h3 class="h3 card-title">Health Care Support</h3>

                <p class="card-text">
                  Offering medical clinics and services to underserved populations, Providing access to free healthcare treatments.
                </p>

                <a href="#" class="btn-link">
                  <span>Read More</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="paw-outline"></ion-icon>
                </div>

                <h3 class="h3 card-title">Animal Welfare</h3>

                <p class="card-text">
                  Rescuing and caring for abused or neglected animals, and promoting responsible pet ownership.
                </p>

                <a href="#" class="btn-link">
                  <span>Read More</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="woman-outline"></ion-icon>
                </div>

                <h3 class="h3 card-title" style="display: inline;">Women's Empowerment</h3>

                <p class="card-text">
                  Supporting women's rights and providing resources healthcare economic empowerment
                </p>

                <a href="#" class="btn-link">
                  <span>Read More</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="footsteps-outline"></ion-icon>
                </div>

                <h3 class="h3 card-title">Rural Development</h3>

                <p class="card-text">
                  Implementing projects to improve infrastructure, agriculture, and economic opportunities in rural areas
                </p>

                <a href="#" class="btn-link">
                  <span>Read More</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #DONATE
      -->

      <!-- <section class="section donate" id="donate">
        <div class="container">

          <ul class="donate-list">

            <li>
              <div class="donate-card">

                <figure class="card-banner">
                  <img src="./assets/images/donate-1.jpg" width="520" height="325" loading="lazy" alt="Elephant"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="progress-wrapper">
                    <p class="progress-text">
                      <span>Raised</span>

                      <data value="256">$256</data>
                    </p>

                    <data class="progress-value" value="83">83%</data>
                  </div>

                  <div class="progress-box">
                    <div class="progress"></div>
                  </div>

                  <h3 class="h3 card-title">Raise Hand To Save Animals</h3>

                  <div class="card-wrapper">

                    <p class="card-wrapper-text">
                      <span>Goal</span>

                      <data class="green" value="34562">$34562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>Raise</span>

                      <data class="yellow" value="562">$562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>To Go</span>

                      <data class="cyan" value="864">$864</data>
                    </p>

                  </div>

                  <button class="btn btn-secondary">
                    <span>Donation</span>

                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                  </button>

                </div>

              </div>
            </li>

            <li>
              <div class="donate-card">

                <figure class="card-banner">
                  <img src="./assets/images/donate-2.jpg" width="520" height="325" loading="lazy" alt="Elephant"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="progress-wrapper">
                    <p class="progress-text">
                      <span>Raised</span>

                      <data value="256">$256</data>
                    </p>

                    <data class="progress-value" value="83">83%</data>
                  </div>

                  <div class="progress-box">
                    <div class="progress"></div>
                  </div>

                  <h3 class="h3 card-title">Raise Hand To Save Animals</h3>

                  <div class="card-wrapper">

                    <p class="card-wrapper-text">
                      <span>Goal</span>

                      <data class="green" value="34562">$34562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>Raise</span>

                      <data class="yellow" value="562">$562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>To Go</span>

                      <data class="cyan" value="864">$864</data>
                    </p>

                  </div>

                  <button class="btn btn-secondary">
                    <span>Donation</span>

                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                  </button>

                </div>

              </div>
            </li>

            <li>
              <div class="donate-card">

                <figure class="card-banner">
                  <img src="./assets/images/donate-3.jpg" width="520" height="325" loading="lazy" alt="Elephant"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="progress-wrapper">
                    <p class="progress-text">
                      <span>Raised</span>

                      <data value="256">$256</data>
                    </p>

                    <data class="progress-value" value="83">83%</data>
                  </div>

                  <div class="progress-box">
                    <div class="progress"></div>
                  </div>

                  <h3 class="h3 card-title">Raise Hand To Save Animals</h3>

                  <div class="card-wrapper">

                    <p class="card-wrapper-text">
                      <span>Goal</span>

                      <data class="green" value="34562">$34562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>Raise</span>

                      <data class="yellow" value="562">$562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>To Go</span>

                      <data class="cyan" value="864">$864</data>
                    </p>

                  </div>

                  <button class="btn btn-secondary">
                    <span>Donation</span>

                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                  </button>

                </div>

              </div>
            </li>

            <li>
              <div class="donate-card">

                <figure class="card-banner">
                  <img src="./assets/images/donate-4.jpg" width="520" height="325" loading="lazy" alt="Elephant"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="progress-wrapper">
                    <p class="progress-text">
                      <span>Raised</span>

                      <data value="256">$256</data>
                    </p>

                    <data class="progress-value" value="83">83%</data>
                  </div>

                  <div class="progress-box">
                    <div class="progress"></div>
                  </div>

                  <h3 class="h3 card-title">Raise Hand To Save Animals</h3>

                  <div class="card-wrapper">

                    <p class="card-wrapper-text">
                      <span>Goal</span>

                      <data class="green" value="34562">$34562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>Raise</span>

                      <data class="yellow" value="562">$562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>To Go</span>

                      <data class="cyan" value="864">$864</data>
                    </p>

                  </div>

                  <button class="btn btn-secondary">
                    <span>Donation</span>

                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                  </button>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section> -->





      <!-- 
        - #TESTIMONIALS
      -->

      <section class="testi">

        <div class="testi-content">

          <p class="section-subtitle">
            <img src="./assets/images/subtitle-img-green.png" width="32" height="7" alt="Wavy line">

            <span>Our Testimonials</span>
          </p>

          <h2 class="h2 section-title">
            What People Say About <strong>Our Organization</strong>
          </h2>

          <div class="testi-card">

            <figure class="card-avatar">
              <img src="./assets/images/testi-avatar.png" width="60" height="60" loading="lazy" alt="David S. Neuman">
            </figure>

            <div>
              <blockquote class="testi-text">
                "An inspiring charity that truly touches lives. Their unwavering dedication to helping people in need is a beacon of hope, making a meaningful difference in our world."
              </blockquote>

              <h3 class="testi-name">David S. Neuman</h3>

              <p class="testi-title">Business Manager</p>
            </div>

          </div>

        </div>

        <figure class="testi-banner">
          <img src="./assets/images/about-banner-3.png" width="960" height="846" loading="lazy" alt="Rhinoceros"
            class="img-cover">
        </figure>

      </section>





      <!-- 
        - #PARTNER
      -->

      <section class="section partner">
        <div class="container">

          <a href="#" class="partner-logo">
            <img src="./assets/images/partner-1.png" width="157" height="55" loading="lazy" alt="Children Fund"
              class="gray">

            <img src="./assets/images/partner-1-active.png" width="157" height="55" loading="lazy" alt="Children Fund"
              class="color">
          </a>

          <a href="#" class="partner-logo">
            <img src="./assets/images/partner-2.png" width="163" height="55" loading="lazy" alt="Non Profit Agency"
              class="gray">

            <img src="./assets/images/partner-2-active.png" width="163" height="55" loading="lazy"
              alt="Non Profit Agency" class="color">
          </a>

          <a href="#" class="partner-logo">
            <img src="./assets/images/partner-3.png" width="149" height="55" loading="lazy" alt="Rise Hand Help Us"
              class="gray">

            <img src="./assets/images/partner-3-active.png" width="149" height="55" loading="lazy"
              alt="Rise Hand Help Us" class="color">
          </a>

          <a href="#" class="partner-logo">
            <img src="./assets/images/partner-4.png" width="169" height="58" loading="lazy" alt="Helping" class="gray">

            <img src="./assets/images/partner-4-active.png" width="169" height="58" loading="lazy" alt="Helping"
              class="color">
          </a>

          <a href="#" class="partner-logo">
            <img src="./assets/images/partner-5.png" width="211" height="55" loading="lazy" alt="Poor Fund Organization"
              class="gray">

            <img src="./assets/images/partner-5-active.png" width="211" height="55" loading="lazy"
              alt="Poor Fund Organization" class="color">
          </a>

        </div>
      </section>





      <!-- 
        - #EVENT
      -->

      <section class="section event" id="event">
        <div class="container">

          <p class="section-subtitle">
            <img src="./assets/images/subtitle-img-green.png" width="32" height="7" alt="Wavy line">

            <span>Event & Program</span>

            <img src="./assets/images/subtitle-img-green.png" width="32" height="7" alt="Wavy line">
          </p>

          <h2 class="h2 section-title">
            Our Most Popular Causes For <strong>Building Fund</strong>
          </h2>

          <ul class="event-list">

          <?php
            $con = new mysqli('localhost', 'root', '', 'logi');
            if (!$con) {
              die(mysqli_error($con));
            }
            $sql = "select * from `events`";
            $result = mysqli_query($con, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $eventname = $row['event_name'];
                $eventdetails = $row['event_details'];
                $eventdate = $row['event_date'];
                $eventlink = $row['event_link'];

                echo '
                        <li>
                        <div class="event-card">
                        <div class="wrapper">
        
                          <div class="card-content">
                            <p class="card-subtitle">' . $eventname . '</p>
        
                            <h3 class="card-title"> Event Date: ' . $eventdate . '</h3>
        
                            <p class="card-text">
                              ' . $eventdetails . '
                            </p>
                          </div>
        
                         <a href="' . $eventlink . '" target="_blank">
                         <button class="btn btn-white">
                            <span>View Events</span>
                            <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                          </button>
                         </a>
                        </div>
        
                      </div>     
                      </li>          
                ';
              }
            }
            ?>

          </ul>

          <button class="btn btn-secondary">
            <span>Learn More Us</span>

            <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
          </button>

        </div>
      </section>

      <div class="contact-container" id="contact"> 
        <div class="row">
            <p>Let's connect with us!</p>
            <div class="form-group">
              <h5 for="name">Name</h5>
              <input
                type="text" required
                class="form-control"
                id="name" 
                placeholder="Enter name"
              />
            </div>
            <div class="form-group">
              <h5 for="email">Email</h5>
              <input
                type="email" required
                class="form-control"
                id="email" 
                placeholder="Enter email"
              />
            </div>
            <div class="form-group">
              <h5 for="number">Mobile Number</h5>
              <input
                type="number"
                class="form-control"
                id="number" required
                placeholder="Enter Mobile Number"
              />
            </div>
            <div class="form-group">
              <h5 for="message">Message</h5>
              <textarea class="form-control" id="message" 
            rows="3"></textarea>
            </div>
            <button class="ctn-btn"  onclick="sendMail()">Submit</button>
          </div>
      </div>





      <!-- 
        - #INSTA POST
      -->
<!-- 
      <section class="insta-post">

        <ul class="insta-post-list">

          <li class="insta-post-item">
            <a href="#" class="insta-post-link">
              <img src="./assets/images/insta-1.png" width="320" height="350" loading="lazy" alt="Lion"
                class="img-cover">

              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="insta-post-item">
            <a href="#" class="insta-post-link">
              <img src="./assets/images/insta-2.png" width="320" height="300" loading="lazy" alt="Deer"
                class="img-cover">

              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="insta-post-item">
            <a href="#" class="insta-post-link">
              <img src="./assets/images/insta-3.png" width="320" height="300" loading="lazy" alt="Wild Bear"
                class="img-cover">

              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="insta-post-item">
            <a href="#" class="insta-post-link">
              <img src="./assets/images/insta-4.png" width="320" height="300" loading="lazy" alt="Deer"
                class="img-cover">

              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="insta-post-item">
            <a href="#" class="insta-post-link">
              <img src="./assets/images/insta-5.jpeg" width="320" height="300" loading="lazy" alt="Horses"
                class="img-cover">

              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </section> -->

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <ul class="footer-list">

        <li>
          <a href="https://seqlegal.com/free-legal-documents/website-terms-and-conditions" target="_blank" class="footer-link">Terms of use</a>
        </li>

        <li>
          <a href="https://policies.google.com/privacy?hl=en-US" target="_blank" class="footer-link">Privacy & Policy</a>
        </li>

      </ul>

      <p class="copyright">
        Copyright 2022. All Rights Reserved.
      </p>
    </div>

  </footer>
  <div class="footer-links" style=" width: 100%; background-color: black; display:  flex; align-items: center; justify-content: center;">
    <a href="#">
      <div style="padding: 10px; font-size: 40px; color: #fff;">
        <ion-icon name="logo-facebook"></ion-icon>
      </div>
    </a>
   <a href="#">
    <div style="padding: 10px; font-size: 40px; color: #fff;">
      <ion-icon name="logo-instagram"></ion-icon>
    </div>
   </a>
    <a href="#">
      <div style="padding: 10px; font-size: 40px; color: #fff;">
        <ion-icon name="logo-linkedin"></ion-icon>
      </div>
    </a>
    <a href="#">
      <div style="padding: 10px; font-size: 40px; color: #fff;">
        <ion-icon name="logo-twitter"></ion-icon>
      </div>
    </a>
  </div>

  <!-- 
    - custom js link
  -->
  <script src="./assets/js/content.js"></script>
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>