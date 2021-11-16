<?php
include("../condb.php");
    $major_id = $_POST['major_id'];
    $subject_id = $_POST['subject_id'];
    $term = $_POST['term'];
    $tc_id = $_POST['tc_id'];
	
	

	
	//เช็กซ้ำ
	// $check = " SELECT subject_id FROM subjects WHERE subject_id = '$subject_id'";
	// $result = mysqli_query($conn, $check) or die(mysqli_error());
	// $num=mysqli_num_rows($result);

// 	if($num > 0)
// 	{
// 	echo "<script>";
//    echo "alert('ข้อมูลซ้ำ !!');";
  
//  echo "window.location='plan_form.php';";
//   echo "</script>";
// 	}else{

	$sql = "INSERT INTO plan (major_id,subject_id,term,tc_id)
						VALUES ('$major_id','$subject_id','$term','$tc_id')";
	
	if (mysqli_query($conn, $sql)) {
		echo "<script>";
		echo "New record created successfully";
  
		header('Location: plan_form.php');
  	echo "</script>";
	  } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	  }
	
	  
	  mysqli_close($conn);
?>