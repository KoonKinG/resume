<?php
include("../condb.php");

$nameTeacher = $_POST['nameTeacher'];
$tc_id = $_POST['tc_id'];


//update data
$sql = "UPDATE  teacher SET 
nameTeacher='$nameTeacher'
WHERE tc_id = $tc_id";
				
                 
	
	$result = mysqli_query($conn, $sql) or die("Error in sql : $sql".mysqli_error($sql)); 
	
	  mysqli_close($conn);

      
      if($result){
          echo 'Update Successfully';
		header('Location: listteacher.php');
  	
      }else{
          echo 'Error !!';
      }
?>



