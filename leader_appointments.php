
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


<?php

if (isset($_POST['reject'])){
    // Include config file
    #$applicant_id = $_GET['applicant_id'];
    
	#$status="active";  

#$qry=$conn->query("UPDATE  `women_grobal`.`applicant` SET applicant_status='$status' WHERE applicant_id=$applicant_id ");

	



   echo "<script>alert('applicant activated ')</script>";
	


}





?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Dashboard Template · Bootstrap</title>
    
    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <?php include 'leader_nav.php' ?>
</nav>
   

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="leader_dashboard.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a style="cursor: pointer;" class="nav-link"  data-toggle="modal" data-target="#myModal">
              <span data-feather="file"></span>
              Accepted
            </a>
          </li>


          <li class="nav-item">
            <a style="cursor: pointer;" class="nav-link"  data-toggle="modal" data-target="#rejected">
              <span data-feather="file"></span>
            Rejected
            </a>
          </li>
         

         
         
          
          
         
        </ul>

        
        
         
         
          
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">




    
    

<!-- Modal -->


    

<!-- Modal -->
<div style="width:100%" id="myModal" class="modal fade" role="dialog">
  <div style="width:100%" class="modal-dialog">

    <!-- Modal content-->
    <div style="width:800px" class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
      <div class="table-responsive">
        <table class="table table-striped table-sm table-bordered">
        <center> <h5 class="text-warning"> All Accepted Appointment </h5> </center>
                
    <thead>
      <tr>
      <th>Request Date</th>
      <th>Citizen</th>
       
       <th>Reason</th>
       
       <th>Apptmnt date</th>
      </tr>
    </thead>
    <tbody>


	
	<?php
include 'db.php';
$leader_id= $_SESSION['leaderId'];





$query1=mysqli_query($conn,"select * from appointment, citizen, leader where appointment.leader_id=leader.leader_id and appointment.leader_id=leader.leader_id and leader.leader_id=$leader_id") or die("selecting error");



                while($row=mysqli_fetch_assoc($query1))
                    {
                ?>
    <?php if ($row['appointment_status']=="accepted") :?>

      <tr>
      <td><?php echo   $row['request_date'] ?></td>

      <td>
        
        First name: <?php echo   $row['first_name'] ?> </br>
        Last name:  <?php echo   $row['last_name'] ?> </br>
        Cell: <?php echo   $row['cell'] ?> </br>
        Village:  <?php echo   $row['village'] ?> </br>
        Email:  <?php echo   $row['email'] ?> </br>


       
        
        

       
        
        
        </td>
        <td><?php echo   $row['appointment_reason'] ?></td>
        
        <td><?php echo   $row['appointment_date'] ?></td>
      </tr>
    <?php endif ?>
     
      <?php
     }
    ?>	
    </tbody>
  </table>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>







<div class="table-responsive">
        <table class="table table-striped table-sm table-bordered">
        <center> <h5 class="text-warning"> Pending Requested Appointments </h5> </center>
                
    <thead>
      <tr>
      <th>Request Date</th>
       
       
       
       <th>Citizen</th>
       <th>Reason</th>
       

       <th>Action</th>
      </tr>
    </thead>
    <tbody>


	
	<?php
include 'db.php';
$citizen_id= $_SESSION['leaderId'];


$pending="pending";


$query1=mysqli_query($conn,"select * from appointment, leader, citizen where leader.leader_id=$citizen_id and  appointment.leader_id=leader.leader_id and appointment.citizen_id=citizen.citizen_id ") or die("selecting error");
#while($row=mysqli_fetch_assoc($query1))


                while($row=mysqli_fetch_assoc($query1))
                    {
                ?>
                 
    <?php if ($row['appointment_status']=="pending") :?>

      <tr>

     
      <td><?php echo   $row['request_date'] ?></td>
        
       
        

        <td>
        
        First name: <?php echo   $row['first_name'] ?> </br>
        Last name:  <?php echo   $row['last_name'] ?> </br>
        Cell: <?php echo   $row['cell'] ?> </br>
        Village:  <?php echo   $row['village'] ?> </br>
        Email:  <?php echo   $row['email'] ?> </br>


       
        
        

       
        
        
        </td>

        <td><?php echo   $row['appointment_reason'] ?></td>
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








      <div id="accepted" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
      <div class="table-responsive">
        <table class="table table-striped table-sm table-bordered">
        <center> <h5 class="text-warning"> Accepted  appointment </h5> </center>
                
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
$citizen_id= $_SESSION['leaderId'];





$query1=mysqli_query($conn,"select * from appointment, leader, citizen where leader.leader_id=$citizen_id and  appointment.leader_id=leader.leader_id and appointment.citizen_id=citizen.citizen_id ") or die("selecting error");

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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




<div style="width:100%" id="rejected" class="modal fade" role="dialog">
  <div style="width:100%" class="modal-dialog">

    <!-- Modal content-->
    <div style="width:800px" class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
      <div class="table-responsive">
        <table class="table table-striped table-sm table-bordered">
        <center> <h5 class="text-warning"> All Rejected Appointments </h5> </center>
                
    <thead>
      <tr>
      <th>Request Date</th>
      <th>Citizen</th>
       
       <th>Reason</th>
       
      
      </tr>
    </thead>
    <tbody>


	
	<?php
include 'db.php';
$leader_id= $_SESSION['leaderId'];





$query1=mysqli_query($conn,"select * from appointment, leader, citizen where leader.leader_id=$citizen_id and  appointment.leader_id=leader.leader_id and appointment.citizen_id=citizen.citizen_id ") or die("selecting error");


                while($row=mysqli_fetch_assoc($query1))
                    {
                ?>
    <?php if ($row['appointment_status']=="rejected") :?>

      <tr>
      <td><?php echo   $row['request_date'] ?></td>

      <td>
        
        First name: <?php echo   $row['first_name'] ?> </br>
        Last name:  <?php echo   $row['last_name'] ?> </br>
        Cell: <?php echo   $row['cell'] ?> </br>
        Village:  <?php echo   $row['village'] ?> </br>
        Email:  <?php echo   $row['email'] ?> </br>


       
        
        

       
        
        
        </td>
        <td><?php echo   $row['appointment_reason'] ?></td>

        
      </tr>
    <?php endif ?>
     
      <?php
     }
    ?>	
    </tbody>
  </table>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
     

      


	
	

				
    </main>
  </div>
</div>

        
        

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
</body>
</html>
