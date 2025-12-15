<?php
include "header.php";
?>


  <!-- Hero Section with Carousel -->
  <section class="hero-section">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active" style="background-color: #FFC778;">
                    <div class="container hero-slide">
                        <div class="row align-items-center">
                            <div class="col-lg-6 text-center text-lg-start">
                                <p class="hero-lead">Two-Wheeler Rentals</p>
                                <h1 class="hero-title">Bike Rental Company<br> North Bengal</h1>
                                <div class="review mb-3">
                                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start">
                                        <span class="fw-bold me-2">4.9 Google Review</span>
                                        <div class="stars">
                                            <i class="bi bi-star-fill text-primary"></i>
                                            <i class="bi bi-star-fill text-primary"></i>
                                            <i class="bi bi-star-fill text-primary"></i>
                                            <i class="bi bi-star-fill text-primary"></i>
                                            <i class="bi bi-star-half text-primary"></i>
                                        </div>
                                    </div>
                                    <p class="mb-0 text-center text-lg-start">NO 1 Bike company siliguri</p>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center position-relative">
                                <img src="images/bike.png" class="img-fluid hero-image protected" alt="Bike">
                                <span class="hero-badge" style="background-color: #FF3886;">BOOK<br>NOW</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-color: #EBEFAE;">
                    <div class="container hero-slide">
                        <div class="row align-items-center">
                            <div class="col-lg-6 text-center text-lg-start">
                                <p class="hero-lead">Rent Premium Bikes</p>
                                <h1 class="hero-title">Explore Darjeeling<br> With Comfort</h1>
                                <div class="review mb-3">
                                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start">
                                        <span class="fw-bold me-2">4.9 Google Review</span>
                                        <div class="stars">
                                            <i class="bi bi-star-fill text-primary"></i>
                                            <i class="bi bi-star-fill text-primary"></i>
                                            <i class="bi bi-star-fill text-primary"></i>
                                            <i class="bi bi-star-fill text-primary"></i>
                                            <i class="bi bi-star-half text-primary"></i>
                                        </div>
                                    </div>
                                    <p class="mb-0 text-center text-lg-start">NO 1 Bike company siliguri</p>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center position-relative">
                                <img src="images/bike.png" class="img-fluid hero-image protected" alt="Bike">
                                <span class="hero-badge" style="background-color: #FFB648;">BOOK<br>NOW</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-color: #f87f87;">
                    <div class="container hero-slide">
                        <div class="row align-items-center">
                            <div class="col-lg-6 text-center text-lg-start">
                                <p class="hero-lead">Explore Sikkim</p>
                                <h1 class="hero-title">Adventure Awaits<br> Rent a Ride</h1>
                                <div class="review mb-3">
                                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start">
                                        <span class="fw-bold me-2">4.9 Google Review</span>
                                        <div class="stars">
                                            <i class="bi bi-star-fill text-primary"></i>
                                            <i class="bi bi-star-fill text-primary"></i>
                                            <i class="bi bi-star-fill text-primary"></i>
                                            <i class="bi bi-star-fill text-primary"></i>
                                            <i class="bi bi-star-half text-primary"></i>
                                        </div>
                                    </div>
                                    <p class="mb-0 text-center text-lg-start">NO 1 Bike company siliguri</p>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center position-relative">
                                <img src="images/bike.png" class="img-fluid hero-image protected" alt="Bike">
                                <span class="hero-badge" style="background-color: #FFB648;">BOOK<br>NOW</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Moved hero-search-box outside carousel-inner to make it fixed -->
        <div class="hero-search-box">
            <label class="fw-bold mb-2">Search your next ride</label>
            <div class="row g-2">
                <div class="col-12 col-sm-4">
                    <input type="text" class="form-control hero-input" placeholder="Shimla" />
                </div>
                <div class="col-6 col-sm-3">
                    <input type="date" class="form-control hero-input" />
                </div>
                <div class="col-6 col-sm-3">
                    <input type="date" class="form-control hero-input" />
                </div>
                <div class="col-12 col-sm-2 d-grid">
                    <button class="btn hero-btn"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </section>

  <!-- Features -->
  <section class="container-fluid py-5">
    <div class="row g-2 justify-content-center text-start">

      <!-- Feature Box -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-2">
        <div class="feature-box d-flex align-items-center gap-3 h-100">
          <div class="feature-icon"><i class="bi bi-shield-check"></i></div>
          <small class="fw-semibold">Govt. Compliant</small>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-2">
        <div class="feature-box d-flex align-items-center gap-3 h-100">
          <div class="feature-icon"><i class="bi bi-truck"></i></div>
          <small class="fw-semibold">Doorstep Delivery</small>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-2">
        <div class="feature-box d-flex align-items-center gap-3 h-100">
          <div class="feature-icon"><i class="bi bi-credit-card"></i></div>
          <small class="fw-semibold">Secure Payments</small>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-2">
        <div class="feature-box d-flex align-items-center gap-3 h-100">
          <div class="feature-icon"><i class="bi bi-tools"></i></div>
          <small class="fw-semibold">Maintenance Support</small>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-2">
        <div class="feature-box d-flex align-items-center gap-3 h-100">
          <div class="feature-icon"><i class="bi bi-emoji-smile"></i></div>
          <small class="fw-semibold">Sanitized Vehicles</small>
        </div>
      </div>

    </div>
  </section>



  <!-- Product Section -->
    <section class="hp-product-section py-5 bg-light">
        <div class="container">
            <!-- Filter Tabs -->
            <ul class="nav nav-tabs justify-content-center mb-4 border-0 hp-filter-tabs" id="hpVehicleTabs">
                <li class="nav-item">
                    <button class="nav-link text-dark active hp-filter-tabs-btn" data-filter="all">Show All</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link text-dark hp-filter-tabs-btn" data-filter="bike">Bikes</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link text-dark hp-filter-tabs-btn" data-filter="scooter">Scooters</button>
                </li>
            </ul>

            <!-- Product Grid -->
            <div class="row">
                <div class="col-12 hp-product-grid-container" id="hpProductGridContainer">
                    <div class="row g-4" id="hpProductGrid">
                        <!-- Product Card 1 -->
                        <div class="col-sm-6 col-md-4 col-lg-3 hp-product-card scooter" data-name="Maestro Edge 125" data-price="9009" data-image="images/scooty1.png">
                            <div class="hp-gradient-outline p-1 h-100">
                                <div class="card p-3 h-100">
                                    <img src="images/scooty1.png" alt="Maestro Edge 125" class="mb-3">
                                    <p class="text-uppercase small fw-semibold mb-0" style="color:#FF6500;">Hero</p>
                                    <h6 class="mb-1 product-name">Maestro Edge 125</h6>
                                    <p class="fw-bold text-dark product-price">₹9,009</p>
                                    <p class="text-muted small mb-2"><i class="bi bi-patch-check"></i> Zero Deposit Fee</p>
                                    <button class="btn rounded-pill mb-3 add-to-cart" data-bs-toggle="offcanvas" data-bs-target="#cartSidebar">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 2 -->
                        <div class="col-sm-6 col-md-4 col-lg-3 hp-product-card bike" data-name="Yamaha FZX" data-price="10999" data-image="images/bike.png">
                            <div class="hp-gradient-outline p-1 h-100">
                                <div class="card p-3 h-100">
                                    <img src="images/bike.png" alt="Yamaha FZX" class="mb-3">
                                    <p class="text-uppercase small fw-semibold mb-0" style="color:#FF6500;">Yamaha</p>
                                    <h6 class="mb-1">FZX</h6>
                                    <p class="fw-bold text-dark product-price">₹10,999</p>
                                    <p class="text-muted small mb-2"><i class="bi bi-patch-check"></i> Zero Deposit Fee</p>
                                    <button class="btn rounded-pill mb-3 add-to-cart" data-bs-toggle="offcanvas" data-bs-target="#cartSidebar">Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 3 -->
                        <div class="col-sm-6 col-md-4 col-lg-3 hp-product-card scooter" data-name="Honda Activa 6G" data-price="8500" data-image="images/scooty2.png">
                            <div class="hp-gradient-outline p-1 h-100">
                                <div class="card p-3 h-100">
                                    <img src="images/scooty2.png" alt="Honda Activa 6G" class="mb-3">
                                    <p class="text-uppercase small fw-semibold mb-0" style="color:#FF6500;">Honda</p>
                                    <h6 class="mb-1">Activa 6G</h6>
                                    <p class="fw-bold text-dark product-price">₹8,500</p>
                                    <p class="text-muted small mb-2"><i class="bi bi-patch-check"></i> Zero Deposit Fee</p>
                                    <button class="btn rounded-pill mb-3 add-to-cart" data-bs-toggle="offcanvas" data-bs-target="#cartSidebar">Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 4 -->
                        <div class="col-sm-6 col-md-4 col-lg-3 hp-product-card bike" data-name="Bajaj Pulsar NS200" data-price="12500" data-image="images/bike.png">
                            <div class="hp-gradient-outline p-1 h-100">
                                <div class="card p-3 h-100">
                                    <img src="images/bike.png" alt="Bajaj Pulsar NS200" class="mb-3">
                                    <p class="text-uppercase small fw-semibold mb-0" style="color:#FF6500;">Bajaj</p>
                                    <h6 class="mb-1">Pulsar NS200</h6>
                                    <p class="fw-bold text-dark product-price">₹12,500</p>
                                    <p class="text-muted small mb-2"><i class="bi bi-patch-check"></i> Zero Deposit Fee</p>
                                    <button class="btn rounded-pill mb-3 add-to-cart" data-bs-toggle="offcanvas" data-bs-target="#cartSidebar">Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 5 -->
                        <div class="col-sm-6 col-md-4 col-lg-3 hp-product-card scooter" data-name="TVS Jupiter" data-price="8000" data-image="images/scooty1.png">
                            <div class="hp-gradient-outline p-1 h-100">
                                <div class="card p-3 h-100">
                                    <img src="images/scooty1.png" alt="TVS Jupiter" class="mb-3">
                                    <p class="text-uppercase small fw-semibold mb-0" style="color:#FF6500;">TVS</p>
                                    <h6 class="mb-1">Jupiter</h6>
                                    <p class="fw-bold text-dark product-price">₹8,000</p>
                                    <p class="text-muted small mb-2"><i class="bi bi-patch-check"></i> Zero Deposit Fee</p>
                                    <button class="btn rounded-pill mb-3 add-to-cart" data-bs-toggle="offcanvas" data-bs-target="#cartSidebar">Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 6 -->
                        <div class="col-sm-6 col-md-4 col-lg-3 hp-product-card bike" data-name="KTM Duke 200" data-price="15000" data-image="images/bike.png">
                            <div class="hp-gradient-outline p-1 h-100">
                                <div class="card p-3 h-100">
                                    <img src="images/bike.png" alt="KTM Duke 200" class="mb-3">
                                    <p class="text-uppercase small fw-semibold mb-0" style="color:#FF6500;">KTM</p>
                                    <h6 class="mb-1">Duke 200</h6>
                                    <p class="fw-bold text-dark product-price">₹15,000</p>
                                    <p class="text-muted small mb-2"><i class="bi bi-patch-check"></i> Zero Deposit Fee</p>
                                    <button class="btn rounded-pill mb-3 add-to-cart" data-bs-toggle="offcanvas" data-bs-target="#cartSidebar">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="search.html" class="btn btn-outline-dark rounded-pill px-4" id="hpShowMoreButton">Show More</a>
            </div>
        </div>
    </section>

    <!-- Cart Sidebar -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="cartSidebar" aria-labelledby="cartSidebarLabel">
        <div class="offcanvas-header border-bottom d-flex justify-content-between align-items-center">
            <h5 class="offcanvas-title" id="cartSidebarLabel">Your Cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column justify-content-between">
            <!-- Cart Items will be dynamically added here -->
            <div class="cart-items" id="cartItemsContainer">
                <!-- Message for an empty cart -->
                <p class="text-muted" id="emptyCartMessage">Your cart is empty.</p>
            </div>
            <!-- Cart Summary -->
            <div class="cart-summary border-top pt-3 mt-auto">
                <div class="d-flex justify-content-between fw-bold mb-2">
                    <span>Total:</span>
                    <span id="cartTotalDisplay">₹0.00</span>
                </div>
                <button class="btn btn-warning w-100">Checkout</button>
            </div>
        </div>
    </div>



  <!-- Why Choose Us -->
  <section class="container py-5">
    <h2 class="fw-bold mb-4 text-center text-lg-start">Why Choose Us</h2>
    <div class="row g-4 mb-4">
      <!-- Repeatable Why Cards -->
      <!-- ... -->
    </div>

    <div class="row g-3 justify-content-center mb-4">
      <div class="col-6 col-md-3">
        <div class="why-card h-100 text-center p-3" style="background-color: #FFF0E2;">
          <img src="images/Sanitisation.png" alt="Sanitisation" class="mb-2" />
          <p class="mb-0 fw-semibold">Internal & external<br><span style="color:#A5BFB4;">sanitisation</span></p>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="why-card h-100 text-center p-3" style="background-color: #E9BC2D;">
          <img src="images/Doorstep Delivery.png" alt="Doorstep Delivery" class="mb-2" />
          <p class="mb-0 fw-semibold">Contact-less<br><span style="color:#AC344F;">doorstep delivery</span></p>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="why-card h-100 text-center p-3" style="background-color: #FAF9C9;">
          <img src="images/Safety Practices.png" alt="Safety Practices" class="mb-2" />
          <p class="mb-0 fw-semibold">Safety & <span style="color:#BDBB40;">hygiene</span><br>best practices</p>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="why-card h-100 text-center p-3" style="background-color: #8D9D8B;">
          <img src="images/Resanitisation.png" alt="Resanitisation" class="mb-2" />
          <p class="mb-0 fw-semibold">Re-sanitisation<br><span style="color:#B8BAB5;">at doorstep</span></p>
        </div>
      </div>
    </div>

    <div class="why-banner p-2 d-flex flex-column flex-md-row align-items-center gap-3"
      style="background-color: #E9BC2D;">
      <div class="text-white flex-grow-1">
        <h3 class="fw-bold mb-2">Discover Freedom on the Road with <span class="highlight">GetGo Rentals!</span></h3>
        <p class="fst-italic mb-2" style="font-family: 'Dancing Script', cursive; font-size: 1.65rem;">your journey our
          wheels</p>
        <p class="small mb-0">Explore Goa and beyond with GetGo Rentals, offering a wide range of vehicles for your Goa
          adventure.</p>
      </div>
      <img src="images/Siliguri bake rental - Rent2Rider.png" class="img-fluid" style="max-width: 280px;"
        alt="banner car">
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="benefits-section">
        <div class="container">
            <div id="benefitsCarousel" class="carousel slide" data-bs-ride="carousel">
                

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="row align-items-center g-4">
                            <div class="col-lg-6 position-relative order-lg-1 order-2">
                                <div class="benefit-image-wrapper" style="background-color: #FFD2E0;">
                                    <img src="images/scooty1.png" alt="Affordable Pricing"
                                        class="img-fluid">
                                    <div class="benefit-badge badge-top-left">Available</div>
                                    <div class="benefit-badge badge-bottom-right">All Brands</div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-2 order-1">
                                <p class="text-theme fw-semibold mb-2">WHY CHOOSE US?</p>
                                <h2 class="fw-bold">Rent2Rider all brand bikes available.</h2>
                                <p class="lead">We provide all company bikes, like- Activa 110, Jupiter, Ntorq 125,
                                    Access 125, Avenger 220, Pulsar 220, Honda Horner 160, Pulsar 200 NS, Xpulse 200,
                                    Apache 200, RE Classic 350, RE Thunderbird 350, RE Classic 500, RE Himalayan 411,
                                    etc.</p>
                            </div>
                        </div>
                    </div>

                    

                    <div class="carousel-item">
                        <div class="row align-items-center g-4">
                            <div class="col-lg-6 position-relative order-lg-1 order-2">
                                <div class="benefit-image-wrapper" style="background-color:lightgoldenrodyellow;">
                                    <img src="images/RIGHT-Yamaha FZX-01.png" alt="Top Maintenance" class="img-fluid">
                                    <div class="benefit-badge badge-top-left">Free trip guide</div>
                                    <div class="benefit-badge badge-bottom-right">Enjoy</div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-2 order-1">
                                <p class="text-theme fw-semibold mb-2">WHY CHOOSE US?</p>
                                <h2 class="fw-bold">Free trip guide</h2>
                                <p class="lead">Free trip guidance is available for all customers. Aside from the
                                    obvious, such as which places to visit and where to begin your journey,
                                    If you get stuck somewhere in your journey, you may call us, and we will try to help
                                    you as much as possible.</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row align-items-center g-4">
                            <div class="col-lg-6 position-relative order-lg-1 order-2">
                                <div class="benefit-image-wrapper" style="background-color: #FFD2E0;">
                                    <img src="images/RIGHT-Pulsar 220-01.png" alt="Top Maintenance" class="img-fluid">
                                    <div class="benefit-badge badge-top-left">All Bikes</div>
                                    <div class="benefit-badge badge-bottom-right">New Condition</div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-2 order-1">
                                <p class="text-theme fw-semibold mb-2">WHY CHOOSE US?</p>
                                <h2 class="fw-bold">All bikes new condition</h2>
                                <p class="lead">Though we have provided the second-hand bikes, the conditions of the
                                    bikes are well maintained,
                                    and we are always making efforts to keep them as newly designed.</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row align-items-center g-4">
                            <div class="col-lg-6 position-relative order-lg-1 order-2">
                                <div class="benefit-image-wrapper" style="background-color:#FFC778;">
                                    <img src="images/scooty2.png" alt="Top Maintenance"
                                        class="img-fluid">
                                    <div class="benefit-badge badge-top-left">Your wallet's best friend</div>
                                    <div class="benefit-badge badge-bottom-right">Save more by offers</div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-2 order-1">
                                <p class="text-theme fw-semibold mb-2">WHY CHOOSE US?</p>
                                <h2 class="fw-bold">Low prices</h2>
                                <p class="lead">We offer bikes at significantly lower prices than others,
                                    making your excursion more affordable. One thing we can proudly say is that you will
                                    never be disappointed with us.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="benefits-carousel-indicators carousel-indicators">
                    <button type="button" data-bs-target="#benefitsCarousel" data-bs-slide-to="0"
                        class="active"></button>
                    <button type="button" data-bs-target="#benefitsCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#benefitsCarousel" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#benefitsCarousel" data-bs-slide-to="3"></button>
                </div>
            </div>
        </div>
    </section>

  <!-- Accessories Section -->
  <section class="accessories-section text-white">
    <div class="container">
      <h2 class="fw-bold mb-4 text-dark">Accessories</h2>
      <div class="accessory-box row g-4 align-items-center">
        <div class="col-lg-4">
          <h4 class="fw-bold text-dark">List of Accessories</h4>
          <p class="text-dark">You can make your selection when starting your ride</p>
          <a href="#" class="btn btn-warning text-dark"><i class="bi bi-arrow-right-circle"></i> Go To Others
            Accessories</a>
        </div>
        <div class="col-lg-8">
          <div class="d-flex flex-wrap justify-content-between gap-3 accessory-items">
            <div class="accessory-item text-center">
              <img src="images/RIGHT-Pulsar 220-01.png" alt="">
              <p class="fw-semibold mt-2 text-dark">Bike</p>
            </div>
            <div class="accessory-item text-center">
              <img src="images/scooty2.png" alt="">
              <p class="fw-semibold mt-2 text-dark">Scooty</p>
            </div>
            <div class="accessory-item text-center">
              <img src="images/bike.png" alt="">
              <p class="fw-semibold mt-2 text-dark">Rent</p>
            </div>
            <div class="accessory-item text-center">
              <img src="images/bike.png" alt="">
              <p class="fw-semibold mt-2 text-dark">Buy</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- About Us Section -->
  <section class="about-section container py-5">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        <h2 class="fw-bold">About us</h2>
        <p>We are one of the most well-known bike rental companies in Siliguri, offering high-quality two-wheelers for
          rent. We offer the greatest bike rental service in terms of convenience and comfort. Customers can select from
          a wide range of choice of exotic motorcycles, including the Himalayan 411, Honda Hornet 160, Classic 500,
          Xpulse 200, and Activa 110. The bikes are nicely maintained, and the staff is always there to take care of
          you.</p>
        <p>We have achieved the reputation of being one of the most trustworthy and dependable bike rental services in
          Siliguri due to our comfortable prices and special offers. So, what are you keeping out for? For a nice
          relaxing excursion, rent a bike and ride through the beautiful mountains.</p>
        <!-- <a href="#" class="text-decoration-none text-warning fw-semibold">Read more <i class="bi bi-arrow-right-short"></i></a> -->
      </div>
      <div class="col-lg-5 text-center">
        <img src="images/Rent2Rider in siliguri (2).png" class="img-fluid" alt="About Bike">
      </div>
    </div>
  </section>

  <!-- Bike Rent Guidelines -->
  <section class="bike-guideline-section" style="background-color: f9f9f9;">
    <div class="container text-left">
       <h3 class="fw-bold mb-4">Bike Rent Guidelines</h3>

      <div class="guideline-grid">
        <!-- Top Left -->
        <div class="guideline-item top-left">
          <h6 class="text-uppercase text-muted fw-bold mb-1">RENT TIMETABLE <span class="fw-bold fs-4 d-block text-gray">01</span></h6>
          <p class="mb-0">Rental hours are between 8:00 AM and 8:00 PM. Adjustments possible.</p>
        </div>

        <!-- Top Right -->
        <div class="guideline-item top-right">
          <h6 class="text-uppercase text-muted fw-bold mb-1">VEHICLE INSPECTION <span class="fw-bold fs-4 d-block text-gray">02</span></h6>
          <p class="mb-0">Inspect the vehicle before use. Preferably record a video before starting.</p>
        </div>

        <!-- Center Image -->
        <img src="images/b_design1.png" alt="Guideline" class="center-image" />

        <!-- Bottom Left -->
        <div class="guideline-item bottom-left">
          <h6 class="text-uppercase text-muted fw-bold mb-1">DAMAGES & CHARGES <span class="fw-bold fs-4 d-block text-gray">03</span></h6>
          <p class="mb-0">All damages—minor or major—must be compensated by the renter.</p>
        </div>

        <!-- Bottom Right -->
        <div class="guideline-item bottom-right">
          <h6 class="text-uppercase text-muted fw-bold mb-1">DOCUMENT <span class="fw-bold fs-4 d-block text-gray">04</span></h6>
          <p class="mb-0">Bring any original ID: AADHAR / PAN / PASSPORT / VOTER ID / Others.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Review Section -->
  <section class="review-section py-5">
    <div class="container">
      <div class="row align-items-center">

        <!-- Left Info -->
        <div class="col-lg-3 text-center text-lg-start mb-4 mb-lg-0">
          <img src="images/logo.png" alt="Rent 2 Rider" class="review-logo mb-2">
          <h6 class="fw-bold">Rent 2 Rider - bike rent in siliguri</h6>
          <div class="text-warning mb-1">
            ★★★★★
          </div>
          <p class="mb-2">749 Google reviews</p>
          <a href="#" class="btn btn-primary btn-sm">Write a review</a>
        </div>

        <!-- Review Cards Carousel -->
        <div class="col-lg-9">
          <div class="review-carousel d-flex overflow-auto  gap-3">

            <div class="row mb-4">

            <!-- Review Card -->
            <div class="review-card col-lg-4">
              <div class="d-flex align-items-center mb-2">
                <img src="https://randomuser.me/api/portraits/men/1.jpg" class="rounded-circle me-2" width="32"
                  height="32" alt="">
                <div>
                  <div class="fw-semibold">Souvik Paul</div>
                  <small class="text-muted">2025-06-09</small>
                </div>
              </div>
              <div class="text-warning mb-2">★★★★★</div>
              <p class="mb-0">Best in the town</p>
            </div>

            <!-- Review Card -->
            <div class="review-card col-lg-4">
              <div class="d-flex align-items-center mb-2">
                <div class="review-initial">N</div>
                <div>
                  <div class="fw-semibold">Nilima Mondal</div>
                  <small class="text-muted">2025-06-09</small>
                </div>
              </div>
              <div class="text-warning mb-2">★★★★★</div>
              <p class="mb-0">Have a wonderful service from Rent2Rider..bike to behaviour all are top notch.</p>
            </div>

            <!-- Review Card -->
            <div class="review-card col-lg-4">
              <div class="d-flex align-items-center mb-2">
                <div class="review-initial">A</div>
                <div>
                  <div class="fw-semibold">Ajay Dey</div>
                  <small class="text-muted">2025-06-08</small>
                </div>
              </div>
              <div class="text-warning mb-2">★★★★★</div>
              <p class="mb-0">Thanks for your excellent service. The staff and owner was too friendly...</p>
            </div>

            </div>
            

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Contact Information + Map -->
  <section class="contact-map-section py-5">
  <div class="container">
    <div class="row g-4 align-items-stretch">
      <!-- Contact Info Box -->
      <div class="col-lg-6">
        <div class="info-box p-4 rounded shadow-sm bg-white h-100">
          <h5 class="fw-bold text-center mb-4">SOME INFORMATION FOR YOU</h5>
          <div class="row gy-4">

            <div class="col-sm-6">
              <div class="mb-2"><i class="bi bi-clock-fill text-orange me-2"></i><strong>Opening & Close Time</strong>
              </div>
              <p class="mb-0">Monday to Sunday 08:00 AM to 08:00 PM open.</p>
            </div>

            <div class="col-sm-6">
              <div class="mb-2"><i class="bi bi-envelope-fill text-orange me-2"></i><strong>Contact Details</strong>
              </div>
              <p class="mb-1">Phone: +91 74775 00217</p>
              <p class="mb-1">Email: info@rent2rider.com</p>
              <p class="mb-0">Payment: UPI, Online Banking, Cash</p>
            </div>

            <div class="col-sm-6">
              <div class="mb-2"><i class="bi bi-geo-alt-fill text-orange me-2"></i><strong>Locations</strong></div>
              <p class="mb-0">Aurobindu Pally Main Road<br>Ward No 22, Siliguri - 734006,<br>West Bengal</p>
            </div>

            <div class="col-sm-6">
              <div class="mb-2"><i class="bi bi-geo-fill text-orange me-2"></i><strong>Services Area</strong></div>
              <span class="badge bg-warning text-dark me-1">Siliguri</span>
              <span class="badge bg-warning text-dark me-1">Darjeeling</span>
              <span class="badge bg-warning text-dark">Gangtok</span>
            </div>

          </div>

          <div class="text-center mt-3">
            <a href="#" class="text-dark me-2"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-dark me-2"><i class="bi bi-instagram"></i></a>
            <a href="#" class="text-dark me-2"><i class="bi bi-twitter"></i></a>
            <a href="#" class="text-dark me-2"><i class="bi bi-whatsapp"></i></a>
            <a href="#" class="text-dark"><i class="bi bi-envelope"></i></a>
          </div>
        </div>
      </div>

      <!-- Embedded Google Map -->
      <div class="col-lg-6">
        <div class="ratio ratio-4x3 rounded shadow-sm overflow-hidden h-100">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28762.00334440871!2d88.4266327!3d26.7108994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e441493e452f07%3A0x8048e6a099c1a897!2sRent%202%20Rider%20-%20bike%20rent%20in%20siliguri!5e0!3m2!1sen!2sin!4v1688391184514!5m2!1sen!2sin"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>


  <?php
        include "footer.php";
    ?>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // ======== PRODUCT FILTER (Main Products) ========
        const hpFilterButtons = document.querySelectorAll('.hp-filter-tabs-btn');
        const hpProducts = document.querySelectorAll('.hp-product-card');

        /**
         * Filters the product cards based on the selected category.
         * @param {string} filter - The filter category (e.g., 'bike', 'scooter', 'all').
         */
        function hpFilterProducts(filter) {
            hpProducts.forEach(card => {
                if (filter === 'all') {
                    card.classList.remove('d-none');
                } else {
                    // Toggles the d-none class based on whether the card has the filter class
                    card.classList.toggle('d-none', !card.classList.contains(filter));
                }
            });
        }

        // Add click listeners to filter buttons
        hpFilterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                hpFilterButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                hpFilterProducts(btn.getAttribute('data-filter'));
            });
        });

        // Initialize the filter to show all products
        hpFilterProducts('all');

        // ======== ADD TO CART & CART FUNCTIONALITY ========

        const cartItemsContainer = document.getElementById('cartItemsContainer');
        const cartTotalDisplay = document.getElementById('cartTotalDisplay');
        const emptyCartMessage = document.getElementById('emptyCartMessage');

        /**
         * Updates the total price displayed in the cart summary.
         */
        function updateCartTotal() {
            let total = 0;
            // Get all items in the cart
            const cartItems = cartItemsContainer.querySelectorAll('.cart-item');
            
            // Loop through each item to sum up their prices
            cartItems.forEach(item => {
                // Get the price from the data attribute, which is a clean number
                const price = parseFloat(item.dataset.price);
                if (!isNaN(price)) {
                    total += price;
                }
            });
            // Update the display with a formatted price
            cartTotalDisplay.textContent = `₹${total.toLocaleString('en-IN')}`;
        }

        /**
         * Adds a new item to the cart sidebar.
         * @param {object} product - An object containing product details (name, price, image).
         */
        function addItemToCart(product) {
            // Check if the "empty cart" message is present and remove it
            if (emptyCartMessage) {
                emptyCartMessage.remove();
            }

            // Create the new cart item element
            const newItem = document.createElement('div');
            // Add a class for styling and a data attribute for the price
            newItem.className = 'd-flex align-items-center mb-3 cart-item';
            newItem.dataset.price = product.price;

            // Set the inner HTML of the new item
            newItem.innerHTML = `
                <img src="${product.image}" alt="${product.name}" class="rounded me-3" style="width: 60px; height: 60px;" onerror="this.onerror=null;this.src='https://placehold.co/60x60/ff6600/ffffff?text=Image'">
                <div>
                    <h6 class="mb-0">${product.name}</h6>
                    <p class="text-muted small mb-0">₹${product.price.toLocaleString('en-IN')}</p>
                </div>
                <!-- Remove button with an icon -->
                <button type="button" class="btn btn-sm btn-outline-danger ms-auto remove-from-cart">
                    <i class="bi bi-x-circle"></i>
                </button>
            `;
            // Add the new item to the cart container
            cartItemsContainer.appendChild(newItem);
        }

        /**
         * Removes an item from the cart.
         * @param {HTMLElement} item - The HTML element of the item to remove.
         */
        function removeItemFromCart(item) {
            item.remove();
            updateCartTotal(); // Recalculate the total
            
            // If the cart is now empty, add the empty message back
            if (cartItemsContainer.children.length === 0) {
                const newEmptyMessage = document.createElement('p');
                newEmptyMessage.className = 'text-muted';
                newEmptyMessage.id = 'emptyCartMessage';
                newEmptyMessage.textContent = 'Your cart is empty.';
                cartItemsContainer.appendChild(newEmptyMessage);
            }
        }

        // Use event delegation on the product grid container
        document.getElementById('hpProductGrid').addEventListener('click', (event) => {
            const addToCartBtn = event.target.closest('.add-to-cart');
            if (addToCartBtn) {
                // Find the parent product card element
                const productCard = addToCartBtn.closest('.hp-product-card');
                
                // Get the product details from the card's data attributes
                const productName = productCard.dataset.name;
                const productPrice = productCard.dataset.price;
                const productImage = productCard.dataset.image;

                if (productName && productPrice && productImage) {
                    // Call the function to add the item to the cart
                    addItemToCart({
                        name: productName,
                        price: parseFloat(productPrice),
                        image: productImage
                    });
                    
                    // Update the cart total
                    updateCartTotal();
                }
            }
        });

        // Use event delegation on the cart items container for remove buttons
        cartItemsContainer.addEventListener('click', (event) => {
            const removeBtn = event.target.closest('.remove-from-cart');
            if (removeBtn) {
                // Find the parent item element and remove it
                const cartItem = removeBtn.closest('.cart-item');
                removeItemFromCart(cartItem);
            }
        });
    
</script>

</body>

</html>