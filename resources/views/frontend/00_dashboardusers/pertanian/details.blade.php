@include('frontend.00_dashboardusers.style.header')

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <!-- <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
{{-- ------------------------------------------------------------- --}}
{{-- MENU NAVBAR  --}}
@include('frontend.00_dashboardusers.style.navbar')

{{-- ------------------------------------------------------------- --}}
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->
    <br />
    <br />
    <br />
    <br />

    <main id="student-detail" class="mt-5 pb-5 container-sm">
      <div class="row">
        <!-- Tombol back -->
        <a href="student.html" class="mb-3 ps-md-5">
          <i class="bi bi-arrow-left"></i> Back
        </a>

        <!-- Sebelah kiri -->
        <div class="col-lg-4 mb-4 ms-md-5 border rounded h-50">
          <div class="d-flex justify-content-center py-4">
            <img
              src="assets/img/img-student/anton-profile.jpg"
              alt="#"
              class="rounded-circle"
              width="120"
              height="120"
            />
          </div>

          <p class="text-center fw-semibold fs-5">Anthonio Manuel</p>
          <div class="d-flex justify-content-center">
            <img
              data-v-c38bab08=""
              srcset="
                https://res.cloudinary.com/gurucom/image/upload/f_auto/static/upgradedmember@2x.png 2x,
                https://res.cloudinary.com/gurucom/image/upload/f_auto/static/upgradedmember.png    1x
              "
              src="https://res.cloudinary.com/gurucom/image/upload/f_auto/static/upgradedmember.png"
              loading="lazy"
              alt="Member"
              title="Executive"
            />
          </div>

          <div class="d-flex justify-content-center pt-3">
            <p class="text-secondary">
              <i class="bi bi-geo-alt-fill">&nbsp;</i>Indonesia, Kota Batam
            </p>
          </div>

          <div class="d-flex justify-content-center">
            <p>
              <i class="bi bi-currency-dollar"></i>&nbsp; 1,109,373 /yr ·&nbsp;
            </p>
            <a href="#">100%<i class="bi bi-hand-thumbs-up-fill"></i></a>
          </div>

          <div class="d-grid px-3">
            <button class="btn btn-primary" type="button">Get The Quote</button>
          </div>

          <div class="d-flex justify-content-center pt-3">
            <a href="#" class="text-secondary">
              <i class="bi bi-heart"></i> Add to Favorite
            </a>
          </div>
          <hr class="row mt-4" />

          <div class="row container align-items-center py-3 mx-0">
            <div class="col-6 py-1">
              <p class="text-secondary mt-0">All-Time Earnings</p>
              <p class="text-secondary">Transactions</p>
              <p class="text-secondary">Employers</p>
              <p class="text-secondary">Largest Employer</p>
              <p class="text-secondary">Member Since</p>
            </div>

            <div class="col-6 p-1 pb-0 text-end">
              <p class="fw-semibold">$9.2M</p>
              <p class="fw-semibold">16,182</p>
              <p class="fw-semibold">44</p>
              <p class="fw-semibold">$1.1M</p>
              <p class="fw-semibold">Jul 2023</p>
            </div>
          </div>
          <hr class="row" />

          <div class="container row py-3 pe-0">
            <div class="col-6 py-1 pb-0 align-items-center">
              <i class="bi bi-link-45deg fs-4"></i>
              <a href="#">View Website</a>
            </div>

            <div class="col-6 p-1 pe-0 text-end align-items-center">
              <a href="#" class="text-dark"
                ><i class="bi bi-github fs-4"></i
              ></a>
              &nbsp;
              <a href="#"><i class="bi bi-linkedin fs-4"></i></a>
            </div>
          </div>
          <hr class="row my-3" />

          <div class="container py-3 px-3">
            <p class="text-secondary">
              I can made software development, unique web design, and creative
              digital marketing to become the one-stop shop for industry
              innovation.
              <br />
              <br />
              Scopic is a U.S.-based
              <a href="#about" class="text-decoration-underline"
                >...Read More</a
              >
            </p>
          </div>
          <hr class="row my-4" />

          <div class="row container py-3 pe-0 mb-4">
            <div
              class="col-4 py-1 pb-0 ps-4 pe-1 d-flex justify-content-center"
            >
              <i class="bi bi-share-fill"></i>
              <a href="#" class="text-decoration-none mt-0">&nbsp; Share</a>
            </div>

            <div class="col-4 justify-content-center d-flex pt-1">
              <span
                data-v-c38bab08=""
                role="presentation"
                aria-hidden="true"
                class="text-secondary"
              >
                |
              </span>
            </div>

            <div
              class="col-4 pb-0 pt-1 pe-4 text-end d-flex justify-content-center"
            >
              <i class="bi bi-flag-fill"></i>
              <a href="#" class="text-decoration-none">&nbsp; Report</a>
            </div>
          </div>
        </div>

        <!-- Sebelah kanan -->
        <div class="col-lg-7 ms-md-4">
          <div class="row">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="student-overview-anton.html"
                  >Overview</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="student-portfolio-anton.html"
                  >Portfolio</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="student-feedback-anton.html"
                  >Feedback</a
                >
              </li>
            </ul>
          </div>

          <!-- Section Skill -->
          <main class="row border border-top-0 border-bottom-0">
            <p
              class="text-dark fs-4 pb-2 mt-3 mb-2 ms-md-3 py-4 fw-semibold text-start text-decoration-underline"
            >
              Skills
            </p>

            <div class="card-text d-flex flex-wrap mt-4 ms-md-3">
              <p class="border border-secondary py-1 px-2 me-2 rounded-3">
                PHP
              </p>
              <p class="border border-secondary py-1 px-2 me-2 rounded-3">
                Responsive Design
              </p>
              <p class="border border-secondary py-1 px-2 me-2 rounded-3">
                JavaScript
              </p>
              <p class="border border-secondary py-1 px-2 me-2 rounded-3">
                Website Development
              </p>
              <p class="border border-secondary py-1 px-2 me-2 rounded-3">
                Web Development
              </p>
              <p class="border border-secondary py-1 px-2 me-2 rounded-3">C#</p>
              <p class="border border-secondary py-1 px-2 me-2 rounded-3">
                Content Creator
              </p>
              <p class="border border-secondary py-1 px-2 me-2 rounded-3">
                SEO
              </p>
              <p class="border border-secondary py-1 px-2 me-2 rounded-3">
                Content Writing
              </p>
            </div>
            <br />
            <br />
            <p class="text-center pt-5 mt-5">
              <a href="#">Sign up</a> or <a href="#">Log in</a> to see more.
            </p>
          </main>
          <hr class="row mb-0" />

          <!-- Section Service -->
          <main class="row border border-top-0 border-bottom-0">
            <div>
              <p
                class="fw-semibold text-decoration-underline fs-4 ms-md-3 py-4"
              >
                Service
              </p>

              <div class="d-flex flex-column flex-md-row ms-md-3">
                <img
                  src="assets/img/img-service/Web App Development.jpeg"
                  alt="#"
                  class="pb-lg-5 mb-4"
                />
                <div>
                  <!-- Web App Development -->
                  <a
                    href="#"
                    class="fs-6 text-decoration-none px-3 pe-2"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    >Web Development
                  </a>

                  <div
                    class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <div class="d-flex ms-4 align-items-center">
                            <img
                              src="assets/img/img-student/anton-profile.jpg"
                              class="mt-1"
                              alt="#"
                              width="48"
                              height="48"
                            />
                            <div class="ms-2 fw-semibold mt-3">
                              <p class="mb-1">Anthonio Manuel</p>
                              <p class="ms-1 text-secondary text-opacity-75">
                                <i class="bi bi-geo-alt-fill"></i> Indonesia,
                                Kota Batam
                              </p>
                            </div>
                          </div>
                        </div>

                        <div class="modal-body ms-4">
                          <div class="mt-4">
                            <p class="text-secondary mb-0">
                              Technology & Software &nbsp;
                              <i class="bi bi-chevron-right"></i> &nbsp; ERP /
                              CRM / SCM
                            </p>
                            <p class="fs-3 fw-semibold mb-0">
                              Search Engine Optimalization
                            </p>
                            <p class="text-secondary">
                              $15/hr · Starting at $25
                            </p>
                            <br />
                            <p class="text-secondary me-5">
                              Hi, Hope you are doing good.
                              <br />
                              <br />
                              I have 5+ years of working experience with Zoho
                              and expertise knowledge in this. I have
                              successfully completed 50+ projects in this with
                              some complex apps as well.
                              <br />
                              <br />
                              I have gone through your requirements about some
                              automation reports, links, setup reminder emails,
                              deluge writing, workflow setup and I can take care
                              of it. As I already setup such things before as
                              well.
                              <br />
                              <br />
                              Looking forward to hearing from you and also
                              available for a complete discussion.
                              <br />
                              <br />
                              Thanks
                            </p>
                          </div>
                          <hr class="me-4 mt-5" />

                          <div class="mt-5">
                            <p class="fs-5 fw-semibold">Skills & Expertise</p>
                            <div class="card-text d-flex flex-wrap me-5 pt-2">
                              <p class="border py-1 px-2 me-2">API</p>
                              <p class="border py-1 px-2 me-2">Ecommerce</p>
                              <p class="border py-1 px-2 me-2">
                                Email Campaigning
                              </p>
                              <p class="border py-1 px-2 me-2">
                                Email Services
                              </p>
                              <p class="border py-1 px-2 me-2">HTML</p>
                              <p class="border py-1 px-2 me-2">Infusionsoft</p>
                              <p class="border py-1 px-2 me-2">JavaScript</p>
                              <p class="border py-1 px-2 me-2">Joomla</p>
                              <p class="border py-1 px-2 me-2">jQuery</p>
                              <p class="border py-1 px-2 me-2">
                                Lead Generation
                              </p>
                              <p class="border py-1 px-2 me-2">Magento</p>
                              <p class="border py-1 px-2 me-2">Management</p>
                              <p class="border py-1 px-2 me-2">Marketing</p>
                              <p class="border py-1 px-2 me-2">Moodle</p>
                              <p class="border py-1 px-2 me-2">Paypal</p>
                              <p class="border py-1 px-2 me-2">PHP</p>
                              <p class="border py-1 px-2 me-2">Reports</p>
                              <p class="border py-1 px-2 me-2">Sage CRM</p>
                              <p class="border py-1 px-2 me-2">Sales</p>
                              <p class="border py-1 px-2 me-2">Sugar CRM</p>
                              <p class="border py-1 px-2 me-2">Vtiger CRM</p>
                              <p class="border py-1 px-2 me-2">WordPress</p>
                            </div>
                          </div>
                          <hr class="me-4 mt-5" />

                          <div class="mt-5">
                            <p class="fs-5 fw-semibold">
                              Related Work Collections
                            </p>
                            <img
                              src="assets/img/img-service/zoho-picture.jpg"
                              alt="#"
                              width="280"
                              height="185"
                            />
                          </div>
                          <a href="#"
                            ><p class="mt-3 fw-semibold">Dicky Darmawan</p></a
                          >
                          <hr class="me-4 mt-5" />

                          <!-- Modal Reviews -->
                          <main class="row">
                            <div>
                              <p class="fs-5 fw-semibold mt-4 ms-2">
                                412 Reviews
                              </p>

                              <div
                                class="d-flex align-items-start ms-2 my-5 me-4"
                              >
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt="#"
                                  class="mt-1"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold mb-0"
                                      >MrBeast</a
                                    >
                                    <p class="text-secondary mb-0">
                                      · Aug 31, 2022
                                    </p>
                                  </div>
                                  <p>
                                    Quickly helped my website problem
                                    efficiently!
                                  </p>
                                  for
                                  <a href="#"
                                    >Last Site Help: Speed, Social & Podcast.</a
                                  >
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div
                                class="d-flex align-items-center ms-2 my-5 me-4"
                              >
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt="#"
                                  class="mb-5 mt-3"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold">
                                      GroupCBF
                                    </a>
                                    &nbsp;
                                    <p class="text-secondary mb-0">
                                      · Aug 16, 2022
                                    </p>
                                  </div>
                                  <p>Great Job</p>
                                  for
                                  <a href="#">Rewrite web app</a>
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div
                                class="d-flex align-items-center ms-2 my-5 me-4"
                              >
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt="#"
                                  class="mb-5 pb-2"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold">blink-182</a
                                    >&nbsp;
                                    <p class="text-secondary mb-0">
                                      · Apr 08, 2022
                                    </p>
                                  </div>
                                  <p>
                                    Very responsive and proactive in taken care
                                    of my concerns. I have worked with Scopic
                                    for years and they have always
                                    overdelivered.
                                  </p>
                                  for
                                  <a href="#"
                                    >Upload KairWell site onto hosting</a
                                  >
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div
                                class="d-flex align-items-center ms-2 my-5 me-4"
                              >
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt="#"
                                  class="mb-5 mt-3"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold">
                                      Zonal Brian</a
                                    >&nbsp;
                                    <p class="mb-0">· Apr 05, 2022</p>
                                  </div>
                                  <p>Minh is the best! Thanks as always.</p>
                                  for
                                  <a href="#">Z-Loyalty</a>
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div
                                class="d-flex align-items-center ms-2 my-5 me-4"
                              >
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt=""
                                  class="mb-5 mt-3"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold"> Pete 107</a
                                    >&nbsp;
                                    <p class="mb-0">· Dec 07, 2021</p>
                                  </div>
                                  <p>
                                    Very professional. Would definitely work
                                    with again!
                                  </p>
                                  for
                                  <a href="#"
                                    >Cloudflare Teams RDP Access Setup</a
                                  >
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div
                                class="d-flex align-items-center ms-2 my-5 me-4"
                              >
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt=""
                                  class="mb-5 mt-3"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold">Hugh 50</a
                                    >&nbsp;
                                    <p class="mb-0">· Jul 12, 2021</p>
                                  </div>
                                  <p>
                                    Scopic are fantastic to work with and have
                                    the highest level of professionalism.
                                  </p>
                                  for
                                  <a href="#">Develop iPhone App</a>
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div
                                class="d-flex align-items-center ms-2 my-5 me-4"
                              >
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt=""
                                  class="mb-5 mt-3"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold"> WebBased</a
                                    >&nbsp;
                                    <p class="mb-0">· Jun 04, 2021</p>
                                  </div>
                                  <p>
                                    Appreciate how fast and thorough they were!
                                  </p>
                                  for
                                  <a href="#">Call Cleanser</a>
                                </div>
                              </div>
                              <p class="text-center pt-5 mt-5">
                                <a href="#">Sign up</a> or
                                <a href="#">Log in</a> to see more.
                              </p>
                              <hr class="me-4" />
                            </div>
                          </main>

                          <!-- browser -->
                          <main
                            class="row align-items-center py-4 pb-3 ps-md-4"
                          >
                            <p
                              class="fs-5 text-decoration-underline fw-semibold"
                            >
                              Browse Similar Freelance Experts
                            </p>

                            <div class="mt-md-3 col-lg-4">
                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >PHP Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Web Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >CSS Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >SEO Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >MySQL Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Web Designers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Apple Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Java Developers</a
                                >
                              </p>
                            </div>

                            <div class="mt-md-3 col-lg-4">
                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >JS Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                >
                                  Copywriters</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Content Writers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >HTML5 Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Sosmed Marketers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >SQL Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Researchers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >SEO Service Experts</a
                                >
                              </p>
                            </div>

                            <div class="mt-md-3 col-lg-4">
                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Designers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >C# Programmers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Platform Digitals</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Software Engineer</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >WordPress Experts</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >HTML Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Graphic Designers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >ActionScript
                                </a>
                              </p>
                            </div>
                          </main>
                        </div>

                        <div class="modal-footer justify-content-end">
                          <button
                            type="button"
                            class="btn-close fs-4 me-5"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                          ></button>
                        </div>
                      </div>
                    </div>
                  </div>

                  $38/hr · Start at $1K <br />
                  <p class="ms-3 mt-2 fs-6">
                    Offers high-quality and affordable web development and
                    design services, providing customized best fit your
                    business's unique needs.
                  </p>

                  <div class="card-text d-flex flex-wrap ms-3 pb-4">
                    <p class="border py-1 px-2 me-2">.NET</p>
                    <p class="border py-1 px-2 me-2">Adobe AIR</p>
                    <p class="border py-1 px-2 me-2">Adobe Illustrator</p>
                  </div>
                </div>
              </div>

              <hr class="pb-4" />
              <div class="d-flex flex-column flex-md-row ms-md-3">
                <img
                  src="assets/img/img-service/Mobile App Development.jpeg"
                  alt="#"
                  class="pb-lg-5 mb-4"
                />
                <div>
                  <!-- Mobile App Development -->
                  <a
                    href="#"
                    class="fs-6 text-decoration-none px-3 pe-2"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    >Mobile App
                  </a>

                  <div
                    class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <div class="d-flex ms-4 align-items-center">
                            <img
                              src="assets/img/img-student/dicky-profile.jpg"
                              class="mt-1"
                              alt="#"
                              width="48"
                              height="48"
                            />
                            <div class="ms-2 fw-semibold mt-3">
                              <p class="mb-1">Dicky Darmawan</p>
                              <p class="ms-1 text-secondary text-opacity-75">
                                <i class="bi bi-geo-alt-fill"></i> Indonesia,
                                Kota Batam
                              </p>
                            </div>
                          </div>
                        </div>

                        <div class="modal-body ms-4">
                          <div class="mt-4">
                            <p class="text-secondary mb-0">
                              Technology & Software &nbsp;
                              <i class="bi bi-chevron-right"></i> &nbsp; ERP /
                              CRM / SCM
                            </p>
                            <p class="text-secondary">
                              $15/hr · Starting at $25
                            </p>
                            <br />
                            <p class="text-secondary me-5">
                              Hi, Hope you are doing good.
                              <br />
                              <br />
                              I have 5+ years of working experience with Zoho
                              and expertise knowledge in this. I have
                              successfully completed 50+ projects in this with
                              some complex apps as well.
                              <br />
                              <br />
                              I have gone through your requirements about some
                              automation reports, links, setup reminder emails,
                              deluge writing, workflow setup and I can take care
                              of it. As I already setup such things before as
                              well.
                              <br />
                              <br />
                              Looking forward to hearing from you and also
                              available for a complete discussion.
                              <br />
                              <br />
                              Thanks
                            </p>
                          </div>
                          <hr class="me-4 mt-5" />

                          <div class="mt-5">
                            <p class="fs-5 fw-semibold">Skills & Expertise</p>
                            <div class="card-text d-flex flex-wrap me-5 pt-2">
                              <p class="border py-1 px-2 me-2">API</p>
                              <p class="border py-1 px-2 me-2">Ecommerce</p>
                              <p class="border py-1 px-2 me-2">
                                Email Campaigning
                              </p>
                              <p class="border py-1 px-2 me-2">
                                Email Services
                              </p>
                              <p class="border py-1 px-2 me-2">HTML</p>
                              <p class="border py-1 px-2 me-2">Infusionsoft</p>
                              <p class="border py-1 px-2 me-2">JavaScript</p>
                              <p class="border py-1 px-2 me-2">Joomla</p>
                              <p class="border py-1 px-2 me-2">jQuery</p>
                              <p class="border py-1 px-2 me-2">
                                Lead Generation
                              </p>
                              <p class="border py-1 px-2 me-2">Magento</p>
                              <p class="border py-1 px-2 me-2">Management</p>
                              <p class="border py-1 px-2 me-2">Marketing</p>
                              <p class="border py-1 px-2 me-2">Moodle</p>
                              <p class="border py-1 px-2 me-2">Paypal</p>
                              <p class="border py-1 px-2 me-2">PHP</p>
                              <p class="border py-1 px-2 me-2">Reports</p>
                              <p class="border py-1 px-2 me-2">Sage CRM</p>
                              <p class="border py-1 px-2 me-2">Sales</p>
                              <p class="border py-1 px-2 me-2">Sugar CRM</p>
                              <p class="border py-1 px-2 me-2">Vtiger CRM</p>
                              <p class="border py-1 px-2 me-2">WordPress</p>
                            </div>
                          </div>
                          <hr class="me-4 mt-5" />

                          <div class="mt-5">
                            <p class="fs-5 fw-semibold">
                              Related Work Collections
                            </p>
                            <img
                              src="assets/img/img-service/zoho-picture.jpg"
                              alt="#"
                              width="280"
                              height="185"
                            />
                          </div>
                          <a href="#"
                            ><p class="mt-3 fw-semibold">Dicky Darmawan</p></a
                          >
                          <hr class="me-4 mt-5" />

                          <!-- Modal Reviews -->
                          <main class="row">
                            <p class="fs-5 fw-semibold mt-4 ms-2">
                              412 Reviews
                            </p>

                            <div class="my-4">
                              <div class="d-flex align-items-start ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt="#"
                                  class="mt-1"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold mb-0"
                                      >MrBeast</a
                                    >
                                    <p class="text-secondary mb-0">
                                      · Aug 31, 2022
                                    </p>
                                  </div>
                                  <p>
                                    Quickly helped my website problem
                                    efficiently!
                                  </p>
                                  for
                                  <a href="#"
                                    >Last Site Help: Speed, Social & Podcast.</a
                                  >
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt="#"
                                  class="mb-5 mt-3"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold">
                                      GroupCBF
                                    </a>
                                    &nbsp;
                                    <p class="text-secondary mb-0">
                                      · Aug 16, 2022
                                    </p>
                                  </div>
                                  <p>Great Job</p>
                                  for
                                  <a href="#">Rewrite web app</a>
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt="#"
                                  class="mb-5 pb-2"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold">blink-182</a
                                    >&nbsp;
                                    <p class="text-secondary mb-0">
                                      · Apr 08, 2022
                                    </p>
                                  </div>
                                  <p>
                                    Very responsive and proactive in taken care
                                    of my concerns. I have worked with Scopic
                                    for years and they have always
                                    overdelivered.
                                  </p>
                                  for
                                  <a href="#"
                                    >Upload KairWell site onto hosting</a
                                  >
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt="#"
                                  class="mb-5 mt-3"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold">
                                      Zonal Brian</a
                                    >&nbsp;
                                    <p class="mb-0">· Apr 05, 2022</p>
                                  </div>
                                  <p>Minh is the best! Thanks as always.</p>
                                  for
                                  <a href="#">Z-Loyalty</a>
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt=""
                                  class="mb-5 mt-3"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold"> Pete 107</a
                                    >&nbsp;
                                    <p class="mb-0">· Dec 07, 2021</p>
                                  </div>
                                  <p>
                                    Very professional. Would definitely work
                                    with again!
                                  </p>
                                  for
                                  <a href="#"
                                    >Cloudflare Teams RDP Access Setup</a
                                  >
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt=""
                                  class="mb-5"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold">Hugh 50</a
                                    >&nbsp;
                                    <p class="mb-0">· Jul 12, 2021</p>
                                  </div>
                                  <p>
                                    Scopic are fantastic to work with and have
                                    the highest level of professionalism.
                                  </p>
                                  for
                                  <a href="#">Develop iPhone App</a>
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt=""
                                  class="mb-5 mt-3"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold"> WebBased</a
                                    >&nbsp;
                                    <p class="mb-0">· Jun 04, 2021</p>
                                  </div>
                                  <p>
                                    Appreciate how fast and thorough they were!
                                  </p>
                                  for
                                  <a href="#">Call Cleanser</a>
                                </div>
                              </div>
                              <p class="text-center pt-5 mt-5">
                                <a href="#">Sign up</a> or
                                <a href="#">Log in</a> to see more.
                              </p>
                              <hr class="me-4" />
                            </div>
                          </main>

                          <!-- browser -->
                          <main
                            class="row align-items-center py-4 pb-3 ps-md-4"
                          >
                            <p
                              class="fs-5 text-decoration-underline fw-semibold"
                            >
                              Browse Similar Freelance Experts
                            </p>

                            <div class="mt-md-3 col-lg-4">
                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >PHP Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Web Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >CSS Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >SEO Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >MySQL Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Web Designers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Apple Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Java Developers</a
                                >
                              </p>
                            </div>

                            <div class="mt-md-3 col-lg-4">
                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >JS Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                >
                                  Copywriters</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Content Writers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >HTML5 Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Sosmed Marketers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >SQL Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Researchers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >SEO Service Experts</a
                                >
                              </p>
                            </div>

                            <div class="mt-md-3 col-lg-4">
                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Designers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >C# Programmers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Platform Digitals</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Software Engineer</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >WordPress Experts</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >HTML Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Graphic Designers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >ActionScript
                                </a>
                              </p>
                            </div>
                          </main>
                        </div>

                        <div class="modal-footer justify-content-end">
                          <button
                            type="button"
                            class="btn-close fs-4 me-5"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                          ></button>
                        </div>
                      </div>
                    </div>
                  </div>

                  $38/hr · Start at $1K <br />
                  <p class="ms-3 mt-2">
                    We do more than just develop software. We turn intangible
                    ideas into dynamic solutions. on collaborative application
                    development.
                  </p>

                  <div class="card-text d-flex flex-wrap ms-3 pb-4">
                    <p class="border py-1 px-2 me-2">.NET</p>
                    <p class="border py-1 px-2 me-2">3D</p>
                    <p class="border py-1 px-2 me-2">3D Animation</p>
                    <p class="border py-1 px-2 me-2">Ad Mob</p>
                    <p class="border py-1 px-2 me-2">Adobe AIR</p>
                  </div>
                </div>
              </div>

              <hr class="pt-4" />
              <div class="d-flex flex-column flex-md-row ms-md-3">
                <img
                  src="assets/img/img-service/Search Engine Optimization.jpeg"
                  alt="#"
                  class="pb-lg-5 mb-4"
                />
                <div>
                  <!-- Search Engine Optimization  -->
                  <a
                    href="#"
                    class="fs-6 text-decoration-none px-3 pe-2"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    >Search Engine
                  </a>

                  <div
                    class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <div class="d-flex ms-4 align-items-center">
                            <img
                              src="assets/img/img-student/anton-profile.jpg"
                              class="mt-1"
                              alt="#"
                              width="48"
                              height="48"
                            />
                            <div class="ms-2 fw-semibold mt-3">
                              <p class="mb-1">Anthonio Manuel</p>
                              <p class="ms-1 text-secondary text-opacity-75">
                                <i class="bi bi-geo-alt-fill"></i> Indonesia,
                                Kota Batam
                              </p>
                            </div>
                          </div>
                        </div>

                        <div class="modal-body ms-4">
                          <div class="mt-4">
                            <p class="text-secondary mb-0">
                              Technology & Software &nbsp;
                              <i class="bi bi-chevron-right"></i> &nbsp; ERP /
                              CRM / SCM
                            </p>
                            <p class="text-secondary">
                              $15/hr · Starting at $25
                            </p>
                            <br />
                            <p class="text-secondary me-5">
                              Hi, Hope you are doing good.
                              <br />
                              <br />
                              I have 5+ years of working experience with Zoho
                              and expertise knowledge in this. I have
                              successfully completed 50+ projects in this with
                              some complex apps as well.
                              <br />
                              <br />
                              I have gone through your requirements about some
                              automation reports, links, setup reminder emails,
                              deluge writing, workflow setup and I can take care
                              of it. As I already setup such things before as
                              well.
                              <br />
                              <br />
                              Looking forward to hearing from you and also
                              available for a complete discussion.
                              <br />
                              <br />
                              Thanks
                            </p>
                          </div>
                          <hr class="me-4 mt-5" />

                          <div class="mt-5">
                            <p class="fs-5 fw-semibold">Skills & Expertise</p>
                            <div class="card-text d-flex flex-wrap me-5 pt-2">
                              <p class="border py-1 px-2 me-2">API</p>
                              <p class="border py-1 px-2 me-2">Ecommerce</p>
                              <p class="border py-1 px-2 me-2">
                                Email Campaigning
                              </p>
                              <p class="border py-1 px-2 me-2">
                                Email Services
                              </p>
                              <p class="border py-1 px-2 me-2">HTML</p>
                              <p class="border py-1 px-2 me-2">Infusionsoft</p>
                              <p class="border py-1 px-2 me-2">JavaScript</p>
                              <p class="border py-1 px-2 me-2">Joomla</p>
                              <p class="border py-1 px-2 me-2">jQuery</p>
                              <p class="border py-1 px-2 me-2">
                                Lead Generation
                              </p>
                              <p class="border py-1 px-2 me-2">Magento</p>
                              <p class="border py-1 px-2 me-2">Management</p>
                              <p class="border py-1 px-2 me-2">Marketing</p>
                              <p class="border py-1 px-2 me-2">Moodle</p>
                              <p class="border py-1 px-2 me-2">Paypal</p>
                              <p class="border py-1 px-2 me-2">PHP</p>
                              <p class="border py-1 px-2 me-2">Reports</p>
                              <p class="border py-1 px-2 me-2">Sage CRM</p>
                              <p class="border py-1 px-2 me-2">Sales</p>
                              <p class="border py-1 px-2 me-2">Sugar CRM</p>
                              <p class="border py-1 px-2 me-2">Vtiger CRM</p>
                              <p class="border py-1 px-2 me-2">WordPress</p>
                            </div>
                          </div>
                          <hr class="me-4 mt-5" />

                          <div class="mt-5">
                            <p class="fs-5 fw-semibold">
                              Related Work Collections
                            </p>
                            <img
                              src="assets/img/img-service/zoho-picture.jpg"
                              alt="#"
                              width="280"
                              height="185"
                            />
                          </div>
                          <a href="#"
                            ><p class="mt-3 fw-semibold">Dicky Darmawan</p></a
                          >
                          <hr class="me-4 mt-5" />

                          <!-- Modal Reviews -->
                          <main class="row">
                            <p class="fs-5 fw-semibold mt-4 ms-2">
                              412 Reviews
                            </p>

                            <div class="my-4">
                              <div class="d-flex align-items-start ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt="#"
                                  class="mt-1"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold mb-0"
                                      >MrBeast</a
                                    >
                                    <p class="text-secondary mb-0">
                                      · Aug 31, 2022
                                    </p>
                                  </div>
                                  <p>
                                    Quickly helped my website problem
                                    efficiently!
                                  </p>
                                  for
                                  <a href="#"
                                    >Last Site Help: Speed, Social & Podcast.</a
                                  >
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt="#"
                                  class="mb-5 mt-3"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold">
                                      GroupCBF
                                    </a>
                                    &nbsp;
                                    <p class="text-secondary mb-0">
                                      · Aug 16, 2022
                                    </p>
                                  </div>
                                  <p>Great Job</p>
                                  for
                                  <a href="#">Rewrite web app</a>
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt="#"
                                  class="mb-5 pb-2"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold">blink-182</a
                                    >&nbsp;
                                    <p class="text-secondary mb-0">
                                      · Apr 08, 2022
                                    </p>
                                  </div>
                                  <p>
                                    Very responsive and proactive in taken care
                                    of my concerns. I have worked with Scopic
                                    for years and they have always
                                    overdelivered.
                                  </p>
                                  for
                                  <a href="#"
                                    >Upload KairWell site onto hosting</a
                                  >
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt="#"
                                  class="mb-5 mt-3"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold">
                                      Zonal Brian</a
                                    >&nbsp;
                                    <p class="mb-0">· Apr 05, 2022</p>
                                  </div>
                                  <p>Minh is the best! Thanks as always.</p>
                                  for
                                  <a href="#">Z-Loyalty</a>
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt=""
                                  class="mb-5 mt-3"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold"> Pete 107</a
                                    >&nbsp;
                                    <p class="mb-0">· Dec 07, 2021</p>
                                  </div>
                                  <p>
                                    Very professional. Would definitely work
                                    with again!
                                  </p>
                                  for
                                  <a href="#"
                                    >Cloudflare Teams RDP Access Setup</a
                                  >
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt=""
                                  class="mb-5"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold">Hugh 50</a
                                    >&nbsp;
                                    <p class="mb-0">· Jul 12, 2021</p>
                                  </div>
                                  <p>
                                    Scopic are fantastic to work with and have
                                    the highest level of professionalism.
                                  </p>
                                  for
                                  <a href="#">Develop iPhone App</a>
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt=""
                                  class="mb-5 mt-3"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold"> WebBased</a
                                    >&nbsp;
                                    <p class="mb-0">· Jun 04, 2021</p>
                                  </div>
                                  <p>
                                    Appreciate how fast and thorough they were!
                                  </p>
                                  for
                                  <a href="#">Call Cleanser</a>
                                </div>
                              </div>
                              <p class="text-center pt-5 mt-5">
                                <a href="#">Sign up</a> or
                                <a href="#">Log in</a> to see more.
                              </p>
                              <hr class="me-4" />
                            </div>
                          </main>

                          <!-- browser -->
                          <main
                            class="row align-items-center py-4 pb-3 ps-md-4"
                          >
                            <p
                              class="fs-5 text-decoration-underline fw-semibold"
                            >
                              Browse Similar Freelance Experts
                            </p>

                            <div class="mt-md-3 col-lg-4">
                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >PHP Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Web Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >CSS Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >SEO Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >MySQL Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Web Designers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Apple Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Java Developers</a
                                >
                              </p>
                            </div>

                            <div class="mt-md-3 col-lg-4">
                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >JS Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                >
                                  Copywriters</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Content Writers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >HTML5 Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Sosmed Marketers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >SQL Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Researchers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >SEO Service Experts</a
                                >
                              </p>
                            </div>

                            <div class="mt-md-3 col-lg-4">
                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Designers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >C# Programmers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Platform Digitals</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Software Engineer</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >WordPress Experts</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >HTML Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Graphic Designers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >ActionScript
                                </a>
                              </p>
                            </div>
                          </main>
                        </div>

                        <div class="modal-footer justify-content-center">
                          <button
                            type="button"
                            class="btn-close fs-4 me-5"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                          ></button>
                        </div>
                      </div>
                    </div>
                  </div>

                  $38/hr · Start at $1K
                  <p class="ms-3 mt-2">
                    Whether you’re building a website from scratch or wanting to
                    boost traffic to your current domain, Scopic tailors every
                    SEO service.
                  </p>

                  <div class="card-text d-flex flex-wrap ms-3 pb-4">
                    <p class="border py-1 px-2 me-2">Amazon AWS</p>
                    <p class="border py-1 px-2 me-2">Analytics</p>
                    <p class="border py-1 px-2 me-2">AngularJS</p>
                  </div>
                </div>
              </div>

              <hr class="pb-4" />
              <div class="d-flex flex-column flex-md-row ms-md-3">
                <img
                  src="assets/img/img-service/Desktop App Development.jpeg"
                  alt="#"
                  class="pb-lg-5 mb-4"
                />
                <div>
                  <!-- Desktop App Development -->
                  <a
                    href="#"
                    class="fs-6 text-decoration-none px-3 pe-2"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    >Desktop App
                  </a>

                  <div
                    class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <div class="d-flex ms-4 align-items-center">
                            <img
                              src="assets/img/img-student/anton-profile.jpg"
                              class="mt-1"
                              alt="#"
                              width="48"
                              height="48"
                            />
                            <div class="ms-2 fw-semibold mt-3">
                              <p class="mb-1">Anthonio Manuel</p>
                              <p class="ms-1 text-secondary text-opacity-75">
                                <i class="bi bi-geo-alt-fill"></i> Indonesia,
                                Kota Batam
                              </p>
                            </div>
                          </div>
                        </div>

                        <div class="modal-body ms-4">
                          <div class="mt-4">
                            <p class="text-secondary mb-0">
                              Technology & Software &nbsp;
                              <i class="bi bi-chevron-right"></i> &nbsp; ERP /
                              CRM / SCM
                            </p>
                            <p class="text-secondary">
                              $15/hr · Starting at $25
                            </p>
                            <br />
                            <p class="text-secondary me-5">
                              Hi, Hope you are doing good.
                              <br />
                              <br />
                              I have 5+ years of working experience with Zoho
                              and expertise knowledge in this. I have
                              successfully completed 50+ projects in this with
                              some complex apps as well.
                              <br />
                              <br />
                              I have gone through your requirements about some
                              automation reports, links, setup reminder emails,
                              deluge writing, workflow setup and I can take care
                              of it. As I already setup such things before as
                              well.
                              <br />
                              <br />
                              Looking forward to hearing from you and also
                              available for a complete discussion.
                              <br />
                              <br />
                              Thanks
                            </p>
                          </div>
                          <hr class="me-4 mt-5" />

                          <div class="mt-5">
                            <p class="fs-5 fw-semibold">Skills & Expertise</p>
                            <div class="card-text d-flex flex-wrap me-5 pt-2">
                              <p class="border py-1 px-2 me-2">API</p>
                              <p class="border py-1 px-2 me-2">Ecommerce</p>
                              <p class="border py-1 px-2 me-2">
                                Email Campaigning
                              </p>
                              <p class="border py-1 px-2 me-2">
                                Email Services
                              </p>
                              <p class="border py-1 px-2 me-2">HTML</p>
                              <p class="border py-1 px-2 me-2">Infusionsoft</p>
                              <p class="border py-1 px-2 me-2">JavaScript</p>
                              <p class="border py-1 px-2 me-2">Joomla</p>
                              <p class="border py-1 px-2 me-2">jQuery</p>
                              <p class="border py-1 px-2 me-2">
                                Lead Generation
                              </p>
                              <p class="border py-1 px-2 me-2">Magento</p>
                              <p class="border py-1 px-2 me-2">Management</p>
                              <p class="border py-1 px-2 me-2">Marketing</p>
                              <p class="border py-1 px-2 me-2">Moodle</p>
                              <p class="border py-1 px-2 me-2">Paypal</p>
                              <p class="border py-1 px-2 me-2">PHP</p>
                              <p class="border py-1 px-2 me-2">Reports</p>
                              <p class="border py-1 px-2 me-2">Sage CRM</p>
                              <p class="border py-1 px-2 me-2">Sales</p>
                              <p class="border py-1 px-2 me-2">Sugar CRM</p>
                              <p class="border py-1 px-2 me-2">Vtiger CRM</p>
                              <p class="border py-1 px-2 me-2">WordPress</p>
                            </div>
                          </div>
                          <hr class="me-4 mt-5" />

                          <div class="mt-5">
                            <p class="fs-5 fw-semibold">
                              Related Work Collections
                            </p>
                            <img
                              src="assets/img/img-service/zoho-picture.jpg"
                              alt="#"
                              width="280"
                              height="185"
                            />
                          </div>
                          <a href="#"
                            ><p class="mt-3 fw-semibold">Dicky Darmawan</p></a
                          >
                          <hr class="me-4 mt-5" />

                          <!-- Modal Reviews -->
                          <main class="row">
                            <p class="fs-5 fw-semibold mt-4 ms-2">
                              412 Reviews
                            </p>

                            <div class="my-4">
                              <div class="d-flex align-items-start ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt="#"
                                  class="mt-1"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold mb-0"
                                      >MrBeast</a
                                    >
                                    <p class="text-secondary mb-0">
                                      · Aug 31, 2022
                                    </p>
                                  </div>
                                  <p>
                                    Quickly helped my website problem
                                    efficiently!
                                  </p>
                                  for
                                  <a href="#"
                                    >Last Site Help: Speed, Social & Podcast.</a
                                  >
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt="#"
                                  class="mb-5 mt-3"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold">
                                      GroupCBF
                                    </a>
                                    &nbsp;
                                    <p class="text-secondary mb-0">
                                      · Aug 16, 2022
                                    </p>
                                  </div>
                                  <p>Great Job</p>
                                  for
                                  <a href="#">Rewrite web app</a>
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt="#"
                                  class="mb-5 pb-2"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold">blink-182</a
                                    >&nbsp;
                                    <p class="text-secondary mb-0">
                                      · Apr 08, 2022
                                    </p>
                                  </div>
                                  <p>
                                    Very responsive and proactive in taken care
                                    of my concerns. I have worked with Scopic
                                    for years and they have always
                                    overdelivered.
                                  </p>
                                  for
                                  <a href="#"
                                    >Upload KairWell site onto hosting</a
                                  >
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt="#"
                                  class="mb-5 mt-3"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold">
                                      Zonal Brian</a
                                    >&nbsp;
                                    <p class="mb-0">· Apr 05, 2022</p>
                                  </div>
                                  <p>Minh is the best! Thanks as always.</p>
                                  for
                                  <a href="#">Z-Loyalty</a>
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt=""
                                  class="mb-5 mt-3"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold"> Pete 107</a
                                    >&nbsp;
                                    <p class="mb-0">· Dec 07, 2021</p>
                                  </div>
                                  <p>
                                    Very professional. Would definitely work
                                    with again!
                                  </p>
                                  for
                                  <a href="#"
                                    >Cloudflare Teams RDP Access Setup</a
                                  >
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt=""
                                  class="mb-5"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold">Hugh 50</a
                                    >&nbsp;
                                    <p class="mb-0">· Jul 12, 2021</p>
                                  </div>
                                  <p>
                                    Scopic are fantastic to work with and have
                                    the highest level of professionalism.
                                  </p>
                                  for
                                  <a href="#">Develop iPhone App</a>
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt=""
                                  class="mb-5 mt-3"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold"> WebBased</a
                                    >&nbsp;
                                    <p class="mb-0">· Jun 04, 2021</p>
                                  </div>
                                  <p>
                                    Appreciate how fast and thorough they were!
                                  </p>
                                  for
                                  <a href="#">Call Cleanser</a>
                                </div>
                              </div>
                              <p class="text-center pt-5 mt-5">
                                <a href="#">Sign up</a> or
                                <a href="#">Log in</a> to see more.
                              </p>
                              <hr class="me-4" />
                            </div>
                          </main>

                          <!-- browser -->
                          <main
                            class="row align-items-center py-4 pb-3 ps-md-4"
                          >
                            <p
                              class="fs-5 text-decoration-underline fw-semibold"
                            >
                              Browse Similar Freelance Experts
                            </p>

                            <div class="mt-md-3 col-lg-4">
                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >PHP Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Web Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >CSS Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >SEO Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >MySQL Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Web Designers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Apple Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Java Developers</a
                                >
                              </p>
                            </div>

                            <div class="mt-md-3 col-lg-4">
                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >JS Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                >
                                  Copywriters</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Content Writers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >HTML5 Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Sosmed Marketers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >SQL Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Researchers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >SEO Service Experts</a
                                >
                              </p>
                            </div>

                            <div class="mt-md-3 col-lg-4">
                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Designers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >C# Programmers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Platform Digitals</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Software Engineer</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >WordPress Experts</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >HTML Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Graphic Designers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >ActionScript
                                </a>
                              </p>
                            </div>
                          </main>
                        </div>

                        <div class="modal-footer justify-content-center">
                          <button
                            type="button"
                            class="btn-close fs-4 me-5"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                          ></button>
                        </div>
                      </div>
                    </div>
                  </div>

                  $38/hr · Start at $1K
                  <p class="ms-3 mt-2">
                    Many applications are migrating to mobile and web, but a
                    desktop solution might be the right choice for you. That is,
                    if you need an app with state-of-the.
                  </p>

                  <div class="card-text d-flex flex-wrap ms-3 pb-4">
                    <p class="border py-1 px-2 me-2">.NET</p>
                    <p class="border py-1 px-2 me-2">3D</p>
                    <p class="border py-1 px-2 me-2">3D Printing</p>
                    <p class="border py-1 px-2 me-2">3D Scanning</p>
                  </div>
                </div>
              </div>

              <hr class="pb-4" />
              <div class="d-flex flex-column flex-md-row ms-md-3">
                <img
                  src="assets/img/img-service/Custom Web Development.jpeg"
                  alt="#"
                  class="pb-lg-5 mb-4"
                />
                <div>
                  <!-- Custom Web Development -->
                  <a
                    href="#"
                    class="fs-6 text-decoration-none px-3 pe-2"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    >Custom Web
                  </a>

                  <div
                    class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <div class="d-flex ms-4 align-items-center">
                            <img
                              src="assets/img/img-student/anton-profile.jpg"
                              class="mt-1"
                              alt="#"
                              width="48"
                              height="48"
                            />
                            <div class="ms-2 fw-semibold mt-3">
                              <p class="mb-1">Anthonio Manuel</p>
                              <p class="ms-1 text-secondary text-opacity-75">
                                <i class="bi bi-geo-alt-fill"></i> Indonesia,
                                Kota Batam
                              </p>
                            </div>
                          </div>
                        </div>

                        <div class="modal-body ms-4">
                          <div class="mt-4">
                            <p class="text-secondary mb-0">
                              Technology & Software &nbsp;
                              <i class="bi bi-chevron-right"></i> &nbsp; ERP /
                              CRM / SCM
                            </p>

                            <p class="text-secondary">
                              $15/hr · Starting at $25
                            </p>
                            <br />
                            <p class="text-secondary me-5">
                              Hi, Hope you are doing good.
                              <br />
                              <br />
                              I have 5+ years of working experience with Zoho
                              and expertise knowledge in this. I have
                              successfully completed 50+ projects in this with
                              some complex apps as well.
                              <br />
                              <br />
                              I have gone through your requirements about some
                              automation reports, links, setup reminder emails,
                              deluge writing, workflow setup and I can take care
                              of it. As I already setup such things before as
                              well.
                              <br />
                              <br />
                              Looking forward to hearing from you and also
                              available for a complete discussion.
                              <br />
                              <br />
                              Thanks
                            </p>
                          </div>
                          <hr class="me-4 mt-5" />

                          <div class="mt-5">
                            <p class="fs-5 fw-semibold">Skills & Expertise</p>
                            <div class="card-text d-flex flex-wrap me-5 pt-2">
                              <p class="border py-1 px-2 me-2">API</p>
                              <p class="border py-1 px-2 me-2">Ecommerce</p>
                              <p class="border py-1 px-2 me-2">
                                Email Campaigning
                              </p>
                              <p class="border py-1 px-2 me-2">
                                Email Services
                              </p>
                              <p class="border py-1 px-2 me-2">HTML</p>
                              <p class="border py-1 px-2 me-2">Infusionsoft</p>
                              <p class="border py-1 px-2 me-2">JavaScript</p>
                              <p class="border py-1 px-2 me-2">Joomla</p>
                              <p class="border py-1 px-2 me-2">jQuery</p>
                              <p class="border py-1 px-2 me-2">
                                Lead Generation
                              </p>
                              <p class="border py-1 px-2 me-2">Magento</p>
                              <p class="border py-1 px-2 me-2">Management</p>
                              <p class="border py-1 px-2 me-2">Marketing</p>
                              <p class="border py-1 px-2 me-2">Moodle</p>
                              <p class="border py-1 px-2 me-2">Paypal</p>
                              <p class="border py-1 px-2 me-2">PHP</p>
                              <p class="border py-1 px-2 me-2">Reports</p>
                              <p class="border py-1 px-2 me-2">Sage CRM</p>
                              <p class="border py-1 px-2 me-2">Sales</p>
                              <p class="border py-1 px-2 me-2">Sugar CRM</p>
                              <p class="border py-1 px-2 me-2">Vtiger CRM</p>
                              <p class="border py-1 px-2 me-2">WordPress</p>
                            </div>
                          </div>
                          <hr class="me-4 mt-5" />

                          <div class="mt-5">
                            <p class="fs-5 fw-semibold">
                              Related Work Collections
                            </p>
                            <img
                              src="assets/img/img-service/zoho-picture.jpg"
                              alt="#"
                              width="280"
                              height="185"
                            />
                          </div>
                          <a href="#"
                            ><p class="mt-3 fw-semibold">Dicky Darmawan</p></a
                          >
                          <hr class="me-4 mt-5" />

                          <!-- Modal Reviews -->
                          <main class="row">
                            <p class="fs-5 fw-semibold mt-4 ms-2">
                              412 Reviews
                            </p>

                            <div class="my-4">
                              <div class="d-flex align-items-start ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt="#"
                                  class="mt-1"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold mb-0"
                                      >MrBeast</a
                                    >
                                    <p class="text-secondary mb-0">
                                      · Aug 31, 2022
                                    </p>
                                  </div>
                                  <p>
                                    Quickly helped my website problem
                                    efficiently!
                                  </p>
                                  for
                                  <a href="#"
                                    >Last Site Help: Speed, Social & Podcast.</a
                                  >
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt="#"
                                  class="mb-5 mt-3"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold">
                                      GroupCBF
                                    </a>
                                    &nbsp;
                                    <p class="text-secondary mb-0">
                                      · Aug 16, 2022
                                    </p>
                                  </div>
                                  <p>Great Job</p>
                                  for
                                  <a href="#">Rewrite web app</a>
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt="#"
                                  class="mb-5 pb-2"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold">blink-182</a
                                    >&nbsp;
                                    <p class="text-secondary mb-0">
                                      · Apr 08, 2022
                                    </p>
                                  </div>
                                  <p>
                                    Very responsive and proactive in taken care
                                    of my concerns. I have worked with Scopic
                                    for years and they have always
                                    overdelivered.
                                  </p>
                                  for
                                  <a href="#"
                                    >Upload KairWell site onto hosting</a
                                  >
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt="#"
                                  class="mb-5 mt-3"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold">
                                      Zonal Brian</a
                                    >&nbsp;
                                    <p class="mb-0">· Apr 05, 2022</p>
                                  </div>
                                  <p>Minh is the best! Thanks as always.</p>
                                  for
                                  <a href="#">Z-Loyalty</a>
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt=""
                                  class="mb-5 mt-3"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold"> Pete 107</a
                                    >&nbsp;
                                    <p class="mb-0">· Dec 07, 2021</p>
                                  </div>
                                  <p>
                                    Very professional. Would definitely work
                                    with again!
                                  </p>
                                  for
                                  <a href="#"
                                    >Cloudflare Teams RDP Access Setup</a
                                  >
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt=""
                                  class="mb-5"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold">Hugh 50</a
                                    >&nbsp;
                                    <p class="mb-0">· Jul 12, 2021</p>
                                  </div>
                                  <p>
                                    Scopic are fantastic to work with and have
                                    the highest level of professionalism.
                                  </p>
                                  for
                                  <a href="#">Develop iPhone App</a>
                                </div>
                              </div>
                              <hr class="me-4" />

                              <div class="d-flex align-items-center ms-2 my-5">
                                <img
                                  src="assets/img/img-feedback/profile-feedback.jpg"
                                  alt=""
                                  class="mb-5 mt-3"
                                />

                                <div class="ms-2">
                                  <div class="d-flex">
                                    <a href="#" class="fw-semibold"> WebBased</a
                                    >&nbsp;
                                    <p class="mb-0">· Jun 04, 2021</p>
                                  </div>
                                  <p>
                                    Appreciate how fast and thorough they were!
                                  </p>
                                  for
                                  <a href="#">Call Cleanser</a>
                                </div>
                              </div>
                              <p class="text-center pt-5 mt-5">
                                <a href="#">Sign up</a> or
                                <a href="#">Log in</a> to see more.
                              </p>
                              <hr class="me-4" />
                            </div>
                          </main>

                          <!-- browser -->
                          <main
                            class="row align-items-center py-4 pb-3 ps-md-4"
                          >
                            <p
                              class="fs-5 text-decoration-underline fw-semibold"
                            >
                              Browse Similar Freelance Experts
                            </p>

                            <div class="mt-md-3 col-lg-4">
                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >PHP Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Web Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >CSS Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >SEO Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >MySQL Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Web Designers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Apple Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Java Developers</a
                                >
                              </p>
                            </div>

                            <div class="mt-md-3 col-lg-4">
                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >JS Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                >
                                  Copywriters</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Content Writers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >HTML5 Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Sosmed Marketers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >SQL Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Researchers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >SEO Service Experts</a
                                >
                              </p>
                            </div>

                            <div class="mt-md-3 col-lg-4">
                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Designers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >C# Programmers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Platform Digitals</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Software Engineer</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >WordPress Experts</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >HTML Developers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >Graphic Designers</a
                                >
                              </p>

                              <p>
                                <a
                                  href="#"
                                  class="text-decoration-none text-secondary"
                                  >ActionScript
                                </a>
                              </p>
                            </div>
                          </main>
                        </div>

                        <div class="modal-footer justify-content-center">
                          <button
                            type="button"
                            class="btn-close fs-4 me-5"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                          ></button>
                        </div>
                      </div>
                    </div>
                  </div>

                  $38/hr · Start at $1K
                  <p class="ms-3 mt-2">
                    Software has the skills and experience to handle more than
                    just standard and relatively common web, mobile, and desktop
                    applications.
                  </p>

                  <div class="card-text d-flex flex-wrap ms-3 pb-0 mb-auto">
                    <p class="border py-1 px-2 me-2">HTML</p>
                    <p class="border py-1 px-2 me-2">CSS</p>
                    <p class="border py-1 px-2 me-2">JavaScript</p>
                    <p class="border py-1 px-2 me-2">ReactJS</p>
                    <p class="border py-1 px-2 me-2">NodeJS</p>
                  </div>
                </div>
              </div>
              <p class="text-center pt-5 mt-3">
                <a href="#">Sign up</a> or <a href="#">Log in</a> to see more.
              </p>
            </div>
          </main>
          <hr class="row mb-0" />

          <!-- Section About -->
          <main class="row border border-top-0 border-bottom-0 py-5 ps-md-4">
            <p
              id="about"
              class="fs-4 fw-semibold text-decoration-underline text-dark"
            >
              About
            </p>

            <p class="fs-6 fw-semibold">
              End-to-end software development and services!
            </p>

            <p class="fst-normal">
              We combine tailor-made software development, unique web design,
              and to become the one-stop shop for industry innovation.
              <br />
              <br />
              We are also an official Google Partner - our marketers are fully
              certified in Google Ads and can build, grow, and maximize your
              campaign efforts.
              <br />
              <br />
              • 1,000+ projects delivered <br />
              • 14+ years of experience transforming ideas into reality <br />
              • 280+ highly talented developers, designers, and marketers.
              <br />
              <br />
              Our highly skilled coders have experience with over 50 types of
              technologies, including:
              <br />
              <br />
              • Desktop: C#, .Net, Java. <br />
              • Web: React, Vue, Node.js, AWS Serverless Computing.
              <br />
              • Mobile: React Native.
              <br />
              • Databases: SQL (MySQL, PostgreSQL and NoSQL).
              <br />
              <br />
              Innovation starts with a powerful vision. Let’s work together to
              breathe life into your digital ideas.
              <br />
              <br />
              Founded: 2023
            </p>

            <p class="fs-6 fw-semibold mt-3">Work Terms</p>
            <p class="fs-6">
              Escrow or non-escrow projects. Non-escrow project terms are 25-50%
              up front with the remainder completion.
            </p>

            <p class="fw-semibold pt-5">
              Attachments <span class="fw-normal">(Click to Preview)</span>
            </p>
            <div>
              <button type="button" class="btn btn-outline-secondary">
                Download PDF
              </button>
            </div>
          </main>
          <hr class="row mb-5" />

          <!-- Last Section -->
          <main class="row border rounded align-items-center py-4 pb-3 ps-md-4">
            <p class="fs-5 text-decoration-underline fw-semibold">
              Browse Similar Freelance Experts
            </p>

            <div class="mt-md-3 col-lg-4">
              <p>
                <a href="#" class="text-decoration-none text-secondary"
                  >PHP Developers</a
                >
              </p>

              <p>
                <a href="#" class="text-decoration-none text-secondary"
                  >Web Developers</a
                >
              </p>

              <p>
                <a href="#" class="text-decoration-none text-secondary"
                  >CSS Developers</a
                >
              </p>

              <p>
                <a href="#" class="text-decoration-none text-secondary"
                  >SEO Developers</a
                >
              </p>

              <p>
                <a href="#" class="text-decoration-none text-secondary"
                  >MySQL Developers</a
                >
              </p>

              <p>
                <a href="#" class="text-decoration-none text-secondary"
                  >Web Designers</a
                >
              </p>

              <p>
                <a href="#" class="text-decoration-none text-secondary"
                  >Apple Developers</a
                >
              </p>

              <p>
                <a href="#" class="text-decoration-none text-secondary"
                  >Java Developers</a
                >
              </p>
            </div>

            <div class="mt-md-3 col-lg-4">
              <p>
                <a href="#" class="text-decoration-none text-secondary"
                  >JS Developers</a
                >
              </p>

              <p>
                <a href="#" class="text-decoration-none text-secondary">
                  Copywriters</a
                >
              </p>

              <p>
                <a href="#" class="text-decoration-none text-secondary"
                  >Content Writers</a
                >
              </p>

              <p>
                <a href="#" class="text-decoration-none text-secondary"
                  >HTML5 Developers</a
                >
              </p>

              <p>
                <a href="#" class="text-decoration-none text-secondary"
                  >Sosmed Marketers</a
                >
              </p>

              <p>
                <a href="#" class="text-decoration-none text-secondary"
                  >SQL Developers</a
                >
              </p>

              <p>
                <a href="#" class="text-decoration-none text-secondary"
                  >Researchers</a
                >
              </p>

              <p>
                <a href="#" class="text-decoration-none text-secondary"
                  >SEO Service Experts</a
                >
              </p>
            </div>

            <div class="mt-md-3 col-lg-4">
              <p>
                <a href="#" class="text-decoration-none text-secondary"
                  >Designers</a
                >
              </p>

              <p>
                <a href="#" class="text-decoration-none text-secondary"
                  >C# Programmers</a
                >
              </p>

              <p>
                <a href="#" class="text-decoration-none text-secondary"
                  >Platform Digitals</a
                >
              </p>

              <p>
                <a href="#" class="text-decoration-none text-secondary"
                  >Software Engineer</a
                >
              </p>

              <p>
                <a href="#" class="text-decoration-none text-secondary"
                  >WordPress Experts</a
                >
              </p>

              <p>
                <a href="#" class="text-decoration-none text-secondary"
                  >HTML Developers</a
                >
              </p>

              <p>
                <a href="#" class="text-decoration-none text-secondary"
                  >Graphic Designers</a
                >
              </p>

              <p>
                <a href="#" class="text-decoration-none text-secondary"
                  >ActionScript
                </a>
              </p>
            </div>
          </main>
        </div>
      </div>
    </main>
    <!-- End #main -->


    @include('frontend.00_dashboardusers.style.footer')