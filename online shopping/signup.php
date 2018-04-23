<?php include('functions.php'); ?>

<?php 
      if(isset($_SESSION['user'])){
        if($_SESSION['user']['user_type'] == 'admin')
          header("location:adminpage.php");
        else
        header("location:afterlogin.php");
    }
?>
<!DOCTYPE html>
<html>
<style>
  body { 
  background: url(indexpage.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text],input[type=number],input[type=email], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus,input[type=number]:focus,input[type=number]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<script language="javascript" type="text/javascript">
function limitText(limitField, limitNum) {
    if (limitField.value.length > limitNum) {
        limitField.value = limitField.value.substring(0, limitNum);
    }
}
</script>
<script src="validation.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
  crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>


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
    
      </ul>
      </div>
      </nav>
    
    <div style="margin-top:80px;">
    </div>


<div style="background-color: white; margin-left: 350px; width: 800px;">
<form name = "signin" method="POST" action="signup.php" style="border:1px solid #ccc" onSubmit = "return validation()">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter Your First Name" name="fname" onblur="alpha()" required>

<label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Your Last Name" name="lname" onblur="alpha()" required>

<label for="g"><b>Gender</b></label>
<label class="container">
    <input type="radio"  name="g" checked="checked" value = "male">
    Male
  </label>
  <label class="container">
    <input type="radio" name="g" value = "female">
  Female
  </label>



<label for="contact"><b>Contact No</b></label>
<input type="number"  min="0" name="contact" placeholder = "Enter Contact no" onKeyDown="limitText(this,10);" onKeyUp="limitText(this,10);"  required/>

<label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="c_password"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="c_password" onblur="passid_validation()" required>
    
  
  

    <div class="clearfix">
      <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
      <button type="submit" name = "submit" value = " Sign in " class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</div>
</body>
</html>
