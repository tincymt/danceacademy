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
<title>Edit Profile </title>
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
  
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Register</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
   background: url("p72.jpg");
   background-repeat: no-repeat;
   background-size: cover;
   background-position: center;
   font-family: sans-serif;
   height: 100%;
 }
  


  .card {
    background-color:#bfbfbf;
	 
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

.dropdown {
  position: relative;
  display: inline-block;
  border:none;
min-width: 160px;
border-bottom:1px solid #fff;
outline:none;
height: 40 px;
color:black;
 text-align: center;
  border-radius: 0px;
font-size:25px;

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

  </style>
<body class="page1" id="top">
<!--==============================
              header
=================================-->

<div class="container-fluid">
	
		<div class="container_12">
			<div class="grid_12">
				 <img src="../images/p777c.jpg">
           
		</div></div></div>
	  <section id="stuck_container">	
		 <div class="container_12">
        <div class="grid_12">
          <div class="navigation ">
		
         
            <nav>
               <ul class="sf-menu">
               <li><a href="../index.php">Home</a></li>
               <li><a href="../about.php">About</a></li>
              <li><a href="../classes.html">Our classes</a></li>
               <li><a href="../staff.php">Our Team</a></li>

               <li><a href="../contacts.php">Contacts</a></li>
			<li><a href="../gallery.php">Gallery</a></li>
			<li class="nav navbar-right"><a href="../login.php">
				Sign  In</a>
          </ul> 
            </nav>
            <div class="clear"></div>
          </div>
 <div class="clear"></div>
          </div>
         <div class="clear"></div>
     </div>
     <div class="clear"></div>
    </div>
  </section>
   

   


	 <form action="addregteachers.php" method="POST" enctype="multipart/form-data">
	  <div class="view" style="background-image: url('../images/p99.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
	 
	   <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
	   <div class="container">
	    <div class="row mt-5">
	      <div class="col-md-6 col-xl-5 mb-4">
              <!--Form-->
              <div class="card wow fadeInRight" data-wow-delay="0.3s">
                <div class="card-body">
                  <!--Header-->
                  <div class="text-center">
                    <h3 class="white-text">
                      <i class="fas fa-user white-text"></i> Edit Profile:</h3>
                    <hr class="hr-light">
                  </div>
				   <div class="loginbox">
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
                  <div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="fas fa-user prefix white-text active"></i>
											</span>
										</div>
										<input type="text" required class="form-control" id="nam" name="name" placeholder="Your name" onblur="validname()">
									</div>
				 
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="fa fa-home"></i>
											</span>
										</div>
										<textarea cols='25' rows='4' required class="form-control" name="address"id="comment" placeholder="your address"></textarea>
									</div>
				
									<div class="form-group input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="fa fa-envelope-square" aria-hidden="true"></i>
											</span>
										</div>
										<input type='email' required class="form-control" placeholder="name@example.com" id="mail" name="email" onblur="validmail()"required> 
										
									</div>
									
									
									
									<div class="row">
										
										<div class="col-xs-6 col-sm-6 col-md-6">	
										
										
										
										  
									<div class="form-group input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"> 
											<i class="fa fa-phone"></i>
											</span>
										</div>
										
										
										
										
										 <input type='number' required class="form-control" placeholder="nontact number" id="phno" name="contactno" onblur="validate2()"required> 
										
									</div> 
									
										
											
										
										</div>
										
										
										
										
											

										<div class="col-xs-6 col-sm-6 col-md-6">

												<div class="input-group form-group">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="fa fa-book"></i>
													</span>
												</div>
												
												





												<select  id="ctrSubDropDownLong"required name="qualification" name=""value="" class="form-control" required>
                        <option value="">select your Qualification</option>
<?php $query =mysqli_query($con,"SELECT * FROM tbl_qualification");
                        while($row=mysqli_fetch_array($query))
                        { ?>
                        <option value="<?php echo $row['qualification'];?>"><?php echo $row['qualification'];?></option>
                        <?php
                        }
                        ?>
                        </select>
												
												
												
												
												
												
												
												
											
										
										</div>  

										</div>
										
									</div>		
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
				  
									
									
									
									
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="fa fa-home"></i>
											</span>
										</div>
										<textarea cols='25' rows='4' maxlength="1000" required class="form-control" name="description"id="comment" placeholder="describe your self"></textarea>
									</div>
				
				
				  
				  
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="fa fa-user"></i>
											</span>
										</div>
										<input type='text' required class="form-control" id="usr" name="username" placeholder="enter your username">
										
									</div>
									
									
									
									
									<div class="row">
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="input-group form-group">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="fa fa-lock"></i>
													</span>
												</div>
												<input type='password' required class="form-control" id="pawd" name="password" placeholder="new password" onchange="validpaswd()">
											
											</div>
										</div>  
										<div class="col-xs-6 col-sm-6 col-md-6">	
											<div class="input-group form-group">
												<div class="input-group-prepend">
												
										<input type='password' required class="form-control" id="cpawd" name="confirm" placeholder="confirm password" onchange="validcpass()">
											</div>
										</div>
									</div>			</div>	
									
									
									 <div class="input-group form-group">
            	<label><i><span class="input-group-text"><b>YOUR PHOTO</b></p></span></label>
         
            <input class="form-control" type='file' id="img" name="sfile" accept="image/*"></button>
          
            </div>
										
									
									
									
						  
									

                  
									<div class="text-center mt-4"><center>
										<input type="submit" id="bt" value="SUBMIT" name="Submit" class="btn btn-secondary">
	                                 <input type='reset' value='RESET' onclick='location.reload()' class="btn btn-secondary"></center>
										<hr class="hr-light mb-3 mt-4">
					
									</div>
								</div>
							</div>
						</div>
					</div></div></div></div>
				</div>
		
			</form>
			
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
	var mailexp = /^[a-z.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/; 
	if(!email.match(mailexp))
	{
	 alert("Please enter your email address correctly");
	 document.getElementById("mail").value="";
	 document.getElementById("bt").focus();
	}
   }
   
   
   
   
    function validpaswd()
   {
    var pass=document.getElementById("pawd").value;
	var passexp =/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
        if(!pass.match(passexp))
	{
	 alert("Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters");
	 document.getElementById("pawd").value="";
	}
   }
   
   function validcpass()
   {
    var pass=document.getElementById("pawd").value;
	var cpass=document.getElementById("cpawd").value;
	if(!(pass==cpass))
	{
	 alert("Password not matching");
	 document.getElementById("cpawd").value="";
	}
   }
   
   
   
   function validate2()
{
var phone = document.getElementById("phno").value;
var phn=/^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/;
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
		
	
   </div>

</div>
</body>
</html>

<?php
}
else
{
header("location: ../../login.php");
}
?>