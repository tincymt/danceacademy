<?php
session_start();
session_destroy();
if(isset($_session['username']))
{
	
}

header("location:../login.php");
exit();
?>
