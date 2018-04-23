<?php include("functions.php");
if(!isset($_SESSION['user']))
          header("location:login.php"); ?>

<!Doctype html>
<head>
	<style>
  body { 
  background: url(cart.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}


.sidenav {
    height: 450px;
    width: 250px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #F8F9FA;
    transition: 0.5s;
    padding-top: 60px;
}
</style>
</head>
<body>
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
<link rel = "stylesheet" type = "text/css" href = "menu.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
  crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
    <a class="nav-link " href="index.php?logout='1'" class="nav-item" style="color: red; float: right; margin-left: 430px;">logout</a>
  </li>
  	<li class="nav-item" class="nav-link">
       <a class="nav-link " href="adminpage.php" style="color: blue;"><?php 
              if($_SESSION['user']['user_type'] == 'admin')
                echo "admin panel";
        ?></a>
  </ul>
  </div>
</nav>
<div style="margin-top:80px;">
</div>

<div class="row" style="margin-left:10px;">
  <div class="col-sm-2">
  <div class="container" style="background-color:#F8F9FA; border-radius:5%;">
 
  <ul style="margin-top:20px;">MEN
                    <li><a href="Formal shirts.php" style="color:black;">Formal Shirts</a></li>
                    <li><a href="t-shirts.php" style="color:black;">T-Shirts</a></li>
</ul>

 <ul>WOMEN
                    <li><a href="westernwall.php" style="color:black;">Western</a></li>
                    <li><a href="skirts.php" style="color:black;">Skirts</a></li>
                    <li><a href="trousers.php" style="color:black;">Trousers</a></li>
                    <li><a href="sarees.php" style="color:black;">Sarees</a></li>
                    <li class="active"><a href="ethnic.php" style="color:black;">Ethnic Wears</a></li>
                    <li><a href="shirts.php" style="color:black;">Shirts</a></li>
                  </ul>

</div>

</div>

          <div class="col-sm-10">


<h1 class = "f"> Your Shoping Cart</h1>
<hr>


<div style="background-color: white; width: 1000px;">
<?php
if(isset($_SESSION['user'])){

include 'Connection.php';

if(!isset($_SESSION['cart']))
{
$_SESSION['cart'] = array();

}

	if(isset($_POST['submit']))
	{
			$cate = $_POST['c'];

			$p_id = $_POST['id'];

				if($cate == 'Men')
				{
					$q = "select * from men where Product_id = $p_id ";
				}
				else
				{
					$q = "select * from woman where Product_id = $p_id";
				}

					$result = mysqli_query($db,$q) or die("Error in Selecting Data");

					while($r = mysqli_fetch_row($result))
					{
						$items[] = $r;
					}

		$itemArray = array($items[0][0]=>array('Proid' => $items[0][0], 'name'=>$items[0][2], 'brand'=>$items[0][3], 'desc'=>$items[0][6], 'quan'=>$_POST["quantity"], 'price'=>$items[0][4], 'image'=> $items[0][5]));

		$_SESSION['cart'] += $itemArray;


	}



			elseif(empty($_SESSION['cart']))
			{
				echo "<h2>There is No Items in Your Cart...........</h2>";
			}


			elseif(isset($_GET['action']))
			{
				foreach($_SESSION["cart"] as $k => $v)
				{
					if($_GET["id"] == $k)
					{
						unset($_SESSION["cart"][$k]);

					}

				}
					if(empty($_SESSION['cart']))
					{

						echo "<h2>There is No Items in Your Cart...........</h2>";

					}

	}


	if(!empty($_SESSION['cart']))
	{
		echo "<a href = 'CheckOut.php' method='post'><Button class = 'Addtocart'> Check Out </button> </a>";

	}

echo "<table  width = 1000 cellspacing = 10 cellpadding = 5 style='font-family:Futura Lt BT; font-weight:400;'> <tr align = center  style = 'background-color:#e8e9e7;'>";

echo "<b><td> <strong>Product Id  <td> <strong> Image <td> <strong> Description <td><strong> Price <td><strong>Quantity<td> <strong> <strong>Sub Total </td> <td><strong> Action </td> <tr>";

$tp2 = 0;

foreach ($_SESSION["cart"] as $item)
{

	$i = $item['Proid'];
	$tp = $item['quan'] * $item['price'];
	$tp2 += $tp;

	echo "<td align = 'center'> ".$item['Proid'];
	echo "<td align = 'center'><img src = '".$item['image']."' height = 180 width = 120>";
	echo "<td> ".$item['desc'];
	echo "<td align = 'center'> &#8377 ".$item['price'];
	echo "<td align = 'center'> ".$item['quan'];
	echo "<td align = 'center'>&#8377 ".$tp;
	echo "<td align = 'center'> <a href ='Cart.php?action&id=$i'> <img src = 'remove_x.png' height = 30 width = 60> </a> </td>";

	echo "<tr>";


}

	echo "</tr>";
	echo "<tr style = 'background-color:#e8e9e7;'> <td colspan = 5 align = right>Grand Total : <td align = 'center'> <font style = 'font-family:Rupee Foradian'><strong>  </font>&#8377 ".$tp2;;
	echo "<td> </tr></table>";

}
?>

</div>

</body>
</html>
