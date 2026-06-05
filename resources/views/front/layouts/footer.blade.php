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
          <li><a href="{{ route('profile.orders') }}" class="text-muted text-decoration-none">Track Your Order</a></li>
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