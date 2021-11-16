<?php 
include('condb.php');


  $day_id = $_POST["day_id"];
  $time_s = $_POST["time_s"];
  $time_x = $_POST["time_x"];
  $major_id = $_POST["major_id"];
  $term = $_POST["term"];
  $tc_id = $_POST["tc_id"];
  $subject_id = $_POST["subject_id"];
  $room_id= $_POST["room_id"];
  $status_s= $_POST["status_s"];
  print_r($_POST);
  

  //ตรวจสอบว่ามีสมาชิกในฐานข้อมูลหรือไม่
  $check = "SELECT * FROM major_table WHERE day_id = '$day_id' AND time_s  BETWEEN $time_s AND $time_x";
  $result = mysqli_query($conn, $check) or die(mysqli_error($conn));
  $num1=mysqli_num_rows($result); 
  
    
  if($num1==0)   		
  {
  //ตรวจสอบถ้าไม่มีสมาชิกนี้ในฐานข้อมูลจะเด้งไปหน้าเพิ่มข้อมูลสมาชิก 
       echo "<script>";
 echo "alert('จัดตารางเสร็จสิ้น !!');";
 
       echo "</script>";
       //Insert to db	
  

}else{
  echo "<script>";
   echo "alert('ตารางนักศึกษาไม่ว่าง !!');";
  
//  echo "window.location='all2.php';";
  echo "</script>";
  

}


mysqli_close($conn);
?>

<!-- teacher table -------------------------------------------------------------------------------->

<?php 
include('condb.php');


$day_id = $_POST["day_id"];
$time_s = $_POST["time_s"];
$time_x = $_POST["time_x"];
$major_id = $_POST["major_id"];
$term = $_POST["term"];
$tc_id = $_POST["tc_id"];
$subject_id = $_POST["subject_id"];
$room_id= $_POST["room_id"];

  //ตรวจสอบว่ามีสมาชิกในฐานข้อมูลหรือไม่
  $check = "SELECT * FROM teacher_table WHERE day_id = '$day_id' AND time_s  BETWEEN $time_s AND $time_x";
  
  $result = mysqli_query($conn, $check) or die(mysqli_error($conn));
  $num2=mysqli_num_rows($result); 
  
    
  if($num2==0)   		
  {
  //ตรวจสอบถ้าไม่มีสมาชิกนี้ในฐานข้อมูลจะเด้งไปหน้าเพิ่มข้อมูลสมาชิก 
       echo "<script>";
 echo "alert('ไม่มีสมาชิกนี้ในฐานข้อมูล !');";
 
       echo "</script>";
       //Insert to db	
   

}else{
  echo "<script>";
  echo "alert('ตารางอาจารย์ไม่ว่าง !!');";
//  echo "window.location='all2.php';";
  echo "</script>";
  
  
	
}

mysqli_close($conn);
?>

<!-- room_table------------------------------------------------------------------------>

<?php 
include('condb.php');


$day_id = $_POST["day_id"];
$time_s = $_POST["time_s"];
$time_x = $_POST["time_x"];
$major_id = $_POST["major_id"];
$term = $_POST["term"];
$tc_id = $_POST["tc_id"];
$subject_id = $_POST["subject_id"];
$room_id= $_POST["room_id"];

  //ตรวจสอบว่ามีสมาชิกในฐานข้อมูลหรือไม่
  $check = "SELECT * FROM room_table WHERE day_id = '$day_id' AND time_s  BETWEEN $time_s AND $time_x";
  
  
  $result = mysqli_query($conn, $check) or die(mysqli_error($conn));
  $num3=mysqli_num_rows($result); 
  
  if($num1==0 && $num2==0 && $num3==0){

    $sql1 = "INSERT INTO major_table (day_id,time_s,time_x,major_id,term,tc_id,subject_id,room_id) VALUES ('$day_id','$time_s','$time_x','$major_id','$term','$tc_id','$subject_id','$room_id')";  
    $result = mysqli_query($conn, $sql1) or die(mysqli_error($conn));

    $sql2 = "INSERT INTO room_table (day_id,time_s,time_x,major_id,term,tc_id,subject_id,room_id) VALUES ('$day_id','$time_s','$time_x','$major_id','$term','$tc_id','$subject_id','$room_id')";   
    $result = mysqli_query($conn, $sql2) or die(mysqli_error($conn));

    $sql3 = "INSERT INTO teacher_table (day_id,time_s,time_x,major_id,term,tc_id,subject_id,room_id) VALUES ('$day_id','$time_s','$time_x','$major_id','$term','$tc_id','$subject_id','$room_id')";    
    $result = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    
    
    $room_id = $_POST["room_id"];
    $time_s = $_POST["time_s"];
    $time_x = $_POST["time_x"];
    $day_id = $_POST["day_id"];
    
    
  
    $sql = "UPDATE  plan SET 
    room_id='$room_id',
    time_s='$time_s',
    time_x='$time_x',
    day_id='$day_id',
    status_s=1 
    WHERE major_id = $major_id";
      
    
          
    
                  $result4 = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
      mysqli_close($conn);
  
        
        if($result4){
            echo 'Update Successfully';
        }else{
            echo 'Error !!';
        }
  }
    
  if($num3==0)   		
  {
  //ตรวจสอบถ้าไม่มีสมาชิกนี้ในฐานข้อมูลจะเด้งไปหน้าเพิ่มข้อมูลสมาชิก 
       echo "<script>";
 echo "alert('ไม่มีสมาชิกนี้ในฐานข้อมูล !');";
 
       echo "</script>";
       //Insert to db	
      

}else{
  echo "<script>";
   echo "alert('ตารางห้องเรียนไม่ว่าง !!');";
  
//  echo "window.location='all2.php';";
  echo "</script>";
  
  
	
}
?>



<!-- include "condb.php"?> -->




