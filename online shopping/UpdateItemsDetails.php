<?php include ('functions.php');?>
<?php
if($_SESSION['user']['user_type'] != 'admin')
  header("location:afterlogin.php");
?>

<!DOCTYPE HTML>
<HEAD>
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
<link rel = "stylesheet" type = "text/css" href = "menu.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
  crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="validation2.js"></script>
<style>
  body { 
  background: url(adminpage.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>

</HEAD>
<BODY>

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

  </ul>
  </div>
  </nav>
  <div style="margin-top:80px;">
</div>
<h1 align = center class = "f"> Update Product </h1><hr>

<?php


include 'Connection.php';


$pid = $_GET['i'];

$c = $_GET['c'];


if($c == 'men')
{

$query = "select * from men where Product_id = '$pid'";

$r = mysqli_query($db,$query) or die("There is no Data");

}
else
{

$query2 = "select * from woman where Product_id = '$pid'";

$r = mysqli_query($db,$query2) or die("There is no Data");

}

echo "<form action = 'updateitems.php' method = 'post' onsubmit ='return validation5()'>";

echo "<table width='1000' height= 318 border= 0 cellpadding= 0 cellspacing = 5 align = center style = 'padding:5px; background-color:white; font-family:Futura Lt BT; font-weight:400; font-size:15px;'> <tr>";

echo "<div style = 'visibility:hidden;'><input type = 'text' name = 'cat' value = '".$c."'> </div>";

while($row6 = mysqli_fetch_row($r))
{

echo " <td align = center rowspan= 7><img src ='".$row6[5]."' class = 'imgbg' height = 307 width = 230><br></td>";
echo " <td>Product Id :<td> <input type = 'text' class = 'in7' name = 'id' value = '".$row6[0]."' size = 60 readonly> </td>";
echo "</tr> <tr>";
echo " <td>Product Name <td><input type = 'text' name = 'pn' class = 'in7' value = '".$row6[2]."' size = 60 readonly> </td>";
echo "</tr> <tr>";
echo " <td>Brand <td> <input type = 'text' name = 'b' class = 'in7' value = '".$row6[3]."' size = 60 readonly> </td>";
echo "</tr> <tr>";
echo " <td>Description<td><input type = 'text' name = 'd' class = 'in60' value = '".$row6[6]."' size = 60 required> </td>";
echo "</tr> <tr>";
echo " <td>Price<td><font style = 'font-family:Rupee Foradian'>` </font> <input type = 'number' class = 'in60' name = 'p' value = '".$row6[4]."' size = 58 onblur = 'numb2()'required> </td>";

echo "</tr> <tr>";
echo "<td colspan = 2><button type = 'submit'  class = 'Addtocart'name = 'submit'> Update </button></td>";
echo "</tr> <tr>";
echo "<td colspan = 2>&nbsp;</td>";

}


echo "  </tr> </table>";
echo "</form>";


mysqli_close($db);


?>
