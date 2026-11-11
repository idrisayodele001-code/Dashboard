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
    <link rel="stylesheet" href="warehouse.css">
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
                <div class="d-flex gap-2 py-3">
                    <li class="nav-item" style="list-style: none;"><a href="#" class="nav-link">English <i class="fa-solid fa-chevron-down"></i></a></li>
                    <i class="fa-solid fa-bell py-1"></i>
                    <i class="fa-regular fa-bell py-1"></i>
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
						<h2 class="my-0">Warehouses</h2>
						<p class="my-0 small text-muted">Manage your Warehouses</p>
					</div>

					<div class="d-flex gap-4">
						<button class="border-0 px-3 py-2 small">
							<i class="fa-solid fa-arrows-rotate small"></i>
						</button>
						<a class="border-0 p-2 small explore" href="editwarehouse.html"> 
							 <i class="fa-solid fa-plus small me-2"></i>
							Add Warehouse
                        </a>
					</div>
				</div>

				<div class="table-reponsiveness">
					<table class="table first-table">
						<thead>
							<tr class="w-100">
								<th></th>
								<th>Warehouse ID</th>
								<th>Name</th>
								<th>Location</th>
								<th>Manager</th>
								<th>Phone</th>
								<th>Email</th>
								<th>Capacity</th>
								<th>Status</th>
								<th>Date Added</th>
								<th>Last Updated</th>
								<th>Notes/Remarks</th>
							</tr>
						</thead>
						<tbody>
                              <tr>
								<td><input type="checkbox" /></td>
								<td>SUP-2001</td>
								<td>Tech Gadgets Inc.</td>
								<td>contact@techgadgets.com</td>
								<td>+1 (555) 123-4567</td>
								<td>456 Supplier Ave</td>
								<td>San Francisco</td>
								<td>CA</td>
								<td>USA</td>
								<td>94105</td>
								<td>Active</td>
								<td>2024-08-22</td>
								<td>2024-08-22</td>
								<td class="d-flex gap-5">Reliable supplier.
								<div class="dropdown">
									<button class="btn bg-success text-white" role="button" data-bs-toggle="dropdown">
										<i class="fa-solid fa-pen-to-square text-white"></i>
									</button>

									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="editwarehouse.html">Edit</a></li>
										<li><a class="dropdown-item" href="delete.html">Delete</a></li>
										<li><a class="dropdown-item" href="#">View Profile</a></li>
									</ul>
								</div>         
								</td>
							</tr>
                             <tr>
								<td><input type="checkbox" /></td>
								<td>SUP-2001</td>
								<td>Tech Gadgets Inc.</td>
								<td>contact@techgadgets.com</td>
								<td>+1 (555) 123-4567</td>
								<td>456 Supplier Ave</td>
								<td>San Francisco</td>
								<td>CA</td>
								<td>USA</td>
								<td>94105</td>
								<td>Active</td>
								<td>2024-08-22</td>
								<td>2024-08-22</td>
								<td class="d-flex gap-5">Reliable supplier.
								<div class="dropdown">
									<button class="btn bg-success text-white" role="button" data-bs-toggle="dropdown">
										<i class="fa-solid fa-pen-to-square text-white"></i>
									</button>

									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="editwarehouse.html">Edit</a></li>
										<li><a class="dropdown-item" href="delete.html">Delete</a></li>
										<li><a class="dropdown-item" href="#">View Profile</a></li>
									</ul>
								</div>         
								</td>
							</tr>
                             <tr>
								<td><input type="checkbox" /></td>
								<td>SUP-2001</td>
								<td>Tech Gadgets Inc.</td>
								<td>contact@techgadgets.com</td>
								<td>+1 (555) 123-4567</td>
								<td>456 Supplier Ave</td>
								<td>San Francisco</td>
								<td>CA</td>
								<td>USA</td>
								<td>94105</td>
								<td>Active</td>
								<td>2024-08-22</td>
								<td>2024-08-22</td>
								<td class="d-flex gap-5">Reliable supplier.
								<div class="dropdown">
									<button class="btn bg-success text-white" role="button" data-bs-toggle="dropdown">
										<i class="fa-solid fa-pen-to-square text-white"></i>
									</button>

									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="editwarehouse.html">Edit</a></li>
										<li><a class="dropdown-item" href="delete.html">Delete</a></li>
										<li><a class="dropdown-item" href="#">View Profile</a></li>
									</ul>
								</div>         
								</td>
							</tr>
						</tbody>
                        	
					</table>
				</div>
			</div>

		</div>
</body>
</html>