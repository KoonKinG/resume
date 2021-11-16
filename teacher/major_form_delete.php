<?php
include("../condb.php");

	
    $major_id = $_GET['major_id'];
	
   
    
    //delete data
	$sql = "DELETE FROM  major WHERE major_id = $major_id";
				
                
	
	$result = mysqli_query($conn, $sql) or die("Error in sql : $sql".mysqli_error($sql)); 
	
	  mysqli_close($conn);

      
      if($result){
          echo 'Delete Successfully';
          header('Location: listteacher.php');
      }else{
          echo 'Error !!';
      }
?>