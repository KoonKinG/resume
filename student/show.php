<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table  class="table table-striped" border="1" cellpadding="0"  cellspacing="0" align="center">
                <thead>
                    <tr class="table-primary">
                        <th width="20%">วัน</th>
                        <th width="20%">สาขา</th>
                        <th width="20%">ชื่อวิชา</th>
                        <th width="20%">อาจารย์</th>
                        <th width="20%">ห้อง</th>
                        <th width="20%">เวลาเริ่ม</th>
                        <th width="10%">เวลาสิ้นสุด</th>
                    </tr>
                </thead>
                <?php
                echo '<font color="red">';   
                echo 'คำค้น = ';
                echo $_POST['major_name'];
                echo '</font>';
                echo '<br/>';     
                // เช็กค่าใน arr
                // $sql = "SELECT * FROM major WHERE major_name LIKE '%$major_name%' ";
                // $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                // foreach ($result as $row){
                //     // จาก ชื่อ โชว์ เป็น ไอดี
                //     $arraymajor[$row['major_name']] = $row['major_id'];
                   
            
                // }
                // $sql = "SELECT * FROM major, plan WHERE major_name = major_name LIKE '%$major_name%'";
                $term = $_GET['term'];
                $major_name = $_GET['major_name'];
                $sql = "SELECT * from major, plan  WHERE major.major_id=plan.major_id AND major_name LIKE '%$major_name%';";
               
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
                   
                   </table>
                  
                   <?php mysqli_close($conn); ?>
              </body></center>
              </html>
    </div>
</div>
</div>
    <!-- echo $row['status_s']; -->