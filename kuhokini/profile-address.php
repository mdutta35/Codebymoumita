<?php include 'header.php'; ?>

<div class="container py-5">

  <!-- Heading -->
  <div class="row">
    <div class="col text-center">
      <h4 class="mb-4">Your Address</h4>
    </div>
  </div>

  <!-- Existing Address Display -->
  <div class="row justify-content-center mb-3">
    <div class="col-12 col-md-8 col-lg-6">
      <div class="card shadow-sm border-0" style="cursor: pointer;" data-bs-toggle="collapse" data-bs-target="#addressForm">
        <div class="card-body">
          <h5 class="card-title">Home Address</h5>
          <p class="card-text mb-1">Flat 101, Galaxy Apartments</p>
          <p class="card-text mb-1">Park Street, Near Metro</p>
          <p class="card-text mb-1">Kolkata, West Bengal - 700016</p>
          <p class="card-text"><strong>Phone:</strong> +91 9876543210</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Button Row -->
  <div class="row justify-content-center mb-4">
    <div class="col-12 col-md-8 col-lg-6">
      <div class="d-grid gap-2 d-md-flex justify-content-md-center">
        <button class="btn btn-dark me-md-2 w-100 w-md-auto" data-bs-toggle="collapse" data-bs-target="#addressForm">
          Add a New Address
        </button>
        <button class="btn btn-success w-100 w-md-auto">
          Continue with This Address
        </button>
      </div>
    </div>
  </div>

  <!-- Add Address Form (Collapsible) -->
  <div class="row justify-content-center collapse" id="addressForm">
    <div class="col-12 col-md-8 col-lg-6">
      <form>
        <div class="mb-3">
          <label class="form-label">Address Line 1*</label>
          <input type="text" class="form-control" placeholder="Flat / House No., Building, Street" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Address Line 2</label>
          <input type="text" class="form-control" placeholder="Landmark, Area, etc. (optional)">
        </div>

        <div class="row">
          <div class="mb-3 col-md-6">
            <label class="form-label">City*</label>
            <input type="text" class="form-control" placeholder="City" required>
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">State*</label>
            <select class="form-select" required>
              <option value="">Select State</option>
              <option>West Bengal</option>
              <option>Maharashtra</option>
              <option>Delhi</option>
              <option>Tamil Nadu</option>
              <option>Karnataka</option>
            </select>
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Pincode*</label>
          <input type="text" class="form-control" placeholder="Pincode" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Address Type*</label>
          <div class="btn-group w-100 flex-wrap" role="group">
            <input type="radio" class="btn-check" name="address-type" id="home" autocomplete="off" checked>
            <label class="btn btn-outline-secondary" for="home">Home</label>

            <input type="radio" class="btn-check" name="address-type" id="office" autocomplete="off">
            <label class="btn btn-outline-secondary" for="office">Office</label>

            <input type="radio" class="btn-check" name="address-type" id="other" autocomplete="off">
            <label class="btn btn-outline-secondary" for="other">Other</label>
          </div>
        </div>

        <button type="submit" class="btn btn-dark w-100 mt-3">Save Address</button>
      </form>
    </div>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'footer.php'; ?>
