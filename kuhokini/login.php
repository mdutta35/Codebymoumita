<?php include 'header.php'; ?>

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-md-6 col-lg-5 col-xl-4">
      <div class="login-container p-4 shadow rounded bg-white">

        <h5 class="fw-bold mb-3 text-center">Login</h5>
        <p class="text-muted small mb-4 text-center">Login using your phone number and password. New here? <a href="#" class="text-decoration-none">Create an account</a></p>

        <!-- Phone Input -->
        <div class="input-group mb-3">
          <span class="input-group-text">+91</span>
          <input type="tel" class="form-control" placeholder="Phone Number" required>
        </div>

        <!-- Password Input -->
        <div class="input-group mb-4">
          <input type="password" class="form-control" id="loginPassword" placeholder="Enter Password" required>
          <span class="input-group-text" onclick="togglePassword()" style="cursor:pointer;">
            <i class="bi bi-eye-slash" id="toggleIcon"></i>
          </span>
        </div>

        <!-- Login Button -->
        <button class="btn w-100 mb-3 text-white" style="background: linear-gradient(to right, #E91E63,#F38DAF);">Login</button>

        <div class="text-center text-muted mb-2">or</div>

        <!-- Create Account -->
        <div class="text-center">
          <a href="#" class="text-decoration-none">Create New Account</a>
        </div>

      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'footer.php'; ?>
