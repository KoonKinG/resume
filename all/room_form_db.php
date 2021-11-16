<?php
include("condb.php");

	$room_name = $_POST['room_name'];
	

	
	//เช็กซ้ำ
	$check = " SELECT room_name FROM room WHERE room_name = '$room_name'";
	$result = mysqli_query($conn, $check) or die(mysqli_error());
	$num=mysqli_num_rows($result);

	if($num > 0)
	{
	echo "<script>";
   echo "alert('ข้อมูลซ้ำ !!');";
  
 echo "window.location='sub_form_add.php';";
  echo "</script>";
	}else{

	$sql = "INSERT INTO room (room_name)
						VALUES ('$room_name')";
	
	if (mysqli_query($conn, $sql)) {
		echo "<script>";
		echo "New record created successfully";
  
		header('Location: room_form.php');
  	echo "</script>";
	  } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	  }
	}
	  
	  mysqli_close($conn);
?>