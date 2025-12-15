<?php include 'header.php'; ?>

<div class="container review-container">
  <h2 class="review-title">Write a Review</h2>

  <!-- Product Info Preview -->
  <div class="d-flex align-items-center gap-3 mb-4 review-product-info">
    <img src="images/earrings---EAR-20650-G_360x.jpg" alt="Product" class="rounded">
    <div>
      <h6 class="mb-1 fw-semibold">Minimal Rhodium Plated Earrings</h6>
      <p class="text-muted small mb-0">Your review helps others know more about this product!</p>
    </div>
  </div>

  <!-- Rating -->
  <div class="mb-4">
    <label class="form-label fw-semibold">Your Rating:</label>
    <div class="review-stars" id="reviewStars">
      <i class="bi bi-star" data-value="1"></i>
      <i class="bi bi-star" data-value="2"></i>
      <i class="bi bi-star" data-value="3"></i>
      <i class="bi bi-star" data-value="4"></i>
      <i class="bi bi-star" data-value="5"></i>
    </div>
  </div>

  <!-- Review Text -->
  <div class="mb-4">
    <label for="reviewText" class="form-label fw-semibold">Your Review:</label>
    <textarea class="form-control review-textarea" id="reviewText"
      placeholder="Share your thoughts about the product..." required></textarea>
  </div>

  <!-- Submit Button -->
  <button type="submit" class="btn review-submit-btn">Submit Review</button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const stars = document.querySelectorAll('#reviewStars i');
  stars.forEach((star, index) => {
    star.addEventListener('click', () => {
      stars.forEach((s, i) => {
        s.classList.toggle('selected', i <= index);
        s.classList.toggle('bi-star-fill', i <= index);
        s.classList.toggle('bi-star', i > index);
      });
    });
  });
</script>

<?php include 'footer.php'; ?>
