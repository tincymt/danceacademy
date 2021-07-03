<?php
session_start();
include("dbconnection.php");

{
$name=$_POST["name"];
$address=$_POST["address"];

$DOB=$_POST["dob"];
$contactno=$_POST["contactno"];
$email=$_POST["email"];
$username=$_POST["username"];
$user_type="user";
$status=1;
$temp=$_SESSION['username'];

$h="select login_id from tbl_login where username='$temp'";
$res=mysqli_query($con,$h);
$a=mysqli_fetch_array($res);
$b=$a['login_id'];
$sq="update tbl_studreg set name='$name', address='$address', DOB='$DOB',
contactno='$contactno',email='$email' where login_id='$b'";
mysqli_query($con,$sq);
$a="update tbl_login set username='$username' where username='$temp'";

if(mysqli_query($con,$a))
{
	$_SESSION['username']=$username;
  ?>
  <script>alert("Profile Updated Successfully");
  location.href="index.php";
   exit;
  </script>
  <?php
}}
mysqli_close($con);
?>