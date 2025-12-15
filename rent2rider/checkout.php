<?php
include "header.php";
?>

<body class="bg-gray-100 antialiased text-gray-800">

    
    <main class="container py-4">
        <div class="checkout-title-container">
            <div class="bike-img"><img src="images/yel bike.png" alt="Bike icon placeholder" height="50"></div>
            <h1 class="fw-bold m-0 p-0 text-white">Checkout</h1>
        </div>
        <div class="row g-4 justify-content-center">
            
            <div class="col-lg-8">
                <div class="card checkout-card p-4 mb-4">
                    <h5 class="fw-bold mb-3">Rider Information</h5>
                    <form>
                        <div class="mb-3">
                            <label for="checkout-rider-full-name" class="form-label checkout-form-label">Full Name</label>
                            <input type="text" class="form-control" id="checkout-rider-full-name" value="Jane Doe">
                        </div>
                        <div class="mb-3">
                            <label for="checkout-rider-email" class="form-label checkout-form-label">Email Address</label>
                            <input type="email" class="form-control" id="checkout-rider-email" value="jane.doe@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="checkout-rider-phone-number" class="form-label checkout-form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="checkout-rider-phone-number" value="+91 9876543210">
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <button type="button" class="btn btn-secondary btn-sm">Update Information</button>
                        </div>
                    </form>
                </div>

                <div class="card checkout-card p-4 mb-4">
                    <h5 class="fw-bold mb-3">Ride Details</h5>
                    <div class="table-responsive">
                        <table class="table table-striped checkout-table-ride-details">
                            <thead>
                                <tr>
                                    <th scope="col">Serial No.</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Pickup Date</th>
                                    <th scope="col">Return Date</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Per Day Rate</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-item-rate="100" data-item-days="3" data-item-quantity="1">
                                    <td>12345</td>
                                    <td>Bike: Yamaha FZX</td>
                                    <td>15/08/2025</td>
                                    <td>18/08/2025</td>
                                    <td class="checkout-item-quantity">1</td>
                                    <td class="checkout-item-rate">₹100.00</td>
                                    <td><img src="images/bike.png" alt="Yamaha FZX" class="checkout-table-image"></td>
                                    <td><button type="button" class="btn btn-danger btn-sm checkout-remove-item">Remove</button></td>
                                </tr>
                                <tr data-item-rate="50" data-item-days="3" data-item-quantity="2">
                                    <td>67890</td>
                                    <td>Accessory: Helmet</td>
                                    <td>15/08/2025</td>
                                    <td>18/08/2025</td>
                                    <td class="checkout-item-quantity">2</td>
                                    <td class="checkout-item-rate">₹50.00</td>
                                    <td><img src="images/Resanitisation.png" alt="Helmet" class="checkout-table-image"></td>
                                    <td><button type="button" class="btn btn-danger btn-sm checkout-remove-item">Remove</button></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="fw-bold">
                                    <td colspan="6" class="text-end">Subtotal</td>
                                    <td id="checkout-table-subtotal-span">₹0.00</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card checkout-card p-4">
                    <h5 class="fw-bold mb-3">Order Summary</h5>
                    <ul class="list-group list-group-flush mb-3 checkout-order-summary-list">
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent px-0">
                            Subtotal
                            <span id="checkout-subtotal-span">₹0.00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent px-0">
                            Tax (5%)
                            <span id="checkout-tax-span">₹0.00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent px-0">
                            Coupon Applied
                            <span id="checkout-coupon-span" class="checkout-app-primary-text-orange">- ₹0.00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center fw-bold bg-transparent px-0 pt-3">
                            Total
                            <span id="checkout-total-span">₹0.00</span>
                        </li>
                    </ul>
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-secondary py-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#checkout-cart-sidebar" aria-controls="checkout-cart-sidebar">
                            View Cart
                        </button>
                        <button type="button" class="btn checkout-app-primary-bg-orange text-white py-2 checkout-app-hover-bg-orange-dark">Proceed to Pay</button>
                    </div>
                </div>
                <div class="card checkout-card p-4 mt-3 mb-3">
                    <h5 class="fw-bold mb-3">Coupon Code</h5>
                    <div class="input-group">
                        <input type="text" class="form-control" id="coupon-code-input" placeholder="Enter coupon code">
                        <button class="btn btn-outline-secondary" type="button" id="apply-coupon-btn">Apply</button>
                    </div>
                    <div id="coupon-message" class="mt-2 small"></div>
                </div>
            </div>
            
        </div>
    </main>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="checkout-cart-sidebar" aria-labelledby="checkout-cart-sidebar-label">
        <div class="offcanvas-header border-bottom d-flex justify-content-between align-items-center">
            <h5 class="offcanvas-title" id="checkout-cart-sidebar-label">Your Cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body d-flex flex-column justify-content-between">
            <div class="checkout-cart-items">
                <div class="d-flex align-items-center mb-3">
                    <img src="https://placehold.co/60x60" alt="Cart Item" class="rounded me-3">
                    <div>
                        <h6 class="mb-0">Yamaha FZX</h6>
                        <p class="text-muted small mb-0">₹10,999</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="https://placehold.co/60x60" alt="Cart Item" class="rounded me-3">
                    <div>
                        <h6 class="mb-0">Maestro Edge 125</h6>
                        <p class="text-muted small mb-0">₹9,009</p>
                    </div>
                </div>
            </div>

            <div class="checkout-cart-summary border-top pt-3 mt-auto">
                <div class="d-flex justify-content-between fw-bold mb-2">
                    <span>Total:</span>
                    <span>₹20,008</span>
                </div>
                <button class="btn btn-warning w-100">Checkout</button>
            </div>
        </div>
    </div>

    <?php
        include "footer.php";
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            /**
             * Calculates the order summary based on the items in the ride details table.
             */
            function calculateSummary() {
                let subtotal = 0;
                const taxRate = 0.05;
                const couponDiscount = document.getElementById('coupon-code-input').disabled ? 100 : 0;
                
                // Get all table rows from the tbody
                const tableRows = document.querySelectorAll('.checkout-table-ride-details tbody tr');
                
                // Iterate through each row and calculate the subtotal
                tableRows.forEach(row => {
                    // Get data from data-attributes
                    const rate = parseFloat(row.dataset.itemRate);
                    const days = parseInt(row.dataset.itemDays);
                    const quantity = parseInt(row.dataset.itemQuantity);
                    
                    if (!isNaN(rate) && !isNaN(days) && !isNaN(quantity)) {
                        // The subtotal is calculated by multiplying the per-day rate, number of days, and quantity.
                        subtotal += rate * days * quantity;
                    }
                });

                const tax = subtotal * taxRate;
                let total = subtotal + tax - couponDiscount;

                // Ensure total doesn't go below zero
                if (total < 0) {
                    total = 0;
                }

                // Update the values in the order summary card on the right
                document.getElementById('checkout-subtotal-span').textContent = `₹${subtotal.toFixed(2)}`;
                document.getElementById('checkout-tax-span').textContent = `₹${tax.toFixed(2)}`;

                if (couponDiscount > 0) {
                     document.getElementById('checkout-coupon-span').textContent = `- ₹${couponDiscount.toFixed(2)}`;
                } else {
                     document.getElementById('checkout-coupon-span').textContent = `₹0.00`;
                }

                document.getElementById('checkout-total-span').textContent = `₹${total.toFixed(2)}`;

                // Update the new subtotal row in the table footer
                document.getElementById('checkout-table-subtotal-span').textContent = `₹${subtotal.toFixed(2)}`;
            }

            // Call the function on page load to set the initial values
            calculateSummary();

            // Attach a click event listener to the entire table body to handle dynamic rows
            document.querySelector('.checkout-table-ride-details tbody').addEventListener('click', (event) => {
                // Check if the clicked element is a "Remove" button
                if (event.target.classList.contains('checkout-remove-item')) {
                    // Find the closest table row (tr) and remove it
                    const rowToRemove = event.target.closest('tr');
                    if (rowToRemove) {
                        rowToRemove.remove();
                        // Recalculate the summary after removing the item
                        calculateSummary();
                    }
                }
            });

            // Add event listener for the coupon application
            document.getElementById('apply-coupon-btn').addEventListener('click', () => {
                const couponInput = document.getElementById('coupon-code-input');
                const couponMessage = document.getElementById('coupon-message');
                const validCoupon = "RIDER100"; // Our hardcoded valid coupon
                const enteredCode = couponInput.value.trim().toUpperCase();

                // Check if the entered code is valid
                if (enteredCode === validCoupon) {
                    couponInput.disabled = true; // Disable the input field
                    document.getElementById('apply-coupon-btn').disabled = true; // Disable the button
                    couponMessage.textContent = "Coupon applied successfully! ✔️";
                    couponMessage.style.color = 'green';
                    calculateSummary(); // Recalculate with the new discount
                } else {
                    couponMessage.textContent = "Invalid coupon code. Please try again. ❌";
                    couponMessage.style.color = 'red';
                }
            });
        });
    </script>
</body>
</html>