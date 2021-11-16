<?php
include("../condb.php");

	$major_name = $_POST['major_name'];
	$major_id = $_POST['major_id'];


    //update data
	$sql = "UPDATE  major SET 
    major_name='$major_name'
    WHERE major_id = $major_id";
				
                 
	
	$result = mysqli_query($conn, $sql) or die("Error in sql : $sql".mysqli_error($sql)); 
	
	  mysqli_close($conn);

      
      if($result){
          echo 'Update Successfully';
		header('Location: listadmin.php');
  	
      }else{
          echo 'Error !!';
      }
?>
