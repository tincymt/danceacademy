 <?php
include("dbconnection.php");

$duration=$_POST["dur"];
$status=1;
$r="select * from tbl_duration where duration='$duration'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num==1)
{
  ?>
<script>alert("duration already exists");
location.href="duration.php";
 exit;
</script>
<?php
}
else
{
$sql="insert into tbl_duration(duration,status) values ('$duration','$status')";

if(mysqli_query($con,$sql))
{
  ?>
   <script>alert("Successfully inserted");
   location.href="duration.php";
   </script>
   <?php
}
}
mysqli_close($con);
?>