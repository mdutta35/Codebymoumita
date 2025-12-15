<?php
include "header-one.php";
?>


    <div class="container py-5">

        <!-- Product Title -->
        <h3 class="fw-bold mb-4">BAJAJ AVENGER 220</h3>

        <div class="row g-4">

            <!-- Left: Gallery -->
            <div class="col-lg-6 product-details-gallery">
                <div class="row">
                    <div class="col-md-2 d-flex flex-column gap-2">
                        <img src="images/p1.jpg" class="img-thumbnail product-details-thumb-img" onclick="productDetailsChangeImage(this)" alt="Thumb 1">
                        <img src="images/p2.jpg" class="img-thumbnail product-details-thumb-img" onclick="productDetailsChangeImage(this)" alt="Thumb 2">
                        <img src="images/p3.jpg" class="img-thumbnail product-details-thumb-img" onclick="productDetailsChangeImage(this)" alt="Thumb 3">
                    </div>
                    <div class="col-md-10 text-center">
                        <img id="productDetailsMainImage" src="images/p1.jpg" class="img-fluid w-100 product-details-main-img" alt="Main Product Image">
                    </div>
                </div>
            </div>

            <!-- Right: Features and Description -->
            <div class="col-lg-6 d-flex flex-column gap-4">
                <!-- Feature Highlights box -->
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">Feature Highlights</h5>
                        <ul class="list-unstyled product-details-feature-list">
                            <li><i class="bi bi-gear-fill"></i> Engine capacity: 220 cc</li>
                            <li><i class="bi bi-speedometer2"></i> Mileage: 38 kmpl</li>
                            <li><i class="bi bi-shift"></i> Transmission: 5 speed manual</li>
                            <li><i class="bi bi-fuel-pump"></i> Fuel Tank Capacity: 13 litre</li>
                        </ul>
                    </div>
                </div>

                <!-- Description box -->
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">Description</h5>
                        <p>
                            The Bajaj Avenger 220 is a popular cruiser motorcycle in India, known for its comfortable ride and stylish, laid-back design...
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pricing + FAQ Section -->
        <div class="row g-4 mt-4">
            <!-- Pricing Info (Left) -->
            <div class="col-lg-6 product-details-pricing">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#productDetailsPricingInfo" aria-expanded="true" aria-controls="productDetailsPricingInfo">
                        <h6 class="mb-0 fw-bold">Pricing Info</h6>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div id="productDetailsPricingInfo" class="collapse show">
                        <div class="card-body">
                            <!-- Pickup Row -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="productDetailsPickup" class="form-label fw-semibold">Pickup Date & Time</label>
                                    <input type="text" class="form-control" id="productDetailsPickup" placeholder="Select date and time">
                                </div>
                                <div class="col-md-6">
                                    <label for="productDetailsReturn" class="form-label fw-semibold">Return Date & Time</label>
                                    <input type="text" class="form-control" id="productDetailsReturn" placeholder="Select date and time">
                                </div>
                            </div>

                            <!-- Quantity and Rate Row -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="productDetailsQuantity" class="form-label fw-semibold">Quantity</label>
                                    <input type="number" class="form-control" id="productDetailsQuantity" value="1" min="1">
                                </div>
                                <div class="col-md-6">
                                    <label for="productDetailsPerDayRate" class="form-label fw-semibold">Per Day Rate</label>
                                    <input type="text" class="form-control" id="productDetailsPerDayRate" value="₹1000" readonly>
                                </div>
                            </div>

                            <!-- Total Value Row -->
                            <div class="mb-3">
                                <label for="productDetailsTotalValue" class="form-label fw-semibold">Total Value</label>
                                <input type="text" class="form-control" id="productDetailsTotalValue" value="₹1000" readonly>
                            </div>

                            <!-- Book Now Button -->
                            <button class="btn w-100 text-white fw-bold product-details-btn-theme">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Section (Right) -->
            <div class="col-lg-6 product-details-faq-section">
                <h5 class="fw-bold mt-4">FAQ</h5>
                <div class="accordion" id="productDetailsFaqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="productDetailsFaqOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#productDetailsCollapseOne" aria-expanded="true" aria-controls="productDetailsCollapseOne">
                                What documents are required?
                            </button>
                        </h2>
                        <div id="productDetailsCollapseOne" class="accordion-collapse collapse show" aria-labelledby="productDetailsFaqOne" data-bs-parent="#productDetailsFaqAccordion">
                            <div class="accordion-body">
                                You will need a valid driving license and government-issued ID proof at the time of pickup.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="productDetailsFaqTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#productDetailsCollapseTwo" aria-expanded="false" aria-controls="productDetailsCollapseTwo">
                                Is fuel included in the price?
                            </button>
                        </h2>
                        <div id="productDetailsCollapseTwo" class="accordion-collapse collapse" aria-labelledby="productDetailsFaqTwo" data-bs-parent="#productDetailsFaqAccordion">
                            <div class="accordion-body">
                                No, fuel is not included. The bike will be provided with some fuel and must be returned with the same level.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="productDetailsFaqThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#productDetailsCollapseThree" aria-expanded="false" aria-controls="productDetailsCollapseThree">
                                Can I extend my booking?
                            </button>
                        </h2>
                        <div id="productDetailsCollapseThree" class="accordion-collapse collapse" aria-labelledby="productDetailsFaqThree" data-bs-parent="#productDetailsFaqAccordion">
                            <div class="accordion-body">
                                Yes, you can extend the booking by contacting customer support before your return date.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- "You May Also Like" Section with Heading -->
    <div class="sugession-box container py-5">
        <div class="row">
            <div class="col-12 text-left">
                <h4 class="fw-bold mb-4">You may also like</h4>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 hp-product-grid-container" id="hpProductGridContainer">
                <div class="row g-4" id="hpProductGrid">
                    
                    <!-- Product Card 1 -->
                    <div class="col-sm-6 col-md-4 col-lg-3 hp-product-card scooter" data-name="Maestro Edge 125" data-price="9009" data-image="https://placehold.co/300x200/FF6500/FFFFFF?text=Scooter">
                        <div class="hp-gradient-outline p-1 h-100">
                            <div class="card p-3 h-100">
                                <img src="images/scooty1.png" onerror="this.src='https://placehold.co/300x200/FF6500/FFFFFF?text=Scooter'" alt="Maestro Edge 125" class="mb-3 rounded">
                                <p class="text-uppercase small fw-semibold mb-0" style="color:#FF6500;">Hero</p>
                                <h6 class="mb-1 product-name">Maestro Edge 125</h6>
                                <p class="fw-bold text-dark product-price">₹9,009</p>
                                <p class="text-muted small mb-2"><i class="bi bi-patch-check"></i> Zero Deposit Fee</p>
                                <!-- <button class="btn btn-primary mb-3 add-to-cart">Add to Cart</button> -->
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="col-sm-6 col-md-4 col-lg-3 hp-product-card bike" data-name="Yamaha FZX" data-price="10999" data-image="https://placehold.co/300x200/222222/FFFFFF?text=Bike">
                        <div class="hp-gradient-outline p-1 h-100">
                            <div class="card p-3 h-100">
                                <img src="images/bike.png" onerror="this.src='https://placehold.co/300x200/222222/FFFFFF?text=Bike'" alt="Yamaha FZX" class="mb-3 rounded">
                                <p class="text-uppercase small fw-semibold mb-0" style="color:#FF6500;">Yamaha</p>
                                <h6 class="mb-1">FZX</h6>
                                <p class="fw-bold text-dark product-price">₹10,999</p>
                                <p class="text-muted small mb-2"><i class="bi bi-patch-check"></i> Zero Deposit Fee</p>
                                <!-- <button class="btn btn-primary mb-3 add-to-cart">Add to Cart</button> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php
        include "footer.php";
    ?>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        function productDetailsChangeImage(element) {
            document.getElementById("productDetailsMainImage").src = element.src;
        }

        // Initialize Flatpickr on the new inputs
        document.addEventListener("DOMContentLoaded", function() {
            flatpickr("#productDetailsPickup", {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });
            flatpickr("#productDetailsReturn", {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });
        });
    </script>

</body>

</html>
