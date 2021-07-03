<?php
session_start();
include("dbconnection.php");
$Date=$_POST['Date'];
$Description=$_POST['Description'];


$v=$_SESSION['username'];
$r="select login_id from tbl_login where username='$v'";
$result=mysqli_query($con,$r);
while($results=mysqli_fetch_array($result))
{
	$c=$results['login_id'];
}

$sq="insert into tbl_feedback(login_id,Date,Description) 
values ('$c','$Date','$Description')";

if(mysqli_query($con,$sq))
{
	?>
	<script>alert("Successfully Booked. You will be directed to Payment Page");
     location.href="contacts.php";
	 exit;
  </script>
  <?php
}

mysqli_close($con);
?>

