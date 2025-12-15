<?php
include "header.php";
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rent 2 Rider | Bike Rentals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

</head>

<body> -->


    <section class="product-section py-5 bg-light">
        <div class="container">
            <ul class="nav nav-tabs justify-content-center mb-4 border-0 filter-tabs" id="vehicleTabs">
                <li class="nav-item">
                    <button class="nav-link text-dark active" data-filter="all">Show All</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link text-dark" data-filter="bike">Bikes</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link text-dark" data-filter="scooter">Scooters</button>
                </li>
            </ul>

            <div class="sidebar-toggle-btn-container d-lg-none mb-3">
                <button class="btn btn-outline-secondary rounded-pill w-100" id="toggleFilterSidebarBtn" type="button">
                    <i class="bi bi-funnel me-2"></i> Filter Products
                </button>
            </div>

            <div class="row">
                <div class="col-lg-3 sidebar-col">
                    <div class="filter-sidebar" id="filterSidebar">
                        <h5>Filters <i class="bi bi-arrow-clockwise float-end"></i></h5>

                        <div class="filter-group">
                            <div class="filter-group-header" data-bs-toggle="collapse"
                                data-bs-target="#vehicleTypeCollapse" aria-expanded="true"
                                aria-controls="vehicleTypeCollapse">
                                <strong>Vehicle Type</strong>
                                <i class="bi bi-chevron-up"></i>
                            </div>
                            <div class="collapse show" id="vehicleTypeCollapse">
                                <label class="d-block"><input type="radio" name="vehicleTypeRadio" value="all" checked>
                                    All</label>
                                <label class="d-block"><input type="radio" name="vehicleTypeRadio" value="bike">
                                    Bikes</label>
                                <label class="d-block"><input type="radio" name="vehicleTypeRadio" value="scooter">
                                    Scooters</label>
                            </div>
                        </div>

                        <div class="filter-group">
                            <div class="filter-group-header" data-bs-toggle="collapse"
                                data-bs-target="#priceRangeCollapse" aria-expanded="true"
                                aria-controls="priceRangeCollapse">
                                <strong>Price Range</strong>
                                <i class="bi bi-chevron-up"></i>
                            </div>
                            <div class="collapse show" id="priceRangeCollapse">
                                <div class="price-display">
                                    <span id="minPriceDisplay">₹609/-</span>
                                    <span id="maxPriceDisplay">₹2,209/-</span>
                                </div>
                                <div class="range-slider">
                                    <div class="range-slider-fill" style="left: 0%; width: 100%;"></div>
                                    <div class="range-slider-thumb" id="minThumb" style="left: 0%;"></div>
                                    <div class="range-slider-thumb" id="maxThumb" style="left: 100%;"></div>
                                </div>
                                <input type="hidden" id="minPrice" value="609">
                                <input type="hidden" id="maxPrice" value="2209">
                            </div>
                        </div>

                        <div class="filter-group">
                            <div class="filter-group-header" data-bs-toggle="collapse"
                                data-bs-target="#vehicleModelCollapse" aria-expanded="true"
                                aria-controls="vehicleModelCollapse">
                                <strong>Vehicle Model</strong>
                                <i class="bi bi-chevron-up"></i>
                            </div>
                            <div class="collapse show" id="vehicleModelCollapse">
                                <label class="d-block"><input type="checkbox" name="vehicleModelCheckbox" value="all"
                                        checked>
                                    All</label>
                                <label class="d-block"><input type="checkbox" name="vehicleModelCheckbox"
                                        value="Maestro Edge 125">
                                    Maestro Edge 125</label>
                                <label class="d-block"><input type="checkbox" name="vehicleModelCheckbox"
                                        value="Destini 125"> Destini
                                    125</label>
                                <label class="d-block"><input type="checkbox" name="vehicleModelCheckbox"
                                        value="Ntorq 125"> Ntorq
                                    125</label>
                                <label class="d-block"><input type="checkbox" name="vehicleModelCheckbox"
                                        value="Activa 125"> Activa
                                    125</label>
                                <label class="d-block"><input type="checkbox" name="vehicleModelCheckbox"
                                        value="Ray ZR"> Ray ZR</label>
                                <label class="d-block"><input type="checkbox" name="vehicleModelCheckbox"
                                        value="Fascino">
                                    Fascino</label>
                                <label class="d-block"><input type="checkbox" name="vehicleModelCheckbox" value="FZX">
                                    FZ X</label>
                                <label class="d-block"><input type="checkbox" name="vehicleModelCheckbox"
                                        value="Avenger 220"> Avenger
                                    220</label>
                                <label class="d-block"><input type="checkbox" name="vehicleModelCheckbox"
                                        value="PULSAR 220 DTS-i F">
                                    PULSAR 220 DTS-i F</label>
                                <label class="d-block"><input type="checkbox" name="vehicleModelCheckbox"
                                        value="Hunter 350"> Hunter
                                    350</label>
                                <label class="d-block"><input type="checkbox" name="vehicleModelCheckbox" value="FZ 25">
                                    FZ 25</label>
                                <label class="d-block"><input type="checkbox" name="vehicleModelCheckbox"
                                        value="Classic 350"> Classic
                                    350</label>
                                <label class="d-block"><input type="checkbox" name="vehicleModelCheckbox"
                                        value="Meteor 350"> Meteor
                                    350</label>
                                <label class="d-block"><input type="checkbox" name="vehicleModelCheckbox"
                                        value="Forty Two"> Forty
                                    Two</label>
                                <label class="d-block"><input type="checkbox" name="vehicleModelCheckbox"
                                        value="Scram 411"> Scram
                                    411</label>
                                <label class="d-block"><input type="checkbox" name="vehicleModelCheckbox"
                                        value="Himalayan 410">
                                    Himalayan 410</label>
                                <label class="d-block"><input type="checkbox" name="vehicleModelCheckbox"
                                        value="Himalayan 450">
                                    Himalayan 450</label>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-lg-9 product-grid-container" id="productGridContainer">
                    <div class="row g-4" id="productGrid">
                        <div class="col-sm-6 col-md-4 product-card scooter" data-name="Maestro Edge 125"
                            data-price="9009" data-image="images/scooty1.png" data-type="scooter">
                            <div class="p-1 h-100">
                                <div class="card p-3 h-100">
                                    <img src="images/scooty1.png" alt="Maestro Edge 125" class="mb-3">
                                    <p class="text-uppercase small fw-semibold mb-0" style="color:#FF6500;">Hero</p>
                                    <h6 class="mb-1">Maestro Edge 125</h6>
                                    <p class="fw-bold text-dark product-price">₹9,009</p>
                                    <p class="text-muted small mb-2"><i class="bi bi-patch-check"></i> Zero Deposit
                                        Fee</p>
                                    <button class="btn rounded-pill" data-bs-toggle="offcanvas"
                                        data-bs-target="#cartSidebar">Book Vehicle</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 product-card bike" data-name="Yamaha FZX" data-price="10999"
                            data-image="images/bike.png" data-type="bike">
                            <div class="p-1 h-100">
                                <div class="card p-3 h-100">
                                    <img src="images/bike.png" alt="Yamaha FZX" class="mb-3">
                                    <p class="text-uppercase small fw-semibold mb-0" style="color:#FF6500;">Yamaha</p>
                                    <h6 class="mb-1">FZX</h6>
                                    <p class="fw-bold text-dark product-price">₹10,999</p>
                                    <p class="text-muted small mb-2"><i class="bi bi-patch-check"></i> Zero Deposit
                                        Fee</p>
                                    <button class="btn rounded-pill" data-bs-toggle="offcanvas"
                                        data-bs-target="#cartSidebar">Book Vehicle</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 product-card scooter" data-name="Honda Activa 6G"
                            data-price="8500" data-image="images/scooty2.png" data-type="scooter">
                            <div class="p-1 h-100">
                                <div class="card p-3 h-100">
                                    <img src="images/scooty2.png" alt="Honda Activa 6G" class="mb-3">
                                    <p class="text-uppercase small fw-semibold mb-0" style="color:#FF6500;">Honda</p>
                                    <h6 class="mb-1">Activa 6G</h6>
                                    <p class="fw-bold text-dark product-price">₹8,500</p>
                                    <p class="text-muted small mb-2"><i class="bi bi-patch-check"></i> Zero Deposit
                                        Fee</p>
                                    <button class="btn rounded-pill" data-bs-toggle="offcanvas"
                                        data-bs-target="#cartSidebar">Book Vehicle</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 product-card bike" data-name="Bajaj Pulsar NS200"
                            data-price="12500" data-image="images/bike.png" data-type="bike">
                            <div class="p-1 h-100">
                                <div class="card p-3 h-100">
                                    <img src="images/bike.png" alt="Bajaj Pulsar NS200" class="mb-3">
                                    <p class="text-uppercase small fw-semibold mb-0" style="color:#FF6500;">Bajaj</p>
                                    <h6 class="mb-1">Pulsar NS200</h6>
                                    <p class="fw-bold text-dark product-price">₹12,500</p>
                                    <p class="text-muted small mb-2"><i class="bi bi-patch-check"></i> Zero Deposit
                                        Fee</p>
                                    <button class="btn rounded-pill" data-bs-toggle="offcanvas"
                                        data-bs-target="#cartSidebar">Book Vehicle</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 product-card scooter" data-name="TVS Jupiter" data-price="8000"
                            data-image="images/scooty1.png" data-type="scooter">
                            <div class="p-1 h-100">
                                <div class="card p-3 h-100">
                                    <img src="images/scooty1.png" alt="TVS Jupiter" class="mb-3">
                                    <p class="text-uppercase small fw-semibold mb-0" style="color:#FF6500;">TVS</p>
                                    <h6 class="mb-1">Jupiter</h6>
                                    <p class="fw-bold text-dark product-price">₹8,000</p>
                                    <p class="text-muted small mb-2"><i class="bi bi-patch-check"></i> Zero Deposit
                                        Fee</p>
                                    <button class="btn rounded-pill" data-bs-toggle="offcanvas"
                                        data-bs-target="#cartSidebar">Book Vehicle</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 product-card bike" data-name="KTM Duke 200" data-price="15000"
                            data-image="images/bike.png" data-type="bike">
                            <div class="p-1 h-100">
                                <div class="card p-3 h-100">
                                    <img src="images/bike.png" alt="KTM Duke 200" class="mb-3">
                                    <p class="text-uppercase small fw-semibold mb-0" style="color:#FF6500;">KTM</p>
                                    <h6 class="mb-1">Duke 200</h6>
                                    <p class="fw-bold text-dark product-price">₹15,000</p>
                                    <p class="text-muted small mb-2"><i class="bi bi-patch-check"></i> Zero Deposit
                                        Fee</p>
                                    <button class="btn rounded-pill" data-bs-toggle="offcanvas"
                                        data-bs-target="#cartSidebar">Book Vehicle</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="cartSidebar" aria-labelledby="cartSidebarLabel">
        <div class="offcanvas-header border-bottom d-flex justify-content-between align-items-center">
            <h5 class="offcanvas-title" id="cartSidebarLabel">Your Cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body d-flex flex-column justify-content-between">
            <div class="cart-items" id="cartItemsContainer">
                <div class="d-flex align-items-center mb-3">
                    <p class="text-muted">Your cart is empty.</p>
                </div>
            </div>

            <div class="cart-summary border-top pt-3 mt-auto">
                <div class="d-flex justify-content-between fw-bold mb-2">
                    <span>Total:</span>
                    <span id="cartTotalDisplay">₹0.00</span>
                </div>
                <button class="btn btn-warning w-100">Checkout</button>
            </div>
        </div>
    </div>

    <?php
        include "footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Get references to DOM elements
        const filterButtons = document.querySelectorAll('[data-filter]');
        const products = document.querySelectorAll('.product-card');
        const filterSidebar = document.getElementById('filterSidebar');
        const toggleFilterSidebarBtn = document.getElementById('toggleFilterSidebarBtn');
        const sidebarCol = document.querySelector('.sidebar-col');
        const productGridContainer = document.getElementById('productGridContainer');
        const bookVehicleButtons = document.querySelectorAll('.product-card .btn');
        const cartItemsContainer = document.getElementById('cartItemsContainer');
        const cartTotalDisplay = document.getElementById('cartTotalDisplay');

        // Initialize cart data
        let cartItems = [];
        let cartTotal = 0;

        /**
         * Parses a price string (e.g., "₹9,009") into a number.
         * @param {string} priceString The price string to parse.
         * @returns {number} The parsed price as a number.
         */
        function parsePrice(priceString) {
            // Remove the currency symbol and commas, then parse as a float
            return parseFloat(priceString.replace('₹', '').replace(/,/g, ''));
        }

        /**
         * Renders the cart items and updates the total price in the UI.
         */
        function renderCart() {
            // Clear the existing cart items
            cartItemsContainer.innerHTML = '';

            if (cartItems.length === 0) {
                cartItemsContainer.innerHTML = '<p class="text-muted">Your cart is empty.</p>';
            } else {
                // Loop through each item in the cart array
                cartItems.forEach((item, index) => {
                    const cartItemHtml = `
                        <div class="d-flex align-items-center mb-3">
                            <img src="${item.image}" alt="${item.name}" class="rounded me-3" height="50px" width="50px">
                            <div class="flex-grow-1">
                                <h6 class="mb-0">${item.name}</h6>
                                <p class="text-muted small mb-0">₹${item.price.toLocaleString()}</p>
                            </div>
                            <div class="cart-item-actions">
                                <button class="btn btn-link btn-remove" data-action="remove" data-index="${index}">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </div>
                    `;
                    cartItemsContainer.insertAdjacentHTML('beforeend', cartItemHtml);
                });
            }

            // Update the total amount
            const total = cartItems.reduce((sum, item) => sum + item.price, 0);
            cartTotalDisplay.textContent = `₹${total.toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
        }

        /**
         * Adds a product to the cart and updates the UI.
         * @param {Event} event The click event object.
         */
        function addToCart(event) {
            // Get the parent card element of the clicked button
            const productCard = event.target.closest('.product-card');

            // Extract the product details from the card
            const productName = productCard.querySelector('h6').textContent;
            const productPriceString = productCard.querySelector('.product-price').textContent;
            const productImage = productCard.querySelector('img').src;

            // Create a new product object and add to cart array
            const newProduct = {
                name: productName,
                price: parsePrice(productPriceString),
                image: productImage
            };
            cartItems.push(newProduct);

            // Re-render the cart UI
            renderCart();
        }

        /**
         * Removes an item from the cart based on its index and updates the UI.
         * @param {number} index - The index of the item to remove.
         */
        function removeFromCart(index) {
            // Check if the index is valid
            if (index >= 0 && index < cartItems.length) {
                // Remove the item from the array
                cartItems.splice(index, 1);

                // Re-render the cart UI
                renderCart();
            }
        }

        // Add event listeners to all "Book Vehicle" buttons
        bookVehicleButtons.forEach(button => {
            button.addEventListener('click', addToCart);
        });

        // Add event listener to the cart items container using event delegation
        // This is more efficient than adding a listener to each individual "remove" button.
        cartItemsContainer.addEventListener('click', (event) => {
            const button = event.target.closest('[data-action="remove"]');
            if (button) {
                const index = parseInt(button.dataset.index, 10);
                removeFromCart(index);
            }
        });

        // ==========================================================
        // Existing Filtering & Layout Functions (unchanged)
        // ==========================================================

        /**
         * Filters product cards based on the selected filter category.
         * @param {string} filter - The data-filter value (e.g., 'all', 'bike', 'scooter').
         */
        function filterProducts(filter) {
            products.forEach(card => {
                // If 'all' is selected, show all cards
                if (filter === 'all') {
                    card.classList.remove('d-none');
                } else {
                    // Otherwise, show/hide based on whether the card has the filter class
                    card.classList.toggle('d-none', !card.classList.contains(filter));
                }
            });
        }

        // Add click event listeners to filter buttons
        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove 'active' class from all filter buttons
                filterButtons.forEach(b => b.classList.remove('active'));
                // Add 'active' class to the clicked button
                btn.classList.add('active');
                const filter = btn.getAttribute('data-filter');
                filterProducts(filter); // Apply the filter
            });
        });

        /**
         * Function to apply layout based on screen width
         */
        function applyLayout() {
            if (window.innerWidth >= 992) {
                // Desktop (lg and up): Sidebar next to products
                sidebarCol.classList.remove('col-12', 'expanded-mobile');
                sidebarCol.classList.add('col-lg-3');
                filterSidebar.style.display = 'block';

                productGridContainer.classList.remove('col-12');
                productGridContainer.classList.add('col-lg-9');

                products.forEach(card => {
                    card.classList.remove('col-12');
                    card.classList.add('col-sm-6', 'col-md-4');
                });
            } else {
                // Mobile (below lg): Sidebar on top, initially hidden
                sidebarCol.classList.remove('col-lg-3');
                sidebarCol.classList.add('col-12');
                filterSidebar.style.display = 'none';

                productGridContainer.classList.remove('col-lg-9');
                productGridContainer.classList.add('col-12');

                products.forEach(card => {
                    card.classList.remove('col-sm-6', 'col-md-4');
                    card.classList.add('col-12');
                });
            }
        }

        // Event listener for the mobile filter toggle button
        toggleFilterSidebarBtn.addEventListener('click', () => {
            sidebarCol.classList.toggle('expanded-mobile');
            filterSidebar.style.display = sidebarCol.classList.contains('expanded-mobile') ? 'block' : 'none';
        });

        // Handle window resize event to adjust layout
        window.addEventListener('resize', applyLayout);

        // Initial application of layout on page load
        window.addEventListener('load', () => {
            applyLayout();
            filterProducts('all');
            renderCart(); // Call renderCart on load to initialize empty cart state
        });
    </script>
</body>

</html>