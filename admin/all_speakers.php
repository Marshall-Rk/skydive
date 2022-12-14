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

<body class="fix-header fix-sidebar">
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
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                <h3 class="text-dark ">Dashboard - Welcome <span class="text-danger"> <?php echo $_SESSION['email']; ?> </span></h3>
                
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        
                       
                      
                       
						
						
						     <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Speakers data</h4>
                                <button type="button"  class="btn btn-primary  ">  
                       <?php
  $connection_mysql = mysqli_connect("43.225.55.240","rlsnetnt_rlsnew","Admin@12345","rlsnetnt_rlsnew");
   
  if ( $connection_mysql->connect_errno ) {
    die('Connect Error: ' . $connection_mysql->connect_errno);
}
   $sql = "SELECT * from rise_speakers_2022 ";
   
   if ($result = mysqli_query($connection_mysql,$sql)){
      $rowcount = mysqli_num_rows($result);
      
      printf("Total Speakers's - %d \n",$rowcount);
      mysqli_free_result($result);
   }
   mysqli_close($connection_mysql);
?>

</button>
                                
								
                                <div class="table-responsive m-t-20">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
											    <th>Id</th>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Designation</th>
                                                <th>Company</th>
                                                <th>Added_on</th>
                                                <th>Action</th>
												  
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
											    <th>Id</th>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Designation</th>
                                                <th>Company</th>
                                                <th>Added_on</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
										
                                           
                                               	<?php
												$sql="SELECT * FROM rise_speakers_2022";
												$query=mysqli_query($link,$sql);
												
													if(!mysqli_num_rows($query) > 0 )
														{
															echo '<td colspan="7"><center>No Data!</center></td>';
														}
													else
														{				
																	while($rows=mysqli_fetch_array($query))
																		{
																				$mql="select * from speakers_2022";
																				$newquery=mysqli_query($link,$mql);
																				$fetch=mysqli_fetch_array($newquery);
																				
																				
																					echo '<tr><td>'.$rows['id'].'</td>
																					
																								<td class="text-dark">'.$rows['name'].'</td>

                                                                                                <td><div class="col-md-3 col-lg-8 m-b-10">
																								<center><img src="speakers2022/'.$rows['image'].'" class="img-responsive  radius" style="max-height:200px;max-width:250px;" /></center>
																								</div></td>

																						<td class="text-dark">'.$rows['designation'].'</td>
																							<td class="text-dark">'.$rows['company'].'</td>
                                                                                                <td class="text-dark">'.$rows['added_on'].'</td>
																								
																								
																								
																							
																									 <td><a href="delete_speaker.php?menu_del='.$rows['id'].'" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash" style="font-size:16px"></i></a> 

																			 <a href="update_speaker.php?speaker_upd='.$rows['id'].'" class="btn btn-success btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="ti-settings"></i></a>
																									</td></tr>';
																					 
																						
																						
																		}	
														}
												
											
											?>
                                            
                                           
                                 
                                                        
                                                            
                                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						 </div>
                      
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> ?? 2021 All rights reserved. </footer>
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


    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>
</body>

</html>