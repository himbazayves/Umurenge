
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




$conn=mysqli_connect("localhost","root","","umurenge") or die($conn->error());

















if(isset($_POST['accept']))

{

	
	#$now=date("Y-m-d");
    #$title=$_POST['title'];
    #$content=$_POST['content'];
    #$summary=$_POST['summary'];
   

	
   


	
	$filename = $_FILES['attachment']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
	$extension = pathinfo($filename, PATHINFO_EXTENSION);
	
	$file = $_FILES['attachment']['tmp_name'];
	$size = $_FILES['attachment']['size'];

	if (!in_array($extension, ['zip', 'pdf', 'jpg','docx','png'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['attachment']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {

    $document_id = $_GET['document_id'];
    $status="accepted";
        
         
		   
		   
           //$qry = "INSERT INTO blog (blog_id,blog_picture,title,content,summary,blog_date) VALUES (NULL,'$filename','$title','$content','$summary','$now')";
           $qry = "UPDATE   document  SET attachment='$filename', document_status='$status' WHERE document_id = $document_id";
		   
		   
		   $res1 = mysqli_query($conn, $qry);
		   
            
        } 
        
        if( $res1 ){
            echo "<script>alert('document provided sucessful accepted ')</script>";
            echo"<script>location.href='leader_document.php';</script>";

        }
		else {
            echo "<script>alert('submittion not submitted try again')</script>";
        }
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

<div class="col-lg-2">
</div>
<div class="col-lg-8">

<h5> Provide document Here</h5>
   
<form action="#"   class="form-horizontal col-md-6 col-md-offset-3"  enctype="multipart/form-data" method="POST">









<input type="file" id="defaultLoginFormEmail" class="form-control "   name="attachment" required>

<center><input type="submit" class="btn btn-primary" name="accept" value="Provide document"><center>

</form>
</div>


<div class="col-lg-2">
</div>

</div>
</div>


        
        

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
</body>
</html>
