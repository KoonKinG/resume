<?php session_start(); 
include('condb.php');

  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='admin'){
    Header("Location: ../logout.php");  
  }  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<div>
	<form action="logout.php">
	<h1>Home Page</h1>
	<?php echo $name; ?> สถานะ <?php echo $level; ?> </h3><br>
   	<a href="sub_form_add.php"class="link-dark">Add Subject +</a><br>
	<a href="room_form.php"class="link-dark">Add Room +</a><br>
	<a href="teacher_form.php"class="link-dark">Add Teacher +</a><br>
	<a href="listadmin.php"class="link-dark">List</a><br>
	<a href="all2.php"class="link-dark">Schedule</a><br>

	<input type="submit" value="ออกจากระบบ">
	</form>
</body>
</html>