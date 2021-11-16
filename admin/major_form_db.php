<?php
include("../condb.php");

	$major_name = $_POST['major_name'];
	

	
	//เช็กซ้ำ
	$check = " SELECT major_name FROM major WHERE major_name = '$major_name'";
	$result = mysqli_query($conn, $check) or die(mysqli_error());
	$num=mysqli_num_rows($result);

	if($num > 0)
	{
	echo "<script>";
   echo "alert('ข้อมูลซ้ำ !!');";
  
 echo "window.location='major_form_add.php';";
  echo "</script>";
	}else{

	$sql = "INSERT INTO major (major_name)
						VALUES ('$major_name')";
	
	if (mysqli_query($conn, $sql)) {
		echo "<script>";
		echo "New record created successfully";
  
		header('Location: major_form.php');
  	echo "</script>";
	  } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	  }
	}
	  
	  mysqli_close($conn);
?>