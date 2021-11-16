<?php
include("../condb.php");

	
    $tc_id = $_GET['tc_id'];
	//$nameTeacher = $_POST['nameTeacher'];
   
    
    //delete data
	$sql = "DELETE FROM  teacher WHERE tc_id = $tc_id";
				
                
	
	$result = mysqli_query($conn, $sql) or die("Error in sql : $sql".mysqli_error($sql)); 
	
	  mysqli_close($conn);

      
      if($result){
          echo 'Delete Successfully';
          header('Location: listadmin.php');
      }else{
          echo 'Error !!';
      }
?>