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

    <main id="company" class="mt-5">
      <section class="container">
        <div class="section-title">
          <h2 style="color:green; ">Perusahaan Kami</h2>
        </div>

        <div class="container-fluid">
          <div class="row">
            {{-- <div class="col-xl-3 d-none d-xl-flex"> --}}
              {{-- <div class="sidebar w-100">
                <!-- icon filter -->
                <h3 class="h6 mb-3 fw-semibold d-flex align-items-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="20px"
                    height="12px"
                  >
                    <path
                      fill-rule="evenodd"
                      fill=""
                      d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"
                    ></path>
                  </svg>
                  <span class="ms-2">Filter Company</span>
                </h3>
                <form>
                  <div class="mb-3">
                    <label class="form-label">Search</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Search..."
                    />
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Company Type </label>
                    <select class="form-select">
                      <option value="">Select a category</option>
                      <option value="1">Category 1</option>
                      <option value="2">Category 2</option>
                      <option value="3">Category 3</option>
                    </select>
                  </div>
                  <a href="#" class="btn btn-primary w-100 rounded-pill">
                    Search
                  </a>
                </form>
              </div> --}}
            {{-- </div> --}}
            <div class="col-xl-12">
              {{-- <button
                class="btn btn-outline-secondary w-100 d-xl-none mb-3"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#sidebar"
              >
                Filter
              </button> --}}

              <div class="row">
                <div class="col-md-6">
                    <a href="/perusahaandetails">
                    <div class="card company-item mb-3">
                      <div class="card-body">
                        <div class="d-flex mb-4">
                          <img
                            src="https://images.glints.com/unsafe/60x0/glints-dashboard.s3.amazonaws.com/company-logo/fcb7bcd1efd0b9eb8fa2e836bafc17a0.jpg"
                            class="company-logo"
                            alt=""
                          />
                          <div class="ms-3">
                            <p style="color: green;" class="company-title"><strong>PT. Haznia Bina Virofarm</strong></p>
                            <p style="color: black;" class="company-location text-muted">
                              Bandung, Jawa Barat, Indonesia
                            </p>
                          </div>
                        </div>
                        <div class="text-muted">
                            <p class="company-category">
                              <i class="bx bxs-buildings text-muted"></i>
                              <span>Ruang Produksi Pupuk Organik</span>
                            </p>
                            <p class="company-job">
                              <i class="bx bxs-user text-muted"></i>
                              <span>10 Karyawan</span>
                            </p>
                            <p class="company-capacity">
                              <i class="bx bxs-package text-muted"></i>
                              <span>Kapasitas Produksi: 500 Ton/Bulan</span>
                            </p>
                            <p class="company-equipment">
                              <i class="fas fa-hammer text-muted"></i>
                              <span>Peralatan Modern Terkini</span>
                            </p>
                            <p class="company-quality">
                              <i class="bx bxs-check-circle text-muted"></i>
                              <span>Standar Kualitas Tinggi</span>
                            </p>
                          </div>
                          
                      </div>
                    </div>
                  </a>
                </div>

                
              </div>
            </div>
          </div>
        </div>

        <div
          class="offcanvas offcanvas-start"
          tabindex="-1"
          id="sidebar"
          aria-labelledby="sidebarLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarLabel">Filter</h5>
            <button
              type="button"
              class="btn-close text-reset"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <!-- icon filter -->
            <h3 class="h6 mb-3 fw-semibold d-flex align-items-center">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="20px"
                height="12px"
              >
                <path
                  fill-rule="evenodd"
                  fill=""
                  d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"
                ></path>
              </svg>
              <span class="ms-2">Filter Company</span>
            </h3>
            <form>
              <div class="mb-3">
                <label class="form-label">Search</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search..."
                />
              </div>
              <div class="mb-3">
                <label class="form-label">Company Type </label>
                <select class="form-select">
                  <option value="">Select a category</option>
                  <option value="1">Category 1</option>
                  <option value="2">Category 2</option>
                  <option value="3">Category 3</option>
                </select>
              </div>
              <a href="#" class="btn btn-primary w-100 rounded-pill">
                Search
              </a>
            </form>
          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->

    @include('frontend.00_dashboardusers.style.footer')