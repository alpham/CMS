
<?php
	require_once 'include/user.php';
	$usr=new user();
	if (isset($_POST['username'],$_POST['password'])){
		if($usr->getUserByEmail($_POST['username']) || $usr->getUserByName($_POST['username'])){
			
			if ($usr->checkPassword($usr->getUserByEmail($_POST['username']) , $_POST['password']) || $usr->checkPassword($usr->getUserByName($_POST['username']) , $_POST['password'])){
				echo"here";
				header("location:index.php");
			}
			
		}
	}
	?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wbpreview.com/previews/WB0JLR295/login.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 31 Jan 2013 12:07:14 GMT -->
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>ACME Dashboard - Perfect Bootstrap Admin Template</title>
	<meta name="description" content="ACME Dashboard Bootstrap Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="ACME, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
			<style type="text/css">
			body { background: url(img/bg-login.jpg) !important; }
		</style>
		
		
		
</head>

<body>
		<div class="container-fluid">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="index-2.html"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<h2>Login to your account :<?php if (isset($_POST['username'],$_POST['password'])){
						if ((!$usr->getUserByEmail($_POST['username']) && !$usr->getUserByName($_POST['username'])) || !($usr->checkPassword($usr->getUserByEmail($_POST['username']) , $_POST['password']) || $usr->checkPassword($usr->getUserByName($_POST['username']) , $_POST['password'])) ){
						 echo"<div class=\"label label-important\">Username or Password is Wrong!, try again.</div>" ; }}?></h2>
					<form class="form-horizontal" action="login.php?attempt=<?php if(isset($_GET['attempt'])){
						echo ++$_GET['attempt'];
					} else {
						echo "1";
					}?>" method="post">
						<fieldset>
							
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="username" id="username" type="text" placeholder="username or email"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" placeholder="password"/>
							</div>
							<div class="clearfix"></div>
							
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

							<div class="button-login">	
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
					</form>
					<hr>
					<h3>Forgot Password?</h3>
					<p>
						No problem, <a href="#">click here</a> to get a new password.
					</p>	
				</div><!--/span-->
			</div><!--/row-->
			
				</div><!--/fluid-row-->
				
	</div><!--/.fluid-container-->

	<!-- start: JavaScript-->

		<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/jquery-ui-1.8.21.custom.min.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>

<!-- Mirrored from wbpreview.com/previews/WB0JLR295/login.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 31 Jan 2013 12:07:14 GMT -->
</html> 