<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Jewelry</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top shadow-sm bg-white">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand fw-bold" href="#">Jewelry</a>

    <div class="pills">
      <!-- Heart Icon with Badge -->
      <a href="#" class="me-3 d-lg-none position-relative">
        <i class="bi bi-heart fs-5"></i>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background-color: #e91e63;">
          2
          <span class="visually-hidden">unread messages</span>
        </span>
      </a>

      <!-- Cart Icon with Badge -->
      <a href="#" class="d-lg-none position-relative">
        <i class="bi bi-cart fs-5"></i>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background-color: #e91e63;">
          5
          <span class="visually-hidden">items in cart</span>
        </span>
      </a>
    </div>

    <!-- Search + Icons (visible only on tab and mobile) -->
    <form class="col-12 d-flex me-3 mt-2 ms-auto d-lg-none">
      <input class="form-control rounded-pill px-4" type="search" placeholder="Search" />
    </form>
    
    <!-- Category-scroll (visible only on tab and mobile) -->
      <!-- <div class="scrollmenu d-lg-none">
        <div class="category-item text-center me-3 flex-shrink-0">
            <img src="images/web_product_cat-1.webp" alt="Anklets" class="rounded-circle" style="width: 60px; height: 60px; object-fit: cover;">
            <p class="small mt-2 mb-0">Anklets</p>
          </div>

          <div class="category-item text-center me-3 flex-shrink-0">
            <img src="images/web_product_cat-1.webp" alt="Earrings" class="rounded-circle" style="width: 60px; height: 60px; object-fit: cover;">
            <p class="small mt-2 mb-0">Earrings</p>
          </div>

          <div class="category-item text-center me-3 flex-shrink-0">
            <img src="images/web_product_cat-1.webp" alt="Necklace" class="rounded-circle" style="width: 60px; height: 60px; object-fit: cover;">
            <p class="small mt-2 mb-0">Necklace</p>
          </div>

          <div class="category-item text-center me-3 flex-shrink-0">
            <img src="images/web_product_cat-1.webp" alt="Rings" class="rounded-circle" style="width: 60px; height: 60px; object-fit: cover;">
            <p class="small mt-2 mb-0">Rings</p>
          </div>

          <div class="category-item text-center me-3 flex-shrink-0">
            <img src="images/web_product_cat-1.webp" alt="Bracelets" class="rounded-circle" style="width: 60px; height: 60px; object-fit: cover;">
            <p class="small mt-2 mb-0">Bracelets</p>
          </div>
    </div> -->
 
    

    <div class="collapse navbar-collapse" id="nav">
      <!-- 🌐 Desktop Navigation (visible only on lg and up) -->
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 d-none d-lg-flex">
        <!-- Shop Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Shop</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Rings</a></li>
            <li><a class="dropdown-item" href="#">Necklaces</a></li>
            <li><a class="dropdown-item" href="#">Earrings</a></li>
            <li><a class="dropdown-item" href="#">Bracelets</a></li>
          </ul>
        </li>

        <!-- Collections Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Collections</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Festive Collection</a></li>
            <li><a class="dropdown-item" href="#">Everyday Wear</a></li>
            <li><a class="dropdown-item" href="#">Minimal Style</a></li>
          </ul>
        </li>

        <!-- About Us Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">About Us</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Our Story</a></li>
            <li><a class="dropdown-item" href="#">Sustainability</a></li>
            <li><a class="dropdown-item" href="#">Testimonials</a></li>
          </ul>
        </li>

        <!-- Blogs Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Blogs</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Styling Tips</a></li>
            <li><a class="dropdown-item" href="#">Behind the Scenes</a></li>
            <li><a class="dropdown-item" href="#">Jewelry Care</a></li>
          </ul>
        </li>
      </ul>

      <!-- Mobile/Tablet MENU & CATEGORIES Tabs (only for mobile/tablet) -->
      <div class="mobile-tab-container d-lg-none">
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="menu-tab" data-bs-toggle="tab" data-bs-target="#menu" type="button" role="tab">MENU</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="category-tab" data-bs-toggle="tab" data-bs-target="#category" type="button" role="tab">CATEGORIES</button>
          </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content pt-3" id="myTabContent">

        <!-- MENU TAB -->
          <div class="tab-pane fade show active" id="menu" role="tabpanel">
        <ul class="list-group">

          <!-- Login info -->
            <li class="list-group-item d-flex align-items-center justify-content-between rounded shadow-sm mb-2">
            <div class="d-flex flex-column">
              <h6 class="mb-1 fw-semibold text-dark">Testing</h6>
              <small class="text-muted">testing@gmail.com</small>
            </div>
            <div class="ms-3 text-primary fs-5">
              <i class="bi bi-person"></i>
            </div>
          </li>


              <li class="list-group-item d-flex justify-content-between align-items-center">
              <div>
                <h6 class="mb-0">Please Login</h6>
                <small class="text-muted">Login to use</small>
              </div>
              <button type="button" class="btn btn-warning btn-sm">Login</button>
            </li>


          <!-- My Orders -->
          <li class="list-group-item">
            <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#shopByCategoryList" aria-expanded="false" aria-controls="shopByCategoryList" style="cursor: pointer;">
              <span><i class="bi bi-tag"></i> My Orders</span>
              <span class="badge-custom ms-2">Brevity</span>
              <!-- <i class="bi bi-chevron-down"></i> -->
            </div>
            <!-- <ul class="list-group collapse mt-2 ms-4" id="shopByCategoryList">
              <li class="list-group-item py-1 px-2 border-0 bg-transparent"><a href="#" class="text-decoration-none text-dark">All Products</a></li>
              <li class="list-group-item py-1 px-2 border-0 bg-transparent"><a href="#" class="text-decoration-none text-dark">Anklets</a></li>
              <li class="list-group-item py-1 px-2 border-0 bg-transparent"><a href="#" class="text-decoration-none text-dark">Earrings</a></li>
            </ul> -->
          </li>

          <!-- My Orders -->
          <li class="list-group-item">
            <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#shopByCategoryList" aria-expanded="false" aria-controls="shopByCategoryList" style="cursor: pointer;">
              <span><i class="bi bi-geo-alt"></i> My Address</span>
              <span class="badge-custom ms-2">Location</span>
            </div>
          </li>

          <!-- Wishlist -->
          <li class="list-group-item">
            <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#shopByPriceList" aria-expanded="false" aria-controls="shopByPriceList" style="cursor: pointer;">
              <span><i class="bi bi-bag-heart"></i> My Wishlist</span>
              <span class="badge-custom ms-2">Dream List</span>
            </div>
            <!-- <ul class="list-group collapse mt-2 ms-4" id="shopByPriceList">
              <li class="list-group-item py-1 px-2 border-0 bg-transparent"><a href="#" class="text-decoration-none text-dark">Under ₹1,000</a></li>
              <li class="list-group-item py-1 px-2 border-0 bg-transparent"><a href="#" class="text-decoration-none text-dark">₹1,000–₹5,000</a></li>
              <li class="list-group-item py-1 px-2 border-0 bg-transparent"><a href="#" class="text-decoration-none text-dark">Above ₹5,000</a></li>
            </ul> -->
          </li>

          <!-- Coupon Code -->
          <li class="list-group-item">
            <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#bestsellersList" aria-expanded="false" aria-controls="bestsellersList" style="cursor: pointer;">
              <span><i class="bi bi-cash"></i> Coupon Code</span>  
            </div>
            <!-- <ul class="list-group collapse mt-2 ms-4" id="bestsellersList">
              <li class="list-group-item py-1 px-2 border-0 bg-transparent"><a href="#" class="text-decoration-none text-dark">Top Rated</a></li>
              <li class="list-group-item py-1 px-2 border-0 bg-transparent"><a href="#" class="text-decoration-none text-dark">Customer Favorites</a></li>
            </ul> -->
          </li>

          <div class="border">
          <li style="list-style-type: none;"><h6>Other Information</h6></li>

          <!-- Terms & Conditionn -->
          <li class="list-group-item">
            <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#mensCollectionList" aria-expanded="false" aria-controls="mensCollectionList" style="cursor: pointer;">
              <span><i class="bi bi-person-square me-2"></i> Terms & Conditions</span>
            </div>
          </li>
          </div>

          <div class="social-res d-flex justify-content-center align-items-center gap-4 mt-4">
          <a href="#" class="text-dark fs-4"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-dark fs-4"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-dark fs-4"><i class="bi bi-twitter-x"></i></a>
        </div>

        <!-- Logout (Mobile View) -->
        <li class="list-group-item text-center mt-3">
          <a href="logout.php" class="btn btn-outline-danger w-100">Logout</a>
        </li>


        </ul>
      </div>




      <!-- CATEGORY TAB -->
      <div class="tab-pane fade" id="category" role="tabpanel">
        <a href="https://www.zavya.co/collections/anklets" class="text-decoration-none">
          <div class="category-box">
            <img src="images/anklet---ank-60275_360x.jpg" alt="Anklets">
            <div class="category-title">Anklets</div>
          </div>
        </a>
        <a href="https://www.zavya.co/collections/bracelets" class="text-decoration-none">
          <div class="category-box">
            <img src="images/Barcelet---BR-80145_360x.jpg" alt="Bracelets">
            <div class="category-title">Bracelets</div>
          </div>
        </a>
        <a href="https://www.zavya.co/collections/earrings" class="text-decoration-none">
          <div class="category-box">
            <img src="https://www.zavya.co/cdn/shop/files/earrings.jpg?v=1691743790" alt="Earrings">
            <div class="category-title">Earrings</div>
          </div>
        </a>
      </div>

      </div>
      </div>

      <!-- Search + Icons (visible only on laptop/desktop) -->
      <form class="d-flex me-3 ms-auto d-none d-lg-flex">
        <input class="form-control rounded-pill px-4" type="search" placeholder="Search" />
      </form>

      <!-- Heart Icon with Badge -->
      <a href="#" class="me-3 d-none d-lg-inline position-relative">
        <i class="bi bi-heart fs-5"></i>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background-color: #e91e63;">
          2
          <span class="visually-hidden">unread messages</span>
        </span>
      </a>

      <!-- Cart Icon with Badge -->
      <a href="#" class="d-none d-lg-inline position-relative">
        <i class="bi bi-cart fs-5"></i>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background-color: #e91e63;">
          5
          <span class="visually-hidden">items in cart</span>
        </span>
      </a>


    </div>
  </div>
</nav>