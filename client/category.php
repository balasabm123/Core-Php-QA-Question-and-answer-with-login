<label for="category" class="form-label">Category</label>
<select class="form-control" id="category" name="category">
<option value="">Select Category</option>
    <?php
    $id = "";
    $name = "";
    include('./common/db.php');
    $query = 'SELECT * FROM category';
    $result = $con->query($query);
    foreach ($result as $r) {
        $id = $r['id'];
        $name = ucfirst($r['model']);
        echo "<option value=$id>$name</option>";
    }
    ?>

</select>