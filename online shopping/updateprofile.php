<?php
include ('functions.php');
    if(!isset($_SESSION['user']))
      header("location:login.php");

if(isset($_SESSION['user']))
{


$e = $_SESSION['user']['EmailId'];

}


include 'Connection.php';

if(isset($_POST['submit']))
{

$fn = $_POST['f'];

$ln = $_POST['l'];

$gen = $_POST['g'];

$cn = $_POST['c'];

$em = $_POST['email'];

$pss = md5($_POST['password']);

$query = "UPDATE signuptable set FirstName = '".$fn."' where EmailId = '".$e."' ";
$query2 = "UPDATE signuptable set LastName = '".$ln."' where EmailId = '".$e."' ";
$query3 = "UPDATE signuptable set Gender = '".$gen."' where EmailId = '".$e."' ";
$query4 = "UPDATE signuptable set ContactNo = '".$cn."' where EmailId = '".$e."' ";
$query5 = "UPDATE signuptable set EmailId = '".$em."' where EmailId = '".$e."' ";
$query6 = "UPDATE signuptable set Password = '".$pss."' where EmailId = '".$e."' ";

mysqli_query($db,$query) or die("Failed to Update........data");
mysqli_query($db,$query2) or die("Failed to Update........data");
mysqli_query($db,$query3) or die("Failed to Update........data");
mysqli_query($db,$query4) or die("Failed to Update........data");
mysqli_query($db,$query5) or die("Failed to Update........data");
mysqli_query($db,$query6) or die("Failed to Update........data");


unset($_SESSION['user']);
session_destroy();
header("location:login2.php");

}
else
{
echo "<h1 style = 'color:red;'> Failed to Update Data................!</h1>";
}
mysqli_close($db);
?>
