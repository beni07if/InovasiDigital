<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ route('index')}}#hero" class="logo d-flex align-items-center">
        <img src="{{ asset('template/flexstart/assets/img/logo/logo-id.png') }}" alt="">
          <span class="header-new">INOVASI DIGITAL</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class=" active" href="{{ route('index')}}#hero">Home</a></li>
          <li><a class="" href="{{route('about')}}">About</a></li>
          <!-- <li><a class="" href="#services">Services</a></li>
          <li><a class="" href="#portfolio">Portfolio</a></li>
          <li><a class="" href="#team">Team</a></li> -->
          <!-- <li><a href="blog.html">Blog</a></li> -->
          <li><a class="" href="{{route('solution')}}">Solutions</a></li>
          <li class="dropdown"><a href="#"><span>Solutions</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Agriplot</a></li>
              <li><a href="#">Due Dilligence System</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                </ul>
              </li> -->
              <li><a href="#">SGMP</a></li>
              <li><a href="#">Traceability</a></li>
              <li><a href="#">Corporate Profile</a></li>
              <li><a href="#">Mineralplot</a></li>
              <li><a href="#">RS Forensic Intelligence</a></li>
              <li><a href="#">Extended Helpdesk</a></li>
            </ul>
          </li>
          <li><a class="" href="{{route('event')}}">Events & Highlights</a></li>
          <li><a class="" href="{{route('career')}}">Career</a></li>
          <!-- <li><a class="" href="#contact">Contact</a></li> -->
          <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>