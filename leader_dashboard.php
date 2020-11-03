
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: leader_login.php");
    exit;
}
?>


<!DOCTYPE HTML>
<!--
	Greatness by FreeHTML5.co
	Twitter: http://twitter.com/fh5co
	URL: http://FreeHTML5.co
-->
<html>
	<?php include 'head.php'?>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">
	<nav class="gtco-nav" role="navigation">
		<?php include 'leaders_nav.php'?>
	</nav>

	<header id="gtco-header" class="gtco-cover" role="banner" style="background:black;" >
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-lg">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-eye"></i>
						</span>
						<h3>Manage Documents</h3>
						<p> You can provide the requested document or deny to provide </p>
						<p><a href="leader_document.php" class="btn btn-primary btn-outline">Learn More</a></p>
					</div>
				</div>
				<div class="col-lg">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-command"></i>
						</span>
						<h3> Appointment</h3>
						<p>You can see, accept or deny requested appoitment. </p>
						<p><a href="leader_appointments.php" class="btn btn-primary btn-outline">Learn More</a></p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	

	
	
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

