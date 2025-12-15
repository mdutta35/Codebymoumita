<?php
include "header.php";
?>
    
    <!-- Hero Section on top of the page -->
    <header class="coupon-hero-section">
        <h1 class="display-5 fw-bold mb-3">Your Journey Awaits!</h1>
        <p class="fs-5">Claim these exclusive coupons and start riding today.</p>
    </header>
    
    <!-- Main Content Area -->
    <main class="container py-4">
        <h2 class="text-center fw-bold mb-4">Available Coupons</h2>
        <div class="row g-4 justify-content-center">
            
            <!-- First Coupon Card -->
            <div class="col-sm-10 col-md-8 col-lg-6">
                <div class="card coupon-card p-4">
                    <div class="d-flex align-items-center mb-3">
                        <span class="d-inline-block p-2 rounded-circle app-primary-bg-orange text-white me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-tag-fill" viewBox="0 0 16 16">
                                <path d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2zm5.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                            </svg>
                        </span>
                        <div>
                            <h5 class="card-title fw-semibold mb-0 app-primary-text-orange">GET ₹100 OFF</h5>
                            <p class="card-subtitle text-muted fs-6">on your next ride of ₹500 or more.</p>
                        </div>
                    </div>
                    <div class="coupon-code-container mb-3 d-flex justify-content-between align-items-center">
                        <span class="coupon-code" id="coupon-code-1">RIDE100OFF</span>
                        <button class="btn app-primary-bg-orange text-white btn-sm" data-copy-target="coupon-code-1">Copy</button>
                    </div>
                    <div class="text-muted fs-6">
                        <p class="mb-1">Valid until: 31st Dec 2024</p>
                        <p class="mb-0">Terms & conditions apply.</p>
                    </div>
                </div>
            </div>

            <!-- Second Coupon Card -->
            <div class="col-sm-10 col-md-8 col-lg-6">
                <div class="card coupon-card p-4">
                    <div class="d-flex align-items-center mb-3">
                        <span class="d-inline-block p-2 rounded-circle app-primary-bg-orange text-white me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                                <path d="M14 3H1c-.552 0-1 .448-1 1v1a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 2H2V4h11v1zm-2 2H2v1h11V7zm-2 2H2v1h11v-1zm-2 2H2v1h11v-1z"/>
                            </svg>
                        </span>
                        <div>
                            <h5 class="card-title fw-semibold mb-0 app-primary-text-orange">SAVE 20% ON WEEKENDS</h5>
                            <p class="card-subtitle text-muted fs-6">on any two-day booking.</p>
                        </div>
                    </div>
                    <div class="coupon-code-container mb-3 d-flex justify-content-between align-items-center">
                        <span class="coupon-code" id="coupon-code-2">WEEKEND20</span>
                        <button class="btn app-primary-bg-orange text-white btn-sm" data-copy-target="coupon-code-2">Copy</button>
                    </div>
                    <div class="text-muted fs-6">
                        <p class="mb-1">Valid until: 31st Dec 2024</p>
                        <p class="mb-0">Only for Saturday and Sunday bookings.</p>
                    </div>
                </div>
            </div>

        </div>
    </main>


    
<?php
        include "footer.php";
    ?>
    
    <!-- Bootstrap JS Bundle for interactive components -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('[data-copy-target]').forEach(button => {
                button.addEventListener('click', (event) => {
                    const targetId = event.target.getAttribute('data-copy-target');
                    const targetElement = document.getElementById(targetId);
                    
                    if (targetElement) {
                        // Create a temporary input element to hold the text to be copied
                        const tempInput = document.createElement('textarea');
                        tempInput.value = targetElement.textContent;
                        document.body.appendChild(tempInput);
                        tempInput.select();
                        
                        try {
                            const successful = document.execCommand('copy');
                            const originalText = event.target.textContent;
                            
                            // Provide user feedback
                            event.target.textContent = 'Copied!';
                            
                            // Revert button text after a short delay
                            setTimeout(() => {
                                event.target.textContent = originalText;
                            }, 2000);
                        } catch (err) {
                            console.error('Failed to copy text: ', err);
                        }
                        
                        // Clean up the temporary element
                        document.body.removeChild(tempInput);
                    }
                });
            });
        });
    </script>
</body>
</html>
