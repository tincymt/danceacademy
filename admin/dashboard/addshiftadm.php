<?php
include("dbconnection.php");

$shift_type=$_POST["shift"];

$date=$_POST["doc"];

$status=1;

$r="select * from tbl_shift where shift_type='$shift_type'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num==1)
{
  ?>
<script>alert("shift already exists");
location.href="shift.php";
 exit;
</script>
<?php
}
else
{
$sql="insert into tbl_shift(shift_type,date,status) values ('$shift_type','$date','$status')";

if(mysqli_query($con,$sql))
{
  ?>
   <script>alert("Successfully inserted");
   location.href="shift.php";
   </script>
   <?php
}
}
mysqli_close($con);
?>