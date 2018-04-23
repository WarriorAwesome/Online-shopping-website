<?php include ('functions.php');?>
<?php
if($_SESSION['user']['user_type'] != 'admin')
  header("location:afterlogin.php");
?>
<! DOCTYPE HTML>
<head>
<link rel = "stylesheet" type = "text/css" href = "menu.css">
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
  crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style>
  body { 
  background: url(adminpage.jpg) no-repeat center center fixed; 
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

</body>
</html>

<?php

include 'Connection.php';

if(isset($_POST['submit']))
{

$p = $_POST['id'];

$d = $_POST['d'];

$pri = $_POST['p'];

$c = $_POST['cat'];


	if($c == 'men')
	{

	$query = "UPDATE men SET Description = '$d' WHERE Product_id = '$p'";
	$query2 = "UPDATE men SET Price = '$pri' WHERE Product_id = '$p'";

	$l = mysqli_query($db,$query);
	$l2 = mysqli_query($db,$query2);

	if($l)
	{
		if($l2)
		{
			echo "Successfully Update item Details........";
		}
	}
	else
	{
			echo "Failed to Update item Details........";
	}

	}
	elseif($c == 'woman')
	{

	$query = "UPDATE woman SET Description = '$d' WHERE Product_id = '$p'";
	$query2 = "UPDATE woman SET Price = '$pri' WHERE Product_id = '$p'";

	$l = mysqli_query($db,$query);
	$l2 = mysqli_query($db,$query2);

	if($l)
	{
		if($l2)
		{
			echo "<h2>Successfully Update item Details........</h2>";
		}
	}
	else
	{
			echo "<h2 style='border-left:200px'>Failed to Update item Details........</h2>";
	}


	}
	else
	{

	}



mysqli_close($db);


}

?>
