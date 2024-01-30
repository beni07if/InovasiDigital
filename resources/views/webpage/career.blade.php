@extends('layouts.app2')

@section('content')

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs bg-transparent">
      <div class="container">

        <!-- <ol>
          <li><a href="index.html">Home</a></li>
          <li>Blog</li>
        </ol>
        <h2>Blog</h2> -->

      </div>
    </section>
    <!-- End Breadcrumbs -->

  <main id="main">
     <!-- ======= Features Section ======= -->
     <section id="features" class="features">

        <div class="container" data-aos="fade-up">

        <header class="section-header">
            <!-- <h2>Features</h2> -->
            <p>CABE ACADEMY</p>
        </header>

        <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">
            <div class="col-lg-6">
            <h3>Career Advancement and Building Excellence (CABE) Academy</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3" hidden>
                <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Saepe fuga</a>
                </li>
                <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab2">Voluptates</a>
                </li>
                <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab3">Corrupti</a>
                </li>
            </ul>
            <!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

                <div class="tab-pane fade show active" id="tab1">
                <p>Selamat datang di CABE Academy, tempat di mana kami berkomitmen untuk mendukung perjalanan Anda dalam mencapai Peningkatan Karier dan Membangun Keunggulan yang berkelanjutan. Di CABE Academy, kami memahami pentingnya pengembangan pribadi dan profesional dalam mencapai kesuksesan karier.</p>
                <p>Kami menyediakan lingkungan belajar yang terfokus untuk membantu Anda merumuskan strategi karier yang efektif, membangun keahlian dan kepemimpinan yang diperlukan, serta memberikan dukungan yang dibutuhkan untuk mencapai tujuan karier Anda. Kami percaya bahwa pendidikan dan pengembangan pendekatan yang holistik akan membantu Anda menjadi pemimpin yang unggul dan berhasil di dunia kerja yang dinamis.</p>
                <p>Di CABE Academy, kami menawarkan berbagai program pelatihan, kursus, dan sumber daya edukatif untuk mendukung Peningkatan Karier dan Membangun Keunggulan Anda. Kami menggabungkan pendekatan praktis dengan pemahaman mendalam tentang tren industri, memungkinkan Anda untuk beradaptasi dengan perubahan dan menjadi profesional yang selalu siap menghadapi tantangan masa depan.</p>
                </div><!-- End Tab 3 Content -->

            </div>

            </div>

            <div class="col-lg-6">
            <img src="template/flexstart/assets/img/bgwp2.png" class="img-fluid" alt="">
            </div>

            <!-- Top Selling -->
            <div class="section dashboard col-12">
              <div class="card top-selling overflow-auto">

                <div class="card-body pb-0">

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Position</th>
                        <th scope="col">Division</th>
                        <th scope="col">Location</th>
                        <th scope="col">Details</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>GIS Analyst</td>
                        <td>GIS</td>
                        <td>Bogor, Indonesia</td>
                        <td><a href="#"><span class="badge bg-info text-dark" data-toggle="modal" data-target="#modalSatu"><i class="bi bi-info-circle me-1"></i> Details</span></a></td>
                      </tr>
                      <tr>
                        <td>Desktop Researcher</td>
                        <td>Database</td>
                        <td>Pontianak, Indonesia</td>
                        <td><a href="#"><span class="badge bg-info text-dark" data-toggle="modal" data-target="#modalDua"><i class="bi bi-info-circle me-1"></i> Details</span></a></td>
                      </tr>
                      <tr>
                        <td>Digital Marketing</td>
                        <td>Marketing</td>
                        <td>Bogor, Indonesia</td>
                        <td><a href="#"><span class="badge bg-info text-dark" data-toggle="modal" data-target="#modalTiga"><i class="bi bi-info-circle me-1"></i> Details</span></a></td>
                      </tr>
                    </tbody>
                    <div class="modal fade feture-tabs tab-content" id="modalSatu" tabindex="-1" role="dialog" aria-labelledby="modalSatuLabel" aria-hidden="true">
                      <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                          <!-- <div class="modal-header">
                            <h5 class="modal-title" id="modalSatuLabel">Modal title</h5>
                          </div> -->
                          <div class="modal-body">
                            <div class="tab-pane fade show active" id="tab1">
                              <h4>A tech-enabled and measurable agriculture commodities dataset</h4>
                              <div class="d-flex align-items-center mb-2">
                                <!-- <i class="bi bi-check2"></i> -->
                                <!-- <h4>Brief Description</h4> -->
                              </div>
                              <p>The palm oil market is now increasingly emphasizing and demanding more sustainable and less damaging industry practices, from planting to end-stage processing. Various deforestation mitigation regulations with risk assessments and due diligence duties are made to urge palm oil industry players to foster sustainable and responsible corporate behavior, such as EUDR, EUCSRD, EUCSDD, and other similar existing and emerging regulations.</p>
                              <p>These regulations demand several key requirements to be met, such as geolocation and plot of land, risk assessment, mitigation, and a due diligence system. Agriplot was established to accommodate all these needs by combining technology with in-house analytics and on-the-ground insights. All aspects of the product are a complete package that can be used by companies to fulfill various directive needs that must be adhered to.</p>
                              <div class="d-flex align-items-center mb-2">
                                <!-- <i class="bi bi-check2"></i> -->
                                <h4>What will you get</h4>
                              </div>
                              <ul>
                                <li>Oil palm facilities location</li>
                                <li>Global high-res oil palm</li>
                                <li>Global OP supplier legal plot</li>
                                <li>Global historical deforestation cases </li>
                                <li>Social grievance cases</li>
                                <li>National permanent forest data layers & land registration</li>
                                <li>Supply chain information</li>
                              </ul>
                            </div><!-- End Tab 1 Content -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade feture-tabs tab-content" id="modalDua" tabindex="-1" role="dialog" aria-labelledby="modalDuaLabel" aria-hidden="true">
                      <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                          <!-- <div class="modal-header">
                            <h5 class="modal-title" id="modalDuaLabel">Modal title</h5>
                          </div> -->
                          <div class="modal-body">
                            <div class="tab-pane fade show active" id="tab1">
                              <h4>A tech-enabled and measurable agriculture commodities dataset</h4>
                              <div class="d-flex align-items-center mb-2">
                                <!-- <i class="bi bi-check2"></i> -->
                                <!-- <h4>Brief Description</h4> -->
                              </div>
                              <p>The palm oil market is now increasingly emphasizing and demanding more sustainable and less damaging industry practices, from planting to end-stage processing. Various deforestation mitigation regulations with risk assessments and due diligence duties are made to urge palm oil industry players to foster sustainable and responsible corporate behavior, such as EUDR, EUCSRD, EUCSDD, and other similar existing and emerging regulations.</p>
                              <p>These regulations demand several key requirements to be met, such as geolocation and plot of land, risk assessment, mitigation, and a due diligence system. Agriplot was established to accommodate all these needs by combining technology with in-house analytics and on-the-ground insights. All aspects of the product are a complete package that can be used by companies to fulfill various directive needs that must be adhered to.</p>
                              <div class="d-flex align-items-center mb-2">
                                <!-- <i class="bi bi-check2"></i> -->
                                <h4>What will you get</h4>
                              </div>
                              <ul>
                                <li>Oil palm facilities location</li>
                                <li>Global high-res oil palm</li>
                                <li>Global OP supplier legal plot</li>
                                <li>Global historical deforestation cases </li>
                                <li>Social grievance cases</li>
                                <li>National permanent forest data layers & land registration</li>
                                <li>Supply chain information</li>
                              </ul>
                            </div><!-- End Tab 1 Content -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade feture-tabs tab-content" id="modalTiga" tabindex="-1" role="dialog" aria-labelledby="modalTigaLabel" aria-hidden="true">
                      <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                          <!-- <div class="modal-header">
                            <h5 class="modal-title" id="modalTigaLabel">Modal title</h5>
                          </div> -->
                          <div class="modal-body">
                            <div class="tab-pane fade show active" id="tab1">
                              <h4>A tech-enabled and measurable agriculture commodities dataset</h4>
                              <div class="d-flex align-items-center mb-2">
                                <!-- <i class="bi bi-check2"></i> -->
                                <!-- <h4>Brief Description</h4> -->
                              </div>
                              <p>The palm oil market is now increasingly emphasizing and demanding more sustainable and less damaging industry practices, from planting to end-stage processing. Various deforestation mitigation regulations with risk assessments and due diligence duties are made to urge palm oil industry players to foster sustainable and responsible corporate behavior, such as EUDR, EUCSRD, EUCSDD, and other similar existing and emerging regulations.</p>
                              <p>These regulations demand several key requirements to be met, such as geolocation and plot of land, risk assessment, mitigation, and a due diligence system. Agriplot was established to accommodate all these needs by combining technology with in-house analytics and on-the-ground insights. All aspects of the product are a complete package that can be used by companies to fulfill various directive needs that must be adhered to.</p>
                              <div class="d-flex align-items-center mb-2">
                                <!-- <i class="bi bi-check2"></i> -->
                                <h4>What will you get</h4>
                              </div>
                              <ul>
                                <li>Oil palm facilities location</li>
                                <li>Global high-res oil palm</li>
                                <li>Global OP supplier legal plot</li>
                                <li>Global historical deforestation cases </li>
                                <li>Social grievance cases</li>
                                <li>National permanent forest data layers & land registration</li>
                                <li>Supply chain information</li>
                              </ul>
                            </div><!-- End Tab 1 Content -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

        </div><!-- End Feature Tabs -->

        </div>

        </section><!-- End Features Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>InovasiDigital</span></strong>. All Rights Reserved
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