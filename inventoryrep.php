<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="inventoryreport.css">
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
                        <h2 class="my-0">Inventory Report</h2>
                        <p class="my-0 small text-muted">Overview and details of your sales performance</p>
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
                            <div class="text-muted small">Total Sales</div>
                            <div class="fw-bold fs-5">$12,500</div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="bg-white rounded shadow-sm p-3 text-center">
                            <div class="text-muted small">Total Orders</div>
                            <div class="fw-bold fs-5">320</div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="bg-white rounded shadow-sm p-3 text-center">
                            <div class="text-muted small">Total Customers</div>
                            <div class="fw-bold fs-5">210</div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="bg-white rounded shadow-sm p-3 text-center">
                            <div class="text-muted small">Products Sold</div>
                            <div class="fw-bold fs-5">1,150</div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="bg-white rounded shadow-sm p-3 text-center">
                            <div class="text-muted small">Avg Order Value</div>
                            <div class="fw-bold fs-5">$39.06</div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="bg-white rounded shadow-sm p-3 text-center">
                            <div class="text-muted small">Sales Growth</div>
                            <div class="fw-bold fs-5 text-success">+8.2%</div>
                        </div>
                    </div>
                </div>

                <!-- Sales Table -->
                <div class="w-100 mt-5" style="overflow-x: auto;">
                    <table class="w-100 table">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Date</th>
                                <th>Customer</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Payment Method</th>
                                <th>Sales Rep</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ORD-1001</td>
                                <td>2024-08-20</td>
                                <td>Jane Smith</td>
                                <td>Wireless Mouse</td>
                                <td>2</td>
                                <td>$25.00</td>
                                <td>$50.00</td>
                                <td>Completed</td>
                                <td>Credit Card</td>
                                <td>Michael Lee</td>
                                <td>First-time buyer</td>
                            </tr>
                            <tr>
                                <td>ORD-1002</td>
                                <td>2024-08-19</td>
                                <td>John Doe</td>
                                <td>Bluetooth Earbuds</td>
                                <td>1</td>
                                <td>$60.00</td>
                                <td>$60.00</td>
                                <td>Completed</td>
                                <td>PayPal</td>
                                <td>Sarah Kim</td>
                                <td>Repeat customer</td>
                            </tr>
                            <tr>
                                <td>ORD-1003</td>
                                <td>2024-08-18</td>
                                <td>Emily Clark</td>
                                <td>Smart Watch</td>
                                <td>3</td>
                                <td>$80.00</td>
                                <td>$240.00</td>
                                <td>Pending</td>
                                <td>Bank Transfer</td>
                                <td>Michael Lee</td>
                                <td>Bulk order</td>
                            </tr>
                            <tr>
                                <td>ORD-1004</td>
                                <td>2024-08-17</td>
                                <td>David Brown</td>
                                <td>Gaming Laptop</td>
                                <td>1</td>
                                <td>$1,200.00</td>
                                <td>$1,200.00</td>
                                <td>Completed</td>
                                <td>Credit Card</td>
                                <td>Sarah Kim</td>
                                <td>High value</td>
                            </tr>
                            <tr>
                                <td>ORD-1005</td>
                                <td>2024-08-16</td>
                                <td>Linda Green</td>
                                <td>Mechanical Keyboard</td>
                                <td>4</td>
                                <td>$70.00</td>
                                <td>$280.00</td>
                                <td>Completed</td>
                                <td>Cash</td>
                                <td>Michael Lee</td>
                                <td>Promo applied</td>
                            </tr>
                            <!-- ...more rows as needed... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>