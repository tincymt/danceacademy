<?php
session_start();
include("dbconnection.php");
if(isset($_SESSION['username']))
{
	$temp=$_SESSION['username'];

	
	?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>profile</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/touchTouch.css">
<link rel="stylesheet" href="css/camera.css">
<link rel="stylesheet" href="css/style.css">

 
 
 
  
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Booking</title>

 <link href="../../css/bootstrap.min.css" rel="stylesheet">
 <link href="../../css/mdb.min.css" rel="stylesheet">
 
    
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/script.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/touchTouch.jquery.js"></script>
<script src="js/camera.js"></script>
<!--[if (gt IE 9)|!(IE)]><!-->
<script src="js/jquery.mobile.customized.min.js"></script>
<!--<![endif]-->
<script>

 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#camera_wrap').camera({
    loader: false,
    pagination: false ,
    minHeight: '400',
    thumbnails: true,
    height: '46.32478632478632%',
    caption: false,
    navigation: false,
    fx: 'mosaic'
  });
  $('.gallery .gall_item').touchTouch();
 });
</script>
<!--[if lt IE 8]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<![endif]-->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<style>
   html,
  body,
  header,
  .view {
    height: 100%;
  }
  body
 {
   margin: 0;
   padding: 0;
   background: url("p998.jpg");
   background-repeat: no-repeat;
   background-size: cover;
   background-position: center;
   font-family: sans-serif;
   height: 100%;
 }
  


.loginbox input[type="text"], input[type="password"], input[type="number"], input[type="email"],input[type="submit"],input[type="reset"],input[type="menu"]
{
border:none;
border-bottom:1px solid #fff;

outline:none;
height: 40 px;
color:black;
padding: 8px 20px;
  border-radius: 20px;
font-size:16px;
}

.panel-heading {
    color: #fff !important;
	text-transform: uppercase;
    background-color: #f4511e !important;
    padding: 10px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-head {
    color: #fff !important;
    background-color: #af9aae !important;
	text-transform: uppercase;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
 
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color:white;
  min-width: 140px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
 
  width: 100%
}

.dropdown-content a {
  color: black;
 font-size: 18px;
 line-height: 1.9;
  text-decoration: none;
  display: block;
}

.rd-navbar-sidebar .rd-navbar-nav > li > .rd-navbar-submenu-toggle {
    display: inline-block;
    font-size: 24px;
    line-height: 1;
    -webkit-transition: .3s transform;
    transition: .3s transform;
    cursor: pointer;
    margin-left: 2px;
    color: #3a3a3b;
}
.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

 i.custom {font-size: 1em; color: gray;}
 
 ul.a {
  list-style-image: url('Images/l1a.png');
   list-style-position: inside;

}

input[type=submit] {
  background-color:#e0a800 ;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}
input[type=reset] {
  background-color: #e0a800;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}



  .card {
    background-color:black;
	 
  }
  P{
	  	
 font-size: 20px;
 text-align:center;
  border-radius: 4px;
  }



  </style>

<body class="page1" id="top">
<!--==============================
              header
=================================-->

<div class="main">

 <div class="container_12">
 
<div class="container-fluid">

	<div class="container p-3 my-3 border">
	
        <div class="grid_12">
		
		<div class="navbar-header"> <img src="../images/p777c.jpg">
        
			<a class="navbar-brand" href="index.php"></a>
			
		</div>
		
			<ul class="nav navbar-right">
 <?php
													//include("dbconnection.php");
													$sq="select * from tbl_login where username='$temp'";
													$res=mysqli_query($con,$sq);
													$a=mysqli_fetch_array($res);
													$b=$a['login_id'];
													$sql="select * from tbl_studreg where login_id='$b'";
													$c=mysqli_query($con,$sql);
													$result=mysqli_fetch_array($c);
													?>

           <li id="dropdown-user">

                        <a href="#" data-toggle="dropdown" class="-toggle text-center" aria-expanded="false">
                          
                             <br><img class="img-circle img-user media-object"  src="../user/upload/<?php echo $result['file']; ?>"height="60" width="60">
                                                         
                           <div class="navigation ">
						   		 <div style=' clear: both; font-size:18px;position: relative;  text-transform: uppercase;'>
								 
                           <?php echo $result['name']; ?>
							</div>
                        </a> 
						
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
		  <p style="font-size:18px">
              <a href="" class="dropdown-item" data-toggle="modal" data-target="#myModal" >&nbsp &nbsp;<i class="fas fa-user-circle"></i> <a href="viewprofile.php">Profile</a><br>
              <a href="" class="dropdown-item" data-toggle="modal" data-target="#myTodal">&nbsp &nbsp;<i class="fa fa-lock"></i> <a href="chgpassusr.php">Change Password</a><br>
             <a  href="logout.php" class="dropdown-item">&nbsp &nbsp<i class="fas fa-sign-out-alt"></i>Logout</a></p>
			
          </div> </div></div>
      </li></ul>
        </div></div></div></div>
             <section id="stuck_container">
  <div class="container_12">
        <div class="grid_12">
  
  
          <div class="navigation ">
            <nav>
               <ul class="sf-menu">
               <li ><a href="index.php">Home</a></li>
               <li><a href="about.php">About</a></li>
              <li><a href="classes.php">Our Classes</a></li>
			   <?php
								//include("dbconnection.php");	

                            $sq = "select * from tbl_login where username = '$temp'";

  $rs = mysqli_query($con,$sq);
  $a=mysqli_fetch_array($rs);
if($a['book_status']==0 || $a['book_status']=='')
{

  echo "<li><a href='booking.php?x=".$a['login_id']."'>Course Materials</a></li>";


}
else{
	 echo "<li ><a href='course_material_user.php'>Course Materials</a></li>";

}
	 ?>
			  	  <li class=" dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Leave
        </a>
        <div class="dropdown-content " aria-labelledby="navbarDropdown">
       <a href="apply_leave_usr.php">Apply Leave</a>
    <a href="leave_status_student.php">Leave Status</a>
  
			   
              
               <li><a href="contacts.php">Contacts</a></li>
			      <li><a href="gallery.php">Gallery</a></li>
				   
			   
             </ul>
            </nav>
            <div class="clear"></div>
          </div>
         <div class="clear"></div>
     </div>
     <div class="clear"></div>
    </div> </div>
		</section>
<br><br><br>
		

	 <form action="addproreg.php" method="POST" enctype="multipart/form-data">
	<div class="container_12">
		<div class="grid_12">
		
	 
	  
	   
              <!--Form-->
             
              
			<div class="navigation ">
			<h2><div class="panel-heading"> 
				<center>...	EDIT PROFILE...</center></div></h2></div>
					<div class="card o-hidden border-0 shadow-lg my-5">
						<div class="row">
							<div class="col-lg-5 d-none d-lg-block bg-register-image"><img src="../images/p203.webp"></div>
								<div class="col-lg-7">
								
									<div class="card wow fadeInRight" data-wow-delay="0.3s">
									
									<br>
										<div class=" form-group">	
											<div class="navigation ">	  
				    
				    <form action="addproreg.php" method="POST" enctype="multipart/form-data">
					<?php
													//include("dbconnection.php");
													$sq="select * from tbl_login where username='$temp'";
													$res=mysqli_query($con,$sq);
													$a=mysqli_fetch_array($res);
													$b=$a['login_id'];
													$sql="select * from tbl_studreg where login_id='$b'";
													$c=mysqli_query($con,$sql);
													$result=mysqli_fetch_array($c);
													?>

				</div>
		<div class=" form-group">
									<div class="navigation ">	  	<p style="color:white;tex">NAME :</div>
									<input type="text" required class="form-control" id="nam" name="name" value="<?php echo $result['name']; ?>" placeholder="Your name" onblur="validname()">
									</P></div>
				 
									<div class=" form-group">
								<div class="navigation ">	  	<p style="color:white;tex">ADDRESS:</P></div>
										 <input type="text" class="form-control" value="<?php echo $result['address']; ?>" name="address" id="address1" placeholder="Home Address" onblur="validate6()"  required/>
									</P></div>
				
								
											<div class=" form-group">
												<div class="navigation ">	  	<p style="color:white;tex">DATE OF BIRTH:</P>	</div>
										<input placeholder="DOB" min="2000-01-01"  max="2050-01-01" required class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" value="<?php echo $result['DOB']; ?>"name="dob"/>	
										
											</div>
									
									
									  
									<div class="form-group ">
									
										
										<div class="navigation ">	  	<p style="color:white;tex">PHONE NUMBER:</P></div>
										
										
										 <input type='number' required class="form-control" placeholder="number" id="phno" value="<?php echo $result['contactno']; ?>"name="contactno" onblur="validate2()"required> 
										
									</div>  
									
				  
									<div class="form-group">
										<div class="navigation ">	  	<p style="color:white;">EMAIL:</P>	</div>
										<input type='email' required class="form-control" placeholder="name@example.com" id="mail" name="email" value="<?php echo $result['email']; ?>"onblur="validmail()"required> 
										
									</div>
				  
				  
									<div class="form-group">
											<div class="navigation ">	  	<p style="color:white;">USER NAME:</P></div>
										<input type='text' required class="form-control"  id="usr" name="username" value="<?php echo $a['username']; ?>"placeholder="username">
										
									</div>
									
									
									
										
									
									
									
						  
									

                  
									<div class="text-center mt-4"><center>
										<input type="submit" id="bt" value="UPDATE" name="Submit" class="btn btn-secondary">
	                                 <input type='reset' value='RESET' onclick='location.reload()' class="btn btn-secondary"></center>
										<hr class="hr-light mb-3 mt-4">
					
									</div>
								</div>
							</div>
						</div>
					</div></div></div></div>
				   <div class="clear"></div>      
		<div class="clear"></div>								
       <div class="clear"></div>  
		
			</form>
			
			
			
<BR><BR>

			
			
		<script>
function validname()
   {
    var name=document.getElementById("nam").value;
	var letters =/^[a-zA-Z ]*$/;
	if(!name.match(letters))
	{
	 alert("Please enter your name correctly");
	 document.getElementById("nam").value="";
	}
   }
   
   
   function validmail()
   {
    var email=document.getElementById("mail").value;
	var mailexp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(!email.match(mailexp))
	{
	 alert("Please enter your email address correctly");
	 document.getElementById("mail").value="";
	 document.getElementById("bt").focus();
	}
   }
   
   
   
   
  
   
   function validate2()
{
var phone = document.getElementById("phno").value;
var phn=/^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/;
if (phone == "")
    {
      alert("Phone number can't be blank ");
      count++;
      return false;
    }
else if(phone.length!=10)
{
alert("Enter your phone number correctly!");
count++;
return false;
}
else if(!phone.match(phn))
{
alert("Please enter valid number");
count++;
return false;
}
else
{
count=0;
}
}


function validate() 
{
if( document.form1.quali.value == "-1" )
   {
     alert( "Please select qualification!" );
     return false;
   }
}

   </script>	
		
	
   <div class="navigation ">		 
<div class="panel-head"><center><P style="font-size:25px;color:white;text-align:center">
"DANCE IS A PHYSICAL AND MENTAL WORKOUT. ONCE YOU GET YOUR BODY MOVING, YOU’LL SEE A DIFFERENCE"</p></center></div>
 </div> 
      <div class="clear"></div>
    <BR>



<!--==============================
              footer
=================================-->
</div>
<footer id="footer">
  <div class="container_12">
    <div class="grid_12">
      
    </div>
    <div class="clear"></div>
  </div>
</footer>
<a href="#" id="toTop" class="fa fa-angle-up"></a> 
	
	
	
</body>
</html>
<?php
}
else
{
header("location:login.php");
}
?>
   