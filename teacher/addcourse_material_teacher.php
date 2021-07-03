<?php
 session_start();
include("dbconnection.php");
$course_name=$_POST["course"];
$file_name=$_POST["name"];
$status=1;


$file=$_FILES['sfile']['name']; 
$fileloc = "file_upload/".$file;

move_uploaded_file($_FILES["sfile"]["tmp_name"],$fileloc);
if($file=='jpg' || $file=='jpeg' || $file=='pdf' || $file=='doc' || $file=='docx')

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


$sql="insert into tbl_file(login_id,course_name,file,file_name,status) values ('$c','$course_name','$file','$file_name','$status')";

if(mysqli_query($con,$sql))
{
  ?>
   <script>alert("Successfully inserted");
   location.href="course_material_teacher.php";
   </script>
   <?php
}

mysqli_close($con);
?>