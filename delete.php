<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/22e8e00c37.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="delete.css">
</head>
<body>
    
       <div class="topbar sticky-top">
          <div>
            <img src="Images/WhatsApp Image 2025-08-01 at 15.19.15_127fcabb.jpg" alt="logo" class="logo">
          </div>
          <div class="d-flex py-2">
             <div class="py-2"><i class="fa-solid fa-bars"></i></div>
          <div class="search">
            <label for="search"><i class="fa-solid fa-magnifying-glass"></i></label>
            <input type="text" placeholder="Search here">
          </div>
          </div>
          <div class="d-flex gap-3">
            <div class="d-flex gap-2 py-3 gap-3">
                <li class="nav-item" style="list-style: none;"><a href="#" class="nav-link">English <i class="fa-solid fa-chevron-down"></i></a></li>
                <i class="fa-solid fa-bell py-1"></i>
                 <i class="fa-solid fa-cloud py-1"></i>
            </div>
            <img src="Images/10003.jpg" alt="logo" class="logu">
            <span>Admin<br><a href="#" class="join">Seth dorsey</a></span>
          </div>
       </div>

       <div class="sidebar">
          <div>
             <ul>
                <div class="text-muted px-3">Main</div>
                <li><a href="#"><i class="fa-solid fa-house"></i> Dashboard</a></li>
            </ul>
            </div>
            <div>
               <ul>
                <div class="text-muted px-3">Inventory</div>
                 <li><a href="product.html"><i class="fa-solid fa-plus"></i></i>Create Products</a></li>
                <li><a href="products.html"> <i class="fa-solid fa-boxes-stacked"></i>Product</a></li>
                 <li><a href="category.html"><i class="fa-solid fa-layer-group"></i>Categories</a></li>
            </ul> 
            </div>
             <div>  
             <ul>
                 <div class="text-muted px-3">Quick action</div>
                <li><a href="supplier.html"><i class="fa-solid fa-users"></i>Suppliers</a></li>
                <li><a href="customer.html"><i class="fa-solid fa-user-plus"></i> Customers</a></li>
                <li><a href="warehouse.html"><i class="fa-solid fa-house-circle-check"></i>Warehouse</a></li>
             </ul>
            </div>

            <div>
            <ul>
                <div class="text-muted px-3">Orders</div>
                  <li><a href="purchase.html"><i class="fa-solid fa-bag-shopping"></i>Purchases</a></li>
                  <li><a href="#"> <i class="fa-solid fa-file-arrow-up"></i>Purchase Order</a></li>
                  <li><a href="#"> <i class="fa-solid fa-file-arrow-down"></i>Purchase Returns</a></li>
            </ul>
            </div>
            <div>
            <ul>
                <div class="text-muted px-3">Sales Report</div>
                <li><a href="purchaserep.html"><i class="fa-solid fa-chart-pie"></i>Purchases Report</a></li>
                <li><a href="inventoryrep.html"><i class="fa-solid fa-filter"></i>Inventory Report</a></li>
                <li><a href="invoicereport.html"> <i class="fa-solid fa-coins"></i>Invoice Reports</a></li>
            </ul>
            </div>
            <div>
            <ul>
                <div class="text-muted px-3">Users Management</div>
                <li><a href="user.html"><i class="fa-solid fa-shield-halved"></i>Users</a></li>
            </ul>
            </div>
             <div>
                <ul>
                     <div class="text-muted px-3">Settings</div>
                    <li><a href="setting.html"><i class="fa-solid fa-gear"></i>General Settings</a></li>
                </ul>
            </div>
        </div>
          <div class="content container-fluid">
      <div
        class="first-header d-flex justify-content-between align-items-center"
      >
        <div>
          <h2 class="my-1">Confirm Delete</h2>
        </div>

        <div class="d-flex gap-4">
          <button class="btn border-0 px-3 py-2 small">
            <i class="fa-solid fa-arrows-rotate small"></i>
          </button>

          <button class="btn border-0 p-2 small">
            <i class="fa-solid fa-plus small me-2"></i>
            Add Adjustment
          </button>
        </div>
      </div>
    </div>

    <div class="content container-fluid">
      <div>
        <form class="was-validated">
          <div>
            <p>Are you sure you want to delete this account?</p>
            <p>If "Not" then presss the cancel button below</p>
            <p>If "Yes" then type the word "delete" in the field below</p>
          </div>

          <div class="mb-3 mt-3">
            <input
              type="text"
              class="form-control shadow-none"
              id="uname"
              placeholder="Type Here...."
              name="uname"
              required
            />
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <button type="submit" class="btn btn-primary" id="submitBtn" disabled>Delete</button>
        </form>
      </div>
    </div>
  </body>
</html>
<script>
  $(document).ready(function () {
    const $input = $("#uname");
    const $submitBtn = $("#submitBtn");

    $input.on("input", function () {
      if ($input.val().trim().toLowerCase() === "delete") {
        $submitBtn.prop("disabled", false);
      } else {
        $submitBtn.prop("disabled", true);
      }
    });

    $("#deleteForm").on("submit", function (e) {
      if ($input.val().trim().toLowerCase() !== "delete") {
        e.preventDefault();
        alert("You must type 'delete' to confirm.");
      }
    });
  });
</script>