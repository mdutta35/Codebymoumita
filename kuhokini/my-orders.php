<?php include 'header.php'; ?>

<div class="container py-5 my-orders-container">
  <h4 class="fw-bold mb-4 text-center">My Orders</h4>

  <!-- Order Card Start -->
  <div class="card border-0 shadow-sm mb-4">
    <div class="card-body">
      <div class="row g-3 align-items-center flex-column flex-md-row">

        <!-- Product Image -->
        <div class="col-12 col-md-2 text-center">
          <img src="images/earrings---EAR-20650-G_360x.jpg" class="img-fluid rounded" alt="Product Image" style="max-height: 100px;">
        </div>

        <!-- Product & Order Details -->
        <div class="col-12 col-md-7">
          <h6 class="fw-semibold mb-1">Minimal Rhodium Plated Earrings</h6>
          <p class="mb-1 text-muted small">Order ID: <strong>#ORD123456</strong></p>
          <p class="mb-1 text-muted small">Placed on: <strong>12 June 2025</strong></p>
          <p class="mb-1 text-muted small">Status: <span class="badge bg-success">Delivered</span></p>
        </div>

        <!-- Action Buttons -->
        <div class="col-12 col-md-3 text-md-end">
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="review.php" class="btn btn-sm btn-outline-primary">Write Review</a>
            <a href="#" class="btn btn-sm btn-outline-secondary">View Details</a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Order Card End -->

  <!-- Repeat this block for each order -->
</div>

<?php include 'footer.php'; ?>
