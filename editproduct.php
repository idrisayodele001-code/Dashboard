<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/22e8e00c37.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="editproduct.css">
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
                 <li><a href="product.html"><i class="fa-solid fa-cart-shopping"></i>Create Products</a></li>
                <li><a href="product.html"><i class="fa-solid fa-house"></i>Product</a></li>
                 <li><a href="category.html"><i class="fa-solid fa-cart-shopping"></i>Category</a></li>
            </ul> 
            </div>
             <div>  
             <ul>
                 <div class="text-muted px-3">Quick action</div>
                <li><a href="supplier.html"><i class="fa-solid fa-cart-shopping"></i>Suppliers</a></li>
                <li><a href="customer.html"><i class="fa-solid fa-users"></i> Customers</a></li>
                <li><a href="warehouse.html"><i class="fa-solid fa-users"></i>Warehouse</a></li>
             </ul>
            </div>
            
            <div>
            <ul>
                <div class="text-muted px-3">Orders</div>
                  <li><a href="p"><i class="fa-solid fa-house"></i>Purchases</a></li>
                  <li><a href="#"><i class="fa-solid fa-house"></i>Purchase Order</a></li>
                  <li><a href="#"><i class="fa-solid fa-house"></i>Purchase Returns</a></li>
            </ul>
            </div>
            <div>
            <ul>
                <div class="text-muted px-3">Sales Report</div>
                <li><a href="#"><i class="fa-solid fa-house"></i>Purchases Report</a></li>
                <li><a href="#"><i class="fa-solid fa-house"></i>Inventory Report</a></li>
                <li><a href="#"><i class="fa-solid fa-house"></i>Invoice Reports</a></li>

            </ul>
            </div>
            <div>
            <ul>
                <div class="text-muted px-3">Users Management</div>
                <li><a href="#"><i class="fa-solid fa-house"></i>Users</a></li>
            </ul>
            </div>
             <div>
            <ul>
                <div class="text-muted px-3">Settings</div>
                <li><a href="#"><i class="fa-solid fa-house"></i>General Settings</a></li>
            </ul>
            </div>
        </div>
          <!-- Body Part -->
        <div class="content">
			<div class="container px-2 px-md-4 mt-4 w-100">
				<div class="d-flex justify-content-between align-items-center mb-4">
					<div>
						<h2 class="my-0">Edit Product</h2>
						<p class="my-0 small text-muted">Update product details below</p>
					</div>
				</div>

				<form class="bg-white p-4 rounded shadow-sm">
					<div class="row g-3">
						<div class="col-md-4">
							<label class="form-label">SKU</label>
							<input type="text" class="form-control" value="PC-MOUSE-001">
						</div>
						<div class="col-md-4">
							<label class="form-label">Product Name</label>
							<input type="text" class="form-control" value="Wireless Ergonomic Mouse">
						</div>
						<div class="col-md-4">
							<label class="form-label">Category</label>
							<input type="text" class="form-control" value="Electronics">
						</div>
						<div class="col-md-4">
							<label class="form-label">Brand</label>
							<input type="text" class="form-control" value="Logitech">
						</div>
						<div class="col-md-4">
							<label class="form-label">Price</label>
							<input type="number" class="form-control" value="25.50" step="0.01">
						</div>
						<div class="col-md-4">
							<label class="form-label">Unit</label>
							<input type="text" class="form-control" value="Each">
						</div>
						<div class="col-md-4">
							<label class="form-label">Quantity</label>
							<input type="number" class="form-control" value="150">
						</div>
						<div class="col-md-4">
							<label class="form-label">Created By</label>
							<input type="text" class="form-control" value="John Doe">
						</div>
						<div class="col-md-4">
							<label class="form-label">Product ID</label>
							<input type="text" class="form-control" value="PROD-5678">
						</div>
						<div class="col-md-4">
							<label class="form-label">Sub-Category</label>
							<input type="text" class="form-control" value="Peripherals">
						</div>
						<div class="col-md-4">
							<label class="form-label">Batch Number</label>
							<input type="text" class="form-control" value="B-20240822">
						</div>
						<div class="col-md-4">
							<label class="form-label">Stock Quantity</label>
							<input type="number" class="form-control" value="150">
						</div>
						<div class="col-md-4">
							<label class="form-label">Reorder Level</label>
							<input type="number" class="form-control" value="25">
						</div>
						<div class="col-md-4">
							<label class="form-label">Reorder Quantity</label>
							<input type="number" class="form-control" value="50">
						</div>
						<div class="col-md-4">
							<label class="form-label">Unit Cost Price</label>
							<input type="number" class="form-control" value="15.00" step="0.01">
						</div>
						<div class="col-md-4">
							<label class="form-label">Unit Selling Price</label>
							<input type="number" class="form-control" value="25.50" step="0.01">
						</div>
						<div class="col-md-4">
							<label class="form-label">Discount (%)</label>
							<input type="number" class="form-control" value="5">
						</div>
						<div class="col-md-4">
							<label class="form-label">Tax (%)</label>
							<input type="number" class="form-control" value="8">
						</div>
						<div class="col-md-4">
							<label class="form-label">Total Value</label>
							<input type="number" class="form-control" value="3825.00" step="0.01">
						</div>
						<div class="col-md-4">
							<label class="form-label">Supplier Name</label>
							<input type="text" class="form-control" value="Tech Gadgets Inc.">
						</div>
						<div class="col-md-4">
							<label class="form-label">Supplier Contact</label>
							<input type="text" class="form-control" value="+1 (555) 123-4567">
						</div>
						<div class="col-md-4">
							<label class="form-label">Expiry Date</label>
							<input type="date" class="form-control" value="2026-12-31">
						</div>
						<div class="col-md-4">
							<label class="form-label">Manufacture Date</label>
							<input type="date" class="form-control" value="2024-07-01">
						</div>
						<div class="col-md-4">
							<label class="form-label">Warehouse Location</label>
							<input type="text" class="form-control" value="Warehouse A, Shelf 3">
						</div>
						<div class="col-md-4">
							<label class="form-label">Status</label>
							<select class="form-select">
								<option selected>In Stock</option>
								<option>Out of Stock</option>
								<option>Discontinued</option>
							</select>
						</div>
						<div class="col-md-4">
							<label class="form-label">Date Added</label>
							<input type="date" class="form-control" value="2024-08-22">
						</div>
						<div class="col-md-4">
							<label class="form-label">Last Updated</label>
							<input type="date" class="form-control" value="2024-08-22">
						</div>
						<div class="col-12">
							<label class="form-label">Notes/Remarks</label>
							<textarea class="form-control" rows="2">Initial stock. Requires reorder soon.</textarea>
						</div>
					</div>
					<div class="d-flex justify-content-end gap-3 mt-4">
						<button type="submit" class="btn btn-success px-4">
							<i class="fa-solid fa-floppy-disk me-2"></i>Save
						</button>
						<a href="product.html" class="btn btn-secondary px-4">
							<i class="fa-solid fa-xmark me-2"></i>Cancel
						</a>
					</div>
				</form>
			</div>
		</div>
</body>
</html>