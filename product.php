<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document!</title>
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
                <li><a href="products.html"><i class="fa-solid fa-house"></i>Product</a></li>
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
    <div class="content">
      <div class="d-flex justify-content-between align-items-center m-1">
                  <div>
                      <h2 class="my-0">Create Products</h2>
                      <p class="my-0 small text-muted">Create New Products</p>
                  </div>

                  <div class="d-flex gap-4">
                      <button class="border-0 px-3 py-2 small">
                          <i class="fa-solid fa-arrows-rotate small"></i>
                      </button>

                      <button class="border-0 p-2 small">
                          <i class="fa-solid fa-file-import small me-2"></i>
                      </button>

                      <a class="border-0 p-2 small explore" href="products.html">
                          <i class="fa-solid fa-angle-left small me-2"></i>
                          Back to Product
                      </a>
                  </div>
              </div>
     <div class="bg-white m-4 font">
        <div class="font-lt pt-4">
            <a href="#" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 20px; font-weight: 600;">
                Basic Details
            </a><br>
            <a href="#" class="text-muted">Project Image</a>
        </div>
         <div class="spacing">
            <button class="btn-card">Upload image</button><br>
             <a href="#" style="text-decoration: none;" class="text-muted">JPG or PNG, format not exceeding SMB.</a>
         </div>
          <form class="py-4">
            <div class="row">
               <div class="col-md-4">
                  <label for="code" class="form-label">Code</label>
                  <input type="text" class="form-control" required>
               </div>
               <div class="col-md-4">
                  <label for="store" class="form-label">Store</label>
                  <select class="form-select" name="stores" id="store" required>
                    <option selected disabled>Electrol Mart</option>
                    <option value="ng">Eko Supermarket</option>
                    <option value="ng">Elekia Suites markey</option>
                    <option value="ng">Eko supermarket</option>
                  </select>
               </div>
               <div class="col-md-4">
                  <label for="store" class="form-label">Warehouse</label>
                  <select class="form-select" name="stores" id="store">
                    <option selected disabled>Traditional Warehouse</option>
                    <option value="ng">Eko Supermarket</option>
                    <option value="ng">Elekia Suites markey</option>
                    <option value="ng">Eko supermarket</option>
                  </select>
               </div>
            </div>
            <div class="row pt-2">
              <div class="col-md-4">
                <label for="product name" class="form-label">Product Name</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="col-md-4">
                <label for="product name" class="form-label">Selling Price</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="col-md-4">
                <label for="product name" class="form-label">Purchase Price</label>
                <input type="text" class="form-control" required>
              </div>
            </div>
            <div class="row pt-2">
              <div class="col-md-6">
                <label for="product name" class="form-label">SKU</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label for="product name" class="form-label">Item Barcode</label>
                <input type="text" class="form-control" required>
              </div>
            </div>
            <div class="row pt-2">
              <div class="col-md-6">
                <label for="Category" class="form-label">Category</label>
                <select class="form-select" name="Category" id="store">
                    <option selected disabled>Traditional Warehouse</option>
                    <option value="ng">Eko Supermarket</option>
                    <option value="ng">Elekia Suites markey</option>
                    <option value="ng">Eko supermarket</option>
                  </select>
              </div>
              <div class="col-md-6">
                <label for="subcategory" class="form-label">Subcategory</label>
                <select class="form-select" name="subcategory" id="subcategory">
                    <option selected disabled>Traditional Warehouse</option>
                    <option value="ng">Eko Supermarket</option>
                    <option value="ng">Elekia Suites markey</option>
                    <option value="ng">Eko supermarket</option>
                  </select>
              </div>
            </div>
            <div class="row pt-2">
              <div class="col-md-6">
                <label for="Category" class="form-label">Brand</label>
                <select class="form-select" name="Category" id="store">
                    <option selected disabled>Select</option>
                    <option value="ng">Eko Supermarket</option>
                    <option value="ng">Elekia Suites markey</option>
                    <option value="ng">Eko supermarket</option>
                  </select>
              </div>
              <div class="col-md-6">
                <label for="subcategory" class="form-label">Unit</label>
                <select class="form-select" name="subcategory" id="subcategory">
                    <option selected disabled>Traditional Warehouse</option>
                    <option value="ng">Eko Supermarket</option>
                    <option value="ng">Elekia Suites markey</option>
                    <option value="ng">Eko supermarket</option>
                  </select>
              </div>
            </div>
          </form>
     </div>
     <form class="pt-3" style="width: 100%;">
        <div class="bg-white font m-4 pt-3 pb-4">
           <div class="row">
                <div class="col-md-4">
                    <label for="product name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label for="product name" class="form-label">Selling Price</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label for="product name" class="form-label">Purchase Price</label>
                    <input type="text" class="form-control" required>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-md-3">
                    <label for="product name" class="form-label">Product Name</label>
                   <select class="form-select" name="subcategory" id="subcategory">
                        <option selected disabled>Traditional Warehouse</option>
                        <option value="ng">Eko Supermarket</option>
                        <option value="ng">Elekia Suites markey</option>
                        <option value="ng">Eko supermarket</option>
                  </select>
                </div>
                <div class="col-md-3">
                    <label for="product name" class="form-label">Selling Price</label>
                    <select class="form-select" name="subcategory" id="subcategory">
                        <option selected disabled>Traditional Warehouse</option>
                        <option value="ng">Eko Supermarket</option>
                        <option value="ng">Elekia Suites markey</option>
                        <option value="ng">Eko supermarket</option>
                  </select>
                </div>
                <div class="col-md-6">
                    <label for="product name" class="form-label">Purchase Price</label>
                    <input type="text" class="form-control" required>
                </div>
            </div>
             <div class="d-flex justify-content-end gap-3 mt-4">
              <button type="submit" class="btn btn-success px-4">
                <i class="fa-solid fa-floppy-disk me-2"></i>Save
              </button>
              <a href="inventory.html" class="btn btn-secondary px-4">
                <i class="fa-solid fa-xmark me-2"></i>Cancel
              </a>
        </div>
     </div>
     </form>
   </div>
</body>
</html>