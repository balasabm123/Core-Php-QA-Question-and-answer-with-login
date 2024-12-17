<div class="container">
    <h4 class="">Answers :</h4>

    <?php $sql = "select * from answers where question_id=$id";
    $res = $con->query($sql);

    foreach ($res as $row) {

        $ans =  $row['answer'];
        // echo "<div class='row'><p><u>$ans</u></p></div>";
        echo "<ul>
  <li><u>$ans</u></li></ul>";
    }

    ?>

</div>

</div>