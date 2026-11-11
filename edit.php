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
    <link rel="stylesheet" href="edit.css">
    
</head>
<body>
    <div class="background mt-3">
       <div class="profile">
        <span class="gap-2"><i class="fa-solid fa-user"></i> <b>Edit Profile</b></span><br>
        <span class="text-muted">Update your personal information</span>
       </div>
          <div class="container-fluid pt-4">
            <div class="row">
             <div class="col-md-6 spacing-form">
               <form class="text-dark">
                 <h5>Security</h5>
                <div>
                   <label class="form-lable" for="current Password">Current Password</label>
                   <input type="text" id="Password" class="form-control" required>
                </div>
                <div>
                   <label class="form-lable" for="new Password">New Password</label>
                   <input type="text" id="Password" class="form-control" required>
                </div>
                <div>
                   <label class="form-lable" for="Confirm password">Confirm Password</label>
                   <input type="text" id="Password" class="form-control" required>
                </div>
               </form>
             </div>
             <div class="col-md-6">
               <form class="text-dark">
                 <h5>Personal Statement</h5>
                 <div class="row">
                    <div class="col">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" placeholder="Enter full Name" class="form-control" id="fullname" required>
                    </div>
                    <div class="col">
                       <label for="email" class="form-label">Email</label>
                       <input type="text" placeholder="Enter Email" class="form-control" id="email" required>
                    </div>
                 </div>
                 <div class="row">
                  <div class="col">
                  <label for="phone number" class="form-label">Phone Number</label>
                  <input type="text" placeholder="Phone Number"required class="form-control">
                  </div>
                  <div class="col">
                  <label for="dateofbirth" class="form-label">Date of Birth</label>
                  <input type="date" id="dateofbirth" required class="form-control">
                  </div>
                 </div>
                  <div>
                        <label for="Address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" required placeholder="Street">
                 </div>
                 <div class="row pt-3">
                    <div class="col">
                      <input type="text" placeholder="City" required class="form-control">
                    </div>
                    <div class="col">
                      <input type="text" placeholder="State" required class="form-control">
                    </div>
                     <div class="col">
                      <input type="text" placeholder="Zip" required class="form-control">
                    </div>
                 </div>
                 <div>
                  <label for="update" class="form-label">Update Emergency Contact</label>
                  <input type="text" placeholder="Emergency Contact" required class="form-control" id="contact">
                 </div>
                 <div class="row mt-2">
                    <div class="col">
                      <label for="change Roles" class="form-label">Change Roles</label>
                      <input type="text" class="form-control" placeholder="Change Roles" id="roles" required>
                    </div>
                    <div class="col">
                       <label for="change Roles" class="form-label">Change Locations</label>
                        <input type="text" class="form-control" placeholder="Change Location" id="locations" required>
                    </div>
                    <div class="col">
                      <label for="suspended Account" class="form-label">Suspended Account</label>
                      <input type="text" class="form-control" placeholder="Suspend Account" id="suspend" required>
                    </div>
                 </div>
               </form>
             </div>
            </div>
          </div>
    </div>
</body>
</html>