
<div class="container">
<h1 class="heading">Catagories </h1> 

 <?php 
 include('./common/db.php');

 $query = "SELECT * FROM category";
 $GET_category= $con->query($query);
  foreach($GET_category as $res){  
 ?>
 <ul class="list-group" >
     
 <?php  $id= $res['id'];?>
   <li class="list-group-item"><b><a href='?c-id=<?= $id?>'><?php echo ucfirst($res['model']); ?></a></b></li> 
 </ul>
  <?php }

 ?>
  
 
</div>
   