<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./css/main.css">

  <title>Department of Agriculture</title>
</head>
<body>
  <!-- Introduction -->
  <section id="home">
    <div class="intro-container">
      <!-- Navigation Panel -->
      <?php include_once "./php/navigation.php" ?>
  
      <!-- Intro Body -->
      <div class="intro-body-container">
        <div class="intro-heading">
          Empowering Farmers<br/> with Cutting-edge<br/> Technology
        </div>
        <div class="intro-body">
          Harvesting the future with innovation. Our advanced<br/> agricultural solutions blend cutting-edge technology<br/> with deep farming insights to revolutionize how you farm.
        </div>
        <!-- intro signup button -->
        <div class="intro-signup">
          <a href="register.html">
            <button type="submit">
                <img src="./images/icon_signup.png" alt="signup logo">
                Sign Up
            </button>
          </a>
        </div>
        <!-- Intro find more button -->
        <div class="intro-find">
          <a href="#">
            <button type="submit">
              Find more
              <img src="./images/icon_downarrow.png" alt="find more icon">
            </button>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Agro Tech Page -->
  <section id="agro-tech">
    <div class="agro-container">
      <div class="agro-title">
        <h1>Explore Farm Mechanism of <br/> Agricultural Technology</h1>
      </div>
      <div class="agro-body">
        <div class="agro-card land-preperation">
          <div class="card-container">
            <div class="card-title">Land Preperation</div>
            <div class="card-btn">
              <a href="#">
                <button type="button">
                  View More
                  <img src="./images/icon_downarrow.png" alt="view more icon">
                </button>
              </a>
            </div>
          </div>
        </div>
        <div class="agro-card seed-planting">
          <div class="card-container">
            <div class="card-title">Seed Planting</div>
            <div class="card-btn">
              <a href="#">
                <button type="button">
                  View More
                  <img src="./images/icon_downarrow.png" alt="view more icon">
                </button>
              </a>
            </div>
          </div>
        </div>
        <div class="agro-card harvesting">
          <div class="card-container">
            <div class="card-title">Harvesting</div>
            <div class="card-btn">
              <a href="#">
                <button type="button">
                  View More
                  <img src="./images/icon_downarrow.png" alt="view more icon">
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Us Page -->
  <section id="about-us">
    <div class="aboutus-container">
      <div class="aboutus-title">About Us</div>
      <div class="aboutus-body">
        <div class="aboutus-cover">
          <img src="./images/img_aboutus.jpg" alt="about us img">
        </div>
        <div class="aboutus-details">
          The Department of Agriculture (DOA) functions under the Ministry of Agriculture and is one of the largest government departments with a high profile community of agricultural scientists and a network of institutions covering different agro ecological regions island wide.
          <div class="details-link">
            <a href="https://dao.gov.lk">https://dao.gov.lk</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contac Us -->
  <section id="contact-us">
    <div class="contact-container">
      <div class="contact-title">
        <h1>Contact Us</h1>
        <button type="button">
          Feedback
          <img src="./images/icon_forwardarrow.png" alt="feedback icon">
        </button>
      </div>
      <div class="contact-details">
        <div class="contact-item">
          <img src="./images/icon_location.png" alt="location icon">
          Department of Agriculture, P.O. Box. 1, Peradeniya, Sri Lanka
        </div>
        <div class="contact-item">
          <img src="./images/icon_email.png" alt="email icon">
          info@doa.gov.lk
        </div>
        <div class="contact-item">
          <img src="./images/icon_phone.png" alt="phone icon">
          +94 812 388331/32/34
        </div>
      </div>
    </div>
  </section>
</body>
</html>