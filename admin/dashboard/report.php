<?php
session_start();
if(isset($_SESSION['username']))
{
	$temp=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DANCE ACADEMY - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">RHYTHM </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>
			<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser" aria-expanded="true" aria-controls="collapseUser">
						<i class="fas fa-fw fa-user"></i>
						<span>Classes</span>
					</a>
						<div id="collapseUser" class="collapse" aria-labelledby="headingUser" data-parent="#accordionSidebar">
							<div class="bg-white py-2 collapse-inner rounded">
								<h6 class="collapse-header">Class Details:</h6>
									<a class="collapse-item" href="course.php">Add Courses</a>
										<a class="collapse-item" href="manage_classes.php">Manage Course</a>
										<a class="collapse-item" href="shift.php">Add shift</a>
										<a class="collapse-item" href="duration.php">Add duration</a>
									<a class="collapse-item" href="batch.php">Add Batch</a>
									<a class="collapse-item" href="manage_batch.php">Manage batch</a>
									<a class="collapse-item" href="batch.php">Assign Students</a>
									
							</div>
						</div>
				</li>

            <!-- Nav Item - Pages Collapse Menu -->
            

            <!-- Nav Item - Utilities Collapse Menu -->
           
<li class="nav-item">
					<a class="nav-link collapsed"  data-toggle="collapse"   href="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1"> 
						<i class="fas fa-fw fa-book"></i>
							<span>Registration</span>
					</a>
						<div class="row">
							<div class="col">
								<div class="collapse multi-collapse" id="multiCollapseExample1">
									<div class="card card-body">
										<div class="bg-white py-2 collapse-inner rounded">
											<h6 class="collapse-header">Registration Details:</h6>
												<a class="collapse-item" href="approvestu.php">All Registration</a>
												 <a class="collapse-item" href="rejstu.php">New Registration</a>
												 <a class="collapse-item" href="addteachers.php"> Accepted Registration</a> <a class="collapse-item" href="addteachers.php"> Rejected Registration</a>
											
										</div>
									</div>
								</div>
							</div>
						</div>		
				</li>
				<li class="nav-item">
						<a class="nav-link collapsed"  data-toggle="collapse"   href="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
							<i class="fas fa-fw fa-user"></i>
							<span>Teachers</span>
						</a>
					<div class="row">
						<div class="col">
							<div class="collapse multi-collapse" id="multiCollapseExample2">
								<div class="card card-body">
									<div class="bg-white py-2 collapse-inner rounded">
										<h6 class="collapse-header">Teacher Details:</h6>
											<a class="collapse-item" href="teachersadm.php">Add Teachers</a>
											<a class="collapse-item" href="manage_teach.php">Manage Teachers</a>
											<a class="collapse-item" href="qualification.php">Add Qualification</a>
											<a class="collapse-item" href="manage_qual.php">Manage Qualification</a>
											
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
						<i class="fas fa-skating"></i>
						<span>Dance Booking</span>
					</a>
					<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<h6 class="collapse-header">Dancetypes::</h6>
								<a class="collapse-item" href="dancestyle.php">Add Course</a>
							
								<a class="collapse-item" href="batch.php">Add Batch</a>
								
								
								<a class="collapse-item" href="approvebook.php">approve booking</a>
						</div>
					</div>
				</li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>
<li class="nav-item">
					<a class="nav-link" href="payment.php">
						  <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						  <span>Payement</span>
					</a>
				</li>
            <!-- Nav Item - Charts -->
          



            <!-- Nav Item - Tables -->
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

      
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

         
            

        </ul>
        

      
        <div id="content-wrapper" class="d-flex flex-column">

           
            <div id="content">

           
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

               
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                   


                        <div class="topbar-divider d-none d-sm-block"></div>

                         
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><img class="img-profile rounded-circle" src="s3.png">
										<?php
											echo $temp;
										?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
				
			 <div id="layoutSidenav_content">
               <main>
                   <div class="container-fluid">
                       <h1 class="mt-4">Daily Progress Report</h1>
                       <ol class="breadcrumb mb-4">
                           <li class="breadcrumb-item"><a href="btwrep.php">Dashboard</a></li>
                           <li class="breadcrumb-item active">Daily Report</li>
                       </ol>
              <div class="graph-visual tables-main" id="exampl">
<div class="card mb-4">
<div class="card-body">
<div class="table-responsive">

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<?php
include("dbconnection.php");
$query = "select l.login_id,reg_id from tbl_login l,tbl_studreg  where l.username='$temp' and l.login_id=h.login_id";
$results = mysqli_query($con,$query);
$x=mysqli_fetch_array($results);
$d=$x['reg_id'];

$sql="select * from tbl_studentbooking where login_id='$d'";
$res1 = mysqli_query($con,$sql);
if(mysqli_num_rows($res1)>0)
{
$row=mysqli_fetch_array($res1);
echo "<h5><center>student Details</center></h5>";
echo "<tr><th>name</th><th>Phone No</th><th>Email Address</th><th></th>DOB</tr>";
$reg_id=$row['reg_id'];
$sql="select * from tbl_studreg where reg_id='$reg_id'";
$res1 = mysqli_query($con,$sql);
$v=mysqli_fetch_array($res1);
echo "<tr>";
echo "<td>".$v['name']."</td><td>"
.$v['contactno']."</td><td>"
.$v['email']."</td><td>";

echo "</tr>";
?>
</table>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<?php
include("dbconnection.php");
if(isset($_REQUEST['x']))
{
$u=intval($_GET['x']);

$sql="select a.login_id,b.login_id from tbl_login a,tbl_daily_progress_report b where
a.login_id=b.login_id and a.username='$temp'";
$query1=mysqli_query($con,$sql);
if(mysqli_num_rows($query1)>0)
{
$result=mysqli_fetch_array($query1);
$h=$result['login_id'];

$query = "select h.login_id,l.report_id,l.title,l.description from tbl_daily_progress_report l,tbl_customer_reg h
where  l.login_id=h.login_id and l.login_id='$h' and l.report_id='$u'";
$results = mysqli_query($con,$query);
echo "<h5><center>Report Details</h5>";
echo "<tr><th>Title</th><th>Work Details</th></tr>";
while($v=mysqli_fetch_array($results))
              {
echo "<tr>";
echo "<td>".$v['title']."</td><td>"
.$v['description']."</td>";
echo "</tr>";
}}}}
?>
</table>
<p style="margin-top:1%"  align="center">
 <i class="fa fa-print fa-2x" style="cursor: pointer;"  OnClick="CallPrint(this.value)" ></i>
</p>

</div></div>
</div>
               </div>


<div style="height: 100vh;"></div>
 <div class="card mb-4"><div class="card-body"></div></div>
</div>
</main>
<footer class="py-4 bg-light mt-auto">
<div class="container-fluid">
 <div class="d-flex align-items-center justify-content-between small">
     <div class="text-muted"></div>
     <div>
         <a href="#"></a>
         &middot;
         <a href="#"></a>
     </div>
 </div>
</div>
</footer>
</div>
</div>
<script>
function CallPrint(strid) {
var prtContent = document.getElementById("exampl");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
}
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>	
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				<a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
<?php
}
else
{
header("location:../../login.php");
}
?>