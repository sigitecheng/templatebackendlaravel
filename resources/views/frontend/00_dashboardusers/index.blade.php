<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>{{$title}}</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Favicons -->
    <link href="/assets/icon/sihadeicon.png" rel="icon" />
    <link href="/assets/newfrontend/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="/assets/newfrontend/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="/assets/newfrontend/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="/assets/newfrontend/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="/assets/newfrontend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="/assets/newfrontend/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="/assets/newfrontend/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="/assets/newfrontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="/assets/newfrontend/css/style.css" rel="stylesheet" />

    <link rel="stylesheet" href="/assets/newfrontend/css/section-hero.css" />
    <link rel="stylesheet" href="/assets/newfrontend/css/section-partners.css" />
    <link rel="stylesheet" href="/assets/newfrontend/css/section-about.css" />
    <link rel="stylesheet" href="/assets/newfrontend/css/section-whyus.css" />
    <link rel="stylesheet" href="/assets/newfrontend/css/section-counts.css" />
    <link rel="stylesheet" href="/assets/newfrontend/css/section-testimonials.css" />
    <link rel="stylesheet" href="/assets/newfrontend/css/section-faq.css" />
    <link rel="stylesheet" href="/assets/newfrontend/css/section-contact.css" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <!-- <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html" class="logo me-auto">
          <img style="width: 15%;" src="/assets/icon/sihadeiconnew.png" alt="" width="150" class="img-fluid" />
        </a>

        <nav id="navbar" class="navbar">
          <ul>
            <style>
                .nav-link {
                    color: green;
                    transition: background-color 0.4s, color 0.3s;
                }

                .nav-link:hover {
                    background-color: white; /* Warna latar belakang saat hover */
                    color: black; /* Warna teks saat hover */
                    padding: 8px; /* Tambahkan padding untuk efek button */
                    border-radius: 10px; /* Sudut membulat untuk button */
                }

            </style>
<li>
    <a style="color: #32CD32" class="nav-link scrollto" href="index.html#hero">
      Home
    </a>
  </li>



            <li>
              <a style="color:#32CD32;" class="nav-link scrollto" href="index.html#about"> Tentang Kami </a>
            </li>
            <li>
                <a style="color:#32CD32;" class="nav-link scrollto" href="company.html">Perusahaan</a>
            </li>
            <li class="dropdown">
              <a style="color:#32CD32;" href="#" class="nav-link scrollto active">
                <span>Produk</span> <i class="bi bi-chevron-down"></i>
              </a>
              <ul>
                
                <li><a href="student.html">Find Student</a></li>
                <li><a href="job.html">Find Job & Intern</a></li>
            </ul>
        </li>
        <li>
          <a style="color:#32CD32;" class="nav-link scrollto" href="index.html#about"> Mitra Kami </a>
        </li>
        <li>
            <li>
              <a style="color:#32CD32;" class="nav-link scrollto" href="index.html#faq">F.A.Q</a>
            </li>
            <li>
              <a style="color:#32CD32;" class="nav-link scrollto" href="index.html#contact">
                Contact Us
              </a>
            </li>
            <li class="dropdown">

              <a style="background:green;" href="#" class="getstarted scrollto"> Login </a>
              
              <ul>
                <li><a href="form-polibatam-login.html">Polibatam Login</a></li>
                <li><a href="form-industry-login.html">Industry Login</a></li>
              </ul>
            </li>
            <!-- <li>
              <a class="getstarted scrollto" href="#about">Get Started</a>
            </li> -->
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div
            class="col-lg-6 d-flex flex-column justify-content-center mt-5 pt-lg-0 order-2 order-lg-1"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <h1 style="color: white">Welcome to Sihade Organic Farm</h1>
            <h2 style="color: white">Connecting to Farm Industry</h2>
            <a href="https://wa.me/62811237916" target="_blank" style="text-decoration: none;">
                <button class="btn" type="button" style="background-color: green; color: white; border: none; padding: 10px 10px; transition: background-color 0.3s, color 0.3s;" 
                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';" 
                    onmouseout="this.style.backgroundColor='green'; this.style.color='white';">
                    <i class="fab fa-whatsapp" style="margin-right: 5px;"></i> Contact Us
                </button>
            </a>
            
          </div>
          <div
            class="col-lg-6 order-1 order-lg-2 hero-img"
            data-aos="zoom-in"
            data-aos-delay="200"
          >
            {{-- <img
              src="/assets/newfrontend/img/hero-img.png"
              class="img-fluid animated"
              alt=""
            /> --}}
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        
      <!-- ======= partners Section ======= -->
      {{-- <section id="partners" class="partners section-bg">
        <div class="container">
          <div class="row justify-content-center" data-aos="zoom-in">
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-ilo.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-polibatam.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-sp.png"
                class="img-fluid"
                alt=""
              />
            </div>
          
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-bej.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-bej.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-bej.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-bej.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-bej.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-bej.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-bej.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-bej.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
              <img
                src="/assets/newfrontend/img/partners/logo-bej.png"
                class="img-fluid"
                alt=""
              />
            </div>

          </div>
        </div>
      </section> --}}
      <!-- End Cliens Section -->

      <!-- ======= About Us Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2 style="color: green">About Sihade</h2>
          </div>

          <div class="row content">
            <div class="col-lg-6">
              <p>
                Sihade Organic Farm connects aspiring farmers and environmentally conscious consumers to promote sustainable agriculture and healthy living.              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Committed to sustainable farming practices</li>
<li><i class="ri-check-double-line"></i> Provides fresh, organic produce directly from the farm</li>
<li><i class="ri-check-double-line"></i> Supports local farmers through education and training</li>
<li><i class="ri-check-double-line"></i> Promotes healthy living through organic food choices</li>
<li><i class="ri-check-double-line"></i> Engages with the community for a better agricultural future</li>
<li><i class="ri-check-double-line"></i> Offers workshops on organic farming techniques</li>
<li><i class="ri-check-double-line"></i> Creates partnerships for eco-friendly initiatives</li>
<li><i class="ri-check-double-line"></i> Fosters a love for nature and environmental stewardship</li>
<li><i class="ri-check-double-line"></i> Delivers a variety of seasonal fruits and vegetables</li>

              </ul>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <p style="text-align: justify">
                Sihade Organic Farm is a company dedicated to producing high-quality organic agricultural products, with a strong commitment to sustainability and environmental health. Nestled in the beauty of nature, we employ eco-friendly farming methods that are free from pesticides and harmful chemicals. By combining traditional techniques with modern innovations, we strive not only to cultivate fresh, delicious vegetables and fruits but also to support the local ecosystem and enhance the well-being of the surrounding community. Through education and training, we invite local farmers to join our vision, working together to create a healthier and more sustainable farming environment. At Sihade Organic Farm, we believe that every small step towards organic farming is a significant leap towards a better future for generations to come.              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Us Section -->

      <!-- ======= Why Us Section ======= -->
      <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">
          <div class="row">
            <div
              class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1"
            >
              <div class="content">
                <h3 style="color: green">
                  <strong>Why</strong>
                  Sihade ?
                </h3>
                <p>
                    Sihade Organic Farm is dedicated to cultivating high-quality organic produce <br class="d-none d-md-block" />
                    while promoting sustainable farming practices and supporting local communities.
                  </p>                  
              </div>

              <div class="accordion-list">
                <ul>
                    <li>
                        <a
                          data-bs-toggle="collapse"
                          class="collapse"
                          data-bs-target="#accordion-list-1"
                          
                        >
                          <span style="color: green">01. Promote Organic Practices</span>
                         
                          <i style="color: green;" class="bx bx-chevron-down icon-show"> </i>
                          <i style="color: green;" class="bx bx-chevron-up icon-close"></i>
                        </a>
                        <div
                          id="accordion-list-1"
                          class="collapse show"
                          data-bs-parent=".accordion-list"
                        >
                          <p>
                            Educating the community on the benefits of organic farming and sustainable agriculture practices.
                          </p>
                        </div>
                      </li>
                      
                      <li>
                        <a
                          data-bs-toggle="collapse"
                          class="collapse"
                          data-bs-target="#accordion-list-2"
                        >
                          <span style="color: green">02. Support Local Farmers</span>
                          
                          <i style="color: green" class="bx bx-chevron-down icon-show"> </i>
                          <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                        </a>
                        <div
                          id="accordion-list-2"
                          class="collapse"
                          data-bs-parent=".accordion-list"
                        >
                          <p>
                            Providing resources and training to empower local farmers in adopting organic methods.
                          </p>
                        </div>
                      </li>
                      
                      <li>
                        <a
                          data-bs-toggle="collapse"
                          class="collapse"
                          data-bs-target="#accordion-list-3"
                        >
                          <span style="color:green ">03. Community Engagement</span>
                          
                          <i style="color: green" class="bx bx-chevron-down icon-show"> </i>
                          <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                        </a>
                        <div
                          id="accordion-list-3"
                          class="collapse"
                          data-bs-parent=".accordion-list"
                        >
                          <p>
                            Organizing workshops and events to connect with the community and promote healthy living.
                          </p>
                        </div>
                      </li>
                      
                      <li>
                        <a
                          data-bs-toggle="collapse"
                          class="collapse"
                          data-bs-target="#accordion-list-4"
                        >
                          <span style="color: green;">04. Fresh Produce Delivery</span>
                          
                          <i style="color: green" class="bx bx-chevron-down icon-show"> </i>
                          <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                        </a>
                        <div
                          id="accordion-list-4"
                          class="collapse"
                          data-bs-parent=".accordion-list"
                        >
                          <p>
                            Offering a convenient delivery service for fresh, organic fruits and vegetables straight from the farm.
                          </p>
                        </div>
                      </li>
{{--                       
                      <li>
                        <a
                          data-bs-toggle="collapse"
                          class="collapse"
                          data-bs-target="#accordion-list-5"
                        >
                          <span style="color: green">05. Eco-Friendly Initiatives</span>
                          
                          <i style="color: green" class="bx bx-chevron-down icon-show"> </i>
                          <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                        </a>
                        <div
                          id="accordion-list-5"
                          class="collapse"
                          data-bs-parent=".accordion-list"
                        >
                          <p>
                            Collaborating with organizations to promote sustainability and environmental conservation efforts.
                          </p>
                        </div>
                      </li> --}}
                      

                </ul>
              </div>
            </div>

            <div
              class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
              style="background-image: url('/assets/icon/aboutuslogo.jpg')"
              data-aos="zoom-in"
              data-aos-delay="150"
            >
              &nbsp;
            </div>
          </div>
        </div>
      </section>
      <!-- End Why Us Section -->

      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">
          <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
              <a href="index.php?page=search_company">
                <div class="count-box">
                  <i style="color: green;" class="bi bi-building"></i>
                  <div>
                    <span style="color: orange"
                      data-purecounter-start="0"
                      data-purecounter-end="411"
                      data-purecounter-duration="1"
                      class="purecounter"
                    ></span>
                    <p style="color: green">Company</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-6">
              <a href="index.php?page=search_student">
                <div class="count-box">
                    <i class="fas fa-seedling" style="color: green"></i>

                  <div>
                    <span style="color: orange;"
                      data-purecounter-start="0"
                      data-purecounter-end="6424"
                      data-purecounter-duration="1"
                      class="purecounter"
                    ></span>
                    <p style="color: green;">Agriculture</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-6">
              <a href="index.php?page=search_job">
                <div class="count-box">

                  <i class="fas fa-tractor" style="color: green"></i>
                  
                  <div>
                    <span style="color: orange"
                      data-purecounter-start="0"
                      data-purecounter-end="1"
                      data-purecounter-duration="1"
                      class="purecounter"
                    ></span>
                    <p style="color: green">Farm</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-6">
              <a href="index.php?page=search_job">
                <div class="count-box">
                    
                    <i class="fas fa-box" style="color: green"></i>

                  <div>
                    <span style="color: orange;"
                      data-purecounter-start="0"
                      data-purecounter-end="24576"
                      data-purecounter-duration="1"
                      class="purecounter"
                    ></span>
                    <p style="color: green;">Product</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- End Counts Section -->

      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2 style="color: green">testimonials</h2>
            <p>What they are saying about us</p>
          </div>

          <div
            class="testimonials-slider swiper-container"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    "This application make easy to find student with enough
                    competency"
                  </p>
                  <div class="profile mt-auto">
                    <img src="/assets/icon/fototestimoni.jpg" class="testimonial-img" alt="" />
                    <h3>Radzarul</h3>
                    <h4>HRD</h4>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    "Help me to track all my achievement while i was in collage,
                    it also help me to find internship offer"
                  </p>
                  <div class="profile mt-auto">
                    <img src="/assets/icon/fototestimoni.jpg" class="testimonial-img" alt="" />
                    <h3>Dedi Syafriadi</h3>
                    <h4>Student</h4>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i>
                  </div>
                  <p>"Easy to use, very helpfull and usefull"</p>
                  <div class="profile mt-auto">
                    <img src="/assets/icon/fototestimoni.jpg" class="testimonial-img" alt="" />
                    <h3>Aufa Ahmad</h3>
                    <h4>Supervisor</h4>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i>
                  </div>
                  <p>"This application make easy to track student"</p>
                  <div class="profile mt-auto">
                    <img src="/assets/icon/fototestimoni.jpg" class="testimonial-img" alt="" />
                    <h3>Matt</h3>
                    <h4>Freelancer</h4>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    "The application really friendly to use, help me to find job
                    vacancies"
                  </p>
                  <div class="profile mt-auto">
                    <img src="/assets/icon/fototestimoni.jpg" class="testimonial-img" alt="" />
                    <h3>Manash</h3>
                    <h4>Student</h4>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- End Testimonials Section -->

      <!-- ======= Frequently Asked Questions Section ======= -->
      <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2 style="color: green;">Frequently Asked Questions</h2>
          </div>

          <div class="faq-list">
            <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                    <i style="color: green;" class="bx bx-help-circle icon-help"></i>
                    <a
                      data-bs-toggle="collapse"
                      class="collapse"
                      data-bs-target="#faq-list-1"
                    >
                      <span style="color: green">What types of organic products do you offer?</span>
                      <i style="color: green" class="bx bx-chevron-down icon-show"></i>
                      <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                    </a>
                    <div
                      id="faq-list-1"
                      class="collapse show"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                        We offer a wide variety of organic products, including fresh fruits, vegetables, herbs, and organic fertilizers. Our produce is grown sustainably on our farm, ensuring that it is not only healthy for you but also beneficial for the environment. We pride ourselves on delivering high-quality, nutrient-rich products that support local agriculture and promote a healthier lifestyle.
                      </p>
                    </div>
                  </li>
                  
                  <li data-aos="fade-up" data-aos-delay="100">
                    <i style="color: green;" class="bx bx-help-circle icon-help"></i>
                    <a
                      data-bs-toggle="collapse"
                      class="collapse"
                      data-bs-target="#faq-list-2"
                    >
                      <span style="color: green">How can I purchase products from Sihade Organic Farm?</span>
                      <i style="color: green" class="bx bx-chevron-down icon-show"></i>
                      <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                    </a>
                    <div
                      id="faq-list-2"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                        You can conveniently purchase our products through our website, where you can browse our full range of offerings. Additionally, you can visit our farm directly for a more personal experience. For our local customers, we also offer home delivery services to ensure you receive fresh organic produce right at your doorstep.
                      </p>
                    </div>
                  </li>
                  
                  <li data-aos="fade-up" data-aos-delay="100">
                    <i style="color: green;" class="bx bx-help-circle icon-help"></i>
                    <a
                      data-bs-toggle="collapse"
                      class="collapse"
                      data-bs-target="#faq-list-3"
                    >
                      <span style="color: green">Are your products certified organic?</span>
                      <i style="color: green" class="bx bx-chevron-down icon-show"></i>
                      <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                    </a>
                    <div
                      id="faq-list-3"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                        Yes, all our products are certified organic by recognized certification bodies. We adhere to strict guidelines and practices that prohibit the use of synthetic pesticides or fertilizers, ensuring that our produce is not only safe but also promotes sustainable farming practices that protect the environment.
                      </p>
                    </div>
                  </li>
                  
                  <li data-aos="fade-up" data-aos-delay="100">
                    <i style="color: green;" class="bx bx-help-circle icon-help"></i>
                    <a
                      data-bs-toggle="collapse"
                      class="collapse"
                      data-bs-target="#faq-list-4"
                    >
                      <span style="color: green">How can I learn more about organic farming practices?</span>
                      <i style="color: green" class="bx bx-chevron-down icon-show"></i>
                      <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                    </a>
                    <div
                      id="faq-list-4"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                        We offer various workshops and educational resources on organic farming practices to help individuals understand the benefits and techniques of sustainable agriculture. Visit our website regularly for updates on upcoming events, workshops, and available materials to enhance your knowledge of organic farming.
                      </p>
                    </div>
                  </li>
                  
                  <li data-aos="fade-up" data-aos-delay="100">
                    <i style="color: green;" class="bx bx-help-circle icon-help"></i>
                    <a
                      data-bs-toggle="collapse"
                      class="collapse"
                      data-bs-target="#faq-list-5"
                    >
                      <span style="color: green">Can I visit Sihade Organic Farm?</span>
                      <i style="color: green" class="bx bx-chevron-down icon-show"></i>
                      <i style="color: green" class="bx bx-chevron-up icon-close"></i>
                    </a>
                    <div
                      id="faq-list-5"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                        Yes, we warmly welcome visitors to Sihade Organic Farm! It’s a wonderful opportunity to see our farming practices in action and learn more about organic agriculture. Please check our website for visiting hours and any special events we may have, including guided tours and workshops that provide insight into our farming methods and products.
                      </p>
                    </div>
                  </li>
              </ul>
              
          </div>
        </div>
      </section>
      <!-- End Frequently Asked Questions Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2 style="color: green;">Contact Us</h2>
          </div>

          <div class="row gy-4">
            <div class="col-lg-6">
              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="info-box">
                    <i style="color: green;" class="bi bi-geo-alt"></i>
                    <h3 style="color: green;">Address</h3>
                    <p>
                        Jln. Pelesiran No. 20E Desa/Kelurahan lebak Siliwangi Kecamatan Coblong, Kota Bandung Jawa Barat 40132 Indonesia
                    
                    </p>
                  
                </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i style="color: green" class="bi bi-telephone"></i>
                    <h3 style="color: green;">Call Us</h3>
                    <p>
                        <a href="https://wa.me/628888888" target="_blank" style="text-decoration: none; color: green;">
                          <i class="fab fa-whatsapp" style="font-size: 14px; color:green"></i> +628 888888
                        </a>
                        <br />
                        <a href="https://wa.me/6288888888" target="_blank" style="text-decoration: none; color: green;">
                          <i class="fab fa-whatsapp" style="font-size: 14px; color:green"></i> +628 8888888
                        </a>
                      </p>
                       
                </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i style="color: green" class="bi bi-envelope"></i>
                    <h3 style="color: green">Email Us</h3>
                    <p>sihade@gmail.com<br />sihadenew@gmail.com</p>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="info-box">
                    <i style="color: green;" class="bi bi-clock"></i>
                    <h3 style="color: green">Open Hours</h3>
                    <p>Monday - Friday<br />9:00AM - 05:00PM</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <form
                action="forms/contact.php"
                method="post"
                class="php-email-form"
              >
                <div class="row gy-4">
                  <div class="col-md-6">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      placeholder="Your Name"
                      required
                    />
                  </div>

                  <div class="col-md-6">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      placeholder="Your Email"
                      required
                    />
                  </div>

                  <div class="col-md-12">
                    <input
                      type="text"
                      class="form-control"
                      name="subject"
                      placeholder="Your Question ?"
                      required
                    />
                  </div>

                  <div class="col-md-12">
                    <input
                      type="number"
                      class="form-control"
                      name="subject"
                      placeholder="Your Number Whatsapp ?"
                      required
                    />
                  </div>

                  <div class="col-md-12">
                    <textarea
                      class="form-control"
                      name="message"
                      rows="6"
                      placeholder="Message"
                      required
                    ></textarea>
                  </div>

                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">
                      Your message has been sent. Thank you!
                    </div>
                    <button class="btn" type="submit" style="background-color: green; color: white; border: none; transition: background-color 0.3s, color 0.3s;" 
                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';" 
                    onmouseout="this.style.backgroundColor='green'; this.style.color='white';">
                    <i class="fab fa-telegram" style="margin-right: 5px;"></i> Send Message
                </button>
                
                
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <footer id="footer" class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
              <a href="index.php" class="logo d-flex align-items-center">
                <!-- <img src="assets/img/Comma.png" alt=""> -->
                <img
                  class="ml-2 ps-4"
                  src="/assets/icon/sihadeiconnew.png"
                  alt=""
                  style="transform: scale(2.5); margin-bottom:15px; text-align:left;"
                />
                <br>
              </a>
              <p><strong> PT. Haznia Bina Virofarm</strong></p>
              <div class="social-links mt-3">
                <a style="color: black" href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a style="color: black" href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a style="color: black" href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a style="color: black" href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                <a style="color: black" href="#" class="tiktok"><i class="bi bi-tiktok"></i></a>
                <a style="color: black" href="#" class="youtube"><i class="bi bi-youtube"></i></a>
                <a style="color: black" href="mailto:youremail@example.com" class="email"><i class="bi bi-envelope"></i></a>
              </div>
              
            </div>

            <div class="col-lg-2 col-6 footer-links">
              <h4 style="color: green" >Our Services</h4>
              <ul>
                
                <li>
                  <i style="color: green;" class="bi bi-chevron-right"></i>
                  <a style="color: black" href="#hero">Home</a>
                </li>
                <li>
                  <i style="color: green;" class="bi bi-chevron-right"></i>
                  <a style="color: black" href="#about">Tentang Kami</a>
                </li>
                <li>
                  <i style="color: green;" class="bi bi-chevron-right"></i>
                  <a style="color: black" href="#">Perusahaan</a>
                </li>
                <li>
                  <i style="color: green;" class="bi bi-chevron-right"></i>
                  <a style="color: black" href="#">Produk</a>
                </li>
                <li>
                  <i style="color: green;" class="bi bi-chevron-right"></i>
                  <a style="color: black" href="#">Mitra Kami</a>
                </li>
                
                <li>
                  <i style="color: green;" class="bi bi-chevron-right"></i>
                  <a style="color: black" href="#">F.A.Q</a>
                </li>
                
                
                <li>
                  <i style="color: green;" class="bi bi-chevron-right"></i>
                  <a style="color: black" href="#">Contact Us</a>
                </li>
                
              </ul>
            </div>

            <div
              class="col-lg-3 col-md-12 footer-contact text-center text-md-start"
            >
              <h4 style="color: green;">Contact Us</h4>
              <p>
                Jln. Pelesiran No. 20E Desa/Kelurahan lebak Siliwangi Kecamatan Coblong, Kota Bandung Jawa Barat 40132 Indonesia
                </p>
                <p>
                    <strong><i class="bi bi-telephone mr-2"></i> Phone:</strong> +628 8888 888<br />
                    <strong><i class="bi bi-envelope mr-2"></i> Email:</strong> email@email
                  </p>
                                {{-- </p> --}}
            </div>
          </div>
        </div>
      </div>
      <div style="background-color: green; padding: 10px; text-align: center; color: white; width: 100%; margin: 0;">
        <p style="margin: 0;">
          Designed by <a href="https://wa.me/628132145585" style="color: white; text-decoration: underline;">sarigit.com</a> &copy; 2024 All Rights Reserved
        </p>
      </div>
      
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a style="background: green"
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="/assets/newfrontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/newfrontend/vendor/aos/aos.js"></script>
    <script src="/assets/newfrontend/vendor/php-email-form/validate.js"></script>
    <script src="/assets/newfrontend/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/newfrontend/vendor/purecounter/purecounter.js"></script>
    <script src="/assets/newfrontend/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/newfrontend/vendor/glightbox/js/glightbox.min.js"></script>
    <!-- <script src="assets/vendor/waypoints/noframework.waypoints.js"></script> -->
    <script>
      $(function () {
        var tallest = 0;
        $(".samakanintern").each(function () {
          var currentHeight = $(this).height();
          //console.log(currentHeight);
          if (currentHeight > tallest) {
            tallest = $(this).height();
          }
        });
        $(".samakanintern").height(tallest);
      });
    </script>

    <!-- Template Main JS File -->
    <script src="/assets/newfrontend/js/main.js"></script>
  </body>
</html>
