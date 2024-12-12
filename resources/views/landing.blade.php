
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantorku | Landing Page</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
 .navbar, #landing-section {
            background-color: #ecf2ff;
        }
 #landing-section {
    min-height: 80vh; /* Full viewport height */
    padding-top: 80px; /* Add some top padding to account for the navbar */
    padding-bottom: 80px; /* Add some bottom padding for spacing */
}
       
#landing-background-image {
    background-image: url('img/hearder-back-landing.png');
    background-size: 80% 100%;
    background-position: center;
    background-repeat: no-repeat;
    
    opacity: 1; /* Adjust this value to control the image opacity */
}
.navbar, #landing-section {
    background-color: #ecf2ff;
}
.intro-text {
      color: #828282;
    }

    .feature-box {
      border-radius: 12px;
      padding: 30px;
      text-align: center;
      background-color: #fff;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease-in-out;
     
    }

    .bg-peach {
      background-color: #fff7eb;
    }

    .bg-light-blue {
      background-color: #f0f9ff;
    }

    .bg-mint {
      background-color: #ebfdf7;
    }

    .bg-lavender {
      background-color: #f6f8fd;
      border-radius: 12px;
    }

    .icon {
      width: 50px;
      height: 50px;
      margin-bottom: 15px;
    }

    .dashboard-image {
      margin-top: 20px;
      width: 100%;
    }
    .feature-icon {
      height: 50px;
      margin-bottom: 15px;
    }
    .judul {
    margin-top: 2rem;     /* More space above */
    margin-bottom: 2rem;  /* Less space below */
}
.judul2 {
    margin-top: 2rem;     /* More space above */
 
}
.juduaatas {
    margin-top: -20px;     /* More space above */
 
}
.juduaatas2 {
    margin-top: -50px;     /* More space above */
 
}
#top{
    margin-top: -200px;
}

.section-title {
      font-size: 1.75rem;
      font-weight: 600;
      color: #1a1a1a;
      text-align: left;
      margin-bottom: 40px;
      margin-left:40px;
    }

    .feature-image {
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .tinggi{
       

    }
    .feature-desc {
      color: #828282;
      font-size: 0.95rem;
      text-align: center;
      margin-top: 20px;
    }
    .testimonials-section {
      padding: 60px 15px;
    }

    .features-section {
      background-color: #f5f7fa;
      padding: 60px 15px;
      border-radius: 10px;
    }

    .feature-card {
      padding: 15px;
      border: 1px solid #e1e8ed;
      border-radius: 8px;
      text-align: center;
      background: #fff;
      box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
    }
    .feature-card2 {
      padding: 15px;
      border: 1px solid #e1e8ed;
      border-radius: 8px;
      text-align: center;
      background: #fff;
      box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
      margin-left:100px;
      margin-right:-100px;

    }

    .testimonial-card {
      padding: 20px;
      border-radius: 10px;
      background: #fff;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .testimonial-card .client-image {
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }

    .pagination-controls {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 15px;
        }

        .pagination-controls button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #f0f0f0;
            border: none;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .pagination-controls button:hover {
            background-color: #e0e0e0;
        }

        .pagination-controls span {
            margin: 0 10px;
            font-size: 16px;
        }

    .feature-grid .feature-card {
      margin-bottom: 20px;
    }
    .pricing-section {
      padding: 60px 15px;
    }

    .pricing-card {
      border: 1px solid #e1e8ed;
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      background-color: #fff;
      box-shadow: 0 1px 10px rgba(0, 0, 0, 0.1);
    }

    .pricing-card .price {
      font-size: 2rem;
      font-weight: bold;
      color: #2c3e50;
    }

    .pricing-card .btn {
      margin-top: 15px;
    }

    .faq-section {
      padding: 40px 15px;
    }

    .payment-logos {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin: 20px 0;
    }

    .faq-card {
      background-color: #fff;
      border: 1px solid #e1e8ed;
      border-radius: 8px;
      box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
    }

    .footer-note {
      text-align: center;
      margin-top: 20px;
      font-size: 0.9rem;
      color: #6c757d;
    }  

    .hero-section {
      background-color: #eef4fb;
      padding: 60px 15px;
      text-align: center;
      border-radius: 15px;
    }

    .hero-section h1 {
      font-size: 1.8rem;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .hero-section .btn {
      margin: 5px;
    }

    .footer-section {
      background-color: #fff;
      padding: 40px 15px;
      text-align: center;
    }

    .footer-links {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 30px;
      margin-bottom: 20px;
    }

    .footer-links div {
      text-align: left;
    }

    .footer-links h5 {
      font-weight: 700;
      margin-bottom: 10px;
    }

    .social-icons a {
      margin: 0 10px;
      color: #2c3e50;
      font-size: 1.2rem;
    }

    .footer-note {
      color: #6c757d;
      margin-top: 20px;
      font-size: 0.9rem;
    }
    #memberlogin {
            background-image: url('img/background bawah.png'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 400px; /* Adjust as needed */
            display: flex;
            align-items: center;
            
        }
      

        #memberlogin h1 {
            font-size: 2.5rem;
            margin-bottom: 2rem; /* Increased bottom margin */
            line-height: 1.5; /* Adjust line height for better readability */
        }

        .pricing-card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .pricing-card:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .pricing-card .price {
            font-size: 24px;
            font-weight: bold;
            margin: 15px 0;
        }

        .pricing-card .price small {
            font-size: 14px;
            font-weight: normal;
            color: #6c757d;
        }

        .pricing-card ul {
            list-style-type: none;
            padding: 0;
        }

        .pricing-card ul li {
            margin-bottom: 10px;
        }

        .pricing-card .btn {
            margin-top: 15px;
        }    
@media (max-width: 767px) {
    #landing-background-image {
        display: none;
    }
    #top{
    margin-top: 0px;
    }
}
@media (min-width: 992px) {
            .navbar-nav {
                margin-left: auto;
                margin-right: auto;
            }
            .navbar-nav .nav-item {
                margin: 0 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg  shadow-sm">
        <div class="container">
            <a class="navbar-brand text-primary fw-bold" href="#">KANTORKU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">About Kantorku</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Solutions</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">FAQ</a></li>
                </ul>
                <div class="d-none d-lg-block">
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="py-5 position-relative" id="landing-section">
        <div id="landing-background-image" class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 0;"></div>
        <div class="container text-center position-relative" style="z-index: 1;">
            <h2 class="display-6 fw-bold text-dark mb-3 ">Most powerful & friendly</h2>
            <h2 class="display-6 fw-bold text-primary mb-4 juduaatas" >Attendance System</h2>
            <p class="lead text-muted mb-5 juduaatas">52.589.+ Startup & Companies Using our Software</p>
            <div class="d-flex justify-content-center gap-3 ">
                <a href=""{{ route('signup') }}" class="btn btn-primary btn-lg">Sign Up</a>
                <a href="{{ route('login') }}" class="btn  btn-lg">
    <i class="bi bi-play-circle me-2"></i>
    See How it work
</a>

            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="Features Section">
        <div class="container py-5">
    <!-- Header -->
    <div class="text-center mb-5">
      <h5 class="text-secondary">Introducing Kantorku RFID Attendance System</h5>
      <p class="text-secondary">Where attendance logging becomes seamless</p>
    </div>

    
    <div class="row g-4">
      <!-- Scalable -->
      <div class="col-md-6 col-lg-4">
      <div class="feature-box bg-peach">
          <img src="img/tas.png" alt="Scalable Icon" class="feature-icon judul2">
          <h5>Scalable</h5>
          <p>No matter how much your employee, We got you!</p>
        </div>
      </div>

      <!-- Digital System -->
      <div class="col-md-6 col-lg-4">
      <div class="feature-box bg-lavender">
          
          <h2 class="judul">Digital System</h2>
          <p>Integrating Radio Frequency Identification Card to online database, Displaying useful Dashboard to company managers</p>
          <img src="img/laptop.png" alt="Dashboard" class="img-fluid mt-3">
        </div>
      </div>

      <!-- Compensation Friendly -->
      <div class="col-md-6 col-lg-4">
      <div class="feature-box bg-mint">
          <img src="img/talk.png" alt="Compensation Friendly Icon" class="feature-icon judul2">
          <h5>Compensation Friendly</h5>
          <p>Automatic yet editable by account holder (company manager)</p>
        </div>
      </div>

      <!-- Ready to Use System -->
      <div class="col-md-6 col-lg-4" id="top">
      <div class="feature-box bg-light-blue">
          
          <h5 class="judul">Ready to Use System</h5>
          <p>Instantly deployable attendance system for your company.</p>
          <img src="img/laptop-separo.png" alt="System Video" class="img-fluid mt-3">
        </div><br><br><br>
      </div>
      <div class="col-md-6 col-lg-4">
      <div class=" bg-white">
    </div></div>

      <!-- CIA -->
      <div class="col-md-6 col-lg-4" id="top">
      <div class="feature-box bg-peach judul2">
          <img src="img/bookmark.png" alt="CIA Icon" class="feature-icon">
          <h5>CIA</h5>
          <p>Ensures confidentiality, integrity and availability of data</p>
          <br><br>
        </div>
      </div>
    </div>
 
    </section>
<section id="discover" >
<div class="container py-5">
    <!-- Title --><div class="bg-lavender "><br>
    <div class="text-left ">
      <h2 class="section-title ">Discover Powerful Dozens of <br>Useful Features</h2>
    </div>

    <!-- Features Row -->
    <div class="row g-4">
      <!-- Feature 1 -->
      <div class="col-12 col-md-6 col-lg-3">
        <img src="img/line1.png" alt="Feature 1" class="img-fluid feature-image">
      </div>
      <!-- Feature 2 -->
      <div class="col-12 col-md-6 col-lg-3">
        <img src="img/line2.png" alt="Feature 2" class="img-fluid feature-image">
      </div>
      <!-- Feature 3 -->
      <div class="col-12 col-md-6 col-lg-3">
        <img src="img/line3.png" alt="Feature 3" class="img-fluid feature-image">
      </div>
      <!-- Feature 4 -->
      <div class="col-12 col-md-6 col-lg-3">
        <img src="img/line4.png" alt="Feature 4" class="img-fluid feature-image">
      </div>
    </div>

    <!-- Descriptions -->
    <div class="row mt-4">
      <!-- Description 1 -->
      <div class="col-12 col-md-4">
        <p class="feature-desc">
          <strong>High Customizability:</strong> Tailor the dashboard to your exact needs. Customize schedules, salaries, and more for each employee.
        </p>
      </div>
      <!-- Description 2 -->
      <div class="col-12 col-md-4">
        <p class="feature-desc">
          <strong>Powerful Data Analytics:</strong> Gain valuable insights and make data-driven decisions with advanced analytics tools.
        </p>
      </div>
      <!-- Description 3 -->
      <div class="col-12 col-md-4">
        <p class="feature-desc">
          <strong>Interactive Graphs & Charts:</strong> Visualize complex data with beautiful, interactive graphs and charts.
        </p>
      </div>
    </div> </div>
  </div></section>
  <section class="testimonials-section container">
    <div class="row">
      <div class="col-md-6">
        <h1 class="judul">What our clients<br> think about us?</h1>
        <p>Our users' feedback is a testament to our commitment to quality and user satisfaction. Read what they have to say about their journey with us.</p>
      </div>
      <div class="col-md-6">
        <div class="testimonial-card">
          <h5>Features Availability</h5>
          <div class="d-flex align-items-center mt-3">
            <img src="https://via.placeholder.com/50" alt="Client" class="client-image me-3">
            <strong>Jenny Wilson</strong>
          </div>
          <p class="mt-3">Since I joined Kantorku, managing employee attendance lists has become easy. Kantorku helps my family to give the correct salary to all of our employees!</p>
          <div class="pagination-controls">
            <button class="btn btn-outline-secondary btn-sm me-2">&lt;</button>
            <span>1 / 5</span>
            <button class="btn btn-outline-secondary btn-sm ms-2">&gt;</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features-section container mt-5">
    <h2 class="text-center mb-4">Enjoy unparalleled features & exceptional flexibility.</h2>
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-3 feature-grid">
      <div class="col">
        <div class="feature-card">Change Schedule</div>
      </div>
      <div class="col">
        <div class="feature-card">Change Employee Data</div>
      </div>
      <div class="col">
        <div class="feature-card">Scalable Employee</div>
      </div>
      <div class="col">
        <div class="feature-card">Performance Tuning</div>
      </div>
      <div class="col">
        <div class="feature-card2">Choose how you give salary</div>
      </div>
      <div class="col">
        <div class="feature-card2">Reduce Salary when late</div>
      </div>
      <div class="col">
        <div class="feature-card2">Fully Responsive</div>
      </div>
      <div class="col">
        <div class="feature-card2">Trending technology</div>
      </div>
      <div class="col">
        <div class="feature-card">Easy to Customize</div>
      </div>
      <div class="col">
        <div class="feature-card">Customize extra hour bonuses</div>
      </div>
      <div class="col">
        <div class="feature-card">Easy to read Table and Graphics</div>
      </div>
      <div class="col">
        <div class="feature-card">Regular Updates</div>
      </div>
    </div>
  </section>
  <!-- Pricing Section -->
  <section class="pricing-section container text-center">
    <h2>111,476+ Startups & many large companies as well</h2>
    <div class="row mt-4">
      <!-- Beginner Pack -->
      <div class="col-md-3">
        <div class="pricing-card">
          <h4>Beginner pack</h4>
          <p>Use for single month subscription</p>
          <div class="price">Rp. 50k <small>/month</small></div>
          <ul class="feature-list">
                    <li><i class="fas fa-check"></i> 7 RFID cards</li>
                    <li><i class="fas fa-check"></i> Kantorku web system</li>
                    <li><i class="fas fa-x"></i> RFID Machine (Add-ons)</li>
                </ul>
                <p>Good For Small Company</p>
          <button class="btn btn-primary">Purchase Now</button>
        </div>
      </div>
      <!-- Medium Pack -->
      <div class="col-md-3">
        <div class="pricing-card border-primary">
          <h4>Medium pack <small><span class="badge bg-primary">Popular</span></small></h4>
          <p>Use for single month subscription with an RFID machine</p>
          <div class="price">Rp. 300k <small>/month</small></div>
          <ul class="feature-list">
                    <li><i class="fas fa-check"></i> 15 RFID cards</li>
                    <li><i class="fas fa-check"></i> Kantorku web system</li>
                    <li><i class="fas fa-check"></i> 1 RFID Machine</li>
                </ul>
                <p>Great for devoloping Company</p>
          <button class="btn btn-primary">Purchase Now</button>
        </div>
      </div>
      <!-- Super Pack -->
      <div class="col-md-3">
        <div class="pricing-card">
          <h4>Super pack</h4>
          <p>Use for single month subscription with super deal</p>
          <div class="price">Rp. 500k <small>/month</small></div>
          <ul class="feature-list">
                    <li><i class="fas fa-check"></i> 50 RFID cards</li>
                    <li><i class="fas fa-check"></i> Kantorku web system</li>
                    <li><i class="fas fa-check"></i> 2 RFID Machines</li>
                </ul>
                <p>Super deal for medium-range Company</p>
          <button class="btn btn-primary">Purchase Now</button>
        </div>
      </div>
      <!-- Custom Pack -->
      <div class="col-md-3">
        <div class="pricing-card">
          <h4>Custom pack</h4>
          <p>Customize your purchase with this pack!</p>
          <div class="price">Rp. 10k <small>/month (from)</small></div>
          <ul class="feature-list">
                    <li><i class="fas fa-check"></i> Choose RFID card quantity</li>
                    <li><i class="fas fa-check"></i> Custom name web system</li>
                    <li><i class="fas fa-check"></i> Choose RFID machine quantity</li>
                </ul>
                <p>customizable add-ons to scale</p>
          <button class="btn btn-primary">Purchase Now</button>
        </div>
      </div>
    </div>
    <div class="payment-logos">
      <img src="img/payment.png" width="80%"  alt="Visa">


    </div>
    <small class="text-muted">Secured payment with PayPal & Razorpay</small>
  </section>

  <!-- FAQ Section -->
  <section class="faq-section container">
    <h3 class="text-center">Frequently Asked Questions</h3>
    <div class="accordion mt-4" id="faqAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
            What is included with my purchase?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Each package includes access to the Kantorku web system and other features as described above.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
            Are there any recurring fees?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, the pricing is based on a monthly subscription model.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
            Can I use the template on multiple businesses?
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Templates are licensed for single business use only.
          </div>
        </div>
      </div>
      <!-- Add more FAQ items as needed -->
    </div>
  </section>
<!-- Hero Section -->
<section class="hero-section container my-5" id="memberlogin">
    
    <h1 >Manage your employee <br>attendance more efficiently</h1>
   <br>
    <div class="d-flex justify-content-left">
      <a href="#" class="btn btn-primary">Member Login</a>
      <a href="#" class="btn btn-outline-primary">Become a Member</a>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="footer-section">
    <div class="footer-links">
      <div>
        <h5>Company and team</h5>
        <ul class="list-unstyled">
          <li><a href="#">About Us</a></li>
          <li><a href="#">Newsroom</a></li>
          <li><a href="#">Join Our Team</a></li>
          <li><a href="#">Support Center</a></li>
        </ul>
      </div>
      <div>
        <h5>Features</h5>
        <ul class="list-unstyled">
          <li><a href="#">Edit Employee</a></li>
          <li><a href="#">Edit Schedule</a></li>
          <li><a href="#">Edit Salary</a></li>
          <li><a href="#">Edit Bonus/Cuts</a></li>
          <li><a href="#">Make one-time event or holiday leave</a></li>
        </ul>
      </div>
      <div>
        <h5>Follow us</h5>
        <div class="social-icons">
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-twitter"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div>
    <hr>
    <div class="footer-note d-flex justify-content-between align-items-center">
        <p class="mb-0">All rights reserved by Kantorku.</p>
        <p class="mb-0">Produced by Kantorku.</p>
    </div>
  </footer>

    <!-- Footer -->


    </section>
    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
