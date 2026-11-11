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
    <link rel="stylesheet" href="pos.css">
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
                 <li><a href="#"><i class="fa-solid fa-calendar-minus"></i> Manage Locations</a></li>
            </ul>
            </div>
           <div>  
             <ul>
                 <div class="text-muted px-3">Quick action</div>
                <li><a href="pos.html"><i class="fa-solid fa-cart-shopping"></i>POS Sales</a></li>
                <li><a href="#"><i class="fa-solid fa-house"></i> Manage Invoices</a></li>
                <li><a href="#" ><i class="fa-solid fa-house"></i> Expenses Tracking</a></li>
                <li><a href="#" ><i class="fa-solid fa-house"></i> Credit Notes</a></li>
                <li><a href="#"><i class="fa-solid fa-users"></i> Customers</a></li>
             </ul>
            </div>
            <div>
               <ul>
                <div class="text-muted px-3">Inventory</div>
                <li><a href="#"><i class="fa-solid fa-house"></i>Products/ Services</a></li>
                <li><a href="#"><i class="fa-solid fa-cart-shopping"></i>Purchases</a></li>
                <li><a href="#"><i class="fa-solid fa-house"></i> Vendor</a></li>
            </ul> 
            </div>
            <div>
            <ul>
                <div class="text-muted px-3">Account/Reports</div>
                <li><a href="#"><i class="fa-solid fa-house"></i>Products/ Services</a></li>
                <li><a href="#"><i class="fa-solid fa-house"></i>Purchases</a></li>
                <li><a href="#"><i class="fa-solid fa-house"></i>Vendor</a></li>
            </ul>
            </div>
            <div>
            <ul>
                <div class="text-muted px-3">Account/Reports</div>
                <li><a href="#"><i class="fa-solid fa-house"></i>Products/ Services</a></li>
                <li><a href="#"><i class="fa-solid fa-house"></i>Purchases</a></li>
                <li><a href="#"><i class="fa-solid fa-house"></i> vendor</a></li>
            </ul>
            </div>
        </div>
    <div class="container-fluid col-md-12 pt-3 content">
      <div class="background">
            <div>
                <a href="@" class="nav-link fw-bold text-primary">Products Category</a>
                <a href="@" class="nav-link text-muted">Manage Products Category</a>
            </div>
            <div class="d-flex gap-2">
                <div><a href="$" class="btn-hm">h</a></div>
                <div><a href="#" class="btn-o">Export</a></div>
                <div><a href="#" class="btn-o">Export</a></div>
            </div>
       </div>
    </div>
    <div class="container-fluid mt-4 col-md-12 content">
        <div class="background-0">
            <div class="nav-links">
                <li><a href="#">Product</a></li>
                <li><a href="#">Category</a></li>
                <li><a href="#">Units</a></li>
            </div>
            <div class="format">
              <input type="text" placeholder="Search for category names..">
            </div>
             <table>
                <tr>
                    <th>SN</th>
                    <th>Category</th>
                    <th>Slug</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Zahir Norris</td>
                    <td>Fugul simloues qu</td>
                    <td class="btn-lm"><a class="btn btn-primary btn-explore" href="edit.html">Edit</a> <a class="btn btn-warning btn-explore" href="edit.html">Delete</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Electronics</td>
                    <td>electronics</td>
                    <td class="btn-lm"><a class="btn btn-primary btn-explore" href="edit.html">Edit</a> <a class="btn btn-warning btn-explore">Delete</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Mobile Phones</td>
                    <td>mobile-phones</td>
                    <td class="btn-lm"><a class="btn btn-primary btn-explore" href="edit.html">Edit</a> <a class="btn btn-warning btn-explore">Delete</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Laptops</td>
                    <td>laptop</td>
                    <td class="btn-lm"><a class="btn btn-primary btn-explore" href="edit.html">Edit</a> <a class="btn btn-warning btn-explore">Delete</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Home-appliances</td>
                    <td>home appliances</td>
                    <td class="btn-lm"><a class="btn btn-primary btn-explore" href="edit.html">Edit</a> <a class="btn btn-warning btn-explore">Delete</a></td>
                </tr>
             </table>
        </div>
    </div>
</body>
</html>