<?php
session_start();

include 'db.php';
if(isset($_POST['login']))
{
    if(isset($_POST['email']))
    {
        $email=$_POST['email'];
        $_SESSION['email'] = $email;
       
    }
    if(isset($_POST['password']))
    {
        $password=$_POST['password'];
    }
    $query=mysqli_query($conn,"select * from citizen where email='$email' and password='$password'") or die("selecting error");
    $count=mysqli_num_rows($query);
    $row=mysqli_fetch_assoc($query);
    $citizen_id=$row['citizen_id'];
    $_SESSION['citizenId']=$citizen_id;
    $first_name=$row['first_name'];
    $_SESSION['name']=$first_name;
   $_SESSION["loggedin"] = true;
    
   
    if($count > 0)
    {
      
            echo"<script>location.href='citizen.php';</script>";
        
      

        
    }
    
    
     
    else  {
        echo"incorrect credintial";

     }



      
}
?>









<!DOCTYPE HTML>
<!--
	Greatness by FreeHTML5.co
	Twitter: http://twitter.com/fh5co
	URL: http://FreeHTML5.co
-->
<html>
	<?php include 'head.php' ?>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">
	<nav class="gtco-nav" role="navigation">
		<?php include 'nav.php' ?>
	</nav>

	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(images/home.jpg);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<div id="gtco-subscribe">
		<div  class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Login</h2>
					<p> please Login here</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-12">
					<form method="POST" action="" class="form-inline">
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input name="email" type="email" class="form-control" id="email" placeholder="Your email">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="name" class="sr-only">Password</label>
								<input type="password" name="password" class="form-control" id="name" placeholder="Your Password">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<button name="login" type="submit" class="btn btn-default btn-block">Login</button>
						</div>
					</form>
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
	
	
	<footer id="gtco-footer" role="contentinfo">
		<?php include 'footer.php' ?>
	</footer>
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

