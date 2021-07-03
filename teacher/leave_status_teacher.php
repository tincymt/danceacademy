<?php
session_start();
include("dbconnection.php");
if(!empty($_SESSION['username']))
{
$temp=$_SESSION['username'];
if(isset($_REQUEST['id']))
	{
		$a=intval($_GET['id']);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>LEAVE_STATUS_TEACHER</title>
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
	 text-align:center;
  }

   P {
    font-size: 18px;
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
    padding: 18px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-head {
    color: #fff !important;
    background-color: #af9aae !important;
    padding: 18px;
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
													$sql="select * from tbl_teacher where login_id='$b'";
													$c=mysqli_query($con,$sql);
													$result=mysqli_fetch_array($c);
													?>

           <li id="dropdown-user">

                        <a href="#" data-toggle="dropdown" class="-toggle text-center" aria-expanded="false">
                          
                             <br><img class="img-circle img-user media-object"  src="../teacher/upload/<?php echo $result['file']; ?>"height="60" width="60">
                                                         
                           <div class="navigation ">
						   		 <div style=' clear: both; font-size:18px;position: relative;  text-transform: uppercase;'>
                           <?php echo $result['teach_name']; ?>
							</div>
                        </a> 
						
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
		  <p style="font-size:18px">
                            <a href="" class="dropdown-item" data-toggle="modal" data-target="#myModal" >&nbsp &nbsp;<i class="fas fa-user-circle"></i> <a href="teachviewprofile.php">Profile</a><br>
              <a href="" class="dropdown-item" data-toggle="modal" data-target="#myTodal">&nbsp &nbsp;<i class="fa fa-lock"></i> <a href="change_teacher_pass.php">Change Password</a><br>
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
               
             
			  	   <li ><a href="student.php">Students</a></li>
   <li class=" dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Leave
        </a>
        <div class="dropdown-content " aria-labelledby="navbarDropdown">
       <a href="apply_leave.php">Apply Leave</a>
    <a href="leave_status_teacher.php">Leave Status</a>
    <a href="approve_student_leave.php">Student Leave</a></li> 
       
    	    <li><a href="course_material_teacher.php">Course Material</a></li>
               <li><a href="staff.php">Our Team</a></li>
			 
               
			   
               
			      <li><a href="gallery.php">Gallery</a></li>
			   
             </ul>
            </nav>
            <div class="clear"></div>
          </div>
         <div class="clear"></div>
     </div>
     <div class="clear"></div>
    </div>
	</section>


<form action="addleave.php" method="POST" enctype="multipart/form-data">
	<br>
	<br>
	 
	    <div class="navigation ">

<div class="container">

 
    <h2><div class="panel-heading"><center>LEAVE STATUS</center></div></h2>
      <div class="panel-body">
    
        <div class="container-fluid">
					<div class="container-fluid">
					 <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
							 <form action="#" method="POST">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"  border="1" style="font-family:Georgia, Garamond, Serif;color:navy;">
						 
											 <thead>
                                        <tr>
                                            <th>No</th>
                                           
										
											     <th>DATE </th>
											     <th>REASON</th>
											     <th>STATUS</th>
                                        </tr>
                                    </thead>			
            <?php
				//$con=mysqli_connect("localhost","root","","dancedb") or die("COULDN'T CONNECT");
                   
                                                    $sq="select * from tbl_login where username='$temp'";
													$res=mysqli_query($con,$sq);
													$s=mysqli_fetch_array($res);
													$b=$s['login_id'];
													
													
                          
						  

$r="select * from tbl_leave where login_id='$b'";
$result=mysqli_query($con,$r);
$n=mysqli_num_rows($result);

while($a=mysqli_fetch_array($result))
{

                            echo "<tr>";
                            echo "<td>".$a['leave_id']."</td><td>"
							.$a['reason']."</td><td>"
									.$a['date']."</td><td>";
                                   
								   if($a['usertype']=="teacher"&&$a['status']=="0")
                 {
					             echo "NOT APPROVED";
								
                             		 }
                             		 else
									 {
                             		 	 echo  "APPROVED";
										 
									 }
                             echo "</tr>";
                               }
                                ?>	

                          
 </tbody>
                </table>
                                    <tbody>
									
            </div>
        
      </table>
    </div>
           
        
				</div></div></div></div></div>
					<hr class="hr-light mb-3 mt-4"><br>
				<div class="container">
				 <div class="col-md-4">
			    <div class="thumbnail">
       
                     <div class="iq-blog-entry white-bg">
                        <div class="iq-entry-image clearfix">
                           <img class="img-fluid" src="../images/p48.jpg" alt="#"></a>
                           
                        </div>
                       
                         
                        </div>
						
                     </div> </div>  
					  <div class="col-md-4">
			    <div class="thumbnail">
       
                     <div class="iq-blog-entry white-bg">
                        <div class="iq-entry-image clearfix">
                           <img class="img-fluid" src="../images/p46.jpg" alt="#"></a>
                           
                        </div>
                       
                         
                        </div>
						
                     </div> </div> 
					 	  <div class="col-md-4">
			    <div class="thumbnail">
       
                     <div class="iq-blog-entry white-bg">
                        <div class="iq-entry-image clearfix">
                            <img class="img-fluid" src="../images/p555.jpg" alt="#"></a>
                           
                        </div>
                       
                         
                        </div>
						
                     </div> </div> 
					 </div> 	 </div>  </div> 
	
<br>

   <div class="navigation ">		 
<div class="panel-head"><center><P style="font-size:25px;color:white;text-align:center">
"MOVEMENT NEVER LIES. IT IS A BAROMETER TELLING THE STATE OF THE SOUL’S WEATHER TO ALL WHO CAN READ IT"</p></center></div>
 </div>
<br> 
 <div class="clear"></div>
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
