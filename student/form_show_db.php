<?php
include ('../condb.php');
$major_id = $_POST['major_id'];
            $sql = "SELECT * FROM plan WHERE major_id = major_id AND major_id = 'g1'";
               
                $result = mysqli_query($conn, $sql);
                foreach ($result as $row) { ?>
<tr>
    <td><?php 
                      
                      // echo $row['day_id'];
                      $day_id = $row['day_id'];
                      //echo $day_id;
                      $sql = "SELECT day_s FROM dayx WHERE day_id = $day_id";
                      $result2 = mysqli_query($conn,$sql) or die("Error in sql : $sql". mysqli_error($conn));
                      foreach ($result2 as $row2){
                          echo $row2['day_s'];
                      }
                      ?></td>

    <td><?php 
                      // echo $row['major_id'];
                      $major_id = $row['major_id'];
                      //echo $major_id;
                      $sql = "SELECT major_name FROM major WHERE major_id = $major_id";
                      $result2 = mysqli_query($conn,$sql) or die("Error in sql : $sql". mysqli_error($conn));
                      foreach ($result2 as $row2){
                          echo $row2['major_name'];
                      }
                      ?></td>
    <td><?php 
                      // echo $row['subject_id'];
                      $subject_id = $row['subject_id'];
                      //echo $subject_id;
                      $sql = "SELECT subject_name FROM subjects WHERE subject_id = $subject_id";
                      $result2 = mysqli_query($conn,$sql) or die("Error in sql : $sql". mysqli_error($conn));
                      foreach ($result2 as $row2){
                          echo $row2['subject_name'];
                      }
                      ?></td>


    <td><?php 
                      
                       
                      $tc_id = $row['tc_id'];
                     // echo $row['tc_id'];
                      $sql = "SELECT nameTeacher FROM teacher WHERE tc_id = $tc_id";
                      $result2 = mysqli_query($conn,$sql) or die("Error in sql : $sql". mysqli_error($conn));
                      foreach ($result2 as $row2){
                          echo $row2['nameTeacher'];
                      }
                      ?></td>
    <td><?php 
                     
              
                      $room_id = $row['room_id'];
                      $sql = "SELECT room_name FROM room WHERE room_id = $room_id";
                      $result2 = mysqli_query($conn,$sql) or die("Error in sql : $sql". mysqli_error($conn));
                      foreach ($result2 as $row2){
                          echo $row2['room_name'];
                      }
                      ?></td>
    <td><?php echo $row['time_s'];?></td>
    <td><?php echo $row['time_x'];?></td>




</tr>
<?php } ?>