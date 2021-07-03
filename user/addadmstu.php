<?php
include("dbconnection.php");
 session_start();
$date_of_adm=$_POST["dateofadm"];
$guardian_name=$_POST["guardname"];
$emer_num=$_POST["emernum"];
$dname=$_POST["dname"];
$year_of_exp=$_POST["Yrofexp"];
$status=1;





$v=$_SESSION['username'];
$r="select login_id from tbl_login where username='$v'";
$result=mysqli_query($con,$r);
while($results=mysqli_fetch_array($result))
{
	$c=$results['login_id'];
}
	$sq="insert into tbl_studentbooking(login_id,date_of_adm,guardian_name,emer_num,dname,year_of_exp,status) values ('$c','$date_of_adm','$guardian_name','$emer_num','$dname','$year_of_exp','$status')";
	
	

if(mysqli_query($con,$sq))
{
  ?>
   <script>alert("Successfully inserted");
   location.href="index.php";
   </script>
   <?php
}

mysqli_close($con);
?>