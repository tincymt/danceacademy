<?php
 session_start();
include("dbconnection.php");

$username=$_POST["username"];
$password=$_POST["password"];
$pass=md5($password);
$usertype='teacher';


$r="select * from tbl_login where username='$username'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num==1)
{
  ?>
<script>alert("user name already exists");
location.href="teachersadm.php";
 exit;
</script>
<?php
}
else
{
$sql="insert into tbl_login(username,password,usertype) values ('$username','$pass','$usertype')";

if(mysqli_query($con,$sql))
{
  ?>
   <script>alert("Successfully inserted");
   location.href="teachersadm.php";
   </script>
   <?php
}
}
mysqli_close($con);
?>