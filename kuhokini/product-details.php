<?php include 'header.php'; ?>

  <div class="product_details_body">

    <div class="container py-4 product-details-container">
      <div class="row g-4">

        <!-- Product Gallery -->
        <div class="col-lg-6 order-1 order-lg-1 product-details-gallery-section">
          <div class="row">

            <!-- Thumbnails -->
            <div class="col-md-2 d-flex flex-column align-items-center gap-2 product-details-thumbnails">
              <img src="images/Barcelet---BR-80145_360x.jpg" class="img-thumbnail product-details-thumb-img"
                alt="Thumb 1">
              <img src="images/Barcelet---BR-80145_360x.jpg" class="img-thumbnail product-details-thumb-img"
                alt="Thumb 2">
              <img src="images/Barcelet---BR-80145_360x.jpg" class="img-thumbnail product-details-thumb-img"
                alt="Thumb 3">
              <img src="images/rings---RNG-40128_360x.jpg" class="img-thumbnail product-details-thumb-img"
                alt="Thumb 4">
              <img src="images/rings---RNG-40128_360x.jpg" class="img-thumbnail product-details-thumb-img"
                alt="Thumb 5">
            </div>

            <!-- Main Product Image -->
            <div class="col-md-10 text-center text-md-start product-details-main-image-container">
              <div class="position-relative">
                <img id="mainImage" src="images/anklet---ank-60275_360x.jpg"
                  class="img-fluid w-100 product-details-main-img" alt="Main Product Image">
                <span class="position-absolute top-0 end-0 m-2 badge rounded-pill bg-light text-dark border">Pure
                  Silver</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Product Info -->
        <div class="col-lg-6 order-2 order-lg-2 product-details-info">
          <h5 class="product-details-category">Pure Silver</h5>
          <h2 class="fw-bold mb-2 product-details-title">Minimal Rhodium Plated 925 Sterling Silver Chain Anklet</h2>

          <div class="mb-3 product-details-pricing">
            <span class="fw-bold fs-4 me-2 product-details-price">₹1,999</span>
            <del class="text-muted fs-5 product-details-mrp">₹3,999</del>
            <span class="badge bg-danger ms-2 product-details-discount">50% Off</span>
          </div>

          <!-- Rating -->
          <p class="small mb-2 product-details-rating" data-rating="4.7"></p>

          <div class="d-flex flex-wrap gap-2 mb-4 product-details-cta">
            <button class="btn product-details-add-to-cart-btn flex-grow-1">ADD TO CART</button>
            <button class="btn product-details-buy-now-btn flex-grow-1">BUY IT NOW</button>
          </div>

          <div class="product-details-offers mb-4">
            <p class="mb-1 fw-bold">Available Offers</p>
            <ul class="small mb-0">
              <li>Get 10% off above ₹1000 - use <strong>SILVER10</strong></li>
              <li>Free Earrings worth ₹2000 on orders above ₹4990 - use <strong>PAYDAYGIFT</strong></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Tabs -->
      <div class="product-details-tabs my-5">
        <ul class="nav nav-pills justify-content-center mb-3" id="productDetailsTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link custom-tab-button active" data-bs-toggle="pill" data-bs-target="#product-desc"
              type="button">
              PRODUCT DESCRIPTION
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link custom-tab-button" data-bs-toggle="pill" data-bs-target="#product-faq"
              type="button">
              FAQ
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link custom-tab-button" data-bs-toggle="pill" data-bs-target="#product-reviews"
              type="button">
              REVIEWS
            </button>
          </li>
        </ul>



        <div class="tab-content border p-3 rounded">
          <div class="tab-pane fade show active" id="product-desc">
            <p>Crafted from premium 925 silver with rhodium plating. Perfect for sensitive skin. Comes with a jewellery
              kit and authenticity certificate.</p>
          </div>
          <div class="tab-pane fade" id="product-faq">
            <h4 class="fw-bold mb-3">Frequently Asked Questions</h4>
            <p class="product-details-faq-question">Q: Is it pure silver?</p>
            <p>A: Yes, it uses 92.5% purity silver with high-quality anti-tarnish rhodium plating.</p>
            <p class="product-details-faq-question">Q: What is the return policy?</p>
            <p>A: We have a 15-day hassle-free return policy on unused jewellery with tags and original packaging.</p>
          </div>
          <div class="tab-pane fade" id="product-reviews">
            <p>Delivery within 5-7 days. 15-day return policy available. Contact support for assistance.</p>
          </div>
        </div>
      </div>

      <!-- Related Products -->
      <h4 class="fw-bold text-center mb-4 product-details-related-title">Related Products</h4>
      <div class="row g-3 mb-5 product-details-related-products">
        <div class="col-6 col-md-3 product-details-related-card">
          <div class="card h-100 text-center">
            <img src="images/related1.jpg" class="card-img-top product-details-related-img" alt="Related 1">
            <div class="card-body p-2">
              <p class="small mb-1">Classic Minimal Chain</p>
              <button class="btn btn-sm product-details-add-to-cart-btn w-100">ADD TO CART</button>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 product-details-related-card">
          <div class="card h-100 text-center">
            <img src="images/related2.jpg" class="card-img-top product-details-related-img" alt="Related 2">
            <div class="card-body p-2">
              <p class="small mb-1">Golden Serenade Anklet</p>
              <button class="btn btn-sm product-details-add-to-cart-btn w-100">ADD TO CART</button>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Update main image on thumbnail click
    document.querySelectorAll('.product-details-thumb-img').forEach(thumb => {
      thumb.addEventListener('click', () => {
        document.getElementById('mainImage').src = thumb.src;
      });
    });

    // Dynamic stars
    document.querySelectorAll('.product-details-rating').forEach(ratingEl => {
      const rating = parseFloat(ratingEl.getAttribute('data-rating')) || 0;
      const fullStars = Math.floor(rating);
      const halfStar = (rating % 1 >= 0.25 && rating % 1 < 0.75);
      const emptyStars = 5 - fullStars - (halfStar ? 1 : 0);

      let starsHTML = '';
      for (let i = 0; i < fullStars; i++) starsHTML += '<i class="bi bi-star-fill text-warning"></i> ';
      if (halfStar) starsHTML += '<i class="bi bi-star-half text-warning"></i> ';
      for (let i = 0; i < emptyStars; i++) starsHTML += '<i class="bi bi-star text-warning"></i> ';
      starsHTML += `<span class="ms-2">${rating.toFixed(1)} | Made with pure 925 silver</span>`;
      ratingEl.innerHTML = starsHTML;
    });
  </script>

<?php include 'footer.php'; ?>