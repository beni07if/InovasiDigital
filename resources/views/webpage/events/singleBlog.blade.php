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
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="template/flexstart/assets/img/events/event-eudr.png" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="#">Navigating EUDR Requirements: Solutions for Effective Implementation</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#">12 Comments</a></li> -->
                </ul>
              </div>

              <div class="entry-content">
                <p>
                The EU Deforestation Regulation (EUDR) has been a prominent issue facing many operators across several key commodities who seek to trade them into and out of the European Union (EU). Palm oil is one such commodity, and the EUDR aims to stop deforestation-related commodities from entering supply chains linked to operators in the EU. On 20th November 2023, Inovasi Digital and MosaiX held an event titled “Navigating EUDR Requirements: Solutions for Effective Implementation” at Black Pond Tavern, in Jakarta. It was hosted by Inovasi Digital and attracted over 60 participants from various companies and organizations concerned with addressing the challenges associated with EUDR implementation.

                </p>
                <div class="read-more">
                  <a href="#">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <!-- <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div> -->
              <!-- End sidebar search formn-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="template/flexstart/assets/img/blog/blog-recent-1.jpg" alt="">
                  <h4><a href="#">Navigating EUDR Requirements: Solutions for Effective Implementation</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2023</time>
                </div>

                <!-- <div class="post-item clearfix">
                  <img src="template/flexstart/assets/img/blog/blog-recent-2.jpg" alt="">
                  <h4><a href="blog-single.html">Navigating EUDR Requirements: Solutions for Effective Implementation</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2023</time>
                </div>

                <div class="post-item clearfix">
                  <img src="template/flexstart/assets/img/blog/blog-recent-3.jpg" alt="">
                  <h4><a href="blog-single.html">Navigating EUDR Requirements: Solutions for Effective Implementation</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2023</time>
                </div> -->

              </div><!-- End sidebar recent posts-->

                <h3 class="sidebar-title">Categories</h3>
                <div class="sidebar-item categories">
                <ul>
                    <li><a href="#">Exhibition <span>(25)</span></a></li>
                    <li><a href="#">Inovation <span>(12)</span></a></li>
                </ul>
                </div><!-- End sidebar categories-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

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