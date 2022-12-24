<?php require('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php
include("db.php");

if (!isset($_SESSION['email'])) {
        header('Location:login.php');
        exit();
    }
    
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$sql=mysqli_query($con,"delete from restro where ID=$rid");
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'admin-dashboard.php'</script>";     
} 


error_reporting(0);
session_start();


{
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
    <!-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div> -->
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <span><img src="../img/RISE-Logo.png" alt="homepage" width="35%" height="35%" class="dark-logo" /></span>
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
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../img/circle.png" alt="user" class="profile-pic" /></a>
                        
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
        <!-- End Left Sidebar <i class="fa fa-bell"></i>
								  -->
       
        <!-- Page wrapper  -->
        <div class="page-wrapper" >
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-dark ">Dashboard - Welcome <span class="text-warning"> <?php echo $_SESSION['email']; ?> </span></h3>
                    
                    <!-- <script type="text/javascript">
 function loadDoc() {
  

  setInterval(function(){

   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("noti_number").innerHTML = this.responseText;
    }
   };
   xhttp.open("GET", "data.php", true);
   xhttp.send();

  },1000);


 }
 loadDoc();
</script>                -->
                
                </div>
               <!-- <?php
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
?> -->
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                     <div class="row">
                   
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fas fa-graduation-cap f-s-35 text-warning"></i></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php $sql="SELECT * from `course`";
												$result=mysqli_query($link,$sql); 
													$rws=mysqli_num_rows($result);
													
													echo $rws;?></h2>
                                    <p class="m-b-0">Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
					
                       
					
					 <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fas fa-file-text f-s-35 text-warning"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php $sql="SELECT * FROM `contact` ";
												$result=mysqli_query($link,$sql); 
													$rws=mysqli_num_rows($result);
													
													echo $rws;?></h2>
                                    <p class="m-b-0">Contact Form</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                 
                    
                    
                    
                      <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fas fa-envelope-open-text f-s-35 text-warning"></i></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php $sql="SELECT * from newsletter";
												$result=mysqli_query($link,$sql); 
													$rws=mysqli_num_rows($result);
													
													echo $rws;?></h2>
                                    <p class="m-b-0">Subscribers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
        <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fas fa-book f-s-35 text-warning"></i></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php $sql="SELECT * from `blog`";
												$result=mysqli_query($link,$sql); 
													$rws=mysqli_num_rows($result);
													
													echo $rws;?></h2>
                                    <p class="m-b-0">Total Blogs</p>
                                </div>
                            </div>
                        </div>
                    </div>               
                    
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fas fa-image f-s-35 text-warning"></i></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php $sql="SELECT * from `gallery`";
												$result=mysqli_query($link,$sql); 
													$rws=mysqli_num_rows($result);
													
													echo $rws;?></h2>
                                    <p class="m-b-0">Total Photos</p>
                                </div>
                            </div>
                        </div>
                    </div>  
                    
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fas fa-plane f-s-35 text-warning"></i></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php $sql="SELECT * from `joyride`";
												$result=mysqli_query($link,$sql); 
													$rws=mysqli_num_rows($result);
													
													echo $rws;?></h2>
                                    <p class="m-b-0">Total Joyride</p>
                                </div>
                            </div>
                        </div>
                    </div>  
                    

                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fas fa-users f-s-35 text-warning"></i></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php $sql="SELECT * from `team`";
												$result=mysqli_query($link,$sql); 
													$rws=mysqli_num_rows($result);
													
													echo $rws;?></h2>
                                    <p class="m-b-0">Total Member</p>
                                </div>
                            </div>
                        </div>
                    </div>  

                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fas fa-star f-s-35 text-warning"></i></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php $sql="SELECT * from `testimonial`";
												$result=mysqli_query($link,$sql); 
													$rws=mysqli_num_rows($result);
													
													echo $rws;?></h2>
                                    <p class="m-b-0">Total testimonial</p>
                                </div>
                            </div>
                        </div>
                    </div>
                  
     <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fas fa-eye f-s-35 text-warning"></i></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>
                                    <?php
                                    $sql = "SELECT * FROM visits WHERE id = 1";
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $visits = $row["visits"];
             
              
              $orgDate = $row['date'];
              $newDate = date("F j, Y", strtotime($orgDate));
                                        
        }
    } else {
        echo "no results";
    }
													
													
												echo $visits;	?>
													
													
													</h2>
                                    <p class="m-b-0">Visitors/Views</p>
                                     <!-- <p class="m-b-0 text-danger">Since: <?php echo  $newDate;?></p>     -->
                                </div>
                            </div>
                        </div>
                    </div>


                
                </div>
                <!-- End PAge Content -->
            </div>
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
<?php
}
?>