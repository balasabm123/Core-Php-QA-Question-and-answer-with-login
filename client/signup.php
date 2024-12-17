<div class="container">
<h1 class="header">Signup</h1>
<form method="POST" action="./server/requests.php">
  <div class="col-6 offset-sm-3">
    <label for="name" class="form-label">User Name</label>
    <input type="text" class="form-control" name="uname" id="name" placeholder="Enter user name"> 
  </div>

  <div class="col-6 offset-sm-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email"> 
  </div>

  <div class="col-6 offset-sm-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password"> 
  </div>
  <div class="col-6 offset-sm-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
    <br>
    <button type="submit" name="signup" class="btn btn-primary">SignUp</button> 
  </div>

</form>
</div>