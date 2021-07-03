<?php
 session_start();
include("dbconnection.php");

$shift_type=$_POST["shift"];
$batch_duraton=$_POST["duration"];
$course=$_POST["course"];
$time=$_POST["teacher"];
$sql="update tbl_teacher set time='$shift_type',duration='$batch_duraton',course_name='$course' where teach_name='$time'";
if(mysqli_query($con,$sql))
{
  ?>
   <script>alert("Successfully inserted");
   location.href="batch.php";
   </script>
   <?php
}

mysqli_close($con);
?>