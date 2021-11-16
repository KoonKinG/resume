<?php session_start();
      
include('../condb.php');

  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='admin'){
    Header("Location: ../logout.php");  
  }
  
  
?>
<style>
  footer {
    background: #333;
    margin-top: 60px;
    padding: 20px;
    text-align: center;
    color: #fff;
}
footer p {
    margin: 0;
}
</style>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cs</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav w-100">

      <li class="nav-item">
          <a class="nav-link" aria-current="page" href="admin.php">Home</a>
        </li>
        
        <li class="nav-item">
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
		<a class="nav-link" aria-current="page" href="listadmin.php">List</a>
        </li>
		<li class="nav-item">
		<a class="nav-link" aria-current="page" href="head.php">Schedule</a>
        </li>
		<li class="nav-item">
		<a class="nav-link" aria-current="page" href="plan_form.php">Plan</a>
        </li>

        <li class="nav-item">
		<a class="nav-link" aria-current="page" href="show_table.php">Search</a>
        </li>

        <li class="nav-item dropdown ml-auto">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['name'];?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item">
            สถานะ | <?php echo $_SESSION['level'];?>
            </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
            
          </ul>
        </li>
      </ul>
      
    </div>
  </div>
</nav>



<div>
<br>
	<form action="../logout.php" class="form-inline my-2 my-lg-0">
 
	<center><h1 class="Secondary">Welcome to the website class schedule</h1></center>
  <br>
	
	
  <!-- <button class="secondary" type="submit" style="float: right; ">LOGOUT</button> -->
<!-- </nav>
	<nav class="navbar navbar-dark bg-dark">
	<a href="teacher.php" class="btn btn-outline-primary" aria-current="page">HomePage</a>
	<a href="major_form.php" class="btn btn-outline-primary" aria-current="page">Add Major +</a>
	<a href="sub_form_add.php" class="btn btn-outline-primary" aria-current="page">Add Subject +</a>
	<a href="room_form.php" class="btn btn-outline-primary" aria-current="page">Add Room +</a>
	<a href="teacher_form.php" class="btn btn-outline-primary" aria-current="page">Add Teacher +</a>
	<a href="listteacher.php" class="btn btn-outline-primary" aria-current="page">List</a>
	<a href="Schedule_form.php" class="btn btn-outline-primary" aria-current="page">Schedule</a>
	<a href="plan_form.php" class="btn btn-outline-primary" aria-current="page">Plan</a>
	<input type="submit" class="btn btn-danger"  value="ออกจากระบบ">
</nav> -->
	</form>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <center>
  <table class="table table-striped table-hover ">
  
  

  <thead>
    <tr>
      
    <th>วัน</th>
      <th>ชื่อสาขา</th>
      <th>ชื่อวิชา</th>
      <th>ปีการศึกษา</th>
      <th>ชื่ออาจารย์</th>
      <th>ชื่อห้อง</th>
      <th>เวลาเริ่ม (คาบ)</th>
      <th>เวลาสิ้นสุด (คาบ)</th>
      <th>Action</th>
      

    </tr>
  </thead>
  <tbody>
      <!-- ทำให้ id เป็น string -->
    <?php
    include '../condb.php';

    $sql = "SELECT * FROM plan";
    $result = mysqli_query($conn,$sql) or die("Error in sql : $sql". mysqli_error($conn));

      foreach ($result as $row) { ?>
      <tr>
        


      <td><?php 
        
        // echo $row['day_id'];
        $day_id = $row['day_id'];
        $sql = "SELECT day_s FROM dayx WHERE day_id = $day_id";
        $result2 = mysqli_query($conn,$sql) or die("Error in sql : $sql". mysqli_error($conn));
        foreach ($result2 as $row2){
            echo $row2['day_s'];
        }
        ?>

        <td><?php 
        // echo $row['major_id'];
        $major_id = $row['major_id'];
        $sql = "SELECT major_name FROM major WHERE major_id = $major_id";
        $result2 = mysqli_query($conn,$sql) or die("Error in sql : $sql". mysqli_error($conn));
        foreach ($result2 as $row2){
            echo $row2['major_name'];
        }
        ?></td>
        <td><?php 
        // echo $row['subject_id'];
        $subject_id = $row['subject_id'];
        $sql = "SELECT subject_name FROM subjects WHERE subject_id = $subject_id";
        $result2 = mysqli_query($conn,$sql) or die("Error in sql : $sql". mysqli_error($conn));
        foreach ($result2 as $row2){
            echo $row2['subject_name'];
        }
        ?></td>
        <td><?php echo $row['term'];?></td>


        <td><?php 
        
        // echo $row['tc_id'];
        $tc_id = $row['tc_id'];
        $sql = "SELECT nameTeacher FROM teacher WHERE tc_id = $tc_id";
        $result2 = mysqli_query($conn,$sql) or die("Error in sql : $sql". mysqli_error($conn));
        foreach ($result2 as $row2){
            echo $row2['nameTeacher'];
        }
        ?></td>
        <td><?php 
        //  echo $row['$room_id'];

        $room_id = $row['room_id'];
       
        $sql = "SELECT room_name FROM room WHERE room_id = $room_id";
        $result2 = mysqli_query($conn,$sql) or die("Error in sql : $sql". mysqli_error($conn));
        foreach ($result2 as $row2){
            echo $row2['room_name'];
        }
        ?></td>
        <td><?php echo $row['time_s'];?></td>
        <td><?php echo $row['time_x'];?></td>
        
        <!-- </td>
        <td> echo $row['status_s'];?></td> -->

       
        <td>
          <a href="plan_form_add_delete.php?ID=<?php echo $row['ID'];?>" class="btn btn-danger" onclick="return confirm('ยืนยันการลบข้อมูล');">Delete</a>
        </td>
        
      </tr>
     
     <?php } ?>
     </tbody>
     </table>
    
     <?php mysqli_close($conn); ?>
</body></center>
<footer>
        <p>Copyright ©2021 schedule by:</p>
                      <strong class="text-warning">Jakrapob Thammatho</strong>
        
    </footer>
</html>


