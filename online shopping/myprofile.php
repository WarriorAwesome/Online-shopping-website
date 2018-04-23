<?php include ('functions.php'); ?>
<!DOCTYPE html>
<head>
<title>My Profile</title>
<link href="menu.css" rel="stylesheet" type="text/css"/>
<link href="mystyle.css" rel="stylesheet" type="text/css"/>
<script src="validation3.js"></script>
 <style>
 body { 
  background: url(indexpage.jpg); 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  margin-top: 100px;
}
</style>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

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


<?php

if(!isset($_SESSION['user']))
{

header("location:login.php");

}
else
{

$e = $_SESSION['user']['EmailId'];

include 'Connection.php';

$result = mysqli_query($db,"SELECT * from signuptable where EmailId = '$e' ");

$row = mysqli_fetch_row($result);

?>

<div style = "height: 1000px; width: 1000px;">
<br>

<h1 style="margin-left: 700px;" class = "f">Edit Profile </h1>
<hr>
<form name = "myprofile" method = "post" action = "updateProfile.php" onsubmit = "return validation3()">

<table width="400" style="font-family:Futura Lt BT; font-weight:400; border-style: solid; margin-left: 550px; background-color: white;" cellspacing="8" cellpadding="10" align = "center">
  <tr>

    <td> First Name  </td>
    <td><input type="text" name = "f" value = "<?php echo $row[1] ?>" name="fname" class="in3" placeholder = "First name"  size="20" onblur = "alpha2()"/></td>
  </tr>
  <tr>
    <td> Last Name</td>
    <td><input type="text" name = "l" value = "<?php echo $row[2] ?>" name="lname" class = "in3" placeholder = "Last name"size="20" onblur = "alphabetic2()" /></td>
  </tr>
    <tr>
    <td> Gender </td>
    <td> Male <input type="radio" name="g" value = "male"/> &nbsp;Female <input type="radio" name="g"  value ="female" required/></td>
  </tr>

  <tr>
    <td>Contact no</td>
    <td><input type="text"  name = "c" value = "<?php echo $row[4] ?>" name="contact" class = "in3" size="20" maxlength = 10 placeholder = "Contact no" onblur = "num2()"/></td>
  </tr>

  <tr>
    <td>Email Id</td>
    <td><input type="email" id = "eid" name="email" value = "<?php echo $row[5] ?>" class = "in" size="25" placeholder = "Email Id" maxlength="40" onblur = "validateEmail()" required/>
</td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password"  id = "pa" name="password" class = "in" size="25" placeholder = "Password" maxlength="8" onblur="pass_validation()"required/></td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name = "submit" class = "Addtocart" value = "Save changes"/> </td>


</tr>
</table>
</form>
</div>
<?php
}


?>

</body>
</html>
