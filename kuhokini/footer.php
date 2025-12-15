<script>
  // Toggle hidden products on "View All" button click
  document.getElementById("viewAllBtn").addEventListener("click", function () {
    const extraProducts = document.getElementById("extra-products");
    const isHidden = extraProducts.classList.contains("d-none");
    extraProducts.classList.toggle("d-none", !isHidden);
    this.textContent = isHidden ? "Show Less" : "View All";
  });
</script>

<!-- Footer -->
<footer class="bg-dark text-white pt-5 pb-4 mt-5">
  <div class="container text-center text-md-start">
    <div class="row text-center text-md-start">

      <!-- About -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Jewelry</h6>
        <p>Elegant designs crafted with care. Discover fine silver, gold, and lab diamond jewelry made for every occasion.</p>
      </div>

      <!-- Products -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
        <p><a href="#" class="text-white text-decoration-none">Rings</a></p>
        <p><a href="#" class="text-white text-decoration-none">Necklaces</a></p>
        <p><a href="#" class="text-white text-decoration-none">Bracelets</a></p>
        <p><a href="#" class="text-white text-decoration-none">Earrings</a></p>
      </div>

      <!-- Useful links -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Useful Links</h6>
        <p><a href="#" class="text-white text-decoration-none">Your Account</a></p>
        <p><a href="#" class="text-white text-decoration-none">Become a Member</a></p>
        <p><a href="#" class="text-white text-decoration-none">Shipping Info</a></p>
        <p><a href="#" class="text-white text-decoration-none">Help</a></p>
      </div>

      <!-- Contact -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p><i class="bi bi-house-door me-2"></i> Kolkata, WB, India</p>
        <p><i class="bi bi-envelope me-2"></i> support@gmail.co</p>
        <p><i class="bi bi-phone me-2"></i> +91 12345 67890</p>
        <p><i class="bi bi-clock me-2"></i> Mon - Fri, 10AM - 6PM</p>
      </div>

    </div>

    <hr class="mb-4">

    <div class="row align-items-center">
      <div class="col-md-7 col-lg-8">
        <p class="text-center text-md-start">&copy; 2025 <strong>Jewelry</strong>. All rights reserved.</p>
      </div>

      <div class="col-md-5 col-lg-4">
        <div class="text-center text-md-end">
          <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>