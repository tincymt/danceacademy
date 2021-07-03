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
										
										<a class="collapse-item" href="shift.php">Add shift</a>
										<a class="collapse-item" href="duration.php">Add duration</a>
									
								
									
									
							</div>
						</div>
				</li>

            <!-- Nav Item - Pages Collapse Menu -->
            

            <!-- Nav Item - Utilities Collapse Menu -->
           
<li class="nav-item">
					<a class="nav-link collapsed"  data-toggle="collapse"   href="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1"> 
						<i class="fas fa-fw fa-book"></i>
							<span>Student</span>
					</a>
						<div class="row">
							<div class="col">
								<div class="collapse multi-collapse" id="multiCollapseExample1">
									<div class="card card-body">
										<div class="bg-white py-2 collapse-inner rounded">
											<h6 class="collapse-header">student Details:</h6>
												<a class="collapse-item" href="approvestu.php">Approve Student</a>
												<a class="collapse-item" href="feedback.php"> Feedback</a>
											<a class="collapse-item" href="studview.php">Generate Report</a>
												
											
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
											<a class="collapse-item" href="assign_teachers_adm.php">Assign Teachers</a>
											<a class="collapse-item" href="approve_teach_leave.php">approve leave</a>
											<a class="collapse-item" href="qualification.php">Add Qualification</a>
											
											
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
						<i class="fas fa-skating"></i>
						<span>Gallery</span>
					</a>
					<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<h6 class="collapse-header">Dancetypes::</h6>
								<a class="collapse-item" href="gallery.php">gallery</a>
							
								
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
                  

                   

<ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                         
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
										<?php
											echo $temp;
										?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                               
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                  
									 <a  href="logout.php" class="dropdown-item">&nbsp &nbsp  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i></i>Logout</a>
                             
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
              
                <div class="container-fluid">

                 

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
								
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               Total Courses </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div><?php
//$con=mysqli_connect("localhost","root","","dancedb") or die("COULDN'T CONNECT");
$query = "SELECT count(*) from tbl_course";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
echo "(".$row[0].")";
?>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-child fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Registration</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div><?php
//$con=mysqli_connect("localhost","root","","dancedb") or die("COULDN'T CONNECT");
$query = "SELECT count(*) from tbl_studreg";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
echo "(".$row[0].")";
?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-th-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total Teachers</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div><?php
//$con=mysqli_connect("localhost","root","","dancedb") or die("COULDN'T CONNECT");
$query = "SELECT count(*) from tbl_teacher";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
echo "(".$row[0].")";
?>

                                        </div>
                                        <div class="col-auto">
                                           <i class="fa fa-users" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                    
            
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
 
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