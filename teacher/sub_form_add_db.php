<?php
include("../condb.php");

	$subject_name = $_POST['subject_name'];
	$subjectcode = $_POST['subjectcode'];
	$teacher_name = $_POST['teacher_name'];


	//เช็กซ้ำ
	$check = " SELECT subject_name FROM subjects WHERE subject_name = '$subject_name'";
	$result = mysqli_query($conn, $check) or die(mysqli_error());
	$num=mysqli_num_rows($result);

	if($num > 0)
	{
	echo "<script>";
   echo "alert('ข้อมูลซ้ำ !!');";
  
 echo "window.location='sub_form_add.php';";
  echo "</script>";
	}else{


	$sql = "INSERT INTO subjects (subject_name, subjectcode,teacher_name)
						VALUES ('$subject_name','$subjectcode','$teacher_name')";
	
	if (mysqli_query($conn, $sql)) {
		echo "<script>";
		echo "New record created successfully";
  
		header('Location: sub_form_add.php');
  	echo "</script>";
		
		
	  } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	  }
	}
	  mysqli_close($conn);
?>