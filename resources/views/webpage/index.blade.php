@extends('layouts.app2')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">The world's leading services for sustainable supply chain</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Comprehensive cutting-edge solutions created to achieve sustainability in your supply chain. Powered by Inovasi Digital</h2>
          <!-- <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div> -->
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="bgwp.img" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about features" class="about features">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <!-- <h3>Who We Are</h3> -->
              <h2>InovasiDigital</h2>
              <p>
                Inovasi Digital Untuk Transformasi (INOVASIDIGITAL) is a privately-held tech solution company that was established in Indonesia with mission objective is to contribute to the development of fair and sustainable trade through technological innovations. The main pillars of our approach are Traceability, Innovation, Transparency, Accountability, Responsibility and Creativity. 
              </p>
              <!-- <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div> -->
              <div class="col-md-12" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>25+ years of experiences</h3>
                </div>
              </div>

              <div class="col-md-12" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>50+ Number of employees</h3>
                </div>
              </div>

              <div class="col-md-12" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>80+ Partners global palm oil global trader volume</h3>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('template/flexstart/assets/img/landing-image.jpg') }}" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <!-- <h2>Our Values</h2> -->
          <p>OUR STRENGTH</p>
        </header>

        <div class="row">

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="box" data-toggle="modal" data-target="#modalStrenght1">
              <a href="#"><img src="{{ asset('template/flexstart/assets/img/values-2.png') }}" class="img-fluid" alt=""></a>
              <!-- <img src="{{ asset('template/flexstart/assets/img/values-1.png') }}" class="img-fluid" alt=""> -->
              <h3>Worldwide agricultural facilities and food production plots</h3>
              <!-- <p>To trace and track supply chain risks and assess compliance with sustainability policies</p> -->
            </div>
            <!-- Modal -->
            <div class="modal fade feture-tabs tab-content" id="modalStrenght1" tabindex="-1" role="dialog" aria-labelledby="modalStrenght1Label" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="row tab-pane fade show active" id="tab1">
                      <div class="col-md-6">
                        <img src="{{ asset('template/flexstart/assets/img/values-1.png') }}" class="img-fluid" alt="">
                      </div>
                      <div class="col-md-6">
                        <h4>Worldwide agricultural facilities and food production plots</h4>
                        <p>Our database on agricultural production plots and facilities is well established in multiple sectors, in particular: palm oil and rubber. Its coverage includes industrial plantations, smallholder farms, and upstream facilities. Our service provides extensive global data coverage, encompassing information from diverse regions of Asia, Africa, and Latin America.</p>
                      </div>
                    </div>
                    <!-- End Tab 1 Content -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box" data-toggle="modal" data-target="#modalStrenght2">
              <a href="#"><img src="<?php echo asset('template/flexstart/assets/img/values-1.png'); ?>" class="img-fluid" alt=""></a>
              <h3>Greater volume of data</h3>
              <!-- <p>Bringing new ideas and productivity for revolutionary value creation</p> -->
            </div>
            <!-- Modal -->
            <div class="modal fade feture-tabs tab-content" id="modalStrenght2" tabindex="-1" role="dialog" aria-labelledby="modalStrenght2Label" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="row tab-pane fade show active" id="tab2">
                      <div class="col-md-6">
                        <img src="{{ asset('template/flexstart/assets/img/values-1.png') }}" class="img-fluid" alt="">
                      </div>
                      <div class="col-md-6">
                        <h4>Greater volume of data</h4>
                        <p>Drawing on over 25 years of experience, we distinguish ourselves as a leader in data richness, accountability, and credibility among service providers. Bolstered by state-of-the-art technology, our team of experts consistently updates our database, guaranteeing you access to the most precise and current information available. </p>
                      </div>
                    </div>
                    <!-- End Tab 1 Content -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box" data-toggle="modal" data-target="#modalStrenght3">
              <a href="#"><img src="{{ asset('template/flexstart/assets/img/values-3.png') }}" class="img-fluid" alt=""></a>
              <h3>Applicable for all types of regulation and sustainability compliance</h3>
              <!-- <p>Internalizing honesty and accessibility to foster open environment</p> -->
            </div>
            <!-- Modal -->
            <div class="modal fade feture-tabs tab-content" id="modalStrenght3" tabindex="-1" role="dialog" aria-labelledby="modalStrenght3Label" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="row tab-pane fade show active" id="tab3">
                      <div class="col-md-6">
                        <img src="{{ asset('template/flexstart/assets/img/values-1.png') }}" class="img-fluid" alt="">
                      </div>
                      <div class="col-md-6">
                        <h4>Applicable for all types of regulation and sustainability compliance</h4>
                        <p>The compliance of agriculture industry players with regulations and sustainable commitments is crucial to continue marketing the products. The data we provide is designed to support these requirements, enabling informed decision-making for your supply chain. </p>
                      </div>
                    </div>
                    <!-- End Tab 1 Content -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="800">
            <div class="box" data-toggle="modal" data-target="#modalStrenght4">
              <a href="#"><img src="{{ asset('template/flexstart/assets/img/values-1.png') }}" class="img-fluid" alt=""></a>
              <h3>Not only comprehensive data but also expert consultancy services</h3>
              <!-- <p>Credible, trusted, and be accountable for the things we did</p> -->
            </div>
            <!-- Modal -->
            <div class="modal fade feture-tabs tab-content" id="modalStrenght4" tabindex="-1" role="dialog" aria-labelledby="modalStrenght4Label" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="row tab-pane fade show active" id="tab4">
                      <div class="col-md-6">
                        <img src="{{ asset('template/flexstart/assets/img/values-1.png') }}" class="img-fluid" alt="">
                      </div>
                      <div class="col-md-6">
                        <h4>Not only comprehensive data but also expert consultancy services</h4>
                        <p>We meticulously ensure the validity of all the detailed data we provide to you. Beyond reporting data, we also offer consultancy services to assist you in making informed decisions for your supply chain. But we don’t just advise, we immersively collaborate with you.</p>
                      </div>
                    </div>
                    <!-- End Tab 1 Content -->
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->

    <!-- ======= Features Section ======= -->
    <section id="featuresaih counts" class="featuresaih counts">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <!-- <h2>Services</h2> -->
          <p>OUR GLOBAL DATASET</p>
        </header>

        <ul class="nav nav-tabs row gy-4 d-flex">

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <i class="ri-leaf-line color-cyan"></i>
              <h4>Palm Oil</h4>
            </a>
          </li><!-- End Tab 1 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link disabled" data-bs-toggle="tab" data-bs-target="#tab-2" aria-disabled="true">
              <i class="ri-leaf-line color-indigo"></i>
              <h4>Rubber</h4>
            </a>
          </li>
          <!-- End Tab 2 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link disabled" data-bs-toggle="tab" data-bs-target="#tab-3" aria-disabled="true">
              <i class="ri-leaf-line color-teal"></i>
              <h4>Soy</h4>
            </a>
          </li><!-- End Tab 3 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link disabled" data-bs-toggle="tab" data-bs-target="#tab-4" aria-disabled="true">
              <i class="ri-leaf-line color-red"></i>
              <h4>Cacao</h4>
            </a>
          </li><!-- End Tab 4 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
              <a class="nav-link disabled" data-bs-toggle="tab" data-bs-target="#tab-5" aria-disabled="true">
                  <i class="ri-leaf-line color-blue"></i>
                  <h4>Coffee</h4>
              </a>
          </li><!-- End Tab 5 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link disabled" data-bs-toggle="tab" data-bs-target="#tab-6" aria-disabled="true">
              <i class="ri-leaf-line color-orange"></i>
              <h4>Coconut</h4>
            </a>
          </li><!-- End Tab 6 Nav -->

        </ul>

        <div class="tab-content box shadow m-7 text-center">

          <div class="tab-pane active show" id="tab-1">
            <div class="row gy-4">
              <div class="col-lg-12 order-2 order-lg-1">
                <h3>Palm Oil</h3>
                <div class="row gy-4">

                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="bi bi-map color-cyan"></i>
                      <div>
                          <span data-purecounter-start="0" data-purecounter-end="29" data-purecounter-duration="1" class="purecounter"></span>
                          <p>Concessions(Ha)</p>
                      </div>
                      <div style="color:#0B198F; font-size: 30px; margin-top: -20px; margin-left:-25px;">M+</div>
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="ri-map-pin-5-fill color-cyan" ></i>
                      <div>
                        <span data-purecounter-start="0" data-purecounter-end="2391" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Mills</p>
                      </div>
                      <!-- <div style="color:#0B198F; font-size: 30px; margin-top: -20px;">K</div> -->
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="ri-git-merge-fill color-cyan" ></i>
                      <div>
                        <span data-purecounter-start="0" data-purecounter-end="1806" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Mills TTP</p>
                      </div>
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="bi bi-people color-cyan" ></i>
                      <div>
                        <span data-purecounter-start="0" data-purecounter-end="1621" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Corporate groups profile</p>
                      </div>
                    </div>
                  </div>
        
                </div>
              </div>
              <!-- <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('template/flexstart/assets/img/features-1.svg" alt="" class="img-fluid">
              </div> -->
            </div>
          </div><!-- End Tab Content 1 -->

          <div class="tab-pane" id="tab-2">
            <div class="row gy-4">
              <div class="col-lg-12 order-2 order-lg-1">
                <h3>Rubber</h3>
                <div class="row gy-4">

                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="bi bi-map color-indigo"></i>
                      <div>
                          <span data-purecounter-start="0" data-purecounter-end="29" data-purecounter-duration="1" class="purecounter"></span>
                          <p>Concessions(Ha)</p>
                      </div>
                      <div style="color:#0B198F; font-size: 30px; margin-top: -20px; margin-left:-25px;">Upcoming</div>
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="ri-map-pin-5-fill color-indigo" ></i>
                      <div>
                        <span data-purecounter-start="0" data-purecounter-end="2391" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Mills</p>
                      </div>
                      <!-- <div style="color:#0B198F; font-size: 30px; margin-top: -20px;">K</div> -->
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="ri-git-merge-fill color-indigo"></i>
                      <div>
                        <span data-purecounter-start="0" data-purecounter-end="1806" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Mills TTP</p>
                      </div>
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="bi bi-people color-indigo"></i>
                      <div>
                        <span data-purecounter-start="0" data-purecounter-end="1621" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Corporate groups profile</p>
                      </div>
                    </div>
                  </div>
        
                </div>
              </div>
              <!-- <div class="col-lg-4 order-1 order-lg-2 text-center">
              </div> -->
            </div>
          </div><!-- End Tab Content 2 -->

          <div class="tab-pane" id="tab-3">
            <div class="row gy-4">
              <div class="col-lg-12 order-2 order-lg-1">
                <h3>Soy</h3>
                <div class="row gy-4">

                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="bi bi-map color-orange"></i>
                      <div>
                          <span data-purecounter-start="0" data-purecounter-end="29" data-purecounter-duration="1" class="purecounter"></span>
                          <p>Concessions(Ha)</p>
                      </div>
                      <div style="color:#0B198F; font-size: 30px; margin-top: -20px; margin-left:-25px;">M+</div>
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="ri-map-pin-5-fill" style="color: #ee6c20;"></i>
                      <div>
                        <span data-purecounter-start="0" data-purecounter-end="2391" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Mills</p>
                      </div>
                      <!-- <div style="color:#0B198F; font-size: 30px; margin-top: -20px;">K</div> -->
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="ri-git-merge-fill" style="color: #15be56;"></i>
                      <div>
                        <span data-purecounter-start="0" data-purecounter-end="1806" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Mills TTP</p>
                      </div>
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="bi bi-people" style="color: #bb0852;"></i>
                      <div>
                        <span data-purecounter-start="0" data-purecounter-end="1621" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Corporate groups profile</p>
                      </div>
                    </div>
                  </div>
        
                </div>
              </div>
              <!-- <div class="col-lg-4 order-1 order-lg-2 text-center">
              </div> -->
            </div>
          </div><!-- End Tab Content 3 -->

          <div class="tab-pane" id="tab-4">
            <div class="row gy-4">
              <div class="col-lg-12 order-2 order-lg-1">
                <h3>Cacao</h3>
                <div class="row gy-4">

                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="bi bi-map color-orange"></i>
                      <div>
                          <span data-purecounter-start="0" data-purecounter-end="29" data-purecounter-duration="1" class="purecounter"></span>
                          <p>Concessions(Ha)</p>
                      </div>
                      <div style="color:#0B198F; font-size: 30px; margin-top: -20px; margin-left:-25px;">M+</div>
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="ri-map-pin-5-fill" style="color: #ee6c20;"></i>
                      <div>
                        <span data-purecounter-start="0" data-purecounter-end="2391" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Mills</p>
                      </div>
                      <!-- <div style="color:#0B198F; font-size: 30px; margin-top: -20px;">K</div> -->
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="ri-git-merge-fill" style="color: #15be56;"></i>
                      <div>
                        <span data-purecounter-start="0" data-purecounter-end="1806" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Mills TTP</p>
                      </div>
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="bi bi-people" style="color: #bb0852;"></i>
                      <div>
                        <span data-purecounter-start="0" data-purecounter-end="1621" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Corporate groups profile</p>
                      </div>
                    </div>
                  </div>
        
                </div>
              </div>
              <!-- <div class="col-lg-4 order-1 order-lg-2 text-center">
              </div> -->
            </div>
          </div><!-- End Tab Content 4 -->

          <div class="tab-pane" id="tab-5">
            <div class="row gy-4">
              <div class="col-lg-12 order-2 order-lg-1">
                <h3>Coffee</h3>
                <div class="row gy-4">

                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="bi bi-map color-orange"></i>
                      <div>
                          <span data-purecounter-start="0" data-purecounter-end="29" data-purecounter-duration="1" class="purecounter"></span>
                          <p>Concessions(Ha)</p>
                      </div>
                      <div style="color:#0B198F; font-size: 30px; margin-top: -20px; margin-left:-25px;">M+</div>
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="ri-map-pin-5-fill" style="color: #ee6c20;"></i>
                      <div>
                        <span data-purecounter-start="0" data-purecounter-end="2391" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Mills</p>
                      </div>
                      <!-- <div style="color:#0B198F; font-size: 30px; margin-top: -20px;">K</div> -->
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="ri-git-merge-fill" style="color: #15be56;"></i>
                      <div>
                        <span data-purecounter-start="0" data-purecounter-end="1806" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Mills TTP</p>
                      </div>
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="bi bi-people" style="color: #bb0852;"></i>
                      <div>
                        <span data-purecounter-start="0" data-purecounter-end="1621" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Corporate groups profile</p>
                      </div>
                    </div>
                  </div>
        
                </div>
              </div>
              <!-- <div class="col-lg-4 order-1 order-lg-2 text-center">
              </div> -->
            </div>
          </div><!-- End Tab Content 5 -->

          <div class="tab-pane" id="tab-6">
            <div class="row gy-4">
              <div class="col-lg-12 order-2 order-lg-1">
                <h3>Rubber</h3>
                <div class="row gy-4">

                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="bi bi-map color-orange"></i>
                      <div>
                          <span data-purecounter-start="0" data-purecounter-end="29" data-purecounter-duration="1" class="purecounter"></span>
                          <p>Concessions(Ha)</p>
                      </div>
                      <div style="color:#0B198F; font-size: 30px; margin-top: -20px; margin-left:-25px;">M+</div>
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="ri-map-pin-5-fill" style="color: #ee6c20;"></i>
                      <div>
                        <span data-purecounter-start="0" data-purecounter-end="2391" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Mills</p>
                      </div>
                      <!-- <div style="color:#0B198F; font-size: 30px; margin-top: -20px;">K</div> -->
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="ri-git-merge-fill" style="color: #15be56;"></i>
                      <div>
                        <span data-purecounter-start="0" data-purecounter-end="1806" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Mills TTP</p>
                      </div>
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                      <i class="bi bi-people" style="color: #bb0852;"></i>
                      <div>
                        <span data-purecounter-start="0" data-purecounter-end="1621" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Corporate groups profile</p>
                      </div>
                    </div>
                  </div>
        
                </div>
              </div>
              <!-- <div class="col-lg-4 order-1 order-lg-2 text-center">
              </div> -->
            </div>
          </div><!-- End Tab Content 6 -->

        </div>

      </div>
    </section><!-- End Features Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <!-- <h2>Our Clients</h2> -->
    <p>OUR CLIENTS</p>
  </header>

  <div class="clients-slider swiper">
    <div class="swiper-wrapper align-items-center">
      <div class="swiper-slide"><img src="template/flexstart/assets/img/logo/logo-partners/unilever.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="template/flexstart/assets/img/logo/logo-partners/musim-mas.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="template/flexstart/assets/img/logo/logo-partners/neste.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="template/flexstart/assets/img/logo/logo-partners/png.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="template/flexstart/assets/img/logo/logo-partners/aak.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="template/flexstart/assets/img/logo/logo-partners/wilmar.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="template/flexstart/assets/img/logo/logo-partners/aep.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="template/flexstart/assets/img/logo/logo-partners/apical.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="template/flexstart/assets/img/logo/logo-partners/adm.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="template/flexstart/assets/img/logo/logo-partners/barry-callebaut.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="template/flexstart/assets/img/logo/logo-partners/bumitama.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="template/flexstart/assets/img/logo/logo-partners/bunge.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="template/flexstart/assets/img/logo/logo-partners/canopy-watch.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="template/flexstart/assets/img/logo/logo-partners/cargil.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="template/flexstart/assets/img/logo/logo-partners/colgate.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="template/flexstart/assets/img/logo/logo-partners/fuji.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="template/flexstart/assets/img/logo/logo-partners/jiangsu-hsintai.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="template/flexstart/assets/img/logo/logo-partners/klk.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="template/flexstart/assets/img/logo/logo-partners/ldc.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="template/flexstart/assets/img/logo/logo-partners/kpn.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="template/flexstart/assets/img/logo/logo-partners/mars.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="template/flexstart/assets/img/logo/logo-partners/sime-darby.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="template/flexstart/assets/img/logo/logo-partners/sipef.png" class="img-fluid" alt=""></div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>

</section><!-- End Clients Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features">

<div class="container" data-aos="fade-up">

  <!-- Feature Tabs -->
  <div class="row feture-tabs" data-aos="fade-up">
    <div class="col-lg-12">
      <h3>REPUTABLE OUR CLIENTS</h3>

      <!-- Tabs -->
      <ul class="nav nav-pills mb-3">
        <li>
          <a class="nav-link active" data-bs-toggle="pill" href="#tab1"><img src="template/flexstart/assets/img/logo/logo-partners/unilever.png" style="width: 50px; height: auto;" alt=""></a>

        </li>
        <li>
          <a class="nav-link" data-bs-toggle="pill" href="#tab2"><img src="template/flexstart/assets/img/logo/logo-partners/png.png" style="width: 50px; height: auto;" alt=""></a>
        </li>
        <li>
          <a class="nav-link" data-bs-toggle="pill" href="#tab2"><img src="template/flexstart/assets/img/logo/logo-partners/wilmar.png" style="width: 50px; height: auto;" alt=""></a>
        </li>
      </ul><!-- End Tabs -->

      <!-- Tab Content -->
      <div class="tab-content">

        <div class="tab-pane fade show active" id="tab1">
          <div class="row">
            <div class="col-lg-6">
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Merek Global Terkemuka</h4>
              </div>
              <p>Sebagai salah satu perusahaan konsumen terkemuka di dunia, Unilever dikenal atas portofolio mereknya yang melibatkan jutaan konsumen di seluruh dunia.</p>
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Komitmen Terhadap Keberlanjutan</h4>
              </div>
              <p>Unilever telah menetapkan standar tinggi dalam keberlanjutan bisnis. Mereka terlibat dalam inisiatif-inisiatif hijau dan berkelanjutan, memperlihatkan tanggung jawab sosial dan lingkungan.</p>
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Inovasi Produk yang Mendunia</h4>
              </div>
              <p>Sebagai perusahaan yang terus mendorong batas inovasi produk, Unilever sering kali memimpin tren industri dan menciptakan solusi yang memenuhi kebutuhan konsumen modern.</p>
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Kemitraan Strategis</h4>
              </div>
              <p>Kolaborasi Unilever dengan mitra bisnisnya menciptakan kemitraan strategis yang kuat. Ini mencerminkan kepercayaan dan keberhasilan dalam membangun hubungan kerja sama yang saling menguntungkan.</p>
            </div>
            <div class="col-lg-6">
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Pengakuan dan Penghargaan</h4>
              </div>
              <p>Unilever sering kali diakui dengan berbagai penghargaan dan sertifikasi di berbagai bidang, termasuk keberlanjutan, inovasi produk, dan tanggung jawab sosial perusahaan.</p>
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Kontribusi Positif pada Masyarakat</h4>
              </div>
              <p>Unilever tidak hanya berfokus pada profitabilitas, tetapi juga pada dampak positifnya pada masyarakat. Program-program sosial dan filantropi mereka mencerminkan komitmen terhadap keberlanjutan sosial.</p>
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Jangkauan Global dan Diversifikasi Bisnis</h4>
              </div>
              <p>Unilever memiliki kehadiran global yang kuat dengan berbagai lini bisnis. Diversifikasi ini menunjukkan kemampuan perusahaan untuk beradaptasi dan berkembang di berbagai pasar.</p>
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Kepercayaan Pelanggan</h4>
              </div>
              <p>Sebagai pemimpin dalam industri konsumen, Unilever menikmati tingkat kepercayaan yang tinggi dari pelanggan di seluruh dunia. Mereka dikenal karena kualitas produk dan layanan mereka.</p>
            
            </div>
          </div>
          
          
        </div><!-- End Tab 1 Content -->

        <div class="tab-pane fade show" id="tab2">
          <div class="d-flex align-items-center mb-2">
            <i class="bi bi-check2"></i>
            <h4>Reputasi poin 1</h4>
          </div>
          <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
          <div class="d-flex align-items-center mb-2">
            <i class="bi bi-check2"></i>
            <h4>Reputasi poin 2</h4>
          </div>
          <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
        </div><!-- End Tab 2 Content -->

        <div class="tab-pane fade show" id="tab3">
          <div class="d-flex align-items-center mb-2">
            <i class="bi bi-check2"></i>
            <h4>Reputasi poin 1</h4>
          </div>
          <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
          <div class="d-flex align-items-center mb-2">
            <i class="bi bi-check2"></i>
            <h4>Reputasi poin 2</h4>
          </div>
          <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
        </div><!-- End Tab 3 Content -->

      </div>

    </div>

  </div><!-- End Feature Tabs -->

</div>

</section><!-- End Features Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts" hidden>
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <!-- <h2>Services</h2> -->
          <p>OUR GLOBAL DATASET</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Groups</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Mills</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>TTP</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Company Profile</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>A108 Adam Street,<br>New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section> -->
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top footer-newsletter">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="/template/flexstart/assets/img/logo/logo-id.png" alt="">
              <span>INOVASIDIGITAL</span>
            </a>
            <p>Digital Innovation For Sustainable Agriculture Commodities</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6 footer-links">
            <h4>Terms and Conditions</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#" target="_blank">Terms & Conditions</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://docs.google.com/document/d/1u-j8Mp3RrM7hZCrI1C21S4lcnaqCjNLuWEDE_a2zv4o/edit#heading=h.gjdgxs" target="_blank">Privacy Policy</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://docs.google.com/document/d/1VsJuefzPdY-bM5LZKR-ffzx-egB31VBgmttQvq4jmUc/edit" target="_blank">Disclaimer</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://docs.google.com/document/d/17-JvhiyFHr6cmEN768mW5oV1r8VESJBiiXIpIzMfQ4U/edit?usp=drive_link" target="_blank">Cookies</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Jl. Anggrek No. 6, South Pontianak <br>
              Pontianak City<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 251 837 1219<br>
              <strong>Phone:</strong> Inovasi Digital<br>
              <strong>Email:</strong> communication@inovasidigital.asia<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>InovasiDigital, 2024</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection