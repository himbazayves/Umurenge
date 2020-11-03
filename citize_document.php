<?php




$conn=mysqli_connect("localhost","root","","umurenge") or die($conn->error());

















if(isset($_POST['submit']))

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
        
         
		   
		   
           //$qry = "INSERT INTO blog (blog_id,blog_picture,title,content,summary,blog_date) VALUES (NULL,'$filename','$title','$content','$summary','$now')";
           $qry = "INSERT INTO document (document_id,attachment) VALUES (NULL,'$filename')";
		   
		   
		   $res1 = mysqli_query($conn, $qry);
		   
            
        } 
        
        if( $res1 ){
            echo "<script>alert('submitted')</script>";

        }
		else {
            echo "<script>alert('submittion not submitted try again')</script>";
        }
    }
	
	





}

?>



<form action="#"   class="form-horizontal col-md-6 col-md-offset-3"  enctype="multipart/form-data" method="POST">










<input type="file" id="defaultLoginFormEmail" class="form-control "   name="attachment" required>

<input type="submit" class="btn btn-primary" name="submit" value="creat blog">

</form>
