<?php
include("../condb.php");

	$room_name = $_POST['room_name'];
	$room_id = $_POST['room_id'];


    //update data
	$sql = "UPDATE  room SET 
    room_name='$room_name'
    WHERE room_id = $room_id";
				
                 
	
	$result = mysqli_query($conn, $sql) or die("Error in sql : $sql".mysqli_error($sql)); 
	
	  mysqli_close($conn);

      
      if($result){
          echo 'Update Successfully';
		header('Location: listadmin.php');
  	
      }else{
          echo 'Error !!';
      }
?>
