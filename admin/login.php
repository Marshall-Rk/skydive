<?php require('config.php'); ?>
<!doctype html>
<html lang="en">	
  <head>
  	<title>TT School Of Paragliding</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" sizes="16x16" href="../img/RISE-Logo.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assests/css/style.css">

	</head>
	<body>
	<?php
    require('db.php');
   error_reporting(0);
    if (isset($_POST['submit'])) {
        $email = stripslashes($_REQUEST['email']);    
        $email = mysqli_real_escape_string($link, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($link, $password);
       

        $query    = "SELECT * FROM `admin` WHERE email='$email'
                     AND password='$password'";
        $result = mysqli_query($link, $query) or die();
        $rows = mysqli_num_rows($result);
        $row=mysqli_fetch_array($result);
	
	                        if(is_array($row))  // if matching records in the array & if everything is right
								{
                       
     
                          header("refresh:1;url=index.php"); // redirect to index.php page
                                    } 
        if ($rows == 1) {
            $_SESSION['email'] = $email;
               
           
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect email/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" style="background-color:#0B121C; color:aliceblue;" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="../index.php"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="../index.php" class="nav-link">Home</a></li>
	
	      </div>
	    </div>
	  </nav>

	<section class="ftco-section">
		<div class="container">

			<div class="row justify-content-center">

				<div class="col-md-12 col-lg-10">
				<span style="color:red;"><?php echo $message; ?></span> 
   <span style="color:green;"><?php echo $success; ?></span>
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(images/web.png);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      		    <center>
 <img class="img-fluid" src="../img/RISE-Logo.png" width="50%" height="50%" alt="">
						  </center>
			      
							 
			      		</div>
			      	</div>
							<form method="post" name="login" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Email</label>

							  <input type="text" class="form-control" required value="om@admin.com" name="email" id="username" required>
							  
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>

						<input type="password" class="form-control" name="password" value="omadmin" id="password" required>

		            </div>
		            <div class="form-group">
					<button type="submit" value="Login" name="submit" style="background-color:#43D9FE;font-weight:bold;color:black;font-weight:bold;" class="form-control btn  rounded submit px-3">LOGIN</button>
					
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left ">
			            
									</div>
								
		            </div>
					
		          </form>
		          		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="assests/js/jquery.min.js"></script>
  <script src="assests/js/popper.js"></script>
  <script src="assests/js/bootstrap.min.js"></script>
  <script src="assests/js/main.js"></script>

	</body>
</html>
<?php
    }
?>
