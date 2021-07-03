<?php
session_start();
include("dbconnection.php");

$v=$_SESSION['username'];
$r="select login_id from tbl_login where username='$v'";
$result=mysqli_query($con,$r);
while($results=mysqli_fetch_array($result))
{
	$c=$results['login_id'];
}

	$sql="update tbl_login set book_status='1' where login_id='$c'";

	mysqli_query($con,$sql);
	$sq="update tbl_studentbooking set status='1' where login_id='$c'"; 
	if(mysqli_query($con,$sq))
{
	
  ?>

<script>alert("Payment Done Successfully");
location.href="student_booking_details.php";
 exit;
</script>
<?php
}
mysqli_close($con);
 ?>