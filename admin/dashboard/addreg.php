<?php
 session_start();
include("dbconnection.php");
$name=$_POST['name'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$DOB=$_POST['dob'];
$contactno=$_POST['contactno'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$usertype="user";

$file=$_FILES['sfile']['name']; 
$fileloc = "upload/".$file;

move_uploaded_file($_FILES["sfile"]["tmp_name"],$fileloc);



$r="select * from tbl_login where username='$username'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num==1)
{
  ?> 
<script>alert("username already exists");
location.href="studreg.html";
 exit;
</script>
<?php
}
else
{
$sqli="insert into tbl_login(username,password,usertype) values ('$username','$password','$usertype')";
$result1=mysqli_query($con,$sqli);
$n=mysqli_insert_id($con);
$sq="insert into tbl_studreg(login_id,name,address,gender,DOB,contactno,email,file) values ('$n','$name','$address','$gender','$DOB','$contactno','$email','$file')";

if(mysqli_query($con,$sq))
{
    header("location:login.html");
}
}
mysqli_close($con);
?>