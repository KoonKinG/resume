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
    <?php
    include 'condb.php';
    //id ที่ส่งมาเเก้ไข
            $subject_id = $_GET['subject_id'];
            $query = "SELECT * FROM subjects WHERE subject_id=$subject_id";
            $result = mysqli_query($conn,$query) or die("Error in sql : $query". mysqli_error($query));
            $row = mysqli_fetch_array($result);
    ?>
<center>
    <h1>เเก้ไขวิชา/ปรับปรุงข้อมูล</h1>
    <form action="sub_form_edit_db.php" method="post">
ID : <input type="number" name="subject_id"  value="<?php echo $row['subject_id'];?>"><br>     
ชื่อวิชา : <input type="text" name="subject_name" placeholder="Enter Subject" require value="<?php echo $row['subject_name'];?>"><br>
    
รหัสวิชา : <input type="text" name="subjectcode" placeholder="Enter Subject ID" require value="<?php echo $row['subjectcode'];?>"><br>

 ชื่ออาจารย์ : <input type="text" name="teacher_name" placeholder="Enter Name Teacher"><br>
    

<input type="submit" value="Add Subject"></center>
    </form>
</body>
</html>