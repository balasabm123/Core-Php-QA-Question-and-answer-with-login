<!-- Tutorial Link : https://www.youtube.com/watch?v=1k0qW9_226g&list=PL8p2I9GklV46qBbFijddhhdkS7Pr5N3W0&index=9 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Discus project</title>
    <?php include('./client/commonFiles.php'); ?>
</head> 
<body>
    <?php
    session_start();
    include('./client/header.php');
    if (isset($_GET['signup']) && !isset($_SESSION['user'])) {
        include('./client/signup.php');
    } elseif (isset($_GET['login']) && !isset($_SESSION['user'])) {
        include('./client/login.php');
    } elseif (isset($_GET['ask'])) {
        include('./client/ask_questions.php');
    } elseif (isset($_GET['q-id'])) {
        include('./client/question_det.php');
    } elseif (isset($_GET['c-id'])) {
        $cid = $_GET['c-id'];
        include('./client/questions.php');
    } elseif (isset($_GET['u-id'])) {
        $uid = $_GET['u-id'];
        if (isset($_SESSION['user']['username'])) {
        include('./client/questions.php');
        }
    } elseif (isset($_GET['latest'])) {
        include('./client/questions.php');
    } elseif (isset($_GET['search'])) {
        $search = $_GET['search'];
        include('./client/questions.php');
    } else {
        include('./client/questions.php');
    }
    ?>
</body>

</html>