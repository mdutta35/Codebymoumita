<?php
include "header.php";
?>

    <!-- Main Content Area -->
    <main class="container py-4">
        <div class="row g-4">

            <!-- Left Column - Profile Summary -->
            <div class="col-lg-4">
                <div class="card profile-card p-4">
                    <div class="d-flex flex-column align-items-center mb-4 text-center">
                        <div
                            class="profile-avatar-container rounded-circle d-flex justify-content-center align-items-center mb-4">
                            <svg class="profile-avatar-icon" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="profile-name app-primary-text-orange mb-1">Name</div>
                        <div class="profile-member-badge app-primary-bg-orange text-white">Profile</div>
                        <!-- <h6 class="profile-status text-secondary mt-2">Profile</h6> -->
                        <p class="profile-email text-muted">abc@gmail.com</p>
                        <p class="profile-email text-muted">+91 569875 26987</p>
                        <a href="#" class="profile-logout-link">Log Out</a>
                    </div>
                </div>
            </div>

            <!-- Right Column - Profile Details Accordion -->
            <div class="col-lg-8">
                <div class="accordion" id="profile-page-accordion">
                    <!-- Personal Details -->
                    <div class="accordion-item card shadow-sm mb-2">
                        <h2 class="accordion-header" id="headingPersonalDetails">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsePersonalDetails" aria-expanded="true"
                                aria-controls="collapsePersonalDetails">
                                Personal Details
                            </button>
                        </h2>
                        <div id="collapsePersonalDetails" class="accordion-collapse collapse show"
                            aria-labelledby="headingPersonalDetails" data-bs-parent="#profile-page-accordion">
                            <div class="accordion-body">
                                <form class="space-y-4">
                                    <div class="mb-3">
                                        <label for="fullName" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="fullName" placeholder="John Doe">
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailAddress" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="emailAddress"
                                            placeholder="abc@gmail.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phoneNumber" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="phoneNumber"
                                            placeholder="+91 9876543210">
                                    </div>
                                    <div class="mb-3">
                                        <label for="accountStatus" class="form-label">Account Status</label>
                                        <input type="text" class="form-control" id="accountStatus" placeholder="Active"
                                            disabled>
                                    </div>
                                    <button type="submit"
                                        class="btn app-primary-bg-orange text-white app-hover-bg-orange-dark">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Wallet Balance -->
                    <div class="accordion-item card shadow-sm mb-2">
                        <h2 class="accordion-header" id="headingWalletBalance">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseWalletBalance" aria-expanded="false"
                                aria-controls="collapseWalletBalance">
                                Wallet Balance
                            </button>
                        </h2>
                        <div id="collapseWalletBalance" class="accordion-collapse collapse"
                            aria-labelledby="headingWalletBalance" data-bs-parent="#profile-page-accordion">
                            <div class="accordion-body">
                                <p class="text-secondary mb-2"><strong>Available Balance:</strong> ₹500</p>
                                <a href="#" class="btn btn-primary btn-sm">Add Money</a>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="accordion-item card shadow-sm mb-2">
                        <h2 class="accordion-header" id="headingRecentActivity">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseRecentActivity" aria-expanded="false"
                                aria-controls="collapseRecentActivity">
                                Recent Activity
                            </button>
                        </h2>
                        <div id="collapseRecentActivity" class="accordion-collapse collapse"
                            aria-labelledby="headingRecentActivity" data-bs-parent="#profile-page-accordion">
                            <div class="accordion-body">
                                <ul class="list-unstyled space-y-1 text-secondary">
                                    <li>Booked Yamaha FZX - ₹1500</li>
                                    <li>Added ₹200 to wallet</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Change Password -->
                    <div class="accordion-item card shadow-sm mb-2">
                        <h2 class="accordion-header" id="headingChangePassword">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseChangePassword" aria-expanded="false"
                                aria-controls="collapseChangePassword">
                                Change Password
                            </button>
                        </h2>
                        <div id="collapseChangePassword" class="accordion-collapse collapse"
                            aria-labelledby="headingChangePassword" data-bs-parent="#profile-page-accordion">
                            <div class="accordion-body">
                                <form class="space-y-3">
                                    <div class="mb-3">
                                        <input type="password" class="form-control" placeholder="Current Password">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" placeholder="New Password">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" placeholder="Confirm Password">
                                    </div>
                                    <button type="submit"
                                        class="btn app-primary-bg-orange text-white app-hover-bg-orange-dark">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- My Order -->
                    <div class="accordion-item card shadow-sm mb-2">
                        <h2 class="accordion-header" id="headingMyOrder">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseMyOrder" aria-expanded="false" aria-controls="collapseMyOrder">
                                My Order
                            </button>
                        </h2>
                        <div id="collapseMyOrder" class="accordion-collapse collapse" aria-labelledby="headingMyOrder"
                            data-bs-parent="#profile-page-accordion">
                            <div class="accordion-body">
                                <ul class="list-unstyled space-y-1 text-secondary">
                                    <li>Order #1234 - Delivered</li>
                                    <li>Order #5678 - Pending</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- My Wishlist -->
                    <!-- <div class="accordion-item card shadow-sm mb-2">
                        <h2 class="accordion-header" id="headingMyWishlist">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseMyWishlist" aria-expanded="false"
                                aria-controls="collapseMyWishlist">
                                My Wishlist
                            </button>
                        </h2>
                        <div id="collapseMyWishlist" class="accordion-collapse collapse"
                            aria-labelledby="headingMyWishlist" data-bs-parent="#profile-page-accordion">
                            <div class="accordion-body">
                                <ul class="list-unstyled space-y-1 text-secondary">
                                    <li>Royal Enfield Classic 350</li>
                                    <li>Honda Activa 6G</li>
                                </ul>
                            </div>
                        </div>
                    </div> -->

                    <!-- New Section: Account Settings with a Dropdown -->
                    <div class="accordion-item card shadow-sm mb-2">
                        <h2 class="accordion-header" id="headingAccountSettings">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseAccountSettings" aria-expanded="false"
                                aria-controls="collapseAccountSettings">
                                Account Settings
                            </button>
                        </h2>
                        <div id="collapseAccountSettings" class="accordion-collapse collapse"
                            aria-labelledby="headingAccountSettings" data-bs-parent="#profile-page-accordion">
                            <div class="accordion-body">
                                <div class="space-y-4">
                                    <!-- Dropdown element with a label -->
                                    <div class="mb-3">
                                        <label for="profile-theme-select" class="form-label">Select Theme</label>
                                        <select id="profile-theme-select" class="form-select">
                                            <option value="light">Light Mode</option>
                                            <option value="dark">Dark Mode</option>
                                            <option value="system">System Default</option>
                                        </select>
                                    </div>
                                    <!-- Element to display the current selection -->
                                    <p class="text-secondary">Current Theme: <span id="current-profile-theme"
                                            class="fw-semibold app-primary-text-orange">light</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="footer-section text-light pt-5 pb-3" style="background-color: #FFC778;">
        <div class="container">
            <div class="row gy-4 text-center text-md-start">

                <!-- Logo & Description -->
                <div class="col-12 col-sm-6 col-md-3">
                    <img src="images/Rent2Rider-logo-2.png" width="150" alt="Rent 2 Rider Logo" class="mb-2">
                    <p class="c-details text-dark">
                        We are one of the most well-known bike rental companies in Siliguri, offering high-quality
                        two-wheelers for rent.
                    </p>
                </div>

                <!-- Company -->
                <div class="col-6 col-md-3">
                    <h6 class="text-dark fw-bold mb-3">Company</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link">Home</a></li>
                        <li><a href="#" class="footer-link">Price</a></li>
                        <li><a href="#" class="footer-link">About us</a></li>
                        <li><a href="#" class="footer-link">Contact us</a></li>
                        <li><a href="#" class="footer-link">FAQ</a></li>
                    </ul>
                </div>

                <!-- Service -->
                <div class="col-6 col-md-3">
                    <h6 class="text-dark fw-bold mb-3">Service</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link">Bike</a></li>
                        <li><a href="#" class="footer-link">Accessories</a></li>
                        <li><a href="#" class="footer-link">Siliguri</a></li>
                        <li><a href="#" class="footer-link">Darjeeling</a></li>
                        <li><a href="#" class="footer-link">Sikkim</a></li>
                    </ul>
                </div>

                <!-- Legal -->
                <div class="col-6 col-md-3">
                    <h6 class="text-dark fw-bold mb-3">Legal Pages</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link">Disclaimer</a></li>
                        <li><a href="#" class="footer-link">Rent Policy</a></li>
                        <li><a href="#" class="footer-link">Refund Policy</a></li>
                        <li><a href="#" class="footer-link">Privacy Policy</a></li>
                    </ul>
                </div>

            </div>

            <div class="text-center text-muted small mt-4">
                &copy; 2025 Rent 2 Rider. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle for interactive components -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        // Get references to the new dropdown and its display element
        const themeSelect = document.getElementById('profile-theme-select');
        const currentThemeSpan = document.getElementById('current-profile-theme');

        // Add an event listener to the dropdown to update the displayed text
        if (themeSelect) {
            themeSelect.addEventListener('change', (event) => {
                // Update the text to show the currently selected option
                currentThemeSpan.textContent = event.target.value;
            });
        }
    </script>
</body>

</html>