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
    <link rel="stylesheet" href="editpurchase.css">
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
						<h2 class="my-0">Edit Purchase</h2>
						<p class="my-0 small text-muted">Update purchase details below</p>
					</div>
				</div>
				<form class="bg-white p-4 rounded shadow-sm">
					<div class="row g-3">
						<div class="col-md-4">
							<label class="form-label">Purchase ID</label>
							<input type="text" class="form-control" value="SUP-2001">
						</div>
						<div class="col-md-4">
							<label class="form-label">Name</label>
							<input type="text" class="form-control" value="Tech Gadgets Inc.">
						</div>
						<div class="col-md-4">
							<label class="form-label">Refernce No</label>
							<input type="Number" class="form-control" value="+1(555) 43697131">
						</div>
						<div class="col-md-4">
							<label class="form-label">Phone</label>
							<input type="text" class="form-control" value="+1 (555) 123-4567">
						</div>
						<div class="col-md-4">
							<label class="form-label">Address</label>
							<input type="text" class="form-control" value="456 Supplier Ave">
						</div>
						<div class="col-md-4">
							<label class="form-label">City</label>
							<input type="text" class="form-control" value="San Francisco">
						</div>
						<div class="col-md-4">
							<label class="form-label">State</label>
							<input type="text" class="form-control" value="CA">
						</div>
						<div class="col-md-4">
							<label class="form-label">Country</label>
							<input type="text" class="form-control" value="USA">
						</div>
						<div class="col-md-4">
							<label class="form-label">Price</label>
							<input type="text" class="form-control" value="20,000">
						</div>
						<div class="col-md-4">
							<label class="form-label">Goods</label>
							<select class="form-select">
								<option selected>milk</option>
								<option>butter</option>
                                <option>daino</option>
                                <option>milo</option>
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
							<textarea class="form-control" rows="2">Reliable purchase.</textarea>
						</div>
					</div>
					<div class="d-flex justify-content-end gap-3 mt-4">
						<button type="submit" class="btn btn-success px-4">
							<i class="fa-solid fa-floppy-disk me-2"></i>Save
						</button>
						<a href="purchase.html" class="btn btn-secondary px-4">
							<i class="fa-solid fa-xmark me-2"></i>Cancel
						</a>
					</div>
				</form>
			</div>
		</div>
</body>
</html>