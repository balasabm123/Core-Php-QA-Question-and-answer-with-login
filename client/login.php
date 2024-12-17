<div class="container">
<h1 class="header">Login</h1>
<form method="post" action="./server/requests.php">
 <?php //print_r($_REQUEST); die; ?>
  <div class="col-6 offset-sm-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email"  name="email" placeholder="Enter Email"> 
  </div>

  <div class="col-6 offset-sm-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password"> 
  </div>
  <div class="col-6 offset-sm-3">
    
    <br>
    <button type="submit" name="login" class="btn btn-primary">Login</button> 
  </div>

</form>
</div>