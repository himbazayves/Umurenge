
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location:login.php");
	exit;
	



}

?>


<?php

if (isset($_POST['yes'])){
    $conn=mysqli_connect("localhost","root","","umurenge") or die($conn->error());
    $document_id = $_GET['document_id'];
    
	$status="rejected";  

$qry=$conn->query("UPDATE   document  SET document_status='$status' WHERE document_id = $document_id ");

	

if($qry)
{   echo "<script>alert('Document request rejected ')</script>";
	echo"<script>location.href='leader_document.php';</script>";

}
else
{
	echo "<script>alert('fail to reject please try again')</script>";
	
}


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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   


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
     <div class="container">

     <div class="row">
     <div class="col" >

     </div>

     <div class="col" >

       <form a method="POST">




<div class="alert alert-light" role="alert">
  
  <p>Are you sure you want to reject this document request?</p>
  <hr>
  <p class="mb-0"><div class="btn-group" role="group" aria-label="Basic example">
 
  <a href="leader_document.php" name="no"   class="btn btn-success">NO</a>

  <button name="yes" type="submit" class="btn btn-danger">Yes</button>
  
</div> </p>
</div>

       </form>


       </div>


       <div class="col" >


       </div>

       </div>

       </div>
      


        
        

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
</body>
</html>
