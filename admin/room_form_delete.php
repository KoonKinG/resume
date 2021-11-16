<?php
include("../condb.php");

	
    $room_id = $_GET['room_id'];
	//$nameTeacher = $_POST['nameTeacher'];
   
    
    //delete data
	$sql = "DELETE FROM  room WHERE room_id = $room_id";
				
                
	
	$result = mysqli_query($conn, $sql) or die("Error in sql : $sql".mysqli_error($sql)); 
	
	  mysqli_close($conn);

      
      if($result){
          echo 'Delete Successfully';
          header('Location: listadmin.php');
      }else{
          echo 'Error !!';
      }
?>