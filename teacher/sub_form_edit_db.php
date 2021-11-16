<?php
include("../condb.php");

	$subject_name = $_POST['subject_name'];
	$subjectcode = $_POST['subjectcode'];
    $teacher_name = $_POST['teacher_name'];
    $subject_id = $_POST['subject_id'];
	


    //update data
	$sql = "UPDATE  subjects SET 
    subject_name='$subject_name',
    subjectcode='$subjectcode',
    teacher_name='$teacher_name'
    
    WHERE subject_id = $subject_id";
				
                echo "$sql"; 
	
	$result = mysqli_query($conn, $sql) or die("Error in sql : $sql".mysqli_error($conn)); 
	
	  mysqli_close($conn);

      
      if($result){
          echo 'Update Successfully';
          header('Location: list.php');
      }else{
          echo 'Error !!';
      }
?>