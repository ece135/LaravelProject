<nav class="navbar navbar-expand-lg bg-light text-uppercase fs-6 p-3 border-bottom align-items-center">
  <div class="container-fluid">
    <div class="row justify-content-between align-items-center w-100">

      <div class="col-auto">
        <a class="navbar-brand text-uppercase" href="{{ url('/') }}" style="font-weight: 800; font-size: 28px; letter-spacing: 2px; color: #111; text-decoration: none;">
          FASHIONHUB
        </a>
      </div>

      <div class="col-auto mx-auto">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          
          <div class="offcanvas-body">
            <ul class="list-unstyled d-flex m-0 align-items-center gap-4">
  
              <li>
                <a class="text-decoration-none text-uppercase text-dark {{ request()->is('/') ? 'fw-bold border-bottom border-dark border-2 pb-1' : '' }}" 
                  style="letter-spacing: 1px; font-size: 15px;" 
                  href="{{ url('/') }}">
                  Home
                </a>
              </li>

              <li>
                <a class="text-decoration-none text-uppercase text-dark {{ request()->is('shop') ? 'fw-bold border-bottom border-dark border-2 pb-1' : '' }}" 
                  style="letter-spacing: 1px; font-size: 15px;" 
                  href="{{ route('shop') }}">
                  Shop
                </a>
              </li>

              <li>
                <a class="text-decoration-none text-uppercase text-dark {{ request()->routeIs('about') ? 'fw-bold border-bottom border-dark border-2 pb-1' : '' }}" 
                  style="font-weight: 500; letter-spacing: 1px; font-size: 15px;" 
                  href="{{ route('about') }}">
                  About Us
                </a>
              </li>

              <li>
                <a class="text-decoration-none text-uppercase text-dark" 
                  style="font-weight: 500; letter-spacing: 1px; font-size: 15px;" 
                  href="#">
                  Contact
                </a>
              </li>
              @guest
              
              <li class="nav-item ms-lg-3">
                <a class="btn btn-dark text-white text-uppercase px-4 py-2" href="{{ route('login') }}" style="font-size: 12px; font-weight: 700; letter-spacing: 1px; border-radius: 0;">
                    Login
                </a>
              </li>
              <li class="nav-item ms-lg-3">
                  <a class="btn btn-outline-dark text-uppercase px-4 py-2" href="{{ route('register') }}" style="font-size: 12px; font-weight: 700; letter-spacing: 1px; border-radius: 0; border-width: 2px;">
                      Register
                  </a>
              </li>
              @else
              <li class="nav-item ms-lg-3 d-flex align-items-center">
                  <a href="{{ route('profile.edit') }}" 
                    class="me-3" 
                    style="display: inline-block; font-size: 12px; letter-spacing: 1px; font-weight: 600; background-color: #347474; color: white; padding: 10px 15px; border-radius: 5px; text-decoration: none; transition: all 0.3s ease-in-out;" 
                    onmouseover="this.style.backgroundColor='#ffa952';" 
                    onmouseout="this.style.backgroundColor='#347474';">
                      Hello, {{ Auth::user()->name }}
                  </a>
              </li>
              <li class="nav-item">
                  <a class="btn btn-danger text-white text-uppercase px-4 py-2" href="{{ route('logout') }}" 
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    style="font-size: 12px; font-weight: 700; letter-spacing: 1px; border-radius: 0;">
                      Logout
                  </a>
                  
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </li>
              @endguest
            </ul>
          </div>
        </div>
      </div>

      <div class="col-auto">
        <ul class="list-unstyled d-flex m-0 align-items-center gap-3">
          <li class="nav-item position-relative mx-2">
            <a href="{{ route('wishlist') }}" class="text-dark position-relative d-inline-block">
              
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
              </svg>

              @if(session('wishlist') && count(session('wishlist')) > 0)
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-dark text-white d-flex align-items-center justify-content-center fw-bold" 
                      style="font-size: 10px; width: 18px; height: 18px; p-0; border: 1px solid white;">
                  {{ count(session('wishlist')) }}
                </span>
              @endif
            </a>
          </li>
          <li class="nav-item position-relative mx-2">
            <a href="{{ route('cart') }}" class="text-dark position-relative d-inline-block">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="9" cy="21" r="1"></circle>
                <circle cx="20" cy="21" r="1"></circle>
                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
              </svg>

              @if(session('cart') && count(session('cart')) > 0)
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-dark text-white d-flex align-items-center justify-content-center fw-bold" 
                      style="font-size: 10px; width: 18px; height: 18px; p-0; border: 1px solid white;">
                  {{ count(session('cart')) }}
                </span>
              @endif
            </a>
          </li>
          <li>
            <a href="{{ route('shop') }}" class="text-dark">
              <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#search"></use></svg>
            </a>
          </li>
        </ul>
      </div>

    </div>
  </div>
</nav>