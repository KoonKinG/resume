<?php 
include('condb.php');


  $day_id = 2;
  $time_s = 7;
  $time_x = 10;
  $major_id = 2;
  $tc_id = 1001;
  $subject_id = 50;
  $room_id= 1;
  $status_s= 1;
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
    
  
    // ต้องส่ง Id มาเพื่อ อัพเดท
  
    $sql = "UPDATE  plan SET room_id='$room_id',time_s='$time_s',time_x='$time_x',day_id='$day_id' WHERE ID = $ID";
      
    
          
    
                  $result4 = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
     
  
        
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




