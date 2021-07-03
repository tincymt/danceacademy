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
<title>Home</title>
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
	div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
	 h4 {
    font-size: 24px;
    text-transform: uppercase;
    color:purple;
   font-color: purple;
    text-decoration: underline overline;
	font-weight: 900;
    margin-bottom: 30px;
  }
   h5 {
    font-size: 24px;
    text-transform: uppercase;
    color:purple;
   font-color: purple;
  
	font-weight: 900;
    margin-bottom: 30px;
  }
  
   h7 {
    font-size: 30px;
    text-transform: uppercase;
    color:purple;
	  text-align:center;
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
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
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
                          
                             <br><img class="img-circle img-user media-object"  src="upload/<?php echo $result['file']; ?>"height="60" width="60">
                                                         
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
               <li class="current"><a href="index.php">Home</a></li>
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
<section class="slider_wrapper">
  <div class="container_12">
    <div class="grid_12">
	<!--img src="images/p28.jpg" alt=""-->
	
	
	
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="../images/p10.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="../images/p79.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="../images/p11.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>


</div>
		 
		</div>	 
		</div>
    <div class="clear"></div>
  </div>
</section>

<!--=====================
          Content
======================-->
<section id="content">
<div class="container_12"> 
<div class="navigation ">
<div class="grid_12">
<img src="../images/p713.jpg" alt="" class="fleft">
<h4>INDIAN DANCE </h4>
<p>Find more about this Dance is a physical and visual art form, which has an immediate and massive impact on the spectator. The various Indian forms act like 
a window to India's rich cultural reservoir. Dance is the form of art, wherein the body is used as a medium of communication. Indian 
dances have played an influential role in many other realms of art including poetry, sculpture, architecture, literature, music and theatre. 
The earliest archaeological evidence of Indian dance, which dates back to 6000 BC, depicts a beautiful statuette of a dancing girl. 
Bharata's Natya Shastra (which was written between the 2nd century B.C. and 2nd century A.D) is the earliest available thesis on 
dramaturgy. All forms of Indian classical dances owe allegiance to Natya Shastra, which is believed to be the 'fifth Veda' of the Indian 
culture. According to a popular belief, Brahma, the Creator of the World, combined literature from the Rig Veda, songs from the Sama 
Veda, abhinaya (expression) from the Yajur Veda and rasa (aesthetic experience) from the Atharva Veda, to form natya (what we today 
call dance). It explains the nuances of dance, giving stress on mudras (hand formations) and their meanings, the kind of emotions and
 their categorization.</p><br><br><br><br>
     
    </div>    </div>
<br>
 </div> 
	</section>
	
  <section id="iq-classes" class="iq-blog overview-block-pb">
  	 <form action="teacher_details.php" method="POST" enctype="multipart/form-data">
<div class="navigation ">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 col-md-12">
                     <div class="heading-title text-center">
                        <h2><div class="panel-heading"><center>...OUR TEAM...</center></div></h2>
                      <!--  <p>Lorem Ipsum is simply dummy text ever sincehar the 1500s, when an unknownshil printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p> -->
                     </div>
                  </div>
               </div>
			   <section id="content">
	<?php
//$con=mysqli_connect("localhost","root","","dancedb") or die("COULDN'T CONNECT");
$sql="select * from tbl_teacher";
$res=mysqli_query($con,$sql);  
	while($y=mysqli_fetch_array($res))                      
{
?>		       
	<div class="responsive">
  <div class="gallery">
   
	 <img
	src="../teacher/upload/<?php echo $y['file']; ?>" style="width:200px;
   height:200px">
      
    
  
	 <h5 class="iq-tw-6"><center><div class="panel-head"><?php echo $y['teach_name']; ?></div></center></h5>
	 
	  <div class="h7">
	<?php
			echo '<a href="teacher_details.php?id='.$y['teacher_id'].'" class=""><center>MORE</center></a>';
     
		?>
		</div>
  </div>
   
</div>
<?php
}
?>

	  
	
     
      </div>
 
       
    </div> 
	
   
</section> </form>
	</section>
                    

	<section id="content">
	
<div class="container_12"> 
	<div class="container-fluid text-center bg-grey">
	<div class="navigation ">
 
   
  <h4>WHAT WE HAVE CREATED</h4>
   <h2><div class="panel-heading"><center>...DANCE...</center></div></h2>
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <a href="gallery.php"><img src="../images/p455.jpg" alt=""></a> 
		  <h3 style="font-size:24px;color:black">Gallery</h3>
      <a href="gallery.php" class="link-1">MORE</a>
		
     
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
       <a href="booking.php"> <img src="../images/p14.jpg" alt=""></a>
          <h3 style="font-size:24px;color:black">CLASSES</h3>
		  <a href="booking.php" class="link-1">MORE</a>
       
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <a href="usage.php"> <img src="../images/p69.jpg" alt=""></a>
         <h3 style="font-size:24px;color:black">HEALTH</h3>
       <a href="usage.php"class="link-1">MORE</a>
      </div>
    </div>
</div></div></div> </div>
	
	
	
	
	</section>
	
	
	<div class="navigation ">
    
    <section id="content">
<div style=' clear: both; font-family:georgian;font-size:17px;position: relative;'>

  <div class="container_12">
   
      <img src="../images/p24.jpg" alt="" class="fleft">
            <nav>
              <ul class="sf-menu">  <div>
     <img src="../images/p44a.jpg">
      <p class="color1"><a href="#"> </a></p></ul>
	 
   <div> <div class="navigation ">
  <ul style="font-size:22px;color:black;text-align:justify;" class="a">
   <li>Dance, the movement of the body in a rhythmic way, usually to music and within a given space, for the purpose of expressing an idea or emotion,
	 releasing energy, or simply taking delight in the movement itself.</li>
   <li>Dance teaches children about music, rhythm and beat. Students also have a better understanding of spatial relationships and learn to think with both sides of their brain. 
   All these skills enhance a child’s academic performance, as well as their physical well-being.</li>
      <li>Dance keeps you fit! Dance teaches the importance of movement and fitness in a variety of ways through a variety of disciplines.
	  </li>
<li>	  dancers learn to coordinate muscles to move through proper positions. 
	  Dancing is a great activity to pursue at almost any age provided you are in proper health to handle the rigors of 
	  dancing for life. </li>
      </ul>

</div>



</div>

</div>
</div>
     <p>.</p></div>



</div>



</li>

   <div class="navigation ">		 
<div class="panel-head"><center><P style="font-size:25px;color:white;text-align:center">"HAND IN HAND, ON THE EDGE OF THE SAND, THEY DANCED BY THE LIGHT OF THE MOON"</p></center></div>
 </div> 
      <div class="clear"></div>
    <BR>
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
else
{
header("location:login.php");
}
?>