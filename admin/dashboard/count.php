<?php
$con=mysqli_connect("localhost","root","","dancedb") or die("COULDN'T CONNECT");
$query = "SELECT count(*) from tbl_studreg";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
echo "(".$row[0].")";
?>

