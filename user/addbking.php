<?php
 session_start();
include("dbconnection.php");

$course_name=$_POST['course'];
$duration=$_POST['duration'];
$shift_type=$_POST['shift'];
$gurad_num=$_POST['gudnum'];
$dance_exp=$_POST['expyr'];
$dance_exp=$_POST['expyr'];

$status=0;
$file=$_FILES['sfile']['name']; 
$fileloc = "upload/".$file;

move_uploaded_file($_FILES["sfile"]["tmp_name"],$fileloc);
if($file=='jpg' || $file=='jpeg' || $file=='pdf')
{
echo "File is image <br/>";
echo "File type = " . $file;

}
$v=$_SESSION['username'];
$r="select login_id from tbl_login where username='$v'";
$result=mysqli_query($con,$r);
while($results=mysqli_fetch_array($result))
{
	$c=$results['login_id'];
}
$r="select * from tbl_studentbooking where login_id='$c'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num==1)
{
  ?>
<script>alert("You are already Booked");
location.href="booking.php";
 exit;
</script>
<?php
}
else
{

$sq="insert into tbl_studentbooking(login_id,course_name,duration,shift_type,gurad_num,dance_exp,file,status) 
values ('$c','$course_name','$duration','$shift_type','$gurad_num','$dance_exp','$file','$status')";

if(mysqli_query($con,$sq))
{
	?>
	<script>alert("Successfully Booked. You will be directed to Payment Page");
     location.href="pay.php";
	 exit;
  </script>
  <?php
}}

mysqli_close($con);
?>