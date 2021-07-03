<?php
 session_start();
include("dbconnection.php");

$date=$_POST['dte'];
$reason=$_POST['txtReason'];
$usertype="user";
$status=0;

$v=$_SESSION['username'];
$r="select login_id from tbl_login where username='$v'";
$result=mysqli_query($con,$r);
while($results=mysqli_fetch_array($result))
{
	$c=$results['login_id'];
}

$sq="insert into tbl_leave(login_id,date,reason,usertype,status) 
values ('$c','$date','$reason','$usertype','$status')";

if(mysqli_query($con,$sq))
{
	?>
	<script>alert("you have successfully apply your leave");
     location.href="apply_leave_usr.php";
	 exit;
  </script>
  <?php
}

mysqli_close($con);
?>