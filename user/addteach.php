<?php
include("dbconnection.php");
$name=$_POST['name'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$DOB=$_POST['dob'];
$contactno=$_POST['contactno'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];

$file=$_FILES['sfile']['name']; 
$fileloc = "upload/".$file;

move_uploaded_file($_FILES["sfile"]["tmp_name"],$fileloc);

$sql="insert into tbl_login(username,password) values ('$username','$password')";
mysqli_query($con,$sql);
$n=mysqli_insert_id($con);
$sqli="insert into tbl_studreg(login_id,name,address,gender,DOB,contactno,email,file) values ('$n','$name','$address','$gender','$DOB','$contactno','$email','$file')";

if(mysqli_query($con,$sqli))
    {
    ?>
    <script>alert("successful inserted");</script>
    <?php
    } 
if($n>0)
    {
   $_SESSION['username']=$username;
   header("location:login.html");
    }
else
{
    header("location:studreg.php");
}
mysqli_close($con);

?>




