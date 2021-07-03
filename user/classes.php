<?php
session_start();
include("dbconnection.php");
if(!empty($_SESSION['username']))
{
$temp=$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>CLASSES</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/touchTouch.css">
<link rel="stylesheet" href="css/camera.css">
<link rel="stylesheet" href="css/style.css">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
  
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <style>
	 h4 {
    font-size: 24px;
    text-transform: uppercase;
    color:purple;
   font-color: purple;
    text-decoration: underline overline;
	font-weight: 900;
    margin-bottom: 30px;
  }
  
   h7 {
    font-size: 30px;
    text-transform: uppercase;
    color:purple;
   font-color: purple;
  background: url("Images/p44.jpg");
	font-weight: 900;
    margin-bottom: 30px;
  }

   P {
    font-size: 22px;
   text-align:justify;
    color:black;
    font-weight: 300;
    margin-bottom: 30px;
  }
	  .container {
			margin-top: 40px;
		}
		.btn-primary {
			width: 100%;
		}
	.panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-head {
    color: #fff !important;
    background-color: #af9aae !important;
    padding: 25px;
	 font-size: 20px;
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
</style>
  
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
        </div></div></div></div></div>
		
  <section id="stuck_container">
  <div class="container_12">
        <div class="grid_12">
  
  
          <div class="navigation ">
            <nav>
              <ul class="sf-menu">
               <li ><a href="index.php">Home</a></li>
               <li><a href="about.php">About</a></li>
              <li class="current"><a href="classes.php">Our Classes</a></li>
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
	 echo "<li><a href='course_material_user.php'>Course Materials</a></li>";

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
     </div> </div>
     <div class="clear"></div>
    </div>
	</section>
  <br>
<!--=====================
          Content
======================-->



<section id="iq-classes" class="iq-blog overview-block-pb">
            <div class="container">
			 <div class="navigation ">
               <div class="row">
                  <div class="col-lg-12 col-md-12">
                     <div class="heading-title text-center">
                         <h2><div class="panel-heading">
						 
						  <center>...CLASSES...</center></div></h2>
                      <!--  <p>Lorem Ipsum is simply dummy text ever sincehar the 1500s, when an unknownshil printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p> -->
                     </div>
                  </div>
               </div>
			   <br>
               <div class="row">
			    <div class="col-md-4">
			    <div class="thumbnail">
       
                     <div class="iq-blog-entry white-bg">
                        <div class="iq-entry-image clearfix">
                           <a href="booking.php">   <img class="img-fluid" src="../images/p28.jpg" alt="Bharathanatyam.php"></a>
                           
                        </div>
                        <div class="iq-blog-detail">
                           <div class="iq-entry-title iq-mb-10">
                              <a href="booking.php">
                                 <h5 class="iq-tw-6"><center><div class="panel-head">BHARATHANATYAM </div></center></h5>
                         </a>
							
                           </div>
                           <div class="iq-entry-content">  <center>
							   <h6 style="color:black;font-size:40px;">₹ 500</h6>
							
							  
							  
                           </div>
                         
                        </div>
                     </div> </div>  </div>
                   
			    <div class="col-md-4">
			    <div class="thumbnail">
       
                     <div class="iq-blog-entry white-bg">
                        <div class="iq-entry-image clearfix">
                           <a href="booking.php">   <img class="img-fluid" src="../images/p13.jpg" alt="#"></a>
                           
                        </div>
                        <div class="iq-blog-detail">
                           <div class="iq-entry-title iq-mb-10">
                              <a href="booking.php">
                                 <h5 class="iq-tw-6"><center><div class="panel-head">MOHINIYAATTAM  </div></center></h5>
                              </a>
                           </div>
                           <div class="iq-entry-content"><center>
                              <h6 style="color:black;font-size:40px;"> ₹ 500</h6>
							
							  
							  
                           </div>
                         
                        </div>
                     </div> </div>  </div> 
					 
					  
			    <div class="col-md-4">
			    <div class="thumbnail">
       
                     <div class="iq-blog-entry white-bg">
                        <div class="iq-entry-image clearfix">
                           <a href="booking.php">   <img class="img-fluid" src="../images/p14.jpg" alt="#"></a>
                           
                        </div>
                        <div class="iq-blog-detail">
                           <div class="iq-entry-title iq-mb-10">
                              <a href="booking.php">
                                 <h5 class="iq-tw-6"><center><div class="panel-head">KUCHUPUDI  </div></center></h5>
                              </a>
                           </div><center>
                         <h6 style="color:black;font-size:40px;"> ₹ 500</h6>
							
							  
							  
                           </div>
                         
                        </div>
                     </div> </div>  </div> 
				
					   <div class="col-md-4">
			    <div class="thumbnail">
       
                     <div class="iq-blog-entry white-bg">
                        <div class="iq-entry-image clearfix">
                           <a href="booking.php">   <img class="img-fluid" src="../images/p39.jpg" alt="#"></a>
                           
                        </div>
                        <div class="iq-blog-detail">
                           <div class="iq-entry-title iq-mb-10">
                              <a href="booking.php">
                                 <h5 class="iq-tw-6"><center><div class="panel-head">KATHAK</div></center></h5>
                              </a>
                           </div><center>
                         <h6 style="color:black;font-size:40px;"> ₹500 </h6>
							 
							  
							  
                           </div>
                         
                        </div>
                     </div> </div> 
					 <div class="col-md-4">
			    <div class="thumbnail">
       
                     <div class="iq-blog-entry white-bg">
                        <div class="iq-entry-image clearfix">
                           <a href="booking.php">   <img class="img-fluid" src="../images/z5.jpg" alt="#"></a>
                           
                        </div>
                        <div class="iq-blog-detail">
                           <div class="iq-entry-title iq-mb-10">
                              <a href="booking.php" >
							
                                 <h5 class="iq-tw-6"><center> <div class="panel-head">HIP HOP</div></center></h5>
                              </a>
                           </div><center>
                        <h6 style="color:black;font-size:40px;"> ₹ 500</h6>
							  
							 
							  
                           </div>
                         
                        </div>
                     </div> </div>
					 
					  <div class="col-md-4">
			    <div class="thumbnail">
       
                     <div class="iq-blog-entry white-bg">
                        <div class="iq-entry-image clearfix">
                           <a href="booking.php">   <img class="img-fluid" src="../images/z2.jpg" alt="Bharathanatyam.php"></a>
                           
                        </div>
                        <div class="iq-blog-detail">
                           <div class="iq-entry-title iq-mb-10">
                              <a href="booking.php">
                                 <h5 class="iq-tw-6"><center>
								 <div class="panel-head">CONTEMPORARY  </div></h5>
                              </a>
                           </div>
                           <div class="iq-entry-content"><center>
							  <h6 style="color:black;font-size:40px;"> ₹ 500</h6>
							 
							  
							  
                           </div>
                         
                        </div>
                     </div> </div>  </div> 
					
					 
				  </div>  </div> 
				  
		
		<center>	<div class="text-center mt-4">
		<br><center>
											<a href="booking.php"><input type="submit" id="bt" value="Apply Now" class="btn btn-success"></a></center>
	                                </center>
										<hr class="hr-light mb-3 mt-4">
					
									</div>
	
<br>
</section>	

 <div class="navigation ">
 <div class="panel-head"><center><P style="font-size:20px;color:white;text-align:center">"EVERY DAY BRINGS A CHANCE FOR YOU TO DRAW IN A BREATH, KICK OFF YOUR SHOES, AND DANCE"</p></center></div>
		</div> <br>

   
<!--==============================
              footer_top
=================================-->
 
<div class="footer-top"> 
  <div class="container_12">
	  <div class="sep-1"></div>
	  <div class="grid_4">
	 <div style=' clear: both; font-family:georgian;font-size:17px;position: relative;'>
      <address class="address-1"> 
	  
	  <div class="fa fa-home"></div> <div class="navigation ">
	  <p >PO BOX Collins Street West <br> Palkulangara,<br> kochi- 695 024 <br>Phone: +91 80781 59256<br>
	  Mobile: +91 93877 39013<br>rhythm@gmai.com</address>
    </div>
	</div>  
		  <div class="nav navbar-right">
	<div class="footer-box span_1_of_4 col col-2">
	
	  <div style=' clear: both; font-family:georgian;font-size:17px;position: relative;'>

	  <div class="navigation ">
	 <address class="address-1"><b>Open Hours</b><br>Monday-friday 7am-6pm</address>
	
	 </div>
</div></div>

 
    <div class="clear"></div>
  </div>
</div></div></div>
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
else {
header("location:index.php");
}
 ?>