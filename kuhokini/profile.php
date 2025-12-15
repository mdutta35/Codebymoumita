<?php include 'header.php'; ?>

<div class="container py-5">
  <div class="row">
    <div class="col text-center">
      <h4 class="mb-4">Personal Information</h4>
    </div>
  </div>
  
  <div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6">
      <form>
        <div class="mb-3">
          <label class="form-label">First Name*</label>
          <input type="text" class="form-control" placeholder="First Name" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Last Name*</label>
          <input type="text" class="form-control" placeholder="Last Name" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Email*</label>
          <input type="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Phone Number*</label>
          <input type="tel" class="form-control" placeholder="Phone Number" required>
        </div>
        <div class="mb-3">
          <label class="form-label d-block">How do you identify yourself?</label>
          <div class="btn-group w-100 flex-wrap" role="group">
            <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" checked>
            <label class="btn btn-outline-secondary" for="male">Male</label>

            <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off">
            <label class="btn btn-outline-secondary" for="female">Female</label>

            <input type="radio" class="btn-check" name="gender" id="others" autocomplete="off">
            <label class="btn btn-outline-secondary" for="others">Others</label>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">When do you celebrate your birthday?</label>
          <input type="date" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">When do you celebrate your anniversary?</label>
          <input type="date" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark mt-3 w-100">Next</button>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'footer.php'; ?>
