<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes designed by 365bootstrap.com" />
    <meta name="author" content="www.365bootstrap.com" />
	<title>Health Care | 365Bootstrap.com</title>
	
	
	 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/contact-buttons.css" rel="stylesheet">
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	
	<!---pop-up-box---->
	<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!---//pop-up-box---->
	<script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
			
			});
	</script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>	
	
	<!-- /////////////////////////////////////////Top -->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<a href="#" class="logo"><img src="images/logo.png" alt="Third slide"></a>
				</div>
				<div class="col-md-6 text-right">
					<span>Information Service:</span></br>
					<strong class="contact-phone"><i class="fa fa-phone"></i> 800-2345-6789</strong>
				</div>
			</div>
		</div>
	</header>
	<!-- Header -->
	
	<!-- /////////////////////////////////////////Navigation -->
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					Welcome to us !
				</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
                        <a class="page-scroll" href="index.html">Home</a>
                    </li>
					<li>
                        <a class="page-scroll" href="single.html">About</a>
                    </li>
					<li>
                        <a class="page-scroll" href="service.html">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="archive.html">Blogs</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contact.html">Contacts</a>
                    </li>
				</ul>
			</div>
		</div>
	</nav>
		
	<a id='backTop'>Back To Top</a>
	<!-- /Back To Top -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="archives-page">
		<div class="container">
			<div class="row">
				<div id="main-content">
					<article class="box-shadow">
						<div class="heading">
							<h2>
								<span class="hr">Contact</span>
							</h2>
						</div>
						<div class="row">
							<div class='embed-container maps'>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.289259162295!2d-120.7989351!3d37.5246781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091042b3386acd7%3A0x3b4a4cedc60363dd!2sMain+St%2C+Denair%2C+CA+95316%2C+Hoa+K%E1%BB%B3!5e0!3m2!1svi!2s!4v1434016649434" width="100%" height="450px" frameborder="0" style="border: 0"></iframe>
							</div>
							<div class="col-md-4 box-item">
								<h3>Contact Info</h3>
								<span>SED UT PERSPICIATIS UNDE OMNIS ISTE NATUS ERROR SIT VOLUPTATEM ACCUSANTIUM DOLOREMQUE LAUDANTIUM, TOTAM REM APERIAM.</span><br> <br>
								<p>JL.Kemacetan timur no.23. block.Q3<br>
									Jakarta-Indonesia</p>
								   <p>+6221 888 888 90 <br>
									+6221 888 88891</p>
								<p>info@yourdomain.com</p>
							</div>
							<div class="col-md-8">
								<h3>Contact Form</h3>
								<form name="form1" method="post" action="contact.php">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
											<input type="text" class="form-control input-lg" name="name" id="name" placeholder="Enter name" required="required" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="email" class="form-control input-lg" name="email" id="email" placeholder="Enter email" required="required" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control input-lg" name="subject" id="subject" placeholder="Subject" required="required" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
												placeholder="Message" style="height: 190px;"></textarea>
											</div>						
											<button type="submit" class="btn btn-red btn-block" name="submitcontact" id="submitcontact">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
		
	</div>

	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-footer footer-1">
						<div class="footer-heading"><h4>Partners</h4></div>
						<div class="content">
							<div class="row">
								<div class="col-md-6">
									<a href="#"><img src="images/22.jpg" /></a>
								</div>
								<div class="col-md-6">
									<a href="#"><img src="images/23.jpg" /></a>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<a href="#"><img src="images/24.jpg" /></a>
								</div>
								<div class="col-md-6">
									<a href="#"><img src="images/18.jpg" /></a>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<a href="#"><img src="images/19.jpg" /></a>
								</div>
								<div class="col-md-6">
									<a href="#"><img src="images/20.jpg" /></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-footer footer-2">
						<div class="footer-heading"><h4>About Us</h4></div>
						<div class="content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad</p>
						</div>
					</div>
					<div class="col-md-3 col-footer footer-3">
						<div class="footer-heading"><h4>Follow us</h4></div>
						<div class="content">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
								<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
								<li><a href="#"><i class="fa fa-rss"></i> RSS</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-footer footer-4">
						<div class="footer-heading"><h4>Navigation</h4></div>
						<div class="content">
							<ul>
								<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
								<li><a href="single.html"><i class="fa fa-users"></i> About</a></li>
								<li><a href="service.html"><i class="fa fa-ambulance"></i> Services</a></li>
								<li><a href="archive.html"><i class="fa fa-folder-open-o"></i>  Blogs</a></li>
								<li><a href="contact.html"><i class="fa fa-envelope-o"></i> Contacts</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="coppy-right">
		<div class="wrap-footer">
			<div class="clearfix">
				<div class="col-md-6 col-md-offset-3">
					<p>Copyright @ HealthCare - <a href="http://www.365bootstrap.com" target="_blank" rel="nofollow">Bootstrap Themes</a> Designed by 365Bootstrap.com</p>
				</div>
			</div>	
		</div>
	</div>
	<!-- Footer -->
	
	<!-- Core JavaScript Files -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.backTop.min.js"></script>
	<script>
		$(document).ready( function() {
			$('#backTop').backTop({
				'position' : 1200,
				'speed' : 500,
				'color' : 'red',
			});
		});
	</script>
	
	<!-- Google Map -->
	<script>
		$('.maps').click(function () {
		$('.maps iframe').css("pointer-events", "auto");
	});

	$( ".maps" ).mouseleave(function() {
	  $('.maps iframe').css("pointer-events", "none"); 
	});
	</script>
</body>
</html>
	
