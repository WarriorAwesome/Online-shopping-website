<?php include ('functions.php');?>
<?php
if($_SESSION['user']['user_type'] != 'admin')
  header("location:afterlogin.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 75%;
      height: 443px;
      background-color: red;
      position:relative;
  }

  .margin{
    margin-top:100px;
  }

  .padd{
    padding:20px;
  }

  .marginleft{
    margin-left:200px;

  }
  </style>

<style>
  body { 
  background: url(bg1.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
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



  <li class="nav-item" class="nav-link">
       <a class="nav-link " href="myprofileview.php" style="color: blue;"><?php echo "Welcome ".$_SESSION['user']['FirstName']."  :) "; ?></a>
  </li>

  <li>
    <a class="nav-link " href="index.php?logout='1'" class="nav-item" style="color: red; float: right; margin-left: 430px;">logout</a>
  </li>

  </ul>
	</div>
	</nav>
<div style="margin-top:80px;">
</div>
<div class="margin ">
<div id="myCarousel" class="carousel slide" data-ride="carousel" class="margin padd">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="carousel-item active">

      <div class="jumbotron jumbotron-fluid visibility:hidden ">
        <h1 class="display-4 padd marginleft">Welcome !</h1>

        <hr class="my-4">
        <p class="padd marginleft">To add product ,click on add button</p>
		<a class="btn btn-primary btn-lg marginleft" href="AddProduct.php" role="button">Add </a>
      </div>

    </div>

    <div class="carousel-item">

	<div class="jumbotron jumbotron-fluid visibility:hidden ">
  <h1 class="display-4 padd marginleft">Welcome !</h1>

  <hr class="my-4">
  <p class="padd marginleft">To update product ,click on Update button</p>
	<a class="btn btn-primary btn-lg marginleft" href="UpdateProduct.php" role="button">Update </a>
	</div>




	</div>

    <div class="carousel-item">

	<div class="jumbotron jumbotron-fluid visibility:hidden ">
  <h1 class="display-4 padd marginleft">Welcome !</h1>

  <hr class="my-4">
  <p class="padd marginleft">To delete product ,click on delete button</p>
	<a class="btn btn-primary btn-lg marginleft" href="deleteItems.php" role="button">Delete </a>
	</div>




	</div>

  <!-- Left and right controls -->
	<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#myCarousel" data-slide="next">
  <span class="carousel-control-next-icon"></span>
	</a>
	</div>
	</div>


</body>
</html>
