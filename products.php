<?php
include '/xampp/htdocs/student_class/db.php';
include 'xampp/htdocs/student_class/function.php';
$product = getproduct();
?>

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
    <link rel="stylesheet" href="product.css">
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
				<div class="d-flex justify-content-between align-items-center">
					<div>
						<h2 class="my-0">Products Adjustment</h2>
						<p class="my-0 small text-muted">Manage your Stock Adjustment</p>
					</div>

					<div class="d-flex gap-4">
						<button class="border-0 px-3 py-2 small">
							<i class="fa-solid fa-arrows-rotate small"></i>
						</button>
						<button class="border-0 p-2 small">
							<i class="fa-solid fa-plus small me-2"></i>
							Add Adjustment
						</button>
					</div>
				</div>

				<div class="w-100 mt-5" style="overflow-x: auto;">
					<table class="w-100 table">
						<thead>
							<tr>
								<th></th>
								<th>SKU</th>
								<th>Product Name</th>
								<th>Category</th>
								<th>Brand</th>
								<th>Price</th>
								<th>Unit</th>
								<th>Quantity</th>
								<th>Created By</th>
								<th>Product ID</th>
								<th>Sub-Category</th>
								<th>Batch Number</th>
								<th>Stock Quantity</th>
								<th>Reorder Level</th>
								<th>Reorder Quantity</th>
								<th>Unit Cost Price</th>
								<th>Unit Selling Price</th>
								<th>Discount (%)</th>
								<th>Tax (%)</th>
								<th>Total Value</th>
								<th>Supplier Name</th>
								<th>Supplier Contact</th>
								<th>Expiry Date</th>
								<th>Manufacture Date</th>
								<th>Warehouse Location</th>
								<th>Status</th>
								<th>Date Added</th>
								<th>Last Updated</th>
								<th>Notes/Remarks</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td><input type="checkbox" /></td>
								<td>PC-MOUSE-001</td>
								<td>Wireless Ergonomic Mouse</td>
								<td>Electronics</td>
								<td>Logitech</td>
								<td>$25.50</td>
								<td>Each</td>
								<td>150</td>
								<td>John Doe</td>
								<td>PROD-5678</td>
								<td>Peripherals</td>
								<td>B-20240822</td>
								<td>150</td>
								<td>25</td>
								<td>50</td>
								<td>$15.00</td>
								<td>$25.50</td>
								<td>5%</td>
								<td>8%</td>
								<td>$3825.00</td>
								<td>Tech Gadgets Inc.</td>
								<td>+1 (555) 123-4567</td>
								<td>2026-12-31</td>
								<td>2024-07-01</td>
								<td>Warehouse A, Shelf 3</td>
								<td>In Stock</td>
								<td>2024-08-22</td>
								<td>2024-08-22</td>
								<td class="d-flex gap-5">Initial stock. Requires reorder soon.

							 <td>
								<div class="dropdown">
									<button class="btn bg-success text-white" role="button" data-bs-toggle="dropdown">
										<i class="fa-solid fa-pen-to-square text-white"></i>
									</button>

									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="editproduct.html">Edit</a></li>
										<li><a class="dropdown-item" href="delete.html">Delete</a></li>
										<li><a class="dropdown-item" href="#">View Profile</a></li>
									</ul>
								</div>         
							</td>
								</td>
							</tr>
							<tr>
								<td><input type="checkbox" /></td>
								<td>PC-MOUSE-001</td>
								<td>Wireless Ergonomic Mouse</td>
								<td>Electronics</td>
								<td>Logitech</td>
								<td>$25.50</td>
								<td>Each</td>
								<td>150</td>
								<td>John Doe</td>
								<td>PROD-5678</td>
								<td>Peripherals</td>
								<td>B-20240822</td>
								<td>150</td>
								<td>25</td>
								<td>50</td>
								<td>$15.00</td>
								<td>$25.50</td>
								<td>5%</td>
								<td>8%</td>
								<td>$3825.00</td>
								<td>Tech Gadgets Inc.</td>
								<td>+1 (555) 123-4567</td>
								<td>2026-12-31</td>
								<td>2024-07-01</td>
								<td>Warehouse A, Shelf 3</td>
								<td>In Stock</td>
								<td>2024-08-22</td>
								<td>2024-08-22</td>
								<td class="d-flex gap-5">Initial stock. Requires reorder soon.

							 <td>
								<div class="dropdown">
									<button class="btn bg-success text-white" role="button" data-bs-toggle="dropdown">
										<i class="fa-solid fa-pen-to-square text-white"></i>
									</button>

									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="editproduct.html">Edit</a></li>
										<li><a class="dropdown-item" href="delete.html">Delete</a></li>
										<li><a class="dropdown-item" href="#">View Profile</a></li>
									</ul>
								</div>         
							</td>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
	 </div>
</body>
</html>