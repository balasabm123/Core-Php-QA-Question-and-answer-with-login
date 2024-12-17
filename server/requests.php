<?php
session_start();
include("../common/db.php");
if (isset($_POST['signup'])) {
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $user = $con->prepare("Insert into `users` 
                         (`id`,`uname`,`email`,`password`,`address`)
                         values(NULL,'$username','$email','$password','$address') ");
    $result = $user->execute();
    $user_id = $user->insert_id;
    if ($result) {
        $_SESSION['user'] = ['username' => $username, 'email' => $email, 'user_id' => $user_id];
        header('location:/QA-DISCUSS');
    } else {
        echo "Data not inserted";
    }
} elseif (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $u_name = "";
    $u_id = 0;
    $query = "SELECT * FROM users where email='$email' and password='$password' ";
    $result = $con->query($query);
    if ($result->num_rows == 1) {
        foreach ($result as $res) {
            $u_name = $res['uname'];
            $u_id = $res['id'];
        }
        $_SESSION['user'] = ['username' => $u_name, 'email' => $email, 'user_id' => $u_id];
        header('location:/QA-DISCUSS');
    } else {
        echo "Data not inserted";
    }
} elseif (isset($_GET['logout'])) {
    /*session_unset();
    session_destroy();
    header('location:/QA-DISCUSS');*/
    header('location:/QA-DISCUSS/client/logout.php');
} elseif (isset($_POST['ask'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $category_id = $_POST['category'];
    $user_id = $_SESSION['user']['user_id'];

    $ask_que = $con->prepare("insert into `questions` (`id`, `title`,`description`,`category_id`,`user_id`)
                             values('null','$title','$description','$category_id','$user_id')");
    $res = $ask_que->execute();

    if ($res) {
        header('location:/QA-DISCUSS');
    } else {
        echo "Data not inserted";
    }
} elseif (isset($_POST['answer'])) {
    $answers = $_POST['answer'];
    $question_id = $_POST['question_id'];
    $user_id = $_SESSION['user']['user_id'];

    $answer = $con->prepare("insert into `answers` (`id`, `answer`,`question_id`,`user_id`)
                             values('null','$answers','$question_id','$user_id')");
    $res = $answer->execute();

    if ($res) {
        header("location:/QA-DISCUSS?q-id=$question_id");
    } else {
        echo "Data not inserted";
    }
}elseif(isset($_GET['delete'])){
    $id=$_GET['delete'];

    // echo $sql = "delete from questions where id=$id";  die;
    $query = $con->prepare("delete from questions where id=$id");
    $res   = $query->execute();

    if(isset($res)){
        header("location:/QA-DISCUSS");
    }else{
        echo "Record not deleted";
    }
}
