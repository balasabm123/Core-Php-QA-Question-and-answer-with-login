<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h1 class="header">Questions Details</h1>
            <?php
            $id = $_GET['q-id'];
            include('./common/db.php');
            $sql = "select * from questions where id=$id";
            $res = $con->query($sql);
            $row = $res->fetch_assoc();
            echo "<h4 class='que'> Question : " . $row['title'] . "</h4>
        <p>" . $row['description'] . "</p>";
            include('answer.php')
            ?>
            <form action="./server/requests.php" method="POST">
                <input type="hidden" name="question_id" value="<?php echo $id; ?>">
                <textarea class="form-control" name="answer" placeholder="Type your answer"></textarea>
                <br>
                <button class="btn btn-primary" name="anwer">Write your answer</button>
            </form>
        </div>
        <!-- <div class="col-sm-4"> 
    <h1>Coding</h1>
</div> -->
    </div>
</div>