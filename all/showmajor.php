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
  <table class="table table-striped table-hover">
  
  <h2>List Subject</h2>

  <thead>
    <tr>
      
      <th>ชื่อสาขา</th>
      <th>ชื่อวิชา</th>
      <th>ปีการศึกษา</th>
      <th>ชื่ออาจารย์</th>
      <th>ชื่อห้อง</th>
      <th>เวลาเริ่ม</th>
      <th>เวลาสิ้นสุด</th>
      <th>วัน</th>

    </tr>
  </thead>
  <tbody>
      <!-- ทำให้ id เป็น string -->
    <?php
    include 'condb.php';

    $sql = "SELECT * FROM plan";
    $result = mysqli_query($conn,$sql) or die("Error in sql : $sql". mysqli_error($conn));

      foreach ($result as $row) { ?>
      <tr>
        
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
        <td><?php 
        
        // echo $row['day_id'];
        $tc_id = $row['day_id'];
        $sql = "SELECT room_name FROM dayx WHERE day_id = $day_id";
        $result2 = mysqli_query($conn,$sql) or die("Error in sql : $sql". mysqli_error($conn));
        foreach ($result2 as $row2){
            echo $row2['day_s'];
        }
        ?></td>
        <td><?php echo $row['status_s'];?></td>

        
      </tr>
     <?php } ?>
     </tbody>
     </table>
    
     <?php mysqli_close($conn); ?>
</body></center>
</html>
<!-- day_id,status_s FROM plan WHERE subject_id IN ( SELECT * FROM major WHERE subject_id = subject_id) -->