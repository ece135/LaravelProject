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
            <ul class="navbar-nav justify-content-center align-items-center w-100 mb-2 mb-lg-0">
              <li class="nav-item dropdown px-2">
                <a class="nav-link text-uppercase text-dark" href="#" >Home</a>
              </li>
              <li class="nav-item dropdown px-2">
                <a class="nav-link text-uppercase text-dark" href="#" >Shop</a>
              </li>
              <li class="nav-item dropdown px-2">
                <a class="nav-link text-uppercase text-dark" href="#" >Blog</a>
              </li>
              <li class="nav-item dropdown px-2">
                <a class="nav-link text-uppercase text-dark" href="#" >Pages</a>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link text-uppercase text-dark" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-auto">
        <ul class="list-unstyled d-flex m-0 align-items-center gap-3">
          <li>
            <a href="#" class="text-uppercase text-dark text-decoration-none" style="font-weight: 500; font-size: 14px;">Wishlist (0)</a>
          </li>
          <li>
            <a href="#" class="text-uppercase text-dark text-decoration-none" style="font-weight: 500; font-size: 14px;">Cart (0)</a>
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