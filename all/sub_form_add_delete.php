<?php
include("condb.php");

	
    $subject_id = $_GET['subject_id'];
	//$nameTeacher = $_POST['nameTeacher'];
   
    
    //delete data
	$sql = "DELETE FROM  subjects WHERE subject_id = $subject_id";
				
                
	
	$result = mysqli_query($conn, $sql) or die("Error in sql : $sql".mysqli_error($sql)); 
	
	  mysqli_close($conn);

      
      if($result){
          echo 'Delete Successfully';
          header('Location: list.php');
      }else{
          echo 'Error !!';
      }
?>