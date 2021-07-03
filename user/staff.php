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
<title>instructors</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/script.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
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
<body class="" id="top">
<div class="main">
<div class="container_12">
<div class="container-fluid">
	<div class="container p-3 my-3 border">
	
        <div class="grid_12">
		<div class="navbar-header"> <img src="images/p777.jpg">
        
			<a class="navbar-brand" href="index.php"></a>
		</div>
		
			<ul class="nav navbar-right">
 
           <li id="dropdown-user">

                        <a href="#" data-toggle="dropdown" class="-toggle text-center" aria-expanded="false">
                          
                             <br><img class="img-circle img-user media-object" src="images/i1.jpg" height="30" width="30">
                                                         
                           <div class="navigation ">
						   		 <div style=' clear: both; font-size:18px;position: relative;'>
                            <div class="username hidden-xs">HELLO 
							<?php
	                               echo strtoupper ($temp);
	                                ?></div>
                        </a> 
						
	
       
    
      
	  
        

		
		 
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
		  <p style="font-size:18px">
              <a href="" class="dropdown-item" data-toggle="modal" data-target="#myModal" >&nbsp &nbsp<i class="fas fa-user-circle"></i> <a href="viewprofile.php">Profile</a><br>
              <a href="" class="dropdown-item" data-toggle="modal" data-target="#myTodal">&nbsp &nbsp<i class="fa fa-lock"></i> <a href="chgpassusr.php">Change Password</a><br>
              <a  href="logout.php" class="dropdown-item">&nbsp &nbsp<i class="fas fa-sign-out-alt"></i>Logout</a></p>
          </div> </div></div>
      </li></ul>
        </div></div></div></div></div>
  
<div class="main">

  <section id="stuck_container">

   
  
  <!--==============================
              Stuck menu
  =================================-->
    <div class="container_12">
        <div class="grid_12">
          <div class="navigation ">
            <nav>
              <ul class="sf-menu">
               <li><a href="index.php">Home</a></li>
               <li><a href="about.php">About</a></li>
              <li ><a href="classes.php">Our Classes</a></li>
               <li class="current"><a href="staff.php">Instructors</a></li>
               <li><a href="contacts.php">Contacts</a></li>
             </ul>
            </nav>
            <div class="clear"></div>
          </div>
         <div class="clear"></div>
     </div>
     <div class="clear"></div>
    </div>
  </section>
<!--=====================
          Content
======================-->
<section id="content" class="inset__1"><div class="ic">More Website Templates @ TemplateMonster.com - October 06, 2014!</div>
  <div class="container_12">
    <div class="grid_6">
      <div class="block-2">
        <img src="images/1pallavi.png" alt="">
        <div class="extra_wrapper">
          <h4 class="color1"><a href="#"> Pallavi Krishnan</a></h4>
          <p class="color1"><p align="justify">A leading Mohiniyattam exponent, Pallavi Krishnan is acclaimed for her versatility as a performer, choreographer and trainer. Known for her tremendous efforts to promote and preserve this style of dance as a living tradition, Pallavi initially got trained in Bharatanatyam, Mohiniyattam and Kathakali under Guru Kalamandalam Sankaranarayanan. She completed her graduation in Dance (Kathakali) from Santiniketan (Viswa Bharathi University).</p>
        </div>
      </div>
    </div>
	
	
	
	
	
    <div class="grid_6">
      <div class="block-2">
	  
        <img src="images/p27a.jpg" alt="">
        <div class="extra_wrapper">
          <h4 class="color1"><a href="#">Manu Krishnan</a></h4>
          <p class="color1"> </p>
        <p align="jutify">Rukmini Vijayakumar is an Indian choreographer, Bharatanatyam dancer, film actress from Bangalore.Along with her performances on stage, she has appeared in south indian films such as Bommalattam (2008), Ananda Thandavam (2009) , Bhajarangi (2013), Kochadaiyaan (2014) and Kaatru Veliyidai (2017).</p>
        </div>
      </div>
    </div>
    <div class="clear"></div>
    <div class="grid_6">
      <div class="block-2">
        <img src="images/p29.jpg" alt="">
        <div class="extra_wrapper">
          <h4 class="color1"><a href="#">Radha Dutta</a></h4>
          <p class="color1"><p align="justify">Radha Dutta is considered to be amongst the first exponents and teachers of Mohiniattam who resides outside India. She was the very first teacher of Mohiniattam around the Washington, DC area. Radha is also well known performer cum teacher of Bharatanatyam and folkdances, in the Washington, DC area. </p>
          
        </div>
      </div>
    </div>
	<div class="grid_6">
      <div class="block-2">
	  
        <img src="images/p31.jpg" alt="">
        <div class="extra_wrapper">
          <h4 class="color1"><a href="#">Arunima Kumar</a></h4>
          <p class="color1"> </p>
        <p align="jutify">Arunima Kumar, Sangeet Natak Akademi Yuva Puraskar awardee for the year of 2008 for Kuchipudi. As a young girl of 9, Arunima acted in the ballet Amrapali. The Kuchipudi Dance Academy formally launched her in 1995 where she performed her Arangetram at the Triveni Kala Sangam, New Delhi. </p>
        </div>
      </div>
    </div>
   
    <div class="clear"></div>
  </div>
</section>
<!--==============================
              footer_top
=================================-->
<div class="footer-top"> 
  <div class="container_12">
	  <div class="sep-1"></div>
	  <div class="grid_4">
	 <div style=' clear: both; font-family:georgian;font-size:17px;position: relative;'>
      <address class="address-1"> 
	  <div class="fa fa-home"></div>PO BOX Collins Street West <br> Palkulangara,<br> Thiruvananthapuram - 695 024 <br>Phone: +91 80781 59256<br>
	  Mobile: +91 93877 39013<br>rhythm@gmai.com</address>
    </div>
	</div>  
	
	<div class="footer-box span_1_of_4 col col-2">
	 <h6 style="font-family:georgian;font-size:17px;">  <address class="address-1"><b>open Hours</b><br>Saturday 10am-6pm<br>
Sunday 11am-6pm</address>
	 </h6>
	 </div>

 <div class="grid_4 fright">
      <div class="socials">
        <a href="#">facebook</a>
        <a href="#">twitter</a>
        <a href="#">google+</a>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!--==============================
              footer
=================================-->
</div>


</body>
</html>

<?php
}
else
{
header("location:login.php");
}
?>