<?php
session_start();
include("dbconnection.php");

$password=$_POST["new"];
$pass=md5($password);

$a=$_SESSION['username'];
$b="update tbl_login set password='$pass' where username='$a'";
if(mysqli_query($con,$b))
{
  ?>
  <script>alert("Password Updated Successfully");
  location.href="index.php";
   exit;
  </script>
  <?php
}
mysqli_close($con);
?>












