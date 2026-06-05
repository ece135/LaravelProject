@extends('front.layouts.master')
@section('content')
 <section id="billboard" class="bg-light py-5">
    <div class="container">
      <div class="row justify-content-center">
        <h1 class="section-title text-center mt-4" data-aos="fade-up">New Collections</h1>
        <div class="col-md-6 text-center" data-aos="fade-up" data-aos-delay="300">
          <p>Refresh your style with our newest handpicked accessories and apparel. Designed to make a statement</p>
        </div>
      </div>
      <div class="row">
        <div class="swiper main-swiper py-4" >
          <div class="swiper-wrapper d-flex border-animation-left">
            @foreach($recentProducts as $product)
            <div class="swiper-slide">
              <div class="product-item image-zoom-effect link-effect">
                <div class="image-holder">
                  <a href="{{ route('product.detail', $product->id) }}" class="text-decoration-none text-dark d-block">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" class="product-image img-fluid">
                  </a>
                  <a href="{{ route('product.detail', $product->id) }}" class="btn-icon btn-wishlist">
                      <svg width="24" height="24" viewBox="0 0 24 24">
                          <use xlink:href="#heart"></use>
                      </svg>
                  </a>
                </div>
                <div class="product-content">
                    <h5 class="text-uppercase fs-5 mt-3">
                        <a href="{{ route('product.detail', $product->id) }}">{{ $product->title }}</a>
                    </h5>
                  
                  <a href="{{ route('product.detail', $product->id) }}" class="text-decoration-none" data-after="Add to cart"><span>${{ $product->price }}</span></a>
                </div>
              </div>
            </div>
            @endforeach
           
            
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="icon-arrow icon-arrow-left"><svg width="50" height="50" viewBox="0 0 24 24">
            <use xlink:href="#arrow-left"></use>
          </svg></div>
        <div class="icon-arrow icon-arrow-right"><svg width="50" height="50" viewBox="0 0 24 24">
            <use xlink:href="#arrow-right"></use>
          </svg></div>
      </div>
    </div>
  </section>

  <section class="features py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="0">
          <div class="py-5">
            <svg width="38" height="38" viewBox="0 0 24 24">
              <use xlink:href="#calendar"></use>
            </svg>
            <h4 class="element-title text-capitalize my-3">Book An Appointment</h4>
            <p>Schedule a personalized shopping experience with our styling experts, either in-store or virtually.</p>
          </div>
        </div>
        <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="300">
          <div class="py-5">
            <svg width="38" height="38" viewBox="0 0 24 24">
              <use xlink:href="#shopping-bag"></use>
            </svg>
            <h4 class="element-title text-capitalize my-3">Pick up in store</h4>
            <p>Shop online and collect your order at your nearest boutique with our complimentary click-and-collect service.</p>
          </div>
        </div>
        <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="600">
          <div class="py-5">
            <svg width="38" height="38" viewBox="0 0 24 24">
              <use xlink:href="#gift"></use>
            </svg>
            <h4 class="element-title text-capitalize my-3">Special packaging</h4>
            <p>Every order is beautifully wrapped in our signature packaging, making it a perfect gift for yourself or your loved ones.</p>
          </div>
        </div>
        <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="900">
          <div class="py-5">
            <svg width="38" height="38" viewBox="0 0 24 24">
              <use xlink:href="#arrow-cycle"></use>
            </svg>
            <h4 class="element-title text-capitalize my-3">free global returns</h4>
            <p>Enjoy hassle-free and complimentary returns worldwide within 30 days of delivery.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="categories overflow-hidden" style="padding: 50px 0;">
    <div class="container">
      <div id="categories-section" class="section-header text-center mb-5">
        <h2 class="display-6 text-uppercase" style="font-weight: 600;">Shop By Category</h2>
        <p class="text-muted">Browse our collection by your favorite categories</p>
      </div>
      <div  class="open-up" data-aos="zoom-out">
        <div  class="row">
          
          @foreach($categories as $category)
          <div class="col-md-3 col-sm-6 mb-4">
            <a href="{{ route('category', $category->id) }}" class="btn btn-primary w-100 py-3 text-uppercase" style="letter-spacing: 1px; font-weight: 600;">
              {{ $category->title }}
            </a>
          </div>
          @endforeach
          
        </div>
      </div>
    </div>
  </section>

  <section class="collection bg-light position-relative py-5">
    <div class="container">
      <div class="row">
        <div class="title-xlarge text-uppercase txt-fx domino">Collection</div>
        <div class="collection-item d-flex flex-wrap my-5">
          <div class="col-md-6 column-container">
            <div class="image-holder">
              <img src="{{ asset('front/images/about-banner.jpg') }}" alt="collection" class="product-image img-fluid" object-fit="cover" style="height: 100%; width: 100%;">
            </div>
          </div>
          <div class="col-md-6 column-container bg-white">
            <div class="collection-content p-5 m-0 m-md-5">
              <h3 class="element-title text-uppercase">THE SIGNATURE COLLECTION</h3>
              <p>Elevate your wardrobe with our most exclusive pieces. Crafted for those who appreciate fine details, premium materials, and timeless design. Discover the collection that defines modern elegance.</p>
              <a href="{{ route('shop') }}" class="btn btn-dark text-uppercase mt-3">Shop Collection</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  

  <section class="testimonials py-5 bg-light">
    <div class="section-header text-center mt-5">
      <h3 class="section-title">WE LOVE GOOD COMPLIMENT</h3>
      <div class="text-muted text-uppercase" style="font-size: 11px; letter-spacing: 1px;">
            Hear from our curated community
      </div>
    </div>
    <div class="row g-4">
        
      <div class="col-md-4">
          <div class="card h-100 border-dark rounded-0 p-4 text-center" style="background-color: #fbfbfb;">
              <div class="mb-3 text-dark">⭐⭐⭐⭐⭐</div>
              <p class="card-text text-muted mb-4" style="font-size: 14px; line-height: 1.6; font-style: italic;">
                  "Absolutely in love with my new necklace! The craftsmanship is unmatched, and I get compliments every time I wear it."
              </p>
              <h6 class="text-uppercase mb-0" style="font-size: 12px; font-weight: 600; letter-spacing: 1px;">
                  – Sarah T.
              </h6>
          </div>
      </div>

      <div class="col-md-4">
          <div class="card h-100 border-dark rounded-0 p-4 text-center" style="background-color: #fbfbfb;">
              <div class="mb-3 text-dark">⭐⭐⭐⭐⭐</div>
              <p class="card-text text-muted mb-4" style="font-size: 14px; line-height: 1.6; font-style: italic;">
                  "The packaging was as elegant as the ring itself. A truly premium shopping experience from start to finish."
              </p>
              <h6 class="text-uppercase mb-0" style="font-size: 12px; font-weight: 600; letter-spacing: 1px;">
                  – Emily R.
              </h6>
          </div>
      </div>

      <div class="col-md-4">
          <div class="card h-100 border-dark rounded-0 p-4 text-center" style="background-color: #fbfbfb;">
              <div class="mb-3 text-dark">⭐⭐⭐⭐⭐</div>
              <p class="card-text text-muted mb-4" style="font-size: 14px; line-height: 1.6; font-style: italic;">
                  "Fast shipping and the quality of the fabric is incredible. The minimal aesthetic is perfect for my daily wardrobe."
              </p>
              <h6 class="text-uppercase mb-0" style="font-size: 12px; font-weight: 600; letter-spacing: 1px;">
                  – Amanda K.
              </h6>
          </div>
      </div>
    </div>
    <div class="swiper testimonial-swiper overflow-hidden my-5">
      <div class="swiper-wrapper ">
        
      </div>
    </div>
    <div class="testimonial-swiper-pagination d-flex justify-content-center mb-5"></div>
  </section>

   
 <section class="blog py-5">
  <div class="container">
    
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="display-6 text-uppercase" style="font-weight: 600; letter-spacing: 1px;">Style Guides</h2>
      <a href="{{ route('shop') }}" class="text-decoration-none text-uppercase text-dark" style="font-weight: 600; font-size: 14px; letter-spacing: 1px;">View Lookbook</a>
    </div>

    <div class="row">
      
      <div class="col-md-4 mb-4">
        <div class="blog-post">
          <div class="image-holder mb-3">
            <img src="{{ asset('front/images/post-image1.jpg') }}" alt="Style Guide" class="img-fluid">
          </div>
          <div class="post-content">
            <span class="text-muted text-uppercase d-block mb-2" style="font-size: 12px; letter-spacing: 1px;">Craftsmanship</span>
            <h4 class="fs-5 text-uppercase mb-3" style="font-weight: 600; line-height: 1.4;">
              <a href="{{ route('shop') }}" class="text-decoration-none text-dark">How to Care for Your Premium Leather Pieces</a>
            </h4>
            <p class="text-muted" style="font-size: 14px; line-height: 1.6;">
              Discover the essential tips and tricks to maintain the texture, shine, and longevity of your luxury leather accessories for years to come.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="blog-post">
          <div class="image-holder mb-3">
            <img src="{{ asset('front/images/post-image3.jpg') }}" alt="Style Guide" class="img-fluid">
          </div>
          <div class="post-content">
            <span class="text-muted text-uppercase d-block mb-2" style="font-size: 12px; letter-spacing: 1px;">Styling Tips</span>
            <h4 class="fs-5 text-uppercase mb-3" style="font-weight: 600; line-height: 1.4;">
              <a href="{{ route('shop') }}" class="text-decoration-none text-dark">The Art of Styling Statement Accessories</a>
            </h4>
            <p class="text-muted" style="font-size: 14px; line-height: 1.6;">
              Learn how to effortlessly elevate a simple everyday outfit into a striking fashion statement with the right choice of minimalist jewelry and bags.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="blog-post">
          <div class="image-holder mb-3">
            <img src="{{ asset('front/images/post-image6.jpg') }}" alt="Style Guide" class="img-fluid">
          </div>
          <div class="post-content">
            <span class="text-muted text-uppercase d-block mb-2" style="font-size: 12px; letter-spacing: 1px;">Gifting Guide</span>
            <h4 class="fs-5 text-uppercase mb-3" style="font-weight: 600; line-height: 1.4;">
              <a href="{{ route('shop') }}" class="text-decoration-none text-dark">The Ultimate Guide to Choosing the Perfect Gift</a>
            </h4>
            <p class="text-muted" style="font-size: 14px; line-height: 1.6;">
              From classic timeless designs to modern bold aesthetics, explore our curated selection to find a deeply meaningful gift for your loved ones.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

  <section class="instagram position-relative">
    <div class="d-flex justify-content-center w-100 position-absolute bottom-0 z-1">
      <a href="{{ route('login') }}" class="btn btn-dark px-5">Log In</a>
    </div>
    <div class="row g-0">
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="{{route('login')}}" target="_blank">
            <img src="{{ asset('front/images/insta-item1.jpg') }}" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="{{route('login')}}" target="_blank">
            <img src="{{ asset('front/images/insta-item2.jpg') }}" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="{{route('login')}}" target="_blank">
            <img src="{{ asset('front/images/insta-item3.jpg') }}" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="{{route('login')}}" target="_blank">
            <img src="{{ asset('front/images/insta-item4.jpg') }}" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="{{route('login')}}" target="_blank">
            <img src="{{ asset('front/images/insta-item5.jpg') }}" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="{{route('login')}}" target="_blank">
            <img src="{{ asset('front/images/insta-item6.jpg') }}" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection