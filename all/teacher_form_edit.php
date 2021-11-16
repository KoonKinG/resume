<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techer</title>
    
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
            $tc_id = $_GET['tc_id'];
            $query = "SELECT * FROM teacher WHERE tc_id=$tc_id";
            $result = mysqli_query($conn,$query) or die("Error in sql : $query". mysqli_error($query));
            $row = mysqli_fetch_array($result);
    ?>
<center>
    <h1>เเก้ไขห้องเรียน/ปรับปรุงข้อมูล</h1>
    <form action="teacher_form_edit_db.php" method="post">
ID : <input type="number" name="tc_id"  value="<?php echo $row['tc_id'];?>"><br>   
ชื่ออาจารย์ : <input type="text" name="nameTeacher" placeholder="Enter name Teacher" require value="<?php echo $row['nameTeacher'];?>"><br>
    

    

<input type="submit" value="Add Room"></center>
    </form>
</body>
</html>