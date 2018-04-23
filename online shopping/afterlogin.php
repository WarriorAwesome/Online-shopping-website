<!DOCTYPE HTML>
<?php include ('functions.php') ?>
<?php 
    if(!isset($_SESSION['user']))
      header("location:login.php");
?>
<html>
  <head>
    <title>
      onlineshop.com
    </title>
<style>
.margin{
  margin-top:70px;
}

body{
  position:relative; 
  background: url(bg1.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}


</style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- it is a way to include the bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
  crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <body>

  <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <div  class="image_size" class="img-responsive" alt="Responsive image">
        <a href="afterlogin.php"><img src="shop.png" height="70" width="70"></a>
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
       <a class="nav-link " href="myprofileview.php" style="color: blue;"><?php echo "Welcome ".$_SESSION['user']['FirstName']."  :) "; ?></a>
  </li>

  <li>
    <a class="nav-link " href="index.php?logout='1'" class="nav-item" style="color: red; float: right;">logout</a>
  </li>

  <li class="nav-item" class="nav-link">
       <a class="nav-link " href="adminpage.php" style="color: blue;"><?php 
              if($_SESSION['user']['user_type'] == 'admin')
                echo "admin panel";
        ?></a>
  </li>
  </ul>
  </div>
</nav>

<!-- use of jumbotron-->

<div class="jumbotron jumbotron-fluid visibility:hidden " style="margin-top:80px;">
  <div class="container">
  <h1 class="display-4">Welcome to onlineshop.com!</h1>
  <img src="shop.png" height="70" width="70">
  <p class="lead"></p>
  <hr class="my-4">
</div>
</div>

<!-- cards in rows -->
<div class="row">

    <div class="col">
      <div class="card" style="width: 18rem; height:21rem;">
        <a href="allmen.php"><img class="card-img-top" src="men.jpg" alt="Card image cap" ></a>
        <div class="card-body">
          <h5 class="card-title">Men</h5>
          <p class="card-text">Get special offers for men clothes</p>
          <a href="allmen.php" class="btn btn-primary">Shop now</a>
        </div>
      </div>
    </div>

<div class="col">
<div class="card" style="width: 18rem; height:18rem;">
  <a href="allwomen.php"><img class="card-img-top" src="women.jpg" alt="Card image cap"></a>
  <div class="card-body">
    <h5 class="card-title">Women</h5>
    <p class="card-text">Get special offers for women clothes</p>
    <a href="allwomen.php" class="btn btn-primary" class="card-link">Shop now</a>
  </div>
</div>
</div>


</div>
<div>
<p style="margin-left:800px;margin-top:250px; float: right;">Designed by: Vipul Tanwar and Vipul Verma</p>
<a class="nav-link" style="margin-top:10px; margin-left:1080px; color: red;float: right;" href="ContactUs.php">Contact Us</a>
</div>
</body>
</html>
