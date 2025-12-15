<?php include 'header.php'; ?>

<div class="invoice_page_body bg-light py-5">
  <div class="container">

    <!-- Invoice Card -->
    <div id="invoice-content" class="invoice-card bg-white p-4 rounded shadow-sm mx-auto" style="max-width: 800px;">

      <!-- Logo and Title -->
      <div class="text-center mb-4">
        <img src="images/logo.png" alt="Logo" style="height: 40px;">
        <h5 class="fw-bold mt-3 text-danger">Final Details for Order <span class="text-dark">#114-4506568-8577835</span></h5>
      </div>

      <!-- Order Info -->
      <div class="mb-4 small">
        <div><strong>Order Placed:</strong> July 17, 2025</div>
        <div><strong>Amazon.com order number:</strong> 114-4506568-8577835</div>
        <div><strong>Order Total:</strong> <span class="fw-bold">₹4000</span></div>
      </div>

      <!-- Shipping Details -->
      <div class="p-3 rounded mb-4" style="background-color:#cff4fc; color:#055160;">
        <h6 class="mb-2 fw-bold">Shipped on July 18, 2025</h6>
        <p class="mb-1"><strong>Items Ordered:</strong></p>
        <p class="mb-0">1 of: Ring</p>
        <p class="small text-muted mb-2">Condition: New — New from the factory</p>
        <div><strong>Price:</strong> ₹4000</div>
      </div>

      <!-- Shipping Address -->
      <div class="mb-3">
        <h6 class="fw-bold">Shipping Address</h6>
        <p class="mb-0">M Dutta</p>
        <p class="mb-0">Flat 101, Galaxy Apartments</p>
        <p class="mb-0">Kolkata, West Bengal - 700016</p>
        <p class="mb-0">India</p>
      </div>

      <!-- Shipping Method -->
      <div class="mb-4 small">
        <div><strong>Shipping Speed:</strong> Standard</div>
        <div><strong>Total for This Shipment:</strong> ₹4000</div>
      </div>

      <!-- Payment Info -->
      <div class="invoice-divider border-top my-3"></div>
      <h6 class="fw-bold mb-2">Payment Information</h6>

      <div class="small">
        <div><strong>Payment Method:</strong> MasterCard | Last digits: 4564</div>
        <div><strong>Billing Address:</strong></div>
        <p class="mb-0">Flat 101, Galaxy Apartments</p>
        <p class="mb-0">Park Street, Near Metro</p>
        <p class="mb-0">Kolkata, West Bengal - 700016</p>
        <p class="mb-3">India</p>

        <div><strong>Item(s) Subtotal:</strong> ₹4000</div>
        <div><strong>Shipping & Handling:</strong> ₹0</div>
        <div><strong>Total before tax:</strong> ₹4000</div>
        <div><strong>Sales Tax:</strong> ₹0</div>
        <div class="fw-bold mt-2">Grand Total: <span class="text-danger">₹4000</span></div>
      </div>
    </div>

    <!-- Print & Download Buttons -->
    <div class="d-flex flex-column flex-sm-row justify-content-center gap-3 mt-4">
      <button onclick="printInvoice()" class="btn btn-outline-dark">
        <i class="bi bi-printer me-1"></i> Print
      </button>
      <button onclick="downloadInvoice()" class="btn btn-dark">
        <i class="bi bi-download me-1"></i> Download
      </button>
    </div>

  </div>
</div>

<!-- Print & Download Script -->
<script>
  function printInvoice() {
    const content = document.getElementById("invoice-content").innerHTML;
    const win = window.open('', '', 'height=700,width=900');

    win.document.write(`
      <html>
        <head>
          <title>Invoice</title>
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
          <style>
            @media print {
              @page { margin: 0; }
              body { margin: 1cm; }
            }
          </style>
        </head>
        <body class="p-4">
          ${content}
        </body>
      </html>
    `);

    win.document.close();
    win.focus();
    setTimeout(() => {
      win.print();
    }, 500);
  }

  function downloadInvoice() {
    printInvoice(); // Later you can use html2pdf.js or jsPDF
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'footer.php'; ?>
