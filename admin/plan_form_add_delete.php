<?php
include("../condb.php");

	
    $ID = $_GET['ID'];
	//$nameTeacher = $_POST['nameTeacher'];
   
    
    //delete data
	$sql = "DELETE FROM  plan WHERE ID = $ID";
				
                
	
	$result = mysqli_query($conn, $sql) or die("Error in sql : $sql".mysqli_error($sql)); 
	
	  mysqli_close($conn);

      
      if($result){
          echo 'Delete Successfully';
          header('Location: admin.php');
      }else{
          echo 'Error !!';
      }
?>