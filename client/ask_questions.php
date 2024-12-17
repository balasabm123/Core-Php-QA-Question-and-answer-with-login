<div class="container">
<h1 class="header">Ask questions</h1>
<form method="post" action="./server/requests.php">
 <?php //print_r($_REQUEST); die; ?>
  <div class="col-6 offset-sm-3">
    <label for="title" class="form-label">Title</label>
    <input type="title" class="form-control" id="title"  name="title" placeholder="Enter title"> 
  </div>

  <div class="col-6 offset-sm-3">
    <label for="description" class="form-label">Description</label>
    <textarea type="description" class="form-control" id="description" name="description" placeholder="Enter description"> </textarea>
  </div>

  <div class="col-6 offset-sm-3">
   <?php include('./client/category.php'); ?>
  </div>

  <div class="col-6 offset-sm-3">
    
    <br>
    <button type="submit" name="ask" class="btn btn-primary">Ask Question</button> 
  </div>

</form>
</div>