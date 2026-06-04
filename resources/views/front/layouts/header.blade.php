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
          <li>
            <a href="{{ route('wishlist') }}" class="text-uppercase text-dark text-decoration-none {{ request()->routeIs('wishlist') ? 'fw-bold' : '' }}" style="font-weight: 500; font-size: 14px;">Wishlist (0)</a>
          </li>
          <li>
            <a href="{{ route('cart') }}" class="text-uppercase text-dark text-decoration-none {{ request()->routeIs('cart') ? 'fw-bold' : '' }}" style="font-weight: 500; font-size: 14px;">Cart (0)</a>
          </li>
          <li>
            <a href="#" class="text-dark">
              <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#search"></use></svg>
            </a>
          </li>
        </ul>
      </div>

    </div>
  </div>
</nav>