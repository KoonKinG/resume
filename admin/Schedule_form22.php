<!-- Required meta tags -->
<?php session_start();
      
include('../condb.php');

  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='admin'){
    Header("Location: ../logout.php");  
  }  
?>
<!-- 
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   -->
   <link href="../css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script></head>
  
<!-- <div class="container">
    <div class="row justify-content-md-center">
    <div class="col-sm-4"> -->
    <center><h1>หน้าจัดตารางเรียน</h1><center>


    <form action="Schedule_db.php" method="post" target="iframe1">
  
    <?php
  include("../condb.php");
  // เลือก                               เรียงโดยใช้ day_id  จาก น้อยไปมาก จาก 0-6 
$query = "SELECT day_id,day_s FROM dayx ORDER BY day_id DESC LIMIT  0,6";
$result = mysqli_query($conn, $query) or die(mysqli_error()."[".$query."]");
?>
  <!-- เลือกจาก ค่า day_id -->
<select name="day_id">
    <option value=""  disabled selected>Select Day</option>
    <?php   
    while ($row = mysqli_fetch_array($result)) {
      // เเปลงจาก day_id เป็น สตริง
        echo "<option value='" . $row['day_id'] . "'>'" . $row['day_s'] . "'</option>";
    }
    ?>        
</select>
    
  <!-- <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">วัน:</label>
    <input type="text" name="day_s" readonly class="form-control-plaintext"value="วัน :">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">วัน</label>
    <input type="text" class="form-control" name="day_s" placeholder="วัน">
  </div> -->

  <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">เวลาเริ่ม:</label>
    <input type="text" name="time_s" readonly class="form-control-plaintext" min="0"value="เวลาเริ่ม :">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">เวลาเริ่ม</label>
    <input type="text" class="form-control" name="time_s" placeholder="คาบเรียน">
  </div>

  <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">เวลาสิ้นสุด:</label>
    <input type="text" name="time_x" readonly class="form-control-plaintext" min="0"value="เวลาสิ้นสุด :">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">เวลาสิ้นสุด</label>
    <input type="text" class="form-control" name="time_x" placeholder="คาบเรียน">
  </div>


  <?php
  include("../condb.php");

$query = "SELECT major_id,major_name FROM major ORDER BY major_id DESC LIMIT  0,16";
$result = mysqli_query($conn, $query) or die(mysqli_error()."[".$query."]");
?>

<select name="major_id">
<option value="" disabled selected>- select major -</option>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['major_id'] . "'>'" . $row['major_name'] . "'</option>";
    }
    ?>        
</select>

<!--   
  <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">หมู่เรียน:</label>
    <input type="text" name="major" readonly class="form-control-plaintext" value="หมู่เรียน :">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">หมู่เรียน</label>
    <input type="text" class="form-control" name="major" placeholder="หมู่เรียน">
  </div> -->

  <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">ภาคเรียน:</label>
    <input type="text" name="term" readonly class="form-control-plaintext" value="ภาคเรียน :">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">ภาคเรียน</label>
    <input type="text" class="form-control" name="term" placeholder="1/2564">
  </div>
  <!-- ------------------------------------------------------------------------------- -->
  <?php
  include("../condb.php");

$query = "SELECT tc_id,nameTeacher FROM teacher ORDER BY tc_id DESC LIMIT  0,16";
$result = mysqli_query($conn, $query) or die(mysqli_error()."[".$query."]");
?>

<select name="tc_id">
    <option value="" disabled selected>Select Teacher</option>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['tc_id'] . "'>'" . $row['nameTeacher'] . "'</option>";
    }
    ?>        
</select>

  <!-- <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">อาจารย์:</label>
    <input type="text" name="tc" readonly class="form-control-plaintext" value="อาจารย์ :">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">อาจารย์</label>
    <input type="text" class="form-control" name="tc" placeholder="อาจารย์">
  </div>  -->
  <!-- --------------------------------------------------------------------------------- -->
  <?php
  include("../condb.php");

$query = "SELECT * FROM subjects ORDER BY subject_id DESC LIMIT  0,16";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn)."[".$query."]");
?>

<select name="subject_id">
    <option value="" disabled selected>Select Subject</option>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['subject_id'] . "'>'" . $row['subjectcode'] . "'</option>";
    }
    ?>        
</select>
  <!-- <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">รหัสวิชา:</label>
    <input type="text" name="subjectcode" readonly class="form-control-plaintext" value="รหัสวิชา :">
  </div>
   <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">รหัสวิชา</label>
    <input type="text" class="form-control" name="subjectcode" placeholder="T101">
  </div> -->
<!-- ------------------------------------------------------------------------------- -->
  <?php
  include("../condb.php");

$query = "SELECT room_id,room_name FROM room ORDER BY room_id DESC LIMIT  0,16";
$result = mysqli_query($conn, $query) or die(mysqli_error()."[".$query."]");
?>

<select name="room_id">
    <option value="" disabled selected>Select Room</option>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['room_id'] . "'>'" . $row['room_name'] . "'</option>";
    }
    ?>        
</select>
  <!-- <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">ห้องเรียน:</label>
    <input type="text" name="room" readonly class="form-control-plaintext" value="ห้องเรียน :">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">ห้องเรียน</label>
    <input type="text" class="form-control" name="room_id" placeholder="ห้องเรียน">
  </div> -->
<!-- ----------------------------------------------------------------------------------- -->

  
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Submit</button>
  </div>


  <footer>
        <p>Copyright ©2021 schedule by:</p>
                      <strong class="text-warning">Jakrapob Thammatho</strong>
        
    </footer>
</form>