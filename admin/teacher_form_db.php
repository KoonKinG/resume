

<?php
include("../condb.php");


	$nameTeacher = $_POST['nameTeacher'];
	

	$sql = "INSERT INTO teacher (nameTeacher)
						VALUES ('$nameTeacher')";
	
	if (mysqli_query($conn, $sql)) {
		echo "<script>";
		echo "New record created successfully";
  
		header('Location: teacher_form.php');
  	echo "</script>";
	  } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	  }
	  
	  mysqli_close($conn);
?>
