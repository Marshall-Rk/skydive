<?php require('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php
include("db.php");
error_reporting(0);
session_start();

if (!isset($_SESSION['email'])) {
        header('Location:login.php');
        exit();
    }
if(isset($_POST['submit']))          
{
		$sql = "INSERT INTO course(heading,title,description,prerequisite,ground_training,flight_training,theory_exam,duration,pilot_rating,next_level,course_fee_1,package_includes_1,course_fee_2,package_includes_2) VALUE('".$_POST['heading']."','".$_POST['title']."','".$_POST['description']."','".$_POST['prerequisite']."','".$_POST['ground_training']."','".$_POST['flight_training']."','".$_POST['theory_exam']."','".$_POST['duration']."','".$_POST['pilot_rating']."','".$_POST['next_level']."','".$_POST['course_fee_1']."','".$_POST['package_includes_1']."','".$_POST['course_fee_2']."','".$_POST['package_includes_2']."')";  
				mysqli_query($link, $sql); 
												
			  
													$success = 	'<div class="alert alert-success alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong class="text-white">Congrats! New Review Added Successfully.</strong> 
															</div>';
}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../img/RISE-Logo.png">
    <title>Admin - Dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
         <div class="header">
         <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                   <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                       <span><img src="../img/RISE-Logo.png" alt="homepage" width="50%" height="50%" class="dark-logo" /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                     
                       
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Search -->
                        
                       
                        <!-- Comment -->
                      
                        
                        <!-- End Comment -->
                      
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../img/RISE-Logo.png" alt="user" class="profile-pic" /></a>
                        
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="logout.php" class="text-danger"><i class="fa fa-power-off text-danger"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                    <?php include('side-nav.php'); ?>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper" >
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                <h3 class="text-dark ">Dashboard - Welcome <span class="text-danger"> <?php echo $_SESSION['email']; ?> </span></h3>
                
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                  
									<br>
									<?php  echo $error;
									        echo $success; ?>
									
									
								
								
					    <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Add Course</h4>
                            </div>
                            <div class="card-body">
                                <form action='' method='POST'>
                                    <div class="form-body">
                                   
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Heading</label>
                                                    <input type="text" name="heading" value="" class="form-control"  required>
                                                   </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Title</label>
                                                    <input type="title" name="title" class="form-control" required>
                                                   </div>
                                            </div>
                                            <!--/span-->
                                        </div>


                                        <div class="row p-t-10">
                                            
                                           
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Description</label>
                                                    <textarea style="height:80px;" type="text" name="description" class="form-control" ></textarea>
                                                   </div>
                                            </div>
                                            <!--/span-->
                                        </div>


                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Prerequisite</label>
                                                    <input type="text" name="prerequisite" value="" class="form-control"  required>
                                                   </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Ground training</label>
                                                    <input type="text" name="ground_training" value="" class="form-control"  required>
                                                   </div>
                                            </div> 
                                        </div>
                                       
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Flight Training</label>
                                                    <input type="text" name="flight_training" value="" class="form-control"  required>
                                                   </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Theory Exam</label>
                                                    <input type="text" name="theory_exam" value="" class="form-control"  required>
                                                   </div>
                                            </div> 
                                        </div>


                                        <div class="row">
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">duration</label>
                                                    <input type="text" name="duration" value="" class="form-control"  required>
                                                   </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Pilot Rating</label>
                                                    <input type="text" name="pilot_rating" value="" class="form-control"  required>
                                                   </div>
                                            </div> 
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Next level</label>
                                                    <input type="text" name="next_level" value="" class="form-control"  required>
                                                   </div>
                                            </div> 
                                        </div>

                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">course_fee_1</label>
                                                    <input type="text" name="course_fee_1" value="" class="form-control"  required>
                                                   </div>
                                            </div>                                           
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Package Includes</label>
                                                    <input type="text" name="package_includes_1" value="" class="form-control"  required >
                                                   </div>
                                            </div> 
                                        </div>

                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">course_fee_2</label>
                                                    <input type="text" name="course_fee_2" value="" class="form-control"  required>
                                                   </div>
                                            </div>                                           
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Package Includes 2</label>
                                                    <input type="text" name="package_includes_2" value="" class="form-control"  required>
                                                   </div>
                                            </div> 
                                        </div>


                                            </div>
                                           
                                            <div class="form-actions">
                                        <input type="submit" name="submit" class="btn btn-success" value="SUBMIT"> 
                                      
                                    </div>

                                        </div>

                                     
                                        </div>
                                    </div>
                                   
                                </form>
                            </div>
                        </div>
                   
					
					
					
					
					
					
					
					
					
					
					
					
					
                </div>
                <!-- End PAge Content -->
            </div> </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2022 All rights reserved. 

            
</footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>