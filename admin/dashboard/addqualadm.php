 <?php
include("dbconnection.php");

$qualification=$_POST["qualification"];

$r="select * from tbl_qualification where qualification='$qualification'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num==1)
{
  ?>
<script>alert("qualification already exists");
location.href="qualification.php";
 exit;
</script>
<?php
}
else
{
$sql="insert into tbl_qualification(qualification) values ('$qualification')";

if(mysqli_query($con,$sql))
{
  ?>
   <script>alert("Successfully inserted");
   location.href="qualification.php";
   </script>
   <?php
}
}
mysqli_close($con);
?>