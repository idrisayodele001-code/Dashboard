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
    <link rel="stylesheet" href="invoicerep.css">
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
                <li><a href="inventory.html"><i class="fa-solid fa-house"></i> Dashboard</a></li>
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
                <li><a href="purchaserep.html"><i class="fa-solid fa-house"></i>Purchases Report</a></li>
                <li><a href="inventory.html"><i class="fa-solid fa-house"></i>Inventory Report</a></li>
                <li><a href=""><i class="fa-solid fa-house"></i>Invoice Reports</a></li>

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
                        <h2 class="my-0">Invoice Report</h2>
                        <p class="my-0 small text-muted">Overview and details of your invoices</p>
                    </div>
                    <div class="d-flex gap-4">
                        <button class="border-0 px-3 py-2 small">
                            <i class="fa-solid fa-arrows-rotate small"></i>
                        </button>
                        <button class="border-0 p-2 small">
                            <i class="fa-solid fa-download small me-2"></i>
                            Export Report
                        </button>
                    </div>
                </div>

                <!-- Report Bars -->
                <div class="row mt-4 g-3">
                    <div class="col-md-2 col-6">
                        <div class="bg-white rounded shadow-sm p-3 text-center">
                            <div class="text-muted small">Total Invoices</div>
                            <div class="fw-bold fs-5">420</div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="bg-white rounded shadow-sm p-3 text-center">
                            <div class="text-muted small">Total Billed</div>
                            <div class="fw-bold fs-5">$18,200</div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="bg-white rounded shadow-sm p-3 text-center">
                            <div class="text-muted small">Paid</div>
                            <div class="fw-bold fs-5 text-success">$16,000</div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="bg-white rounded shadow-sm p-3 text-center">
                            <div class="text-muted small">Unpaid</div>
                            <div class="fw-bold fs-5 text-danger">$2,200</div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="bg-white rounded shadow-sm p-3 text-center">
                            <div class="text-muted small">Overdue</div>
                            <div class="fw-bold fs-5 text-danger">5</div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="bg-white rounded shadow-sm p-3 text-center">
                            <div class="text-muted small">Avg Invoice</div>
                            <div class="fw-bold fs-5">$43.33</div>
                        </div>
                    </div>
                </div>

                <!-- Invoices Table -->
                <div class="w-100 mt-5" style="overflow-x: auto;">
                    <table class="w-100 table">
                        <thead>
                            <tr>
                                <th>Invoice ID</th>
                                <th>Date</th>
                                <th>Customer</th>
                                <th>Order ID</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Due Date</th>
                                <th>Paid Date</th>
                                <th>Payment Method</th>
                                <th>Sales Rep</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>INV-3001</td>
                                <td>2024-08-20</td>
                                <td>Jane Smith</td>
                                <td>ORD-1001</td>
                                <td>$50.00</td>
                                <td class="text-success">Paid</td>
                                <td>2024-08-25</td>
                                <td>2024-08-21</td>
                                <td>Credit Card</td>
                                <td>Michael Lee</td>
                                <td>Paid on time</td>
                            </tr>
                            <tr>
                                <td>INV-3002</td>
                                <td>2024-08-19</td>
                                <td>John Doe</td>
                                <td>ORD-1002</td>
                                <td>$60.00</td>
                                <td class="text-danger">Unpaid</td>
                                <td>2024-08-24</td>
                                <td>-</td>
                                <td>PayPal</td>
                                <td>Sarah Kim</td>
                                <td>Reminder sent</td>
                            </tr>
                            <tr>
                                <td>INV-3003</td>
                                <td>2024-08-18</td>
                                <td>Emily Clark</td>
                                <td>ORD-1003</td>
                                <td>$240.00</td>
                                <td class="text-danger">Overdue</td>
                                <td>2024-08-20</td>
                                <td>-</td>
                                <td>Bank Transfer</td>
                                <td>Michael Lee</td>
                                <td>Follow up required</td>
                            </tr>
                            <!-- ...more rows as needed... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>