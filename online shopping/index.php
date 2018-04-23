<!-- 17 march 2017 7:24pm -->
<?php include ('functions.php') ?>

<?php  
        if(isset($_SESSION['user']))
          header("location:afterlogin.php");
?>
<html>
  <head>
    <title>
      onlineshop.com
    </title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 405px;
      background-color: red;
      position:relative;
  }

  .margin{
    margin-top:100px;
  }

  body { 
  background: url(indexpage.jpg); 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  margin-top: 100px;
}

  .padd{
    padding:20px;
  }

  .marginleft{
    margin-left:200px;

  }
  </style>
  </head>
<body>

  <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <div  class="image_size" class="img-responsive" alt="Responsive image" >
        <a href="index.php"><img src="shop.png" height="70" width="70"></a>
    </div>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <!-- code for men dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Men
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" class="nav-link" href="Formal shirts.php">Formal Shirts</a>
                <a class="dropdown-item" class="nav-link" href="t-shirts.php">T-Shirts</a>
                <!--<a class="dropdown-item" class="nav-link" href="#">FootWears</a>-->
              </div>
            </li>

            <!-- code for women dropdown -->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Women
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" class="nav-link" href="westernwall.php">Western</a>
                      <a class="dropdown-item" class="nav-link" href="skirts.php">Skirts</a>
                      <a class="dropdown-item" class="nav-link" href="trousers.php">Trousers and shorts-Pants and Palazzos</a>
                      <a class="dropdown-item" class="nav-link" href="sarees.php">Sarees</a>
                      <a class="dropdown-item" class="nav-link" href="ethnic.php">Ethnic Wear</a>
                      <a class="dropdown-item" class="nav-link" href="shirts.php">Shirts/T-shirts</a>
                    </div>
                  </li>


    <form class="form-inline my-2 my-lg-0" method="post" action="search.php">
      <input class="form-control mr-sm-2" type="search" name="searchbar" placeholder="Search" aria-label="Search">
      <a href="search.php"><button class="btn btn-outline-success my-2 my-sm-0" name="gobutton" type="submit">GO!</button></a>
    </form>

  <li class="nav-item">
    <a class="nav-link " href="Cart.php">Cart</a>
  </li>

  <li class="nav-item" class="nav-link">
       <a class="nav-link " href="#" style="color: blue;"><?php
        if(isset($_SESSION['user']))
       echo "Welcome ".$_SESSION['user']['FirstName']."  :) "; 
       ?>
      </a>
  </li>

  <li class="nav-item" class="nav-link">
       <a class="nav-link " href="login.php" style="color: blue;"><?php
        if(!isset($_SESSION['user']))
       echo "login"; 
       ?>
      </a>
  </li>

  <li>
    <a class="nav-link " href="index.php?logout='1'" class="nav-item" style="color: red; float: right;">
    <?php
    if(isset($_SESSION['user']))
      echo "logout";
    ?>
  </a>
  </li>

  </ul>
  </div>
</nav>
          <div >  
              <h1 class="display-4 " style="margin-top: 300px; margin-left: 360px; font-size: 70px;">Welcome to onlineshop.com!</h1>
          </div>
          <hr style="height: 30px; color: grey;">
          <div>
              <h2 style="margin-left: 500px;">Sign in for a whole new experience!!!</h2>
              <br>
              <a class="btn btn-primary btn-lg" style="margin-left: 720px;" href="signup.php" role="button">sign up</a>
          </div>
</div>
</body>
</html>
