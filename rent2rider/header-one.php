<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike Rental - Product Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="css/product-details.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-expand-lg sticky-top">
        <div class="container d-flex align-items-center justify-content-between">

            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#mobileMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand mx-auto d-lg-none" href="#">
                <img src="images/Rent2Rider-logo-2.png" alt="logo" />
            </a>

            <div class="d-flex d-lg-none align-items-center gap-3">
                <a href="#" class="position-relative">
                    <i class="bi bi-heart fs-5"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge-custom">2</span>
                </a>
                <a href="#" class="position-relative">
                    <i class="bi bi-cart fs-5"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge-custom">5</span>
                </a>
            </div>

            <a class="navbar-brand d-none d-lg-block" href="#">
                <img src="images/Rent2Rider-logo-2.png" alt="logo" />
            </a>

            <div class="collapse navbar-collapse justify-content-end d-none d-lg-flex align-items-center"
                id="navbarNav">
                <ul class="navbar-nav me-3 d-flex flex-row gap-3 align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Disclaimer</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Rent Policy</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Refund Policy</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Privacy Policy</a></li>
                </ul>

                <div class="d-flex align-items-center gap-3">
                    <a href="#" class="position-relative">
                        <i class="bi bi-heart fs-5"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge-custom">2</span>
                    </a>
                    <a href="#" class="position-relative">
                        <i class="bi bi-cart fs-5"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge-custom">5</span>
                    </a>
                    <a href="#" class="position-relative mx-2" data-bs-toggle="offcanvas" data-bs-target="#profileMenu">
                        <i class="bi bi-person-circle fs-4 text-dark"></i>
                    </a>

                </div>


            </div>

        </div>
    </nav>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="profileMenu">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Welcome</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"
                style="margin-left: 300px;"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column justify-content-between">
            <div>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0">Please Login</h6>
                            <small class="text-muted">Access your account</small>
                        </div>
                        <button class="btn btn-warning btn-sm">Login</button>
                    </li>
                    <li class="list-group-item">Create Account</li>
                    <li class="list-group-item fw-semibold bg-light">Other Information</li>
                    <li class="list-group-item"><i class="bi bi-file-earmark-text me-2"></i> Terms & Conditions</li>
                    <li class="list-group-item"><i class="bi bi-shield-check me-2"></i> Privacy Policy</li>
                    <li class="list-group-item"><i class="bi bi-arrow-left-circle me-2"></i> Refund Policy</li>
                </ul>
            </div>
            <div class="text-center mt-auto">
                <a href="logout.php" class="btn btn-danger w-100">Logout</a>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>


        <div class="offcanvas-body">
            <ul class="nav nav-tabs" id="menuTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="menu-tab" data-bs-toggle="tab" data-bs-target="#menuTab"
                        type="button">MENU</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="category-tab" data-bs-toggle="tab" data-bs-target="#categoryTab"
                        type="button">CATEGORIES</button>
                </li>
            </ul>

            <div class="tab-content pt-3" id="menuTabsContent">
                <div class="tab-pane fade show active" id="menuTab">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1 fw-semibold">Testing</h6>
                                <small>testing@gmail.com</small>
                            </div>
                            <i class="bi bi-person fs-4 text-primary"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-0">Please Login</h6>
                                <small class="text-muted">Login to use</small>
                            </div>
                            <button class="btn btn-warning btn-sm">Login</button>
                        </li>
                        <li class="list-group-item"><span>About Us</span></li>
                        <li class="list-group-item"><span>FAQ</span></li>
                        <li class="list-group-item"><span>Disclaimer</span></li>
                        <li class="list-group-item"><span>Rent Policy</span></li>
                        <li class="list-group-item"><span>Refund Policy</span></li>
                        <li class="list-group-item"><span>Privacy Policy</span></li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><i class="bi bi-geo-alt"></i> My Address</span>
                            <span class="badge" style="background-color: #FF6500;">Location</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><i class="bi bi-bag-heart"></i> My Wishlist</span>
                            <span class="badge" style="background-color: #FF6500;">Dream List</span>
                        </li>
                        <li class="list-group-item"><i class="bi bi-cash"></i> Coupon Code</li>
                        <li class="list-group-item text-center">
                            <div class="d-flex justify-content-center gap-4">
                                <a href="#" class="text-dark fs-4"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="text-dark fs-4"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="text-dark fs-4"><i class="bi bi-twitter-x"></i></a>
                            </div>
                        </li>
                        <li class="list-group-item text-center mt-3">
                            <a href="logout.php" class="btn btn-outline-danger w-100">Logout</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-pane fade" id="categoryTab">
                    <div class="row g-2">
                        <div class="col-6">
                            <a href="#" class="text-decoration-none d-block text-center">
                                <div class="category-box border rounded p-2">
                                    <img src="images/RIGHT-Yamaha FZX-01.png" alt="Bike" class="img-fluid mb-2">
                                    <div class="category-title fw-semibold text-dark">Bike</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="text-decoration-none d-block text-center">
                                <div class="category-box border rounded p-2">
                                    <img src="images/scooty1.png" alt="Scooty" class="img-fluid mb-2">
                                    <div class="category-title fw-semibold text-dark">Scooty</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>