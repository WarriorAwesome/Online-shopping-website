<?php include("functions.php"); 
if(!isset($_SESSION['user']))
          header("location:login.php");  ?>

<!DOCTYPE>
<head>
<link rel = "stylesheet" type = "text/css" href = "menu.css">
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
<script src="validation2.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
  crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script language="javascript" type="text/javascript">
function limitText(limitField, limitNum) {
    if (limitField.value.length > limitNum) {
        limitField.value = limitField.value.substring(0, limitNum);
    }
}
</script>
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

<?php


include 'Connection.php';
if(isset($_SESSION['user']))
{
$e = $_SESSION['user']['EmailId'];
$result = mysqli_query($db,"SELECT * from signuptable where EmailId = '$e' ");

$row = mysqli_fetch_row($result);
if(!isset($_SESSION['cart']))
{


$_SESSION['cart'] = array();

}

?>
<div align="center" style="background-color: #DCDCDC; margin-left: 100px; margin-right: 100px; margin-top: 150px; border-radius: 10%;">
<h2 class = "f"> Secure Checkout</h2>
<hr>

<form name = "checkout" action="check.php" method="post" onsubmit = "return validation5()">
      <table width="1038" border="0" cellspacing="5" cellpadding="5" style="font-family:Futura Lt BT; font-weight:400;">
        <tr>
          <td colspan="2" style = "background-color:#07aaf6; color:white;"><strong>Shipping Info </strong> </td>
          <td colspan="2"style = "background-color:#07aaf6; color:white;"><strong>Shipping Method </strong></td>
          <td colspan="2"style = "background-color:#07aaf6; color:white;"><strong><strong>Payment Method</strong> </td>
          <td width="93">&nbsp;</td>
          <td width="112">&nbsp;</td>
        </tr>
        <tr>
          <td width="91">First Name </td>
          <td width="172"><input name="sfname" type="text" value = "<?php echo $row[1] ?>" class="in9" id="sfname" size="20" placeholder="First Name" maxlength = 10 tabindex="1" onblur = "alphabet()" required/>
          <td width="99"><input name = "shipcharge" type="radio" value="Free Shipping"tabindex="10">
          Rs.0.00</td>
          <td width="127">Free Shipping </td>
          <td width="20"><div align="center">
              <input name = "payment" type="radio" onClick="c2(this)" value="Cash on delivery" tabindex="12">
          </div></td>
          <td width="181">Cash on delivery </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td> Last Name </td>
          <td><input name="slname" type="text" value = "<?php echo $row[2] ?>" class = "in9" id="slname" placeholder="Last Name" maxlength = 10 tabindex="2" onblur = "alphabet2()" required/></td>
          <td><input name = "shipcharge" type="radio" checked="checked" value="Standard Shiping" tabindex="11"required/>
            Rs.8.50 </td>
          <td>Standard Shipping </td>
          <td><div align="center">
            <input name = "payment" type="radio" onClick="c(this)" checked="checked" value="Credit Card" tabindex="13" required/>
          </div>
          <td> Credit Card </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td> Email </td>
          <td><input name="semail" type="email" value = "<?php echo $row[5] ?>" class = "in9" id="semail" placeholder="E-mail" tabindex="3" onblur = "validateE()"required/></td>
          <td colspan="4" rowspan="5">   <div id ="creditcard" >
                <table cellspacing="5" cellpadding="5" style = "border :1px solid #07aaf6; border-radius:5px;">
            <tr>
              <td>Credit Card Type
              <td><select name="Ctypes" class="in11" id="Ctypes">
                <option selected>Visa</option>
                <option>MasterCard</option>
                <option>Maestro International</option>
              </select></td>
            </tr>
            <tr>
              <td>Name on Credit Card
              <td><input name="Nc" type="cname" class = "in9" id="Nc"></td>
            </tr>
            <tr>
              <td>Credit Card Number
              <td><input name="CCno" type="number" class = "in9" id="CCno" onKeyDown="limitText(this,16);" 
                    onKeyUp="limitText(this,16);" minlength="16">                  </td>
            </tr>
            <tr>
              <td>CVV
              <td><input name="cvv" type="number" class = "in9" id="cvv" onKeyDown="limitText(this,3);" 
                onKeyUp="limitText(this,3);" minlength="3">                  </td>
            </tr>
            <tr>
              <td>Expiration Date
              <td><select name="mon" class="in12" id="mon">
                      <option selected="selected">Month</option>
                      <option selected>01</option>
                      <option>02</option>
                      <option>03</option>
                      <option>04</option>
                      <option>05</option>
                      <option>06</option>
                      <option>07</option>
                      <option>08</option>
                      <option>09</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                    </select>
                      <select name="yer" class="in12" id="yer">
                        <option>Year</option>
                        <option selected>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                    </select></td>
            </tr>
                    </table> </div></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td> Address </td>
          <td><textarea name="Address" cols = 23  rows = 3 class = "in10" tabindex="4" required></textarea></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td> Country </td>
          <td><select name="select"  class="in11" tabindex="5">
		<option value="India" selected>India</option>
                      </select>          </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td> State </td>
          <td><select name="select2" class="in11" tabindex="6">


<option>Arunachal Pradesh
<option>Andhra Pradesh
<option selected>Delhi
<option>Madhya pradesh
<option>Uttar Pradesh
<option>Maharashtra

                      </select>          </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td> City </td>
          <td><select name="select3" class="in11" tabindex="7">
            <option>Ahemdabad

<option selected>New Delhi
                      </select>          </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td> Zip code </td>
          <td><input name="zcode" type="number" class = "in9" placeholder="Zip Code" onblur = "numb2()" onKeyDown="limitText(this,6);" 
          onKeyUp="limitText(this,6);" tabindex="8" required/></td>
          <td colspan="6"><strong><p style = "background-color:#07aaf6; color:white; padding:5px;">Your Order </p></strong></td>
        </tr>
        <tr>
          <td> Contact </td>
          <td><input name="stel2" type="number" class = "in9" value = "<?php echo $row[4] ?>" id="stel2" placeholder="Contact Phone" tabindex="9" maxlength = '10' onblur = "numb()" required/></td>
          <td colspan="6" rowspan="5">

<?php

echo "<table cellspacing = 5 cellpadding = 3 width = 700> <tr align = center  style = 'background-color:#e8e9e7;'>";

echo "<b><td> <strong>Product Id <td> <strong> Product Name <td><strong> Price <td><strong>Quantity<td> <strong> <strong>Sub Total </td><tr>";

$tp2 = 0;

foreach ($_SESSION["cart"] as $item)
{

	$i = $item['Proid'];
	$tp = $item['quan'] * $item['price'];
	$tp2 += $tp;

	echo "<td align = 'center'> ".$item['Proid'];
	//echo "<td align = 'center'><img src = '".$item['image']."' height = 90 width = 90>";
	echo "<td> ".$item['desc'];
	echo "<td align = 'center'>&#8377 ".$item['price'];
	echo "<td align = 'center'> ".$item['quan'];
	echo "<td align = 'center'>&#8377 ".$tp;

	echo "<tr>";


}

	echo "</tr>";
	echo "<tr style = 'background-color:#e8e9e7;'> <td colspan = 4 align = right>Grand Total : <td align = 'center'> <font style = 'font-family:Rupee Foradian'><strong>  </font>&#8377 ".$tp2;;
	echo "<td> </tr></table>";
?>          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="6">

            <div align="right">
              <button type="submit" class = "Addtocart" name="checkout" method="post" action="check.php" value="Place Order Now">Place order now </button>
            </div></td>
            
        </tr>
      </table>
</form>
</div>
<?php
}

else

{
	echo "<h2 style = 'color:red;'> Please Login First or Sign up Now......</h2>";

}


?>

</body>
</html>
