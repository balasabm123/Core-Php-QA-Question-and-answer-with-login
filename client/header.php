<?php  ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="./">
      <img src="./public/logo.jpg" id="img">
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="./">Home</a>
        </li>
        <?php if (isset($_SESSION['user']['username'])) {  ?>
          <li class="nav-item">
            <a class="nav-link" href="./server/requests.php/?logout=true">Logout</a>
          </li>
          <!-- <li class="nav-item"> -->
            <br>
            <p class="nav-link" style="color: rgb(4, 120, 124) !important;">
            <?php
                                        if (isset($_SESSION['user'])) {
                                          echo "(Welcome Mr : " . $_SESSION['user']['username'].")";
                                        } ?>
            </p>
          <!-- </li> -->
          <li class="nav-item">
            <a class="nav-link" href="?ask=true">Ask Questions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?u-id=<?php echo $_SESSION['user']['user_id'] ?>">My Questions</a>
          </li>
        <?php } ?>
        <?php if (!isset($_SESSION['user'])) {  ?>
          <li class="nav-item">
            <a class="nav-link" href="?login=true">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?signup=true">SignUp</a>
          </li>
        <?php } ?>
        <li class="nav-item">
          <a class="nav-link" href="?latest=true">Latest Questions</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#"> <?php
                                       // if (isset($_SESSION['user'])) {
                                         // echo "Welcome Mr : " . $_SESSION['user']['username'];
                                       // } ?></a>
        
    </div>
    </li> -->
        <form class="form-inline my-2 my-lg-0" action="">
          <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </ul>
  </div>
</nav>