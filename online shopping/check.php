<?php include ('functions.php') ?>
<?php 
    if(!isset($_SESSION['user']))
      header("location:index.php");
?>

<html>
<head>
<title>Checkout</title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
  crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
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
      <button class="btn btn-outline-success my-2 my-sm-0" name="gobutton" type="submit">GO!</button>
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
<?php

include 'Connection.php';


$odt = date("dmyH:i:s A");

if(isset($_SESSION['user']))
{

if(!isset($_SESSION['cart']))
{

$_SESSION['cart'] = array();

}

$em = $_SESSION['user']['EmailId'];

}

if(isset($_POST['checkout']))
{

$fn = $_POST['sfname'];

$ln = $_POST['slname'];

$e =  $_POST['semail'];

$add = $_POST['Address'];

$cont = $_POST['select'];

$s = $_POST['select2'];

$city = $_POST['select3'];

$z = $_POST['zcode'];

$cn = $_POST['stel2'];

$sm = $_POST['shipcharge'];

$pm = $_POST['payment'];

$ct = $_POST['Ctypes'];

$nc = $_POST['Nc'];

$ccno = $_POST['CCno'];

$cv = $_POST['cvv'];

$m = $_POST['mon'];

$y = $_POST['yer'];

$exd = $m."/".$y;

if($sm == 'Standard Shiping')
{

	$charge = 8.50;
}
else
{
	$charge = 0;

}
$tp2 = 0;

foreach ($_SESSION["cart"] as $item)
{
		$tp = $item['quan'] * $item['price'];
		$tp2 += $tp;

}
if($tp2 ==0)
{
	echo "<hr>";

	echo "<h1 align = center class = 'f'> cannot place order </h1> <br><br><h4> you have not placed any order</h4> ";

	unset($_SESSION["cart"]);
}
else{

$tp2 = $tp2 + $charge;

if($pm == 'Credit Card')
{
$r=mysqli_query($db,"INSERT INTO orders(FirstName, LastName, Email, ShippingAddress, Country, State, City, Zip_code, contactNo, ShippingMethod, PaymentMethod, TypeOfCreditcard, NameOnCC, CCNo, CVV, ExpirationDate, Email_id, Order_Ammount, temp) VALUES('".$fn."', '".$ln."', '".$e."', '".$add."', '".$cont."', '".$s."', '".$city."', '".$z."', '".$cn."', '".$sm."', '".$pm."', '".$ct."', '".$nc."', '".$ccno."', '".$cv."', '".$exd."', '".$em."', '".$tp2."', '".$odt."')") or die("Failed to Insert Data");
}
else
{

$r=mysqli_query($db,"INSERT INTO orders(FirstName, LastName, Email, ShippingAddress, Country, State, City, Zip_code, contactNo, ShippingMethod, PaymentMethod, Email_id, Order_Ammount, temp) VALUES('".$fn."', '".$ln."', '".$e."', '".$add."', '".$cont."', '".$s."', '".$city."', '".$z."', '".$cn."', '".$sm."', '".$pm."', '".$em."', '".$tp2."', '".$odt."')") or die("Failed to Insert Data");

}

foreach ($_SESSION["cart"] as $item)
{
		$tp = $item['quan'] * $item['price'];
		$tp2 += $tp;

	$que = "INSERT INTO cart1(Product_id, productname, brand, description, Imagepath , price, quantity, Total_price, email, temp) values('".$item['Proid']."', '".$item['name']."', '".$item['brand']."', '".$item['desc']."', '".$item['image']."', '".$item['price']."', '".$item['quan']."', '".$tp."', '".$em."', '".$odt."')";

	mysqli_query($db,$que) or die("Failed ");

}


$r2 = mysqli_query($db,"SELECT Order_id from orders WHERE temp = '$odt'");



	while($row = mysqli_fetch_row($r2))
	{
		$oid = $row[0];
	}

mysqli_query($db,"update cart1 set Order_id = '$oid' where temp = '$odt'");

mysqli_query($db,"update cart1 set temp = '' where Order_id = '$oid'");

mysqli_query($db,"update orders set temp = '' where Order_id = '$oid'");

if($r2)
{
	echo "<hr>";

	echo "<h1 align = center class = 'f'> Thank you for Shopping </h1> <br><br> <h4> Your Order id is : ".$oid. "</h4>";

	unset($_SESSION["cart"]);

}

else
{
	echo "<h2>Somthig is Wrong... with this Order.... Try again...</h2>";

}
}
mysqli_close($db);

}


?>



</body>
</html>
