<header id="header" class="header fixed-top">

  <div class="topbar d-flex align-items-center dark-background">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center">
          <a href="mailto:contact@example.com">contact@example.com</a>
        </i>
        <i class="bi bi-phone d-flex align-items-center ms-4">
          <span>+1 5589 55488 55</span>
        </i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#!" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#!" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#!" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#!" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </div>

  <div class="branding d-flex align-items-center">

    <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="{{ route('dashboard') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('img/logo.webp') }}" alt="">
        <h1 class="sitename">Pet Care</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li>
            <a href="{{ route('dashboard') }}"
               class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
              Home
            </a>
          </li>
          <li>
            <a href="{{ route('patients.index') }}"
               class="{{ request()->routeIs('patients.*') ? 'active' : '' }}">
              Pasien
            </a>
          </li>

        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>

  </div>

</header>