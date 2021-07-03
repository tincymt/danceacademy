<?php
 session_start();
include("dbconnection.php");
$image=$_FILES['sfile']['name']; 
$fileloc = "upload/".$image;
move_uploaded_file($_FILES["sfile"]["tmp_name"],$fileloc);
if($image=='jpg' || $image=='jpeg' )
{
echo "File is image <br/>";
echo "File type = " . $image;

}

$r="select * from tbl_gallery";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);

$sql="insert into tbl_gallery(image) values ('$image')";

if(mysqli_query($con,$sql))
{
  ?>
   <script>alert("Successfully inserted");
   location.href="gallery.php";
   </script>
   <?php
}

mysqli_close($con);
?>