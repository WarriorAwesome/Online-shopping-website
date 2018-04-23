<?php include ('functions.php');?>
<?php
if($_SESSION['user']['user_type'] != 'admin')
  header("location:afterlogin.php");
?>
<?php
session_start();

{

?>

<! DOCTYPE html>
<head>
<title>Delete Product</title>
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
<h1 align = center class = "f"> Delete Product </h1><hr>
<form method="post" action="<?php $_PHP_SELF ?>">
<table  border="0" cellpadding="9" cellspacing="9">
  <tr>
    <td>Category :</td>
    <td>
<input type="radio" name="cat" value="men" >
Men
 &nbsp;&nbsp;  &nbsp;
        <input type="radio" name="cat" value="woman" required>
        Woman </td>
	<td>Product Type :</td>
    <td><select name="menu1" required>
   <option value = ""> ------------------------Select------------------------</option>
      <optgroup name = "menclothes" label = "Men's Clothes">
      <option> Formal shirts</option>
      <option> Slogan T-shirts</option>
      <option> V-neck T-shirts</option>
      <option> Round neck T-shirts</option>
      <option> Full sleeve Tees</option>
      </optgroup>
      <optgroup name = "womanclothes" label = "Woman's Clothes">
      <option> Dresses-Anarkalis</option>
      <option> Indo-Ethnic Kurtas And Tops</option>
      <option> Saris</option>
      <option> Skirts</option>
      <option> Trousers and shorts-Pants And Palazzos</option>
      <option> Tshirts-Shirts</option>
      <option> Wedding clothing</option>
      <option> Western Wall</option>
      </optgroup>
    </select> </td>
	<td>Brand : </td>
	<td>
	<select name="brands" required>
      <option value = ""> ------------------------Select------------------------</option>
	 <option value = "None">None</option>
	  <optgroup name = "Man's Brand" label = "Man's Brand">
	<option> Spykar </option>
	<option>Turtle </option>
	<option>Tom Hatton </option>
	<option>Peter England </option>
	<option>LondonBridge </option>
	<option>Lotto </option>
<optgroup name = "woman's Brand" label = "Woman's Brand">

      <option>Bombay Fashion</option>
      <option>Kiari</option>
      <option>Aurilia</option>
      <option>Allen Solly</option>
      <option>Karigari</option>
      <option>Morden Fashion</option>
      <option>Shripa</option>
     <option>Women</option>
     <option>Bombay Style</option>
     <option>Varsiddhi</option>
    </select>
	</td>
  <div style = "visibility:hidden;"><input type = "text" name = "lable" id = "path"></div>	<td><input name="submit" type = "submit"  name = "submit" value = "Display" class="d"> </td>
  </tr>
  </table>
</form>
</body>
</html>

<?php

}

?>

<?php


include 'Connection.php';

if(isset($_POST['submit']))
{
$cate = $_POST['cat'];

$m = $_POST['menu1'];

$b = $_POST['brands'];

if($cate == 'men')
{
	$result = mysqli_query($db,"SELECT * FROM men where ProductType = '$m' and Brand = '$b'");
}

else
{
	$result = mysqli_query($db,"SELECT * FROM woman where ProductType = '$m' and Brand = '$b'");
}

echo "<form action = 'Delete.php' method = 'post'>";

echo "<table border = 0 cellspacing = 20 cellpadding = 5> <tr align = center  style = 'background-color:#e8e9e7;'>";

echo " <div style = 'visibility:hidden;'><input type = 'text' name = 'category' value = '".$cate."'></div>";
echo "<td> <strong> &nbsp; </td>";
echo "<td> <strong> Product Id </td> ";
echo "<td> <strong>Product Image </td>";
echo "<td> <strong>Product Brand </td>";
echo "<td> <strong>Description </td>";
echo "<td> <strong>Price </td><tr>";

while($row = mysqli_fetch_array($result))
{

	echo "<td> <input type  = 'radio' name = 'pid' value = '".$row['Product_id']."'  required>";
	echo "<td> <input type = 'text' value = '".$row['Product_id']."' readonly size = 1>";
	echo "<td> <img src = '".$row['Imagepath']."' height = 200 width = 200>";
	echo "<td> <input type = 'text' value = '".$row['Brand']."'  readonly>";
	echo "<td> <input type = 'text' name = 'Desc' value = '".$row['Description']."' size = 40  readonly>";
	echo "<td style = 'font-family:Rupee Foradian'>`&nbsp;<input type = 'text' name = 'price' value = '".$row['Price']."' size = 5  readonly>";
	echo "<td> <input type = 'submit'  class = 'd' value = 'Delete'> </td>";
	echo "<tr>";
}

echo "</td></tr> </table>";

echo "</form>";


mysqli_close($db);
}
?>
