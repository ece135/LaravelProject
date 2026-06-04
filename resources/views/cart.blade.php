<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title', $title ?? 'FashionHub')</title>
    <meta name="keywords" content="@yield('keywords', '')">
    <meta name="description" content="@yield('description', '')">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Icon&family=Jost:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}">
</head>
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
                <a class="nav-link text-uppercase text-dark {{ request()->is('/') ? 'fw-bold border-bottom border-dark border-2 pb-1' : '' }}" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item dropdown px-2">
                <a class="nav-link text-uppercase text-dark {{ request()->routeIs('shop') ? 'fw-bold border-bottom border-dark border-2 pb-1' : '' }}" href="{{ route('shop') }}">Shop</a>
              </li>
              <li class="nav-item dropdown px-2">
                <a class="nav-link text-uppercase text-dark {{ request()->routeIs('about') ? 'fw-bold border-bottom border-dark border-2 pb-1' : '' }}" href="{{ route('about') }}">About Us</a>
              </li>
    
              <li class="nav-item px-2">
                <a class="nav-link text-uppercase text-dark {{ request()->routeIs('contact') ? 'fw-bold border-bottom border-dark border-2 pb-1' : '' }}" href="{{ route('contact') }}">Contact</a>
              </li>
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
<div class="container py-5" style="min-height: 60vh;">
    
    <div class="text-center mb-5 pt-4">
        <h1 class="display-4 text-uppercase" style="font-weight: 700; letter-spacing: 2px;">Shopping Cart</h1>
    </div>

    <div class="row g-5">
        <div class="col-lg-8">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead class="text-uppercase" style="font-size: 12px; letter-spacing: 1px;">
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($cartProducts as $product)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" style="width: 80px; height: 100px; object-fit: cover;">
                                    <div class="ms-3">
                                        <h6 class="text-uppercase mb-0" style="font-size: 14px; font-weight: 600;">{{ $product->title }}</h6>
                                        <small class="text-muted">Color: Black</small>
                                    </div>
                                </div>
                            </td>
                            
                            <td>${{ number_format($product->price, 2) }}</td>
                            
                            <td>
                                <input type="number" class="form-control rounded-0 text-center" value="1" min="1" style="width: 70px;">
                            </td>
                            
                            <td>${{ number_format($product->price, 2) }}</td>
                            
                            <td>
                                <a href="#" class="text-dark text-decoration-none h5">&times;</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a href="{{ route('shop') }}" class="btn btn-outline-dark rounded-0 text-uppercase mt-3 px-4 py-2" style="font-size: 13px; letter-spacing: 1px;">&larr; Continue Shopping</a>
        </div>

        <div class="col-lg-4">
            <div class="card rounded-0 border-dark p-4">
                <h5 class="text-uppercase mb-4" style="font-weight: 600; letter-spacing: 1px;">Order Summary</h5>
                <div class="d-flex justify-content-between mb-3 text-muted">
                    <span>Subtotal</span>
                    <span>$400.00</span>
                </div>
                <div class="d-flex justify-content-between mb-3 text-muted">
                    <span>Shipping</span>
                    <span>Free</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between mb-4">
                    <strong class="text-uppercase">Total</strong>
                    <strong>$400.00</strong>
                </div>
                <button class="btn btn-dark rounded-0 text-uppercase w-100 py-3" style="letter-spacing: 1px;">Proceed to Checkout</button>
            </div>
        </div>
    </div>

</div>

<footer class="py-5" style="background-color: #fcfcfc; border-top: 1px solid #eaeaea;">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-3 col-md-6 mb-4">
        <img src="{{ asset('front/images/fashionhub.png') }}" alt="FashionHub Logo" class="mb-3" style="width: 150px;">
        <p class="text-muted" style="font-size: 14px; line-height: 1.6;">
          Elevating your everyday style with premium quality fashion and timeless accessories. Designed for the modern trendsetter.
        </p>
        <div class="social-links mt-3">
          <a href="#" class="text-dark me-3"><svg width="20" height="20"><use xlink:href="#facebook"></use></svg></a>
          <a href="#" class="text-dark me-3"><svg width="20" height="20"><use xlink:href="#twitter"></use></svg></a>
          <a href="#" class="text-dark me-3"><svg width="20" height="20"><use xlink:href="#instagram"></use></svg></a>
          <a href="#" class="text-dark me-3"><svg width="20" height="20"><use xlink:href="#youtube"></use></svg></a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <h5 class="text-uppercase mb-4" style="font-weight: 600; font-size: 16px;">Quick Links</h5>
        <ul class="list-unstyled" style="line-height: 2;">
          <li><a href="{{ url('/') }}" class="text-muted text-decoration-none">Home</a></li>
          <li><a href="{{ route('about') }}" class="text-muted text-decoration-none">About Us</a></li>
          <li><a href="{{ route('shop') }}" class="text-muted text-decoration-none">Shop</a></li>
          <li><a href="{{ route('home') }}#categories-section" class="text-muted text-decoration-none">Categories</a></li>
          <li><a href="{{ route('contact') }}" class="text-muted text-decoration-none">Contact</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <h5 class="text-uppercase mb-4" style="font-weight: 600; font-size: 16px;">Help & Info</h5>
        <ul class="list-unstyled" style="line-height: 2;">
          <li><a href="#" class="text-muted text-decoration-none">Track Your Order</a></li>
          <li><a href="#" class="text-muted text-decoration-none">Returns + Exchanges</a></li>
          <li><a href="#" class="text-muted text-decoration-none">Shipping + Delivery</a></li>
          <li><a href="#" class="text-muted text-decoration-none">FAQs</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <h5 class="text-uppercase mb-4" style="font-weight: 600; font-size: 16px;">Contact Us</h5>
        <p class="text-muted mb-2" style="font-size: 14px;">Do you have any questions or suggestions?</p>
        <p class="mb-4"><a href="mailto:info@fashionhub.com" class="text-dark text-decoration-none" style="font-weight: 500;">info@fashionhub.com</a></p>
        <p class="text-muted mb-2" style="font-size: 14px;">Do you need support? Give us a call.</p>
        <p class="mb-0" style="font-weight: 500;">+1 234 567 8900</p>
      </div>

    </div>
  </div>
</footer>

<div class="py-3" style="background-color: #f1f1f1;">
  <div class="container">
    <div class="row align-items-center">
      
      <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
        <span class="text-muted" style="font-size: 13px;">Secure Payments: <strong>Visa, MasterCard, PayPal</strong></span>
      </div>
      
      <div class="col-md-6 text-center text-md-end">
        <span class="text-muted" style="font-size: 13px;">
          &copy; {{ date('Y') }} FashionHub. All rights reserved. 
        </span>
      </div>

    </div>
  </div>
</div>