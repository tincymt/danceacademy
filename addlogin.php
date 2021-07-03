<?php
   session_start();

include("dbconnection.php");

  $username=$_POST["username"];

  $password=$_POST["password"];
  $pass=md5($password);
  $status=1;

 $sql="select * from tbl_login where username='$username' and password='$pass'";

$result=mysqli_query($con,$sql);

$n=mysqli_num_rows($result);
$_SESSION['username']=$username;
  if($n>0)

{
  while($fin=mysqli_fetch_array($result))
  {
	if($fin['usertype']=="admin")
	{

header("location: admin/dashboard/index.php");
exit;
    }

	else if($fin['usertype']=="user")
{
	header("location: user/index.php");
	exit;
}


else if($fin['usertype']=="teacher"&&$fin['status']=="0")
{
	header("location:teacher/teachreg.php");
	exit;
}

else if($fin['usertype']=="teacher"&&$fin['status']=="1")
{
	header("location:teacher/index.php");
	exit;
}

}
}
else

{
  ?>
<script>alert("Invalid Username or Password");
location.href="login.php";
 exit;
</script>
<?php
}

mysqli_close($con);

   ?>