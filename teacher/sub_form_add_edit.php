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
    <title>Subject</title>
    <style>
  body{
      width: 40;
      height: 5%;
      border: 1px;
      border-radius: 05px;
      padding: 8px 15px 8px 15px;
      margin: 10px 0px 15px 0px;
     
  }
      
    </style>
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
		<a class="nav-link" aria-current="page" href="listteacher.php">List</a>
        </li>
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
    <?php
    include '../condb.php';
    //id ที่ส่งมาเเก้ไข
            $subject_id = $_GET['subject_id'];
            $query = "SELECT * FROM subjects WHERE subject_id=$subject_id";
            $result = mysqli_query($conn,$query) or die("Error in sql : $query". mysqli_error($query));
            $row = mysqli_fetch_array($result);
    ?>
<center>

    <script language="javascript">

function fncSubmit()
{
    if(document.form1.subject_name.value == "")
    {
        alert("กรุณาใส่ชื่อวิชา");
        document.form1.subject_name.focus();
        return false;
    }

    if(document.form1.subjectcode.value == "")
    {
        alert("กรุณาใส่รหัสวิชา");
        document.form1.subjectcode.focus();
        return false;
    }

    if(document.form1.teacher_name.value == "")
    {
        alert("กรุณาใส่ชื่ออาจารย์");
        document.form1.teacher_name.focus();
        return false;
    }
    document.form1.submit();
}

</script>

	
    <h1>เเก้ไขวิชา/ปรับปรุงข้อมูล</h1>
    <form action="sub_form_edit_db.php" method="post"name="form1" onSubmit="Javascript:return fncSubmit();">
        
ID : <input type="number" name="subject_id"  value="<?php echo $row['subject_id'];?>"><br>     
ชื่อวิชา : <input type="text" name="subject_name" placeholder="Enter Subject" require value="<?php echo $row['subject_name'];?>"><br>
    
รหัสวิชา : <input type="text" name="subjectcode" placeholder="Enter Subject ID" require value="<?php echo $row['subjectcode'];?>"><br>

 ชื่ออาจารย์ : <input type="text" name="teacher_name" placeholder="Enter Name Teacher"><br>
    

<input type="submit" value="Add Subject"></center>
    </form>
</body>
</html>