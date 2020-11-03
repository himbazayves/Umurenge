<div class="table-responsive">
        <table class="table table-striped table-sm table-bordered">
        <center> <h5 class="text-warning"> Unanswered appointments </h5> </center>
                
    <thead>
      <tr>
      <th>Request Date</th>
       
       <th>Reason</th>
       <th>Leader</th>

       <th>Action</th>
      </tr>
    </thead>
    <tbody>


	
	<?php
include 'db.php';
$citizen_id= $_SESSION['leaderId'];


$pending="pending";


$query1=mysqli_query($conn,"select * from appointment, citizen, leader where appointment.leader_id=leader.leader_id and leader.leader_id=$citizen_id") or die("selecting error");
#while($row=mysqli_fetch_assoc($query1))


                while($row=mysqli_fetch_assoc($query1))
                    {
                ?>
                 
    <?php if ($row['appointment_status']=="pending") :?>

      <tr>

     
      <td><?php echo   $row['request_date'] ?></td>
        <td><?php echo   $row['appointment_reason'] ?></td>
        <td><?php echo   $row['position'] ?></td>
        <td><div class="btn-group" role="group" aria-label="Basic example">
  <a  href="appointment_reject.php?appointment_id=<?php echo $row["appointment_id"];?>"  class="btn btn-danger">Reject</a>
  <a href="appointment_accept.php?appointment_id=<?php echo $row["appointment_id"];?>"  class="btn btn-success">Accept</a>
  
</div> 

</td>

<tr>
        
     
    <?php endif ?>
    
     
      <?php
     }
    ?>	
    </tbody>
  </table>
      </div>





