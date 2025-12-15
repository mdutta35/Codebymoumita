<?php include 'header.php'; ?>
  <div class=".checkout-page">

  <div class="container py-4 px-2">
    <div class="checkout-wrapper">
      <div class="row g-4">
        
        <!-- Left Column -->
        <div class="col-md-7">
          <!-- Address -->
          <div class="mb-4">
            <div class="checkout-section-title">Delivery To</div>
            <div class="checkout-address-box mb-2">
              <strong>Testing</strong><br>
              12B/3, Garia Station Road, Kolkata - 700084<br>
              Phone: 9876543210<br>
              Pincode: 700084
            </div>
            <div class="d-flex flex-wrap gap-2">
              <button class="btn btn-outline-dark btn-sm">Change Address</button>
              <button class="btn btn-dark btn-sm">+ Add New Address</button>
            </div>
          </div>

          <!-- Delivery Options -->
          <div class="mb-4">
            <div class="checkout-section-title">Delivery Options</div>
            <div class="checkout-delivery-option">
              <div class="d-flex justify-content-between">
                <span>Express Delivery (4–7 days)</span>
                <span class="text-success">₹49</span>
              </div>
            </div>
            <div class="checkout-delivery-option">
              <div class="d-flex justify-content-between">
                <span>Normal Delivery (7–10 days)</span>
                <span class="text-success">Free</span>
              </div>
            </div>
          </div>

          <!-- Payment Options -->
          <div class="mb-4">
            <div class="checkout-section-title">Payment Options</div>
            <div class="checkout-payment-box">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="checkoutPaymentOption" id="checkoutPayOnline" checked>
                <label class="form-check-label" for="checkoutPayOnline">
                  Pay Online (UPI / Card / Net Banking)
                </label>
              </div>
              <div class="form-check mt-2">
                <input class="form-check-input" type="radio" name="checkoutPaymentOption" id="checkoutCod">
                <label class="form-check-label" for="checkoutCod">
                  Cash on Delivery (+ ₹10 extra charges)
                </label>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Column -->
        <div class="col-md-5">
          <div class="checkout-section-title">Price Summary</div>
          <div class="checkout-price-box">
            <div class="d-flex justify-content-between mb-2">
              <span>Price (3 items)</span>
              <span>₹6,297</span>
            </div>
            <div class="d-flex justify-content-between mb-2">
              <span>Shipping</span>
              <span>₹49</span>
            </div>
            <div class="d-flex justify-content-between mb-2">
              <span>Coupon Discount</span>
              <span class="text-success">− ₹297</span>
            </div>
            <hr>
            <div class="d-flex justify-content-between fw-bold">
              <span>Total Amount</span>
              <span>₹6,049</span>
            </div>

            <!-- Coupon -->
            <div class="checkout-coupon-box mt-3">
              <div class="d-flex align-items-center flex-wrap">
                <input type="text" class="form-control form-control-sm me-2 mb-2 mb-sm-0" placeholder="Enter coupon code">
                <button class="btn btn-dark btn-sm mb-2 mb-sm-0">Apply</button>
                <button class="btn btn-outline-danger btn-sm ms-sm-2">Remove</button>
              </div>
            </div>

            <button class="btn btn-dark w-100 mt-4">Place Order</button>
          </div>
        </div>

      </div>
    </div>
  </div>

  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'footer.php'; ?>
