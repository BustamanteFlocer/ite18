<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ScrapCycle</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.png" />


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />


    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="#page-top">ScrapCycle</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Features</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Download</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" data-bs-toggle="modal" data-bs-target="#feedbackModal">Send Feedback</a></li>
                        <li class="nav-item"><a class="btn btn-success rounded-pill px-3 ms-auto me-4 my-3 my-lg-0 me-lg-3" href="{{ url('/login')}}"><span class="small">Login</span></a></li>

                </ul>
                </div>
            </div>
        </nav>
        <!-- Mashead header-->
        <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3">Turn your trash into cash.</h1>
                            <p class="lead fw-normal text-muted mb-5">ScrapCycle is an online junkshop application where people can trade their recyclable scraps for money.</p>
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="assets/img/google-play-badge.svg" alt="..." /></a>
                                <a href="#!"><img class="app-badge" src="assets/img/app-store-badge.svg" alt="..." /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Masthead device mockup feature-->
                        <div class="masthead-device-mockup">
                            <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <stop class="gradient-start-color" offset="0%"></stop>
                                        <stop class="gradient-end-color" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50"></circle></svg
                            ><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg
                            ><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
                            <div class="device-wrapper">
                                <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                    <div class="screen bg-black">
                                        <!-- PUT CONTENTS HERE:-->
                                        <!-- * * This can be a video, image, or just about anything else.-->
                                        <!-- * * Set the max width of your media to 100% and the height to-->
                                        <!-- * * 100% like the demo example below.-->
                                        <img class="app-badge" style="max-width: 100%; height: 100%" src="assets/img/signin.png" alt="..." />

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

          <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
              <img src="assets/img/aboutus.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
              <h3 class="font-alt">About Us</h3>
              <p>
                ScrapCycle is an online junkshop application where people can trade their recyclables (plastic, glass, metals, electronics, etc.) for money.
              </p>
              <p>
                With the involvement of the local community, business sector, and local government, we see the opportunity to increase the recycling rate and improve waste management in the community to ensure that waste materials like plastic are properly segregated, collected, and given new life. </p>
              <p>
                We aim to increase the quantity of recyclable scraps turned into new products by recycling factories, reduce waste in the landfills and the oceans, promote responsible waste management, and to protect our planet.    </p>
            </div>
          </div>

        </div>
      </section><!-- End About Section -->

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/k1.jpg" class="rounded mx-auto d-block " alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/k2.jpg" class="rounded mx-auto d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/o1.jpg" class="rounded mx-auto d-block" alt="...">
            <div class="carousel-caption d-none d-md-block"
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

      </div>
        <!-- Quote/testimonial aside-->
        <aside class="text-center bg-gradient-primary-to-secondary">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8">
                        <div class="h2 fs-1 text-white mb-4">"Help the land, the rivers and the seas heal. From the comfort of your home or your business, use ScrapCycle today!"</div>

                    </div>
                </div>
            </div>
        </aside>
        <!-- App features section-->
        <section id="features">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                        <div class="container-fluid px-5">
                            <div class="row gx-5">
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Easy to Use</h3>
                                        <p class="text-muted mb-0">User friendly application and easy to navigate!</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi bi-calendar-week icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Collection Schedule</h3>
                                        <p class="text-muted mb-0">You can choose your desired day for recyclables collection!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-5 mb-md-0">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi bi-cash-coin icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Earn Cash from Trash</h3>
                                        <p class="text-muted mb-0">Earn money by selling your recyclable trash to ScrapCycle!</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi bi-recycle icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Help the Environment</h3>
                                        <p class="text-muted mb-0">With ScrapCycle you can reduce the plastics and recyclables that ended up in our landfills and oceans!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-0">
                        <!-- Features section device mockup-->
                        <div class="features-device-mockup">
                            <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <stop class="gradient-start-color" offset="0%"></stop>
                                        <stop class="gradient-end-color" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50"></circle></svg
                            ><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg
                            ><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
                            <div class="device-wrapper">
                                <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                    <div class="screen bg-black">
                                        <!-- PUT CONTENTS HERE:-->
                                        <!-- * * This can be a video, image, or just about anything else.-->
                                        <!-- * * Set the max width of your media to 100% and the height to-->
                                        <!-- * * 100% like the demo example below.-->
                                        <img class="app-badge" style="max-width: 100%; height: 100%" src="assets/img/signin.png" alt="..." />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Basic features section-->
        <section class="bg-light">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5">
                        <h2 class="display-4 lh-1 mb-4">Less waste, less worry</h2>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-0">Did you know that a large portion of what you normally throw away doesn't need to end up truly disposed? ScrapCycle makes sure that all recyclable wastes you turn over are fully recovered for the next new cycles of production, away from landfills and everywhere else waste shouldn't be.</p>
                    </div>
                    <div class="col-sm-8 col-md-6">
                        <div class="px-8 px-sm-0"><img class="img-fluid rounded-circle" src="assets/img/recyclable.jpg" /></div>
                    </div>
                </div>
            </div>
        </section>
   <!-- App badge section-->
   <section class="bg-gradient-primary-to-secondary" id="download">
    <div class="container px-5">
        <h2 class="text-center text-white font-alt mb-4">Get the app now!</h2>
        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
            <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="assets/img/google-play-badge.svg" alt="..." /></a>
            <a href="#!"><img class="app-badge" src="assets/img/app-store-badge.svg" alt="..." /></a>
        </div>
    </div>
</section>
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="text-center section-title font-alt mb-4">
                <h1 class="font-alt">Gallery</h1>
            </div>
          <div class="row g-0" data-aos="fade-left">
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                  <img src="assets/img/gallery/m1.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
                <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox">
                  <img src="assets/img/gallery/a2.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox">
                  <img src="assets/img/gallery/j1.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
                <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox">
                  <img src="assets/img/gallery/p3.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox">
                  <img src="assets/img/gallery/p6.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
                <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox">
                  <img src="assets/img/gallery/h1.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
                <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox">
                  <img src="assets/img/gallery/l5.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
                <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox">
                  <img src="assets/img/gallery/p9.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End Gallery Section -->


    <!-- ======= Advanced Featuress Section ======= -->

        <section id="advanced-features">
            <div class="text-center section-title font-alt mb-4">
                <h1 class="font-alt">News and Events</h1>
            </div>
        <div class="features-row section-bg" data-aos="fade-up">

          <div class="container">
            <div class="row">
              <div class="col-12">
                <img class="advanced-feature-img-right wow fadeInRight" src="assets/img/k1.jpg" alt="">
                <div>
                  <h2>ScrapCycle Won the Gold Prize in START Hackathon 2022</h2>

                  <p>ScrapCycle emerged as Innovation Champions in the first ever Hackathon event of the Smart and Creative Communities (SCC) Program by the Development Academy of the Philippines (DAP), which was held last September 13, 2022, at DAP Conference Center in Tagaytay. </p>
                  <p>Out of 58 teams that joined the START Hackathon, only 10 has made it to the final round and the Mindanao's sole contenter, the ScrapCycle team comprises Genevieve P. Navales, Lavranz R. Tradio and Ydmundi S. Perez with their mentor Melbert R. Bonotan, won the 1st place. ScrapCycle will receive a cash prize of Php 50,000 and Php 100,000 seed funding from DAP through its government-funded "Smart and Creative Communities (SCC) Program" for R&D and pilot testing. The ScrapCycle mobile application will be adopted in Sta. Rosa Laguna, a partner LGU of DAP- Center for Strategic Futures.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="features-row" data-aos="fade-up">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <img class="advanced-feature-img-left" src="assets/img/k2.jpg" alt="">
                <div>
                  <h2>ScrapCycle Bags Gold in the TECHPreneurs Startup Business Grant 2022 </h2>

                  <p>       Students from Caraga State University won the top prize in the TECHPreneurs Startup Business Grant of the Butuan City SK Federation and City Youth in Development Office in collaboration with Father Saturnino Urios University and DTI-ADN, which was held last December 9, 2022 at Grand Palace Hotel, Butuan City.</p>

                  <p>       CSU's team, called ScrapCycle, comprises BS Computer Science seniors Genevieve Navales, Ydmundi Perez, Hayacinth Jimenez, Rhea Mintuda, and Leo Alegre will receive a cash prize of Php 50,000 to help propel their startup forward and scale further.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="features-row section-bg" data-aos="fade-up">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <img class="advanced-feature-img-right wow fadeInRight" src="assets/img/o1.jpg" alt="">
                <div>
                  <h2> ScrapCycle to represent Caraga Region at the 7th Philippine Startup Challenge </h2>

                  <p>Scrapcycle of Caraga State University - Main Campus dominated DICT Caraga's Regional Pitching Competition (RPC) held at the HERO Learning Commons Auditorium, Caraga State University, Butuan City, on Friday, October 28.</p>
                  <p>Scrapcyle will represent Caraga Region and compete for the Philippine Startup Challenge 7 on November 2022. Through these programs, DICT Caraga continues to push for more ICT-based solutions in the region.</p>

                </div>
              </div>
            </div>
          </div
        </div>
      </section><!-- End Advanced Featuress Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 text-center text-lg-start">
              <h3 class="font-alt cta-title">Turn your trash into cash!</h3>
              <p class="font-alt cta-text"> Let's start your recycling journey with ScrapCycle.</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="font-alt cta-btn align-middle" href="#">Download Now</a>
            </div>
          </div>

        </div>
      </section><!-- End Call To Action Section -->

         <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">
          <div class="text-center section-title font-alt mb-4">
            <h1 class="font-alt">Contact Us</h1>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="info-box mb-4">
                <i class="bi bi-geo-alt icon-feature text-gradient"></i>
                <h3 class="font-alt">Our Address</h3>
                <p class="font-alt">KM 7 NH1, Butuan City, 8600</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="info-box  mb-4">
                <i class="bi bi-envelope icon-feature text-gradient"></i>
                <h3 class="font-alt">Email Us</h3>
                <p class="font-alt">scrapcycle@gmail.com</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="info-box  mb-4">

                <i class="bi bi-telephone icon-feature text-gradient"></i>
                <h3 class="font-alt">Call Us</h3>
                <p class="font-alt">09482440776</p>
              </div>
            </div>

          </div>

          <div class="row">

            <div class="col-lg-6 ">
              <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7882.314027503392!2d125.597139528329!3d8.95767589435299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3301eac565a4abe5%3A0x87859279e2e3f66a!2sCaraga%20State%20University!5e0!3m2!1sen!2sph!4v1675290854470!5m2!1sen!2sph" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>

            <div class="col-lg-6">
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
                  <div class="sent-message font-alt">Your message has been sent. Thank you!</div>
                </div>
                <div class="font-alt text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>

          </div>

        </div>
      </section><!-- End Contact Section -->
 <!-- Footer-->
        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; ScrapCycle 2022. All Rights Reserved.</div>
                    <a href="#!">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">FAQ</a>
                </div>
            </div>
        </footer>


        <!-- Feedback Modal-->
        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send feedback</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
