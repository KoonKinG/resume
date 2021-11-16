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
    <title>List</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cs</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav w-100">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="admin.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="major_form.php">Add Major +</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="sub_form_add.php">Add Subject +</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="room_form.php">Add Room +</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="teacher_form.php">Add Teacher +</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="listadmin.php">List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="Schedule_form.php">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="plan_form.php">Plan</a>
                    </li>
                    <li class="nav-item">
                        <form action="show_table.php" method="POST">

                            ชื่อสาขา : <input type="text" name="major_name" value="">

                            <input type="submit" name="submit" value="ค้นหา">
                        </form>
                    </li>

                </ul>
                </li>
                </ul>

            </div>
        </div>
    </nav>
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
    <div class="container">
        <div class="row">
            <div class="col"></div>


            <div class="card text-center">
                <h3>
                    <div class="card-header text-white bg-dark">ตารางเรียน</div>
                </h3>
                <div class="card-body">

                </div>

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
                        <td>8.50 - 9.40</td>
                        <td>9.40-10.30</td>
                        <td>10.30-11.20</td>
                        <td>11.20-12.10</td>
                        <td>12.10 - 13.00</td>
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


		
		$major_name = $_POST['major_name'];
		
		 
		 
		for($i=1;$i<=5;$i++){ 
            // ใช้การ join ในการค้นหาข้อมูล 
			$sql = "SELECT * 
			FROM major
			JOIN plan
			  ON major.major_id = plan.major_id
			JOIN subjects
			  ON plan.subject_id=subjects.subject_id 
			Where 
            -- ค่าที่ส่งมา คือ major_name คำคล้าย  major_name 
			major_name LIKE '%$major_name%' and day_id=$i;";
			$result = mysqli_query($conn,$sql) or die("Error in sql : $sql". mysqli_error($sql));
			
		
// ถ้ารู้ว่ามากี่เเถว เช่น 
				if($row = mysqli_fetch_array($result)) 
				{
					// echo  "วนแบบมีตาราเรียน<br>" ;  
					echo "<tr>$i";
					//จำนวนคอลัม 
		 	for($j=0;$j<=12;$j++)
			{
				if($j==0){
					echo "<td>$day[$i]</td>";
				}
				

				// ไฮไลน์  จาก เวลาเริ่มต้น ถึง เวลาสิ้นสุด
		 		if($j>=$row['time_s']-1 and $j<=$row['time_x']-1){
                    //  ไฮไลน์สี
					echo "<td bgcolor='black'> "; 
                    // โชว์ 
					echo $row['subject_name'];
					echo "<br>";
					echo $row['subjectcode'];
					echo "<br>";
					$tc_id = $row['tc_id'];
                      $sql = "SELECT nameTeacher FROM teacher WHERE tc_id = $tc_id";
                      $result2 = mysqli_query($conn,$sql) or die("Error in sql : $sql". mysqli_error($conn));
                      foreach ($result2 as $row2){
                          echo $row2['nameTeacher'];
                      }
					echo "<br>";
					$room_id = $row['room_id'];
                      $sql = "SELECT room_name FROM room WHERE room_id = $room_id";
                      $result2 = mysqli_query($conn,$sql) or die("Error in sql : $sql". mysqli_error($conn));
                      foreach ($result2 as $row2){
                          echo $row2['room_name'];
                      }
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