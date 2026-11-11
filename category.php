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
    <link rel="stylesheet" href="category.css">
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
            <div class="container px-2 px-md-4 mt-4 ">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="my-0">Category</h2>
                        <p class="my-0 small text-muted">Manage your Category</p>
                    </div>

                    <div class="d-flex gap-4">
                        <button class="border-0 px-3 py-2 small">
                            <i class="fa-solid fa-arrows-rotate small"></i>
                        </button>
                        <button class="border-0 p-2 small">
                            <i class="fa-solid fa-plus small me-2"></i>
                            Add Category
                        </button>
                    </div>
                </div>

                <div class="table-reponsiveness">
                    <table class="table first-table">
                        <thead>
                            <tr>
                                <th style="width: 5%;"></th>
                                <th style="width: 35%;">Category</th>
                                <th style="width: 20%;">Category Slug</th>
                                <th style="width: 10%;">Created On</th>
                                <th style="width: 20%;">Status</th>
                                <th style="width: 10%;"></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td style="width: 5%;"><input type="checkbox" /></td>
                                <td style="width: 35%;">Portable Speaker</td>
                                <td style="width: 20%;">portable-speaker</td>
                                <td style="width: 10%;">2025-08-13</td>
                                <td style="width: 20%;">Active</td>
                                 <td>
								<div class="dropdown">
									<button class="btn bg-success text-white" role="button" data-bs-toggle="dropdown">
										<i class="fa-solid fa-pen-to-square text-white"></i>
									</button>

									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Edit</a></li>
										<li><a class="dropdown-item" href="delete.html">Delete</a></li>
										<li><a class="dropdown-item" href="#">View Profile</a></li>
									</ul>
								</div>         
							</td>
                                
                            </tr>
                            <tr>
                                <td><input type="checkbox" /></td>
                                <td>Wireless Headphones</td>
                                <td>wireless-headphones</td>
                                <td>2025-08-10</td>
                                <td>Active</td>
                                <td>
								<div class="dropdown">
									<button class="btn bg-success text-white" role="button" data-bs-toggle="dropdown">
										<i class="fa-solid fa-pen-to-square text-white"></i>
									</button>

									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Edit</a></li>
										<li><a class="dropdown-item" href="delete.html">Delete</a></li>
										<li><a class="dropdown-item" href="#">View Profile</a></li>
									</ul>
								</div>         
							</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" /></td>
                                <td>Gaming Laptop</td>
                                <td>gaming-laptop</td>
                                <td>2025-08-08</td>
                                <td>Inactive</td>
                                <td>
								<div class="dropdown">
									<button class="btn bg-success text-white" role="button" data-bs-toggle="dropdown">
										<i class="fa-solid fa-pen-to-square text-white"></i>
									</button>

									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Edit</a></li>
										<li><a class="dropdown-item" href="delete.html">Delete</a></li>
										<li><a class="dropdown-item" href="#">View Profile</a></li>
									</ul>
								</div>         
							</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" /></td>
                                <td>Smart Watch</td>
                                <td>smart-watch</td>
                                <td>2025-08-05</td>
                                <td>Active</td>
                                 <td>
								<div class="dropdown">
									<button class="btn bg-success text-white" role="button" data-bs-toggle="dropdown">
										<i class="fa-solid fa-pen-to-square text-white"></i>
									</button>

									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Edit</a></li>
										<li><a class="dropdown-item" href="delete.html">Delete</a></li>
										<li><a class="dropdown-item" href="#">View Profile</a></li>
									</ul>
								</div>         
							</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" /></td>
                                <td>Bluetooth Earbuds</td>
                                <td>bluetooth-earbuds</td>
                                <td>2025-08-01</td>
                                <td>Active</td>
                                <td>
								<div class="dropdown">
									<button class="btn bg-success text-white" role="button" data-bs-toggle="dropdown">
										<i class="fa-solid fa-pen-to-square text-white"></i>
									</button>

									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Edit</a></li>
										<li><a class="dropdown-item" href="delete.html">Delete</a></li>
										<li><a class="dropdown-item" href="#">View Profile</a></li>
									</ul>
								</div>         
							</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" /></td>
                                <td>4K Monitor</td>
                                <td>4k-monitor</td>
                                <td>2025-07-28</td>
                                <td>Inactive</td>
                                 <td>
								<div class="dropdown">
									<button class="btn bg-success text-white" role="button" data-bs-toggle="dropdown">
										<i class="fa-solid fa-pen-to-square text-white"></i>
									</button>

									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Edit</a></li>
										<li><a class="dropdown-item" href="delete.html">Delete</a></li>
										<li><a class="dropdown-item" href="#">View Profile</a></li>
									</ul>
								</div>         
							</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" /></td>
                                <td>Mechanical Keyboard</td>
                                <td>mechanical-keyboard</td>
                                <td>2025-07-24</td>
                                <td>Active</td>
                                  <td>
								<div class="dropdown">
									<button class="btn bg-success text-white" role="button" data-bs-toggle="dropdown">
										<i class="fa-solid fa-pen-to-square text-white"></i>
									</button>

									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Edit</a></li>
										<li><a class="dropdown-item" href="delete.html">Delete</a></li>
										<li><a class="dropdown-item" href="#">View Profile</a></li>
									</ul>
								</div>         
							</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" /></td>
                                <td>Drone Camera</td>
                                <td>drone-camera</td>
                                <td>2025-07-20</td>
                                <td>Active</td>
                             <td>
								<div class="dropdown">
									<button class="btn bg-success text-white" role="button" data-bs-toggle="dropdown">
										<i class="fa-solid fa-pen-to-square text-white"></i>
									</button>

									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Edit</a></li>
										<li><a class="dropdown-item" href="delete.html">Delete</a></li>
										<li><a class="dropdown-item" href="#">View Profile</a></li>
									</ul>
								</div>         
							</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" /></td>
                                <td>Smart TV</td>
                                <td>smart-tv</td>
                                <td>2025-07-15</td>
                                <td>Inactive</td>
                                 <td>
								<div class="dropdown">
									<button class="btn bg-success text-white" role="button" data-bs-toggle="dropdown">
										<i class="fa-solid fa-pen-to-square text-white"></i>
									</button>

									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Edit</a></li>
										<li><a class="dropdown-item" href="delete.html">Delete</a></li>
										<li><a class="dropdown-item" href="#">View Profile</a></li>
									</ul>
								</div>         
							</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" /></td>
                                <td>Fitness Tracker</td>
                                <td>fitness-tracker</td>
                                <td>2025-07-12</td>
                                <td>Active</td>
                                <td>
								<div class="dropdown">
									<button class="btn bg-success text-white" role="button" data-bs-toggle="dropdown">
										<i class="fa-solid fa-pen-to-square text-white"></i>
									</button>

									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Edit</a></li>
										<li><a class="dropdown-item" href="delete.html">Delete</a></li>
										<li><a class="dropdown-item" href="#">View Profile</a></li>
									</ul>
								</div>         
							</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" /></td>
                                <td>Action Camera</td>
                                <td>action-camera</td>
                                <td>2025-07-08</td>
                                <td>Active</td>
                            <td>
								<div class="dropdown">
									<button class="btn bg-success text-white" role="button" data-bs-toggle="dropdown">
										<i class="fa-solid fa-pen-to-square text-white"></i>
									</button>

									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Edit</a></li>
										<li><a class="dropdown-item" href="delete.html">Delete</a></li>
										<li><a class="dropdown-item" href="#">View Profile</a></li>
									</ul>
								</div>         
							</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" /></td>
                                <td>Tablet Pro</td>
                                <td>tablet-pro</td>
                                <td>2025-07-04</td>
                                <td>Inactive</td>
                            <td>
								<div class="dropdown">
									<button class="btn bg-success text-white" role="button" data-bs-toggle="dropdown">
										<i class="fa-solid fa-pen-to-square text-white"></i>
									</button>

									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Edit</a></li>
										<li><a class="dropdown-item" href="delete.html">Delete</a></li>
										<li><a class="dropdown-item" href="#">View Profile</a></li>
									</ul>
								</div>         
							</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" /></td>
                                <td>VR Headset</td>
                                <td>vr-headset</td>
                                <td>2025-07-01</td>
                                <td>Active</td>
                            <td>
								<div class="dropdown">
									<button class="btn bg-success text-white" role="button" data-bs-toggle="dropdown">
										<i class="fa-solid fa-pen-to-square text-white"></i>
									</button>

									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Edit</a></li>
										<li><a class="dropdown-item" href="delete.html">Delete</a></li>
										<li><a class="dropdown-item" href="#">View Profile</a></li>
									</ul>
								</div>         
							</td>
                                
                            </tr>
                            <tr>
                                <td><input type="checkbox" /></td>
                                <td>Smartphone X</td>
                                <td>smartphone-x</td>
                                <td>2025-06-28</td>
                                <td>Active</td>
                            <td>
								<div class="dropdown">
									<button class="btn bg-success text-white" role="button" data-bs-toggle="dropdown">
										<i class="fa-solid fa-pen-to-square text-white"></i>
									</button>

									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Edit</a></li>
										<li><a class="dropdown-item" href="delete.html">Delete</a></li>
										<li><a class="dropdown-item" href="#">View Profile</a></li>
									</ul>
								</div>         
							</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" /></td>
                                <td>Smart Home Hub</td>
                                <td>smart-home-hub</td>
                                <td>2025-06-25</td>
                                <td>Inactive</td>
                                <td>
								<div class="dropdown">
									<button class="btn bg-success text-white" role="button" data-bs-toggle="dropdown">
										<i class="fa-solid fa-pen-to-square text-white"></i>
									</button>

									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Edit</a></li>
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
