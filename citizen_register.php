


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
$village=$_POST['village'];
$cell=$_POST['cell'];
$nid=$_POST['nid'];
$martial_status=$_POST['martial_status'];
$password=$_POST['password'];

$rpassword=$_POST['rpassword'];
$status="blocked";




if ($password == $rpassword)

{


if (is_numeric($nid))

{ 

	$le=strlen($nid);

	if ($le==16) {
		$qry=$conn->query("INSERT INTO citizen (`citizen_id`, `email`, `first_name`, `last_name`, `village`,`cell`,`nid`,`martial_status`,`password`, `status`) 
		VALUES (NULL, '$email', '$first_name', '$last_name', '$village','$cell', '$nid','$martial_status','$password','$status')"); 




if($qry)
{
	

	

	

	

	echo '<script type="text/javascript">';
	echo ' alert("Registered succesfully")'; 
	echo '</script>';

	echo"<script>location.href='login.php';</script>";
        
      
}


}



} 
}
}



?>





<!DOCTYPE HTML>

<html>
	<?php include 'head.php' ?>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">
	<nav class="gtco-nav" role="navigation">
	<div  class="gtco-container bg-dark">
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
					<?php if (is_numeric($nid)): ?>
					<?php if ($le==16):?>
                        <?php if(!$qry) : ?>
                        <div class="row">

                            <div class="col">
                        
							<div class='alert alert-danger'>something went wrong try again</div>
                            </div>
                           
                            </div>
                        
                        </div>
                            
                               



						        <?php endif ?> 
                                <?php endif ?> 

                                <?php endif ?> 
                                <?php endif ?> 
								<?php endif ?> 

 <?php if (isset($_POST['register'])) : ?>

                    <?php if ($password != $rpassword) : ?>
                     
                            
                                <div class='alert alert-danger'>  password doest match</div>




                              
                                <?php endif ?> 
                                <?php endif ?> 


                        






					<h2>Citizen Registeration form</h2>
					<p> Please Register here</p>
				</div>
			</div>

			<?php if (isset($_POST['register'])) : ?>

<?php if ($password == $rpassword) : ?>
<?php if (!is_numeric($nid)): ?>
	
	<div class="row">

		<div class="col">
	
		<div class='alert alert-danger'>Your NID must be numeric</div>
		</div>
	   
		</div>
	
	</div>
		
		   




			

			<?php endif ?> 
			<?php endif ?> 
			<?php endif ?> 




			<?php if (isset($_POST['register'])) : ?>

<?php if ($password == $rpassword) : ?>
<?php if (is_numeric($nid)): ?>
<?php if ($le!=16): ?>
	
	<div class="row">

		<div class="col">
	
		<div class='alert alert-danger'>Your NID must be 16 digits</div>
		</div>
	   
		</div>
	
	</div>
		
		   




			

			<?php endif ?> 
			<?php endif ?> 
			<?php endif ?>
			<?php endif ?>  

			<div class="row animate-box">
				<div class="col-md-12">
					<form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form-group">
                    <div class="row">

                       <div class="col">
                            <div class="form-group">
							<label style="font-size:20px"> First name <label   class="text-danger">*</label></label>
								
								<input name="first_name" type="text" class="form-control"  placeholder="Your first Name" required>
							</div>

                            </div>

                            <div class="col">
                            <div class="form-group">
							<label style="font-size:20px"> Last  name <label   class="text-danger">*</label></label>
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
	 <label style="font-size:20px"> Cell <label   class="text-danger">*</label></label>
         
         <input type="text" name="cell" class="form-control" id="name" placeholder="Your cell" required>
     </div>

     
     </div>

     

     
 
 
 </div>





 
 <div class="row">

<div class="col">
     <div class="form-group">
	 <label style="font-size:20px"> Village <label   class="text-danger">*</label></label>
         
         <input type="text" name="village" class="form-control" id="email" placeholder="Your village" required>
     </div>

     </div>

     <div class="col">
     <div class="form-group">
	 <label style="font-size:20px"> Martial status <label   class="text-danger">*</label></label>
         
         <select type="text" name="martial_status" class="form-control" id="email" placeholder="martial status" required>
         
		  <option> Married </option> 
		  <option> Divorced </option>
		  <option> Single </option> 
		 </select>
     </div>

     </div>

     

     
 
 
 </div>



 
 <div class="row">



     <div class="col">
     <div class="form-group">
	 <label style="font-size:20px"> Password <label   class="text-danger">*</label></label>
         
         <input name="password"  type="password" class="form-control" id="email" placeholder="Your password">
     </div>

     </div>


     <div class="col">
     <div class="form-group">
	 <label style="font-size:20px"> Repeat password <label   class="text-danger">*</label></label>
        
         <input name="rpassword" type="password" class="form-control"  placeholder="reapeat password">
     </div>

     
     </div>

     
 
 
 </div>


 <div class="row">

 <div class="col">
     <div class="form-group">
	 <label style="font-size:20px"> NID <label   class="text-danger">*</label></label>
        
         <input name="nid" type="text" class="form-control"  placeholder="your nid">
     </div>

     
     </div>

 

     <div class="col">
     <div style="margin-top:45px" class="form-group">
     
							<button type="submit" name="register" class="btn btn-default btn-block">Register</button>
						
     </div>

     
     </div>

     

     
 
 
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

