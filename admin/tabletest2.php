<style>
		.mytable{
			table {
  	width: 100%;
				}
		}
		th, td {
  	padding: 15px;
  	text-align: left;
	  width: 7%;
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
 
<?php
  




	// $time_s =2;
  	// $time_x =5;
		$day = ["0","จันทร์","อังคาร","พุธ","พฤ","ศุกร์"];
	//$day_id= 1;

	include ('../condb.php');
?>
	<table width="100%" border="1">
		<tr>
			<td width="5%">วัน</td>
			<td width="7%">1  8.00-8.50</td><td>2 8.50-9.40</td><td>3 9.40-10.30</td><td>4 10.30-11.20</td><td>5 11.20-12.10</td><td>6 12.10-13.00</td><td>7 13.00-13.50</td><td>8 13.50-14.40</td>
			<td>9 14.40-15.30</td><td>10 15.30-16.20</td><td>11 16.20-17.10</td><td>12 17.10-18.00</td><td>13 18.00-18.50</td>
		</tr>
		<?php

		$submit = $_POST['submit'];
		if($submit != NULL){


		
		$major_name = $_POST['major_name'];
		
		 
		 
		for($i=1;$i<=5;$i++){ 
			$sql = "SELECT * 
			FROM major
			JOIN plan
			  ON major.major_id = plan.major_id
			JOIN subjects
			  ON plan.subject_id=subjects.subject_id 
			Where 
			major_name LIKE '%$major_name%' and day_id=$i;";
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
				while($row = mysqli_fetch_array($result)){
                    
                    
                	

				
		 		if($j>=$row['time_s'] and $j<=$row['time_x']){
					echo "<td bgcolor='red'> ";
					echo $row['subject_name'];
					
				}else{
					echo "<td>-</td>";
		 		 }
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
			
	