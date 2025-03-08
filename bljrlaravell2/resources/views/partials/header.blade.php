<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
       
      @auth
        <h1 class="sitename">{{Auth()->user()->name}}</h1>

      @endauth

      @guest
        <h1 class>Logo</h1>
      @endguest

      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/genres">Genre</a></li>
          <li><a href="/books">Book</a></li>

          @guest
          <li><a href="/register">Register</a></li>
          @endguest
          
          @auth
          <li><a href="/profile">Profile</a></li>
          @endauth
          </ul>
          
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
          
          <!-- <li><a href="/register">Registrasi</a></li> -->
            <!-- <ul>
              <li><a href="team.html">Team</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
            </ul> -->
          <!-- </li> -->
          <!-- <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact</a></li> -->
       

      <!-- <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div> -->
    <div>
      @guest

      <a href="/login" class="btn btn-primary mr-2">Login</a>
      <a href="/register" class="btn btn-info">Register</a>
      @endguest

      @auth
        <form action="/logout" method="POST">
          @csrf
          <input type="submit" value="Logout" class="btn btn-danger">
        </form>
      @endauth  
    </div>
    
    </div>
  </header>