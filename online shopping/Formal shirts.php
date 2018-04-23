<?php include("functions.php");
?>

<!DOCTYPE HTML>
<head>
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
  crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style type="text/css">
    body { 
  background: url(bg1.jpg) no-repeat center center fixed; 
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
       <a class="nav-link " href="myprofileview.php" style="color: blue;"><?php
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

<?php


include 'Connection.php';

$result = mysqli_query($db,"SELECT * FROM men where ProductType='Formal shirts'");

echo "<h1  class = 'f'> Formal shirts</h1><hr>";

echo "<table cellspacing = 10 cellpadding = 10 style='font-family:Futura Lt BT; font-weight:400; border-collapse: separate;
   border-spacing: 50px;'> <tr>";

$c = 0;

while($row = mysqli_fetch_array($result))
{
$c++;
echo "<td class = 'imgbg'>
<a href ='DisplayProduct.php?p=$row[1]&p2=$row[0]&p3=$row[2]'><img src ='".$row['Imagepath']."' height = 240 width = 180 > </a><br> <font style = 'font-family:Rupee Foradian'> </font> &#8377 ".$row['Price']."<br>".$row['Description'];

if($c == 4)
{
echo "<tr>";
}

if($c >= 4)
{
$c = 0;
}
}


echo "</td></tr></table>";


mysqli_close($db);

?>

</div>
</body>
</html>
