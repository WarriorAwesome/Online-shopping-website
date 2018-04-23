<?php include("functions.php")   ?>
<!Doctype html>
<head>
<title> </title>
<link href="menu.css" rel="stylesheet" type="text/css" />
<link href="mystyle.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
  crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
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

<h2 class = "f"> Product Details </h2>
<hr>
<?php

include 'Connection.php';

$string = $_GET['p'];

$string2 = $_GET['p2'];

if($string == 'Men')
{

$query = "select * from men where Product_id = '$string2'";

$r = mysqli_query($db,$query) or die("There is no Data");

}
else
{

$query2 = "select * from woman where Product_id = '$string2'";

$r = mysqli_query($db,$query2) or die("There is no Data");

}


while($row5 = mysqli_fetch_row($r))
{


echo "<form action = 'Cart.php?' method = 'post'>";

echo "<table width='1000' height= 318 border= 0 cellpadding= 0 cellspacing = 5 align = center style = 'padding:5px; background-color:white; font-family:Futura Lt BT; font-weight:400; font-size:15px; border-collapse: separate;
   border-spacing: 20px;'> <tr>";

echo " <td align = center rowspan= 7><img src ='".$row5[5]."' class = 'imgbg' height = 307 width = 230><br></td>";
echo " <td>Product Id :<td> <input type = 'text' class = 'in7' name = 'id' value = '".$row5[0]."' readonly> </td>";
echo "</tr> <tr>";
echo " <td>Product Name <td><input type = 'text' name = 'pn' class = 'in7' value = '".$row5[2]."' size = 40 readonly> </td>";
echo "</tr> <tr>";
echo " <td>Brand <td> <input type = 'text' name = 'b' class = 'in7' value = '".$row5[3]."' readonly> </td>";
echo "</tr> <tr>";
echo " <td>Description<td><input type = 'text' name = 'd' class = 'in7' value = '".$row5[6]."' size = 40 readonly> </td>";
echo "</tr> <tr>";
echo " <td>Price<td><font style = 'font-family:Rupee Foradian'> </font> <input type = 'text' class = 'in7' name = 'p' value = '&#8377 ".$row5[4]."' readonly> </td>";
echo "</tr> <tr>";
echo "<td> Quantity</td><td><input type = 'number' min = '1' max = '10'  value = '1' name = 'quantity' size = 1> <input type 'text'  value = '".$row5[1]."' class = 'in8'name = 'c' size = 1></td>";
echo "</tr> <tr>";
echo "<td colspan = 2><button type = 'submit' class = 'Addtocart' name = 'submit'> Add to Cart </button></td>";
echo "</tr> <tr>";
echo "<td colspan = 2>&nbsp;</td>";

}

echo "  </tr> </table>";
echo "</form>";

mysqli_close($db);
?>


</body>
</html>