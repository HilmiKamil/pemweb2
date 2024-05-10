<?php
require_once '../administrator/koneksi.php';

$sql = "SELECT username FROM users";
$result = $dbh->prepare($sql);
$result->execute();

$username = $result->fetchColumn();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EPuskesmas - Jatijajar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/user/img/logo1.png" rel="icon">
  <link href="../assets/user/img/logo1.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/user/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../assets/user/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/user/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/user/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/user/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/user/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/user/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/user/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">

  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html"><img src="../assets/user/img/logo1.png" alt="Logo" style="max-width: 100%;"> ePuskesmas</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="../assets/user/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="#appointment">Appointment</a></li>
          <li class="dropdown"><a href="#"><span><i class="bi bi-person-fill mx-1"></i> <?= $username; ?></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../index.php">Logout</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->



    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to <span style="color:#737373;">EPuskesmas</span></h1>
      <h2>Experience Compassionate Care from Our Expert Team.</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->


  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Welcome to <span style="color: #737373;">EPuskesmas Jatijajar</span></h3>
            <p><i>We are here with the spirit to provide affordable, quality healthcare services that are accessible to everyone. Together, let's create a healthier and happier future for all the people of Jatijajar and its surroundings.</i></p>

            <p>ePuskesmas Jatijajar is a digital healthcare platform designed to revolutionize the way healthcare is delivered in the Jatijajar community and beyond. Our platform combines cutting-edge technology with a human-centered approach to provide accessible, affordable, and high-quality healthcare services to all.</p>

            <p>At ePuskesmas Jatijajar, we believe that everyone deserves access to healthcare, regardless of their location or socioeconomic status. That's why we've developed a platform that allows patients to connect with healthcare providers remotely, eliminating the need for long commutes and lengthy wait times.</p>

            <p>Our platform offers a range of services, including teleconsultations, e-prescriptions, and online appointment scheduling, making healthcare more convenient and efficient for everyone. We also provide access to health records and personalized health information, empowering individuals to take control of their health and well-being.</p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Choose ePuskesmas?</h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="100">
                    <i class="bx bx-receipt"></i>
                    <h4>Convenience</h4>
                    <p>With ePuskesmas Jatijajar, you can consult with healthcare providers from the comfort of your home, saving you time and effort.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="200">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Accessibility</h4>
                    <p>Our platform allows you to access healthcare services wherever you are, ensuring that quality care is always within reach.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                    <i class="bx bx-images"></i>
                    <h4>Affordability</h4>
                    <p>ePuskesmas Jatijajar offers cost-effective healthcare solutions, making quality healthcare accessible to all.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>
            Experience healthcare that revolves around you with ePuskesmas. Our platform offers convenient and comprehensive healthcare services, ensuring that you receive the care you need, when you need it</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-comment-medical"></i></div>
              <h4><a href="">Teleconsultations</a></h4>
              <p>Consult with healthcare providers remotely for medical advice and prescriptions.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-prescription"></i></div>
              <h4><a href="">E-Prescriptions</a></h4>
              <p>Receive electronic prescriptions for medications and treatments.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-calendar-check"></i></div>
              <h4><a href="">Online Appointment Scheduling</a></h4>
              <p>Book appointments with healthcare providers conveniently online.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-stethoscope"></i></div>
              <h4><a href="">Health Promotion Programs</a></h4>
              <p>Participate in programs to improve your health and well-being.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-hand-holding-medical"></i></div>
              <h4><a href="">Personalized Health Information</a></h4>
              <p>Receive personalized health advice and information.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-notes-medical"></i></div>
              <h4><a href="">Access to Health Records</a></h4>
              <p>View and manage your health records securely.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          <p>"Book Your Appointment with Ease at ePuskesmas Jatijajar!"</p>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="department" id="department" class="form-select">
                <option value="">Select Department</option>
                <option value="Department 1">General Medicine</option>
                <option value="Department 2">Dental Care</option>
                <option value="Department 3">Eye Care</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="doctor" id="doctor" class="form-select">
                <option value="">Select Doctor</option>
                <option value="Doctor 1">dr. Muhamad Hilmi Kamil</option>
                <option value="Doctor 2">dr. Ferisha Adilla Hidayat</option>
                <option value="Doctor 3">dr. Ilyas Abdul Aziz</option>
              </select>
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Make an Appointment</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Departments</h2>
          <p>At ePuskesmas, we offer a range of specialized departments to cater to your healthcare needs. Each department is staffed with experienced healthcare professionals dedicated to providing you with the best possible care.</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">General Medicine</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Dental Care</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Pharmacy</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Pediatrics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Eye Care</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>General Medicine</h3>
                    <p class="fst-italic">For routine check-ups, treatment of common illnesses, and medical consultations.</p>
                    <p>At ePuskesmas, our General Medicine Department provides comprehensive healthcare services for a wide range of medical conditions. Our team of experienced physicians is dedicated to delivering personalized care tailored to your individual needs.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="../assets/user/img/departments-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Dental Care</h3>
                    <p class="fst-italic">Comprehensive dental services, including check-ups, cleanings, and treatments.</p>
                    <p>At ePuskesmas, our Dental Care Department is dedicated to ensuring your oral health is in top condition. Our experienced dentists also provide treatments for gum disease, root canal therapy, and dental crowns and bridges.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="../assets/user/img/departments-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Pharmacy</h3>
                    <p class="fst-italic">Dispensing medications prescribed by healthcare providers.</p>
                    <p>Our pharmacy team is dedicated to ensuring that patients receive the right medications, at the right doses, and at the right times. We dispense medications prescribed by our healthcare providers and provide counseling on how to take them properly.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="../assets/user/img/departments-3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Pediatrics</h3>
                    <p class="fst-italic">Specialized care for infants, children, and adolescents, including vaccinations and growth monitoring.</p>
                    <p>Our team of pediatricians is dedicated to ensuring the health and well-being of your child. We offer a wide range of services, including routine check-ups, vaccinations, treatment for common illnesses, and management of chronic conditions. </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="../assets/user/img/departments-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Eye Care</h3>
                    <p class="fst-italic">Our team of experienced ophthalmologists and optometrists offers a range of services, including eye examinations, vision testing, and prescription of eyeglasses or contact lenses.</p>
                    <p>We also diagnose and treat various eye conditions, such as cataracts, glaucoma, and diabetic retinopathy. Whether you need a routine check-up or treatment for a specific eye condition, you can trust ePuskesmas to provide expert care for your vision health.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="../assets/user/img/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Doctors</h2>
          <p>Get to know the dedicated doctors at our Puskesmas,
            committed to providing quality healthcare with compassion and expertise.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="../assets/user/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>dr. Ilyas Abdul Aziz</h4>
                <span>General Medicine</span>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="../assets/user/img/doctors/doctors-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>dr. Iin Fatimah</h4>
                <span>Dental Care</span>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="../assets/user/img/doctors/doctors-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>dr. Muhamad Hilmi Kamil</h4>
                <span>X-Ray</span>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="../assets/user/img/doctors/doctors-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>dr. Ferisha Adilla Hidayat</h4>
                <span>Eye Care</span>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Doctors Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="../assets/user/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    "Puskesmas Jatijajar has been my go-to healthcare provider for years, and I have always been impressed by their professionalism and dedication. The doctors here are top-notch and always take the time to listen to my concerns. The facilities are clean and well-maintained, and the staff are friendly and helpful. I highly recommend Puskesmas Jatijajar to anyone in need of quality healthcare."
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="../assets/user/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    "I recently had a medical emergency and was rushed to Puskesmas Jatijajar. I was amazed by the speed and efficiency with which the staff handled my case. The doctors and nurses worked seamlessly together to stabilize me and provide the necessary treatment. I am grateful for their quick response and excellent care."
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="../assets/user/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    "My child receives regular check-ups at Puskesmas Jatijajar, and I am always impressed by the level of care we receive. The pediatricians are very thorough and always take the time to answer my questions. The staff are also very friendly and make us feel welcome. I wouldn't trust my child's healthcare to anyone else."
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="../assets/user/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    "I recently underwent a surgical procedure at Puskesmas Jatijajar, and I couldn't be happier with the outcome. The surgeon was highly skilled and made me feel at ease throughout the entire process. The nursing staff were also fantastic, providing me with excellent care during my recovery. I would highly recommend Puskesmas Jatijajar to anyone in need of surgical care."
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="../assets/user/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    "I have been a patient at Puskesmas Jatijajar for several years, and I am consistently impressed by the level of care I receive. The doctors and staff are knowledgeable, friendly, and always willing to go above and beyond to ensure my health needs are met. I highly recommend Puskesmas Jatijajar to anyone looking for exceptional healthcare services."
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Explore the vibrant world of ePuskesmas Jatijajar through our gallery.</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="../assets/user/img/gallery/gallery-1.jpg" class="galelry-lightbox">
                <img src="../assets/user/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="../assets/user/img/gallery/gallery-2.jpg" class="galelry-lightbox">
                <img src="../assets/user/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="../assets/user/img/gallery/gallery-3.jpg" class="galelry-lightbox">
                <img src="../assets/user/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="../assets/user/img/gallery/gallery-4.jpg" class="galelry-lightbox">
                <img src="../assets/user/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="../assets/user/img/gallery/gallery-5.jpg" class="galelry-lightbox">
                <img src="../assets/user/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="../assets/user/img/gallery/gallery-6.jpg" class="galelry-lightbox">
                <img src="../assets/user/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="../assets/user/img/gallery/gallery-7.jpg" class="galelry-lightbox">
                <img src="../assets/user/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="../assets/user/img/gallery/gallery-8.jpg" class="galelry-lightbox">
                <img src="../assets/user/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact ePuskesmas</h2>
          <p>At ePuskesmas, we understand the importance of easy access to healthcare information and services. Our dedicated team is here to assist you with any questions or concerns you may have. We look forward to serving you at ePuskesmas.
          </p>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3175207721147!2d106.83004867476512!3d-6.352924493637018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec6b07b68ea5%3A0x17da46bdf9308386!2sSTT%20Terpadu%20Nurul%20Fikri%20-%20Kampus%20B!5e0!3m2!1sid!2sid!4v1702115648231!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jl. Raya Lenteng Agung No.20-21</p>
                <p>Srengseng Sawah, Kec. Jagakarsa, Jakarta Selatan</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>puskesmas_jatijajar@medic.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 859 3445 7557</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>ePuskesmas</h3>
            <p>
            <p>Jl. Raya Lenteng Agung No.20-21</p>
            <p>Srengseng Sawah, Kec. Jagakarsa, Jakarta Selatan</p>


            <div class="contact-info mt-4">
              <div><i class="bi bi-envelope"></i> <a href="#"> puskesmas_jatijajar@medic.com</a></div>
              <div><i class="bi bi-phone mt-3"></i> +62 859 3445 7557</div>
            </div>
            </p>

            <div class="social-links  text-md-right mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Teleconsultations</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">E-Prescripsitions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Online Appointment Scheduling</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Health Promotions Programs</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Personalize Health Information</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Access to Health Records</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Post in Instagram</h4>

            <div class="row g-0">
              <div class="col-lg-4 col-md-4 sm-4 mx-1 my-2">
                <img src="../assets/user/img/gallery/gallery-3.jpg" alt="" srcset="">
              </div>
              <div class="col-lg-4 col-md-4 sm-4 mx-1 my-2">
                <img src="../assets/user/img/gallery/gallery-2.jpg" alt="" srcset="">
              </div>
              <div class="col-lg-4 col-md-4 sm-4 mx-1 my-2">
                <img src="../assets/user/img/gallery/gallery-4.jpg" alt="" srcset="">
              </div>
              <div class="col-lg-4 col-md-3 mx-1 my-2">
                <img src="../assets/user/img/gallery/gallery-1.jpg" alt="" srcset="">
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Our newsletter features health tips, information about our services, and upcoming events. Join our mailing list today to stay connected with ePuskesmas and take charge of your health journey.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div>
        <div class="copyright">
          &copy; Copyright <strong><span style="font-weight: 600;">ePuskesmas</span></strong>. All Rights Reserved
        </div>
      </div>

    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/user/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/user/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/user/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/user/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/user/js/main.js"></script>

</body>

</html>