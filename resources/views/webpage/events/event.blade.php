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
    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>HIGHTLIGHT POST FROM OUR BLOG</p>
          <!-- <p>UPCOMING EVENTS</p> -->
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="template/flexstart/assets/img/events/event-eudr.png" class="img-fluid" alt=""></div>
              <span class="post-date">February 7, 2024</span>
              <h3 class="post-title">Ensuring the legality of Indonesian palm oil: the long road towards sustainable global palm oil production and consumption</h3>
              <!-- <a href="{{route('singleBlog')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="template/flexstart/assets/img/events/event-eudr.png" class="img-fluid" alt=""></div>
              <span class="post-date">February 15, 2024</span>
              <h3 class="post-title">Closing the gap of RSPO GHG Calculation</h3>
              <!-- <a href="{{route('singleBlog')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="template/flexstart/assets/img/events/event-eudr.png" class="img-fluid" alt=""></div>
              <span class="post-date">February 21, 2024</span>
              <h3 class="post-title">A New Template for SGMP</h3>
              <!-- <a href="{{route('singleBlog')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->

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
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li> -->
                </ul>
              </div>

              <div class="entry-content">
                <p>
                The EU Deforestation Regulation (EUDR) has been a prominent issue facing many operators across several key commodities who seek to trade them into and out of the European Union (EU). Palm oil is one such commodity, and the EUDR aims to stop deforestation-related commodities from entering supply chains linked to operators in the EU. On 20th November 2023, Inovasi Digital and MosaiX held an event titled “Navigating EUDR Requirements: Solutions for Effective Implementation” at Black Pond Tavern, in Jakarta. It was hosted by Inovasi Digital and attracted over 60 participants from various companies and organizations concerned with addressing the challenges associated with EUDR implementation.
                </p>
                <div class="read-more">
                  <a href="{{route('singleBlog')}}">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <!-- <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div> -->

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

              <h3 class="sidebar-title">Upcoming Events</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="template/flexstart/assets/img/blog/blog-recent-1.jpg" alt="">
                  <h4><a href="#">Ensuring the legality of Indonesian palm oil</a></h4>
                  <time datetime="2020-01-01">February 7, 2024</time>
                </div>
                <div class="post-item clearfix">
                  <img src="template/flexstart/assets/img/blog/blog-recent-1.jpg" alt="">
                  <h4><a href="#">Closing the gap of RSPO GHG Calculation</a></h4>
                  <time datetime="2020-01-01">February 15, 2024</time>
                </div>
                <div class="post-item clearfix">
                  <img src="template/flexstart/assets/img/blog/blog-recent-1.jpg" alt="">
                  <h4><a href="#">A New Template for SGMP</a></h4>
                  <time datetime="2020-01-01">February 21, 2024</time>
                </div>
              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="template/flexstart/assets/img/blog/blog-recent-1.jpg" alt="">
                  <h4><a href="#">Navigating EUDR Requirements: Solutions for Effective Implementation</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2023</time>
                </div>
              </div>

                <h3 class="sidebar-title">Categories</h3>
                <div class="sidebar-item categories">
                <ul>
                    <li><a href="#">Exhibition <span>(2)</span></a></li>
                    <li><a href="#">Inovation <span>(3)</span></a></li>
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