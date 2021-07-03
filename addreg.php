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
$pass=md5($password);
$usertype="user";
$status=1;
$file=$_FILES['sfile']['name']; 
$fileloc = "user/upload/".$file;

move_uploaded_file($_FILES["sfile"]["tmp_name"],$fileloc);

if($file=='jpg' || $file=='jpeg' || $file=='png' || $file=='gif')
{
echo "File is image <br/>";
echo "File type = " . $file;

}
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
$r="select * from tbl_studreg where email='$email'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num==1)
{
  ?>
<script>alert("Email id  already exists");
location.href="studreg.html";
 exit;
</script>
<?php
}
else
{
	
$sqli="insert into tbl_login(username,password,usertype,status) values ('$username','$pass','$usertype','$status')";
$result1=mysqli_query($con,$sqli);
$n=mysqli_insert_id($con);
$sq="insert into tbl_studreg(login_id,name,address,gender,DOB,contactno,email,file,status) values ('$n','$name','$address','$gender','$DOB','$contactno','$email','$file','$status')";

if(mysqli_query($con,$sq))
{
	?>
	<script>alert("you have successfully registred");
     location.href="login.php";
	 exit;
  </script>
  <?php
}
}}
mysqli_close($con);
?>