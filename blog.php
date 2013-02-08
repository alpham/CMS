<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wbpreview.com/previews/WB0C44S9M/blog.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 31 Jan 2013 12:08:45 GMT -->
<head>
<?php 
require_once 'include/post.php';
require_once 'include/general.php';
$post=new Post();
$con=mysql_connect("localhost","root","root");
$DB=mysql_select_db("cms");
$result=mysql_query("SELECT * FROM `cms`.`post` WHERE `state`='PUBLISHED' ORDER BY id DESC");
?>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>MAGNUS BOOTSTRAP THEME by creativeLabs</title> 
	<meta name="description" content="Magnus Bootstrap Theme"/>
	<meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap" />
	<meta name="author" content="Łukasz Holeczek from creativeLabs"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/parallax-slider.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
	
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
					<i class="ico-thin-right-arrow ico-color circle"></i><a class="brand" href="#">Magnu<span>s</span>.</a>
						
				</div>
				<!--end: Logo -->
					
				<!--start: Navigation -->
				<div class="span9">
					
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
									<li><a href="index-2.html">Home</a></li>
			              			<li><a href="about.html">About</a></li>
									<li class="dropdown">
			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Features<b class="caret"></b></a>
			                			<ul class="dropdown-menu">
			                  				<li><a href="social-icons.html">Social Icons</a></li>
											<li><a href="icons.html">Icons</a></li>
											<li><a href="typography.html">Typography</a></li>
											<li><a href="shortcodes.html">Shortcodes</a></li>
											<li><a href="list-styles.html">List Styles</a></li>
			                			</ul>
			              			</li>
									<li class="dropdown">
			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio<b class="caret"></b></a>
			                			<ul class="dropdown-menu">
			                  				<li><a href="portfolio3.html">3 Columns</a></li>
											<li><a href="portfolio4.html">4 Columns</a></li>
			                			</ul>
			              			</li>									
									<li><a href="services.html">Services</a></li>
									<li><a href="pricing.html">Pricing</a></li>
									<li class="active"><a href="blog.html">Blog</a></li>
			              			<li><a href="contact.html">Contact</a></li>
			            		</ul>
			          		</div>
			        	</div>
			      	</div>
					
				</div>	
				<!--end: Navigation -->
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->
	
	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-pencil"></i>Blog</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
				
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
			
			<!--start: Row -->
			<div class="row">
			
				<div class="span9">

					
						<?php
						 /*<div class="post-img picture"><a href="post.html"><img src="img/car.jpg" alt="" /><div class="image-overlay-link"></div></a></div>*/
						while($row=mysql_fetch_array($result))
						{
						?>
						<!-- start: Post -->
						<div class="post">
						<span class="post-icon standard"><i class="ico-pen circle"></i></span>
						<div class="post-content">
							<div class="post-title"><h2><a href="post.php?post=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></h2></div>
							<div class="post-description">
								<p>
									<?php echo substr($row['body'],0,1000); ?>
								</p>
							</div>
							<a class="post-entry" href="post.html">Read More...</a>
							<div class="post-meta"><span><i class="mini-ico-calendar"></i>1 June 2011</span> <span><i class="mini-ico-user"></i>By <a href="#">lucas</a></span> <span><i class="mini-ico-comment"></i>With <a href="#">89 comments</a></span></div>
						</div>
					</div>
					<!-- end: Post -->
					<?php } ?>

					

						<?php /*
						<!-- start: Flexslider -->
						<div class="slider">
							<div id="flex1" class="flexslider">
								<ul class="slides">

									<li><div class="picture"><img src="img/slider/slider1.jpg" alt="" /></div></li>

									<li><div class="picture"><img src="img/slider/slider2.jpg" alt="" /></div></li>

									<li><div class="picture"><img src="img/slider/slider3.jpg" alt="" /></div></li>

								</ul>
							</div>
						</div>
						<!-- end: Flexslider -->
						 * 
						 */?>


					<ul class="pagination">
						<a href="#"><li>1</li></a>
						<a href="#"><li>2</li></a>
						<a href="#"><li>3</li></a>
						<a href="#"><li class="current">4</li></a>
						<a href="#"><li>5</li></a>
						<a href="#"><li>6</li></a>
						<a href="#"><li>7</li></a>
						<a href="#"><li>8</li></a>
						<a href="#"><li>9</li></a>
						<a href="#"><li>10</li></a>
						<a href="#"><li>11</li></a>
					</ul>

				</div>

				<!-- start: Sidebar -->

				<div class="span3 hidden-phone">
					
					<!-- start: Text Widget -->
					<div class="widget first">
						<div class="title"><h3>Text Widget</h3></div>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
					</div>
					<!-- end: Text Widget -->
					
					<!-- start: Video Widget -->
					<div class="widget">
						<div class="title"><h3>Video Widget</h3></div>
						<div class="flex-video widescreen">
							<iframe src="http://player.vimeo.com/video/47995280?portrait=0&amp;color=ffffff" width="480" height="256" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>	
						</div>
					</div>
					<!-- end: Video Widget -->

					<!-- start: Popular Photos -->
					<div class="widget">
						<div class="title"><h3>Popular Photos</h3></div>

						<div class="flickr-widget">
							<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=29609591@N08"></script>
							<div class="clear"></div>
						</div>

					</div>
					<!-- end: Popular Photos -->

					<!-- start: Sidebar Menu -->
					<div class="widget">
						<div class="title"><h3>Menu</h3></div>
						<ul class="links-list-alt">
							<li><a href="index-2.html">Home</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="post.html">Single Post</a></li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="pricing.html">Pricing Tables</a></li>
						</ul>
					</div>
					<!-- end: Sidebar Menu -->

					<!-- start: Tags -->
					<div class="widget">
						<div class="title"><h3>Tags</h3></div>
						<div class="tags">
							<a href="#">Tag1</a>
							<a href="#">Tag2</a>
							<a href="#">Tag3</a>
							<a href="#">Tag4</a>
							<a href="#">Tag5</a>
							<a href="#">Tag6</a>
							<a href="#">Tag7</a>
							<a href="#">Tag8</a>
							<a href="#">Tag9</a>
							<a href="#">Tag10</a>
							<a href="#">Tag11</a>
							<a href="#">Tag12</a>
						</div>
					</div>
					<!-- end: Tags -->

				</div>
				<!-- end: Sidebar -->
			
			<!--end: Row -->
			</div>
			
		</div>
		<!--end: Container-->
	
	</div>
	<!-- end: Wrapper  -->			

	<!-- start: Footer -->
	<div id="footer">
		
		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: About -->
				<div class="span3">
					
					<h3>creativeLabs</h3>

					<p>
						<i class="mini-ico-map-marker mini-white"></i> 30 South Park Avenue
					</p>
					<p>	
						<i class="mini-ico-map-marker mini-white"></i> San Francisco, CA 94108, USA
					</p>	
					<p>	
						<i class="ico-z-iphone"></i> Phone: (123) 456-7890
					</p>
					<p>	
						<i class="mini-ico-print mini-white"></i> Fax: +08 (123) 456-7890
					</p>
					<p>
						<i class="mini-ico-envelope mini-white"></i> Email: contact@companyname.com
					</p>
					<p>
						<i class="mini-ico-globe mini-white"></i> Web: companyname.com
					</p>
						
				</div>
				<!-- end: About -->

				<!-- start: Latest Tweets -->
				<div class="span3">
					
					<h3>Latest Tweets</h3>
					
					<ul id="twitter">
						
					</ul>

					<div class="clear"></div>
					
					
				</div>
				<!-- end: Latest Tweets -->

				<!-- start: Photo Stream -->
				<div class="span3">
					
					<h3>Flickr Photo Stream</h3>
					<div class="flickr-widget">
						<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=29609591@N08"></script>
						<div class="clear"></div>
					</div>
					
				</div>
				<!-- end: Photo Stream -->
				
				<!-- start: Follow Us -->
				<div class="span3">
					
					<h3>Follow Us</h3>
					
					<div id="social-r" class="tooltips">
						<a href="#" rel="tooltip" title="Amazon" class="amazon">Amazon</a>
						<a href="#" rel="tooltip" title="Behance" class="behance">Behance</a>
						<a href="#" rel="tooltip" title="Blogger" class="blogger">Blogger</a>
						<a href="#" rel="tooltip" title="DeviantART" class="deviantart">DeviantART</a>
						<a href="#" rel="tooltip" title="Dribbble" class="dribbble">Dribbble</a>
						<a href="#" rel="tooltip" title="Dropbox" class="dropbox">Dropbox</a>
						<a href="#" rel="tooltip" title="Evernote" class="evernote">Evernote</a>
						<a href="#" rel="tooltip" title="Facebook" class="facebook">Facebook</a>
						<a href="#" rel="tooltip" title="Forrst" class="forrst">Forrst</a>
						<a href="#" rel="tooltip" title="Github" class="github">Github</a>
						<a href="#" rel="tooltip" title="Google Plus" class="googleplus">Google Plus</a>
						<a href="#" rel="tooltip" title="Joli Cloud" class="jolicloud">Joli Cloud</a>
						<a href="#" rel="tooltip" title="Last FM" class="last-fm">Last FM</a>
						<a href="#" rel="tooltip" title="LinkedIn" class="linkedin">LinkedIn</a>
						<a href="#" rel="tooltip" title="Picasa" class="picasa">Picasa</a>
						<a href="#" rel="tooltip" title="Pintrest" class="pintrest">Pintrest</a>
						<a href="#" rel="tooltip" title="RSS" class="rss">RSS</a>
						<a href="#" rel="tooltip" title="Skype" class="skype">Skype</a>
						<a href="#" rel="tooltip" title="Spotify" class="spotify">Spotify</a>
						<a href="#" rel="tooltip" title="StumpleUpon" class="stumbleupon">StumbleUpon</a>
						<a href="#" rel="tooltip" title="Tumblr" class="tumblr">Tumblr</a>
						<a href="#" rel="tooltip" title="Twitter" class="twitter">Twitter</a>
						<a href="#" rel="tooltip" title="Vimeo" class="vimeo">Vimeo</a>
						<a href="#" rel="tooltip" title="WordPress" class="wordpress">WordPress</a>
						<a href="#" rel="tooltip" title="Xing" class="xing">Xing</a>
						<a href="#" rel="tooltip" title="Yahoo" class="yahoo">Yahoo</a>
						<a href="#" rel="tooltip" title="YouTube" class="youtube">YouTube</a>
					</div>
				
				</div>
				<!-- end: Follow Us -->
				
			</div>
			<!-- end: Row -->	
			
		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Footer -->
	
	<!-- start: Footer Menu -->
	<div id="footer-menu" class="hidden-tablet hidden-phone">

		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: Footer Menu Logo -->
				<div class="span2">
					<div id="footer-menu-logo">
						<a class="brand" href="#">Magnu<span>s</span>.</a>
					</div>
				</div>
				<!-- end: Footer Menu Logo -->

				<!-- start: Footer Menu Links-->
				<div class="span9">
					
					<div id="footer-menu-links">

						<ul id="footer-nav">

							<li><a href="index-2.html">Start</a></li>

							<li><a href="about.html">About</a></li>

							<li><a href="services.html">Services</a></li>

							<li><a href="pricing.html">Pricing</a></li>
							
							<li><a href="contact.html">Contact</a></li>

						</ul>

					</div>
					
				</div>
				<!-- end: Footer Menu Links-->

				<!-- start: Footer Menu Back To Top -->
				<div class="span1">
						
					<div id="footer-menu-back-to-top">
						<a href="#"></a>
					</div>
				
				</div>
				<!-- end: Footer Menu Back To Top -->
			
			</div>
			<!-- end: Row -->
			
		</div>
		<!-- end: Container  -->	

	</div>	
	<!-- end: Footer Menu -->

	<!-- start: Copyright -->
	<div id="copyright">
	
		<!-- start: Container -->
		<div class="container">
		
			<div class="sixteen columns">
				<p>
					&copy; 2012, <a href="http://clabs.co/">creativeLabs</a>. Designed by <a href="http://clabs.co/">creativeLabs</a> in Poland <img src="img/poland.png" alt="Poland" style="margin-top:-4px">
				</p>
			</div>
	
		</div>
		<!-- end: Container  -->
		
	</div>	
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.imagesloaded.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script src="js/fancybox.js"></script>
<script src="js/twitter.js"></script>
<script defer="defer" src="js/custom.js"></script>
<!-- end: Java Script -->

</body>

<!-- Mirrored from wbpreview.com/previews/WB0C44S9M/blog.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 31 Jan 2013 12:09:14 GMT -->
</html>