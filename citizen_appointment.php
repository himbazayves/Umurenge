<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location:login.php");
	exit;
	



}

if (isset($_POST['register']))
{
  include 'db.php';

  $citizen_id=$_POST['citizen_id'];
$appointment_reason=$_POST['appointment_reason'];
$now=date("Y-m-d");

#$request_date="yes";
$leader_position=$_POST['leader_position'];


  $query=mysqli_query($conn,"select * from leader where position='$leader_position' ") or die("selecting error");
    $count=mysqli_num_rows($query);
    $row=mysqli_fetch_assoc($query);
	$leader_id=$row['leader_id'];
	










$qry=$conn->query("INSERT INTO appointment (`appointment_id`,`leader_id`, `appointment_reason`, `request_date`, `citizen_id`) 
VALUES (NULL,'$leader_id', '$appointment_reason', '$now', '$citizen_id')");



  

    
   
    
    





 









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
		<?php include 'citizen_nav1.php'?>
	</nav>


	<div id="new_app" class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<div id="gtco-subscribe">
		<div  class="gtco-container">
			

			<div class="row animate-box">
				
				
				<div class="col-md-12">


				<center> <h5 class="text-warning"> Accepted appointment </h5> </center>
                <table class="table table-hover table-bordered table-striped bg-white">
    <thead>
      <tr>
        <th>Request Date</th>
       
        <th>Reason</th>
		<th>Leader</th>
      </tr>
    </thead>
    <tbody>


	
	<?php
include 'db.php';


$citizen_id= $_SESSION['citizenId'];



$query1=mysqli_query($conn,"select * from appointment, citizen, leader where appointment.citizen_id=$citizen_id and citizen.citizen_id=$citizen_id and appointment.leader_id=leader.leader_id") or die("selecting error");



                while($row=mysqli_fetch_assoc($query1))
                    {
                ?>

			
			
 <?php if ($row['appointment_status']=="accepted") :?>
      <tr>
	
        <td><?php echo   $row['request_date'] ?></td>
        <td><?php echo   $row['appointment_reason'] ?></td>
        <td><?php echo   $row['position'] ?></td>
		
		
		
	
      </tr>
<?php endif ?>
	 
	
     
      <?php
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
			




	<div id="new_app" class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<div id="gtco-subscribe">
		<div  class="gtco-container">
			

			<div class="row animate-box">
				
				
				<div class="col-md-12">


				<center> <h5 class="text-warning"> submitted appointment </h5> </center>
                <table class="table table-hover table-bordered table-striped bg-white">
    <thead>
      <tr>
        <th>Request Date</th>
       
        <th>Reason</th>
		<th>Leader</th>
      </tr>
    </thead>
    <tbody>


	
	<?php
include 'db.php';


$citizen_id= $_SESSION['citizenId'];



$query1=mysqli_query($conn,"select * from appointment, citizen, leader where appointment.citizen_id=$citizen_id and citizen.citizen_id=$citizen_id and appointment.leader_id=leader.leader_id") or die("selecting error");



                while($row=mysqli_fetch_assoc($query1))
                    {
                ?>

			
			
 <?php if ($row['appointment_status']=="pending") :?>
      <tr>
	
        <td><?php echo   $row['request_date'] ?></td>
        <td><?php echo   $row['appointment_reason'] ?></td>
        <td><?php echo   $row['position'] ?></td>
		
		
		
	
      </tr>
<?php endif ?>
	 
	
     
      <?php
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
			




					<div id="new_app" class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<div id="gtco-subscribe">
		<div  class="gtco-container">
			

			<div class="row animate-box">
				
				
				<div class="col-md-12">


				<center> <h5 class="text-warning"> Rejected appointment </h5> </center>
                <table class="table table-hover table-bordered table-striped bg-white">
    <thead>
      <tr>
        <th>Request Date</th>
       
        <th>Reason</th>
		<th>Leader</th>
      </tr>
    </thead>
    <tbody>


	
	<?php
include 'db.php';


$citizen_id= $_SESSION['citizenId'];



$query1=mysqli_query($conn,"select * from appointment, citizen, leader where appointment.citizen_id=$citizen_id and citizen.citizen_id=$citizen_id and appointment.leader_id=leader.leader_id") or die("selecting error");



                while($row=mysqli_fetch_assoc($query1))
                    {
                ?>

			
			
 <?php if ($row['appointment_status']=="rejected") :?>
      <tr>
	
        <td><?php echo   $row['request_date'] ?></td>
        <td><?php echo   $row['appointment_reason'] ?></td>
        <td><?php echo   $row['position'] ?></td>
		
		
		
	
      </tr>
<?php endif ?>
	 
	
     
      <?php
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
			




	<div id="new_app" class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<div id="gtco-subscribe">
		<div  class="gtco-container">
			

			<div class="row animate-box">
				
				
				<div class="col-md-12">


				<center> <h5 class="text-warning"> Rejected appointment </h5> </center>
                <table class="table table-hover table-bordered table-striped bg-white">
    <thead>
      <tr>
        <th>Request Date</th>
       
        <th>Reason</th>
		<th>Leader</th>
      </tr>
    </thead>
    <tbody>


	
	<?php
include 'db.php';


$citizen_id= $_SESSION['citizenId'];



$query1=mysqli_query($conn,"select * from appointment, citizen, leader where appointment.citizen_id=$citizen_id and citizen.citizen_id=$citizen_id and appointment.leader_id=leader.leader_id") or die("selecting error");



                while($row=mysqli_fetch_assoc($query1))
                    {
                ?>

			
			
 <?php if ($row['appointment_status']=="rejected") :?>
      <tr>
	
        <td><?php echo   $row['request_date'] ?></td>
        <td><?php echo   $row['appointment_reason'] ?></td>
        <td><?php echo   $row['position'] ?></td>
		
		
		
	
      </tr>
<?php endif ?>
	 
	
     
      <?php
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
			




				
	

	



    

    <div id="new_app" class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<div id="gtco-subscribe">
		<div  class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
               




					<h2>New Appointment</h2>
					<p> Please request new appointment   here</p>
				</div>
			</div>

			<div class="row animate-box">
				<div class="col-md-12">
					<form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form-group">
                    <div class="row">
					<input type="hidden" value="<?php echo $_SESSION['citizenId'];?>" class="form-control" name="citizen_id">

                       <div class="col">
                            <div class="form-group">
							<label> Reason for appointment</label>
								
								
							
								<textarea class="form-control" name="appointment_reason" type="text" rows="4" cols="50" required>

                                 </textarea>
							
							
							</div>

                            </div>

                            <div class="col">
                            <div class="form-group">
							
							<label> Select Leader</label>
							
								<select name="leader_position"  class="form-control">
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "umurenge";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT DISTINCT position FROM leader";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) 
	{
	?>
	
		<option  value=<?php echo $row['position']; ?> style="font-weight:bold;font-size:16px;"><?php echo $row['position']; ?></option>
<?php
}
$conn->close();
} 
?>
</select>
							
							
							
							
							</div>

                            
                            </div>

                            

                            
						
                        
                        </div>


 

						
							
						
						
                        
                        <div class="col-">
							<button type="submit" name="register" class="btn btn-default btn-block">Request Appointment</button>
						</div>
					</form>
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

