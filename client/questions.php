<style>
    .form-control{
display: inline-table!important;
width: 70%!important;
}
</style>
<div class="container">
    <div class="row ">
        <div class="col-8 ">
            <h1 class="" style="text-align: center;">Questions</h1>
            <?php
            include('./common/db.php');
            if (isset($_GET['c-id'])) {
                $query = "SELECT * FROM questions  where category_id=$cid";
            } elseif (isset($_GET['u-id'])) {
                $query = "SELECT * FROM questions  where user_id=$uid";
            } elseif (isset($_GET['latest'])) {
                $query = "SELECT * FROM questions  order by id desc";
            } elseif (isset($_GET['search'])) {
                $query = "SELECT * FROM questions  where `title` like'%$search%'";
            } else {
                $query = "SELECT * FROM questions";
            }
            $GET_DATA = $con->query($query);
            foreach ($GET_DATA as $res) {
            ?>
                <ul class="list-group">
                    <?php $id = $res['id']; ?>
                    <?php 
                    //  if(isset($uid)){
                    //     $delete ="Delete";
                    // }else{
                    //     $delete ="";
                    // } 
                     
                    ?>
                    <li class="list-group-item "><b><a href='?q-id=<?= $id ?>'><?php echo $res['title']; 
                    echo isset($uid) ? "<a class='delet_req' href='./server/requests.php?delete=$id'><p class'cl'>Delete</p></a>":'';
                    ?> </a></b></li>
                </ul>
            <?php } ?>
        </div>
        <div class="col-4">
            <?php include('catagories.php') ?>
        </div>
    </div>
</div>