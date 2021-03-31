
<?php
session_start();
?>

<?php
if (isset($_POST['register']))
{
  include 'db.php';



$email=$_POST['email'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$position=$_POST['position'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];
$leader_status="blocked";




if ($password == $rpassword)

{


$qry=$conn->query("INSERT INTO leader (`leader_id`, `leader_email`, `leader_first_name`, `leader_last_name`, `position`, `password`, `leader_status`) 
VALUES (NULL, '$email', '$first_name', '$last_name', '$position', '$password','$leader_status')");



  

    
   
    
    





 

}
if($qry){

	echo"<script>location.href='leader_dashboard.php';</script>";


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
	<div class="gtco-container bg-dark">
			<div class="row">
				<div class="col-xs-2">
					<div id="gtco-logo"><a href="index.html">UIS</a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li><a href="index.php">Home</a></li>
						
						<li class="has-dropdown">
							<a href="#">Leader</a>
							<ul class="dropdown">
								<li><a href="leader_register.php">Register</a></li>
								<li><a href="leader_login.php">Login</a></li>
								
							</ul>
						</li>

						<li class="has-dropdown">
							<a href="#">Citizen</a>
							<ul class="dropdown">
								<li><a href="citizen_register.php"> Register</a></li>
								<li><a href="login.php">Login</a></li>
								
							</ul>
						</li>
						
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	
	<div style="pading-top:60px; margin-top:60px" class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<div id="gtco-subscribe">
		<div  class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <?php if (isset($_POST['register'])) : ?>

                    <?php if ($password == $rpassword) : ?>
                        <?php if(!$qry) : ?>
                        <div class="row">

                            <div class="col">
           <div class='alert alert-danger'>something went wrong try again</div>
                            </div>
                           
                        
                        </div>
                                




                                <?php endif ?> 

                                <?php endif ?> 
                                <?php endif ?> 

 <?php if (isset($_POST['register'])) : ?>

                    <?php if ($password != $rpassword) : ?>
                     
                            
                                <div class='alert alert-danger'> cant to submit cause your password doest match</div>




                              
                                <?php endif ?> 
                                <?php endif ?> 


                        






					<h2>Leader Registeration Form</h2>
					
				</div>
			</div>

			<div class="row animate-box">
				<div class="col-md-12">
					<form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form-group">
                    <div class="row">

                       <div class="col">
                            <div class="form-group">
							<label style="font-size:20px"> First Name <label   class="text-danger">*</label></label>
								
								<input name="first_name" type="text" class="form-control"  placeholder="Your first Name" required>
							</div>

                            </div>

                            <div class="col">
                            <div class="form-group">
							<label style="font-size:20px"> Last Name <label   class="text-danger">*</label></label>
							
								<input type="text" class="form-control" name="last_name" placeholder="Your last name" required>
							</div>

                            
                            </div>

                            

                            
						
                        
                        </div>

                        <div class="row">

<div class="col">
     <div class="form-group">
	 <label style="font-size:20px"> E-mail <label   class="text-danger">*</label></label>
         
         <input type="email" name="email" class="form-control" id="email" placeholder="Your email" required>
     </div>

     </div>

     <div class="col">
     <div class="form-group">
	 <label style="font-size:20px"> Postiion <label   class="text-danger">*</label></label>
         
         <input type="text" name="position" class="form-control" id="name" placeholder="Your position" required>
     </div>

     
     </div>

     

     
 
 
 </div>


 <div class="row">

<div class="col">
     <div class="form-group">
	 <label style="font-size:20px"> Password <label   class="text-danger">*</label></label>
         
         <input name="password" type="password" class="form-control"  placeholder="Your password">
     </div>

     </div>

     <div class="col">
     <div class="form-group">
	 <label style="font-size:20px"> Repeat Password <label   class="text-danger">*</label></label>
        
         <input name="rpassword" type="password" class="form-control"  placeholder="reapeat password">
     </div>

     
     </div>

     

     
 
 
 </div>




						
							
						
						
                        
                        <div class="col-md-4 col-sm-4">
							<button type="submit" name="register" class="btn btn-default btn-block">Register</button>
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

