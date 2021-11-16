<?php session_start();
      
include('../condb.php');

  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='teacher'){
    Header("Location: ../logout.php");  
  }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="teacher.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <!-- <li class="nav-item">
          <a class="nav-link" aria-current="page" href="major_form.php">Add Major +</a>
        </li>
        <li class="nav-item">
		<a class="nav-link" aria-current="page" href="sub_form_add.php">Add Subject +</a>
        </li>
        <li class="nav-item">
		<a class="nav-link" aria-current="page" href="room_form.php">Add Room +</a>
        </li>
        <li class="nav-item">
		<a class="nav-link" aria-current="page" href="teacher_form.php">Add Teacher +</a>
        </li>
		<li class="nav-item">
		<a class="nav-link" aria-current="page" href="listteacher.php">List</a>
        </li> -->
		<li class="nav-item">
		<a class="nav-link" aria-current="page" href="Schedule_form.php">Schedule</a>
        </li>
		<li class="nav-item">
		<a class="nav-link" aria-current="page" href="plan_form.php">Plan</a>
        </li>
		
      </ul>
    </div>
  </div>
  </nav>
	
  <!--  Major-->
  <center>
  <table class="table table-striped table-hover">
  
  <h2>List Major</h2>

  <thead>
    <tr>
      
      <th>Major_id</th>
      <th>Major_name</th>
      <th>Action</th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
    include '../condb.php';
      $query = "SELECT * FROM major";
      $result = mysqli_query($conn,$query) or die("Error in sql : $query". mysqli_error($query));

      foreach ($result as $row) { ?>
      <tr>
        
        <td><?php echo $row['major_id'];?></td>
        <td><?php echo $row['major_name'];?></td>
      

        <td>
          <a href="major_form_edit.php?major_id=<?php echo $row['major_id'];?>">Edit</a>
        </td>
        <td>
          <a href="major_form_delete.php?major_id=<?php echo $row['major_id'];?>" class="link-danger" onclick="return confirm('ยืนยันการลบข้อมูล');">Delete</a>
        </td>
      </tr>
     <?php } ?>
  </tbody>
</table>

<body>
  <!--  subject-->
  <center>
  <table class="table table-striped table-hover">
  
  <h2>List Subject</h2>

  <thead>
    <tr>
      
      <th>subject_id</th>
      <th>subject_name</th>
      <th>subjectcode</th>
      <th>Teacher_name</th>
      <th>Action</th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
    include '../condb.php';
      $query = "SELECT * FROM subjects";
      $result = mysqli_query($conn,$query) or die("Error in sql : $query". mysqli_error($query));

      foreach ($result as $row) { ?>
      <tr>
        
        <td><?php echo $row['subject_id'];?></td>
        <td><?php echo $row['subject_name'];?></td>
        <td><?php echo $row['subjectcode'];?></td>
        <td><?php echo $row['teacher_name'];?></td>

        <td>
          <a href="sub_form_add_edit.php?subject_id=<?php echo $row['subject_id'];?>">Edit</a>
        </td>
        <td>
          <a href="sub_form_add_delete.php?subject_id=<?php echo $row['subject_id'];?>" class="link-danger" onclick="return confirm('ยืนยันการลบข้อมูล');">Delete</a>
        </td>
      </tr>
     <?php } ?>
  </tbody>
</table>
  <!-- Room -->
  <body>
  <center>
  <table class="table table-striped table-hover">
    
  <h2>List Room</h2>
  
  <thead>
    <tr>
      
      <th>Room Id</th>
      <th>Room Name</th>
      <th>Action</th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
    include '../condb.php';
      $query = "SELECT * FROM room";
      $result = mysqli_query($conn,$query) or die("Error in sql : $query". mysqli_error($query));

      foreach ($result as $row) { ?>
      <tr>
        
        <td><?php echo $row['room_id'];?></td>
        <td><?php echo $row['room_name'];?></td>
        

        <td>
          <a href="room_form_edit.php?room_id=<?php echo $row['room_id'];?>">Edit</a>
        </td>
        <td>
          <a href="room_form_delete.php?room_id=<?php echo $row['room_id'];?>" class="link-danger" onclick="return confirm('ยืนยันการลบข้อมูล');">Delete</a>
        </td>
      </tr>
     <?php } ?>
  </tbody>
  
</table>



  <?php mysqli_close($conn); ?>
</body></center>
</html>
<!-- teacher---------------------------------------- -->

<body>
  <center>
  <table class="table table-striped table-hover">
    
  <h2>List Teacher</h2>
  
  <thead>
    <tr>
      
      <th>tc_id</th>
      <th>Name_teacher</th>
      <th>Action</th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
    include '../condb.php';
      $query = "SELECT * FROM teacher";
      $result = mysqli_query($conn,$query) or die("Error in sql : $query". mysqli_error($query));

      foreach ($result as $row) { ?>
      <tr>

        <td><?php echo $row['tc_id'];?></td>
        <td><?php echo $row['nameTeacher'];?></td>
        

        <td>
          <a href="teacher_form_edit.php?tc_id=<?php echo $row['tc_id'];?>">Edit</a>
        </td>
        <td>
          <a href="teacher_form_delete.php?tc_id=<?php echo $row['tc_id'];?>" class="link-danger" onclick="return confirm('ยืนยันการลบข้อมูล');">Delete</a>
        </td>
      </tr>
     <?php } ?>
  </tbody>
  
</table>



  <?php mysqli_close($conn); ?>
</body></center>
</html>
