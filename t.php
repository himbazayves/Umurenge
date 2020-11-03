<div class="gtco-container">

            
			<div class="row">


<?php if (isset($_POST['register'])) : ?>
	   
	<div class="col">
	   
	   <?php if($qry) : ?>
	 
	   
		   <div class='alert alert-success'>Appointment to <?php echo $leader_position ?> requested succesfuly </div>
		   
		   
		  
		   
		   
		   
	   
	   </div>

	   <div class="col">
		   <?php else : ?>
			   <div class='alert alert-danger'>something went wrong try again</div>




			   <?php endif ?> 

			   <?php endif ?> 

		</div>


		</div>	   



			<div class="row">
				<div class="col-md-4 col-sm-4">
                    <center> <h5 class="text-warning"> All Requested appointment </h5> </center>
                <table class="table table-hover table-bordered table-striped bg-white">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>


	
	<?php
include 'db.php';





$query1=mysqli_query($conn,"select * from appointment, citizen, leader where appointment.citizen_id=citizen.citizen_id and appointment.leader_id=leader.leader_id") or die("selecting error");



                while($row=mysqli_fetch_assoc($query1))
                    {
                ?>

      <tr>
        <td><?php echo   $row['appointment_id'] ?></td>
        <td><?php echo   $row['request_date'] ?></td>
        <td>john@example.com</td>
      </tr>
     
      <?php
     }
    ?>	
    </tbody>
  </table>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-command"></i>
						</span>
						<h3>My Appointment</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
						<p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-power"></i>
						</span>
						<h3>My Notifications</h3>
						<p class="text-light">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
						<p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
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
    

    <div id="new_app" class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<div id="gtco-subscribe">
		<div  class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
               



