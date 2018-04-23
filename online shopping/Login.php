<?php include('functions.php') ?>
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
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=email], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 10%;
    border-radius: 10%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<style>
  body { 
  background: url(indexpage.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
</head>
<body>

<h2 align="center">Login Form</h2>
<div style="background-color: white; margin-left: 350px; width: 800px;">
<form action="login.php" method="post" >
<?php echo display_error(); ?>
  <div class="imgcontainer">
    <img src="shop.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="Email_id"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="Email_id" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
   <button type="submit" name="login" value = "Login">Login</button>

  </div>
  <div class="container" style="background-color:#f1f1f1">
    <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
    <span class="psw">Not A Member <a href="signup.php">signup</a></span>
  </div>
</form>
</div>

</body>
</html>
