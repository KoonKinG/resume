<?php 
      
include('../condb.php');

 
  
?>
<?php
// ปิดการแสดง error
error_reporting(0);
?>


<!-- 
<form action="show_table.php" method="POST">

 ชื่อสาขา :  <input type="text" name="major_name" value="">

	<input type="submit" name="submit" value="ค้นหา">
 </form>  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOW TABLE Teacher</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>
<style>


b {
  font-size: 14px;
}
td {
  font-size: 13px;
}
</style>
<body>
    <!-- <nav class="navbar navbar-expand-md navbar-dark bg-dark"> -->
        <!-- <div class="container-fluid">
            <a class="navbar-brand" href="#">Cs</a> -->
        
            
          

                   
                    <!-- <li class="nav-item"> -->
                        <form action="show_room22.php" method="POST" target="iframe4">

                            ชื่อห้องเรียน : <input type="text" name="room_name" value="">

                            <input type="submit" name="submit" value="ค้นหา">
                        </form>
                    <!-- </li> -->

                
               
                

            </div>
        </div>
    <!-- </nav> -->
    <style>
    .mytable {
        table {
            width: 100%;
        }
    }

    th,
    td {
        padding: 15px;
        text-align: left;
        width: 6%;
    }
  
    </style>
      <!-- <style>
table, th, td {
  border: 1px solid black;
  width : 100px;
}
</style> -->
    <?php

if(isset($_POST['SubmitButton'])){ 
  $input = $_POST['inputText']; 
 
}    
?>


    <!--  

<form action="tabletest.php" method="POST">

majorname <input type="text" name="major_name" value="">

	<input type="submit" name="submit" value="ค้นหา">
 </form> -->
    <br>
   
                <b>
                    <div class="card-header text-white bg-dark">ตารางการใช้ห้อง</div>
                </b>
          

                <?php
  




	// $time_s =2;
  	// $time_x =5;
		$day = ["0","จันทร์","อังคาร","พุธ","พฤหัส","ศุกร์"]; 
	//$day_id= 1;

	include ('../condb.php');
?>
                <table width="100%" border="1">
                    <tr>
                        <td width="5%">วัน</td>
                        <td>8.00-8.50</td>
                        <td>8.50-9.40</td>
                        <td>9.40-10.30</td>
                        <td>10.30-11.20</td>
                        <td>11.20-12.10</td>
                        <td>12.10-13.00</td>
                        <td>13.00-13.50</td>
                        <td>13.50-14.40</td>
                        <td>14.40-15.30</td>
                        <td>15.30-16.20</td>
                        <td>16.20-17.10</td>
                        <td>17.10-18.00</td>
                        <td>18.00-18.50</td>
                    </tr>
                    <?php

		$submit = $_POST['submit'];
		if($submit != NULL){


		
		$room_name = $_POST['room_name'];
		
		 
		 
		for($i=1;$i<=5;$i++){ 
			$sql = "SELECT * 
			FROM room
			JOIN plan
			  ON plan.room_id = room.room_id
			JOIN subjects
			  ON plan.subject_id=subjects.subject_id 
            JOIN major
              ON plan.major_id = major.major_id
            JOIN teacher
              ON plan.tc_id = teacher.tc_id
			Where 
			room_name LIKE '%$room_name%' and day_id=$i;";
			$result = mysqli_query($conn,$sql) or die("Error in sql : $sql". mysqli_error($sql));
			
            
		
// ถ้ารู้ว่ามากี่เเถว เช่น 
				if($row = mysqli_fetch_array($result)) 
				{
					// echo  "วนแบบมีตาราเรียน<br>" ;  
					echo "<tr>$i";
					
		 	for($j=0;$j<=12;$j++)
			{
				if($j==0){
					echo "<td>$day[$i]</td>";
				}
				

				
            
		 		if($j>=$row['time_s']-1 and $j<=$row['time_x']-1){
                     if($j==$row['time_s']){
                        
                        $colx = $row['time_x']-$row['time_s'];
                        $colx++;
                    echo "<td colspan='$colx' bgcolor='black'>";
                    echo $row['subject_name']."-".$row['subjectcode']."-".$row['major_name']."-".$row['nameTeacher'];
                }elseif($j==$row['time_x']){
                    echo "</td>";
                }else{

                }
					//echo "<td bgcolor='black'>";
					
				}else{
					echo "<td>-</td>";
		 		}
				
			}
					
		 	echo "</tr>";
		}
				 else{
					echo "<tr>$i";
					for($j=0;$j<=12;$j++)
				{
					if($j==0){
							 echo "<td>$day[$i]</td>";
						}
						
							 echo "<td></td>";
						
					 }			
					echo "</tr>";
		

					}
				
			
			
				
				}
			}
		?>
                </table>