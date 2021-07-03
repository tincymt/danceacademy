<?php
session_start();
include("dbconnection.php");

{
$teach_name=$_POST["name"];
$teach_address=$_POST["address"];
$teach_contact=$_POST["contactno"];
$email=$_POST["email"];
$description=$_POST["description"];
$qualification=$_POST["qualification"];
$username=$_POST["username"];
$user_type="teacher";
$status=1;
$temp=$_SESSION['username'];

$h="select login_id from tbl_login where username='$temp'";
$res=mysqli_query($con,$h);
$a=mysqli_fetch_array($res);
$b=$a['login_id'];
$sq="update tbl_teacher set teach_name='$teach_name', teach_address='$teach_address', 
teach_contact='$teach_contact',qualification='$qualification',email='$email' where login_id='$b'";
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