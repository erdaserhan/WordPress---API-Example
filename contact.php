<?php
include "header.php";
?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-12">
            <h1 class="page-title-heading">Contact</h1>
            <nav aria-label="breadcrumb">
              <ol class="custom-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active current" aria-current="page">Contact</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <div class="container">
        <div class="content">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-8" data-aos="fade-up" data-aos-delay="200">
              <div class="row">
                <div class="col-lg-4">
                  <div class="service no-shadow link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                    <div class="service-icon color-1 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                      </svg>
                    </div>
                    <!-- /.icon -->
                    <div class="service-contents">
                      <p>43 Raymouth Rd. Baltemoer, London 3910</p>
                    </div>
                    <!-- /.service-contents-->
                  </div>
                  <!-- /.service -->
                </div>

                <div class="col-lg-4">
                  <div class="service no-shadow link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                    <div class="service-icon color-1 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"></path>
                      </svg>
                    </div>
                    <!-- /.icon -->
                    <div class="service-contents">
                      <p>info@yourdomain.com</p>
                    </div>
                    <!-- /.service-contents-->
                  </div>
                  <!-- /.service -->
                </div>

                <div class="col-lg-4">
                  <div class="service no-shadow link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                    <div class="service-icon color-1 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                      </svg>
                    </div>
                    <!-- /.icon -->
                    <div class="service-contents">
                      <p>+1 294 3925 3939</p>
                    </div>
                    <!-- /.service-contents-->
                  </div>
                  <!-- /.service -->
                </div>
              </div>

            </div>

            <form action="forms/contact.php" method="post" role="form" class="row justify-content-center mt-0 gy-4 php-email-form" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-8">
                <div class="row g-4 mb-4">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="fname">First name</label>
                      <input type="text" class="form-control" id="fname">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="lname">Last name</label>
                      <input type="text" class="form-control" id="lname">
                    </div>
                  </div>
                </div>
                <div class="row g-4">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" id="email">
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
                    </div>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="mt-0">
                    <button type="submit" class="btn-submit">Send Message</button>
                  </div>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section><!-- /Contact Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="testimonial mx-auto">
                    <figure class="img-wrap">
                      <img src="assets/img/testimonials/testimonials-1.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <h3 class="name">Adam Aderson</h3>
                    <blockquote>
                      <p>
                        “There live the blind texts. Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large
                        language ocean.”
                      </p>
                    </blockquote>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial mx-auto">
                    <figure class="img-wrap">
                      <img src="assets/img/testimonials/testimonials-2.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <h3 class="name">Lukas Devlin</h3>
                    <blockquote>
                      <p>
                        “There live the blind texts. Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large
                        language ocean.”
                      </p>
                    </blockquote>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial mx-auto">
                    <figure class="img-wrap">
                      <img src="assets/img/testimonials/testimonials-3.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <h3 class="name">Kayla Bryant</h3>
                    <blockquote>
                      <p>
                        “There live the blind texts. Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large
                        language ocean.”
                      </p>
                    </blockquote>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Testimonials Section -->

  </main>

  <?php
include "footer.php";