<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room</title>
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
            $room_id = $_GET['room_id'];
            $query = "SELECT * FROM room WHERE room_id=$room_id";
            $result = mysqli_query($conn,$query) or die("Error in sql : $query". mysqli_error($query));
            $row = mysqli_fetch_array($result);
    ?>
<center>
    <h1>เเก้ไขห้องเรียน/ปรับปรุงข้อมูล</h1>
    <form action="room_form_edit_db.php" method="post">
ID : <input type="number" name="room_id"  value="<?php echo $row['room_id'];?>"><br>   
ห้อง : <input type="text" name="room_name" placeholder="Enter Room " require value="<?php echo $row['room_id'];?>"><br>
    

    

<input type="submit" value="Add Room"></center>
    </form>
</body>
</html>