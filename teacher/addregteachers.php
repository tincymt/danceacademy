<?php
 session_start();
include("dbconnection.php");
$teach_name=$_POST['name'];
$teach_contact=$_POST['contactno'];
$teach_address=$_POST['address'];
$email=$_POST['email'];
$qualification=$_POST['qualification'];
$description=$_POST['description'];
$username=$_POST['username'];

$file=$_FILES['sfile']['name']; 
$fileloc = "upload/".$file;
$status=1;
move_uploaded_file($_FILES["sfile"]["tmp_name"],$fileloc);

if($file=='jpg' || $file=='jpeg' || $file=='png' || $file=='gif')
{
echo "File is image <br/>";
echo "File type = " . $file;

}

$r="update tbl_login set status='1' where username='$username'";
if(mysqli_query($con,$r))
{
$r="select login_id from tbl_login where username='$username'";
$result=mysqli_query($con,$r);
$n=mysqli_num_rows($result);
if($n>0)
{
  $a=mysqli_fetch_array($result);
  $login_id=$a['login_id'];
}
$sq="insert into tbl_teacher(login_id,teach_name,teach_contact,teach_address,email,qualification,description,file,status) values ('$login_id','$teach_name','$teach_contact','$teach_address','$email','$qualification','$description','$file','$status')";

mysqli_query($con,$sq)
 
	?>
	<script>alert("you have successfully registred");
     location.href="../login.php";
	 exit;
  </script>
  <?php

}
mysqli_close($con);
?>