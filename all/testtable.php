<?php
include ('condb.php');
$monSubj[1]="";
$monSubj[2]="";
$monSubj[3]="";
$monSubj[4]="";
$monSubj[5]="";
$monSubj[6]="";
$monSubj[7]="";
$monSubj[8]="";
$monSubj[9]="";
$monSubj[10]="";
$monSubj[11]="";
$monSubj[12]="";
$monSubj[13]="";

$tueSubj[1]="";
$tueSubj[2]="";
$tueSubj[3]="";
$tueSubj[4]="";
$tueSubj[5]="";
$tueSubj[6]="";
$tueSubj[7]=" ";
$tueSubj[8]=" ";
$tueSubj[9]=" ";
$tueSubj[10]=" ";
$tueSubj[11]="";
$tueSubj[12]="";
$tueSubj[13]="";

$wedSubj[1]="";
$wedSubj[2]="";
$wedSubj[3]="";
$wedSubj[4]="";
$wedSubj[5]="";
$wedSubj[6]="";
$wedSubj[7]=" ";
$wedSubj[8]=" ";
$wedSubj[9]=" ";
$wedSubj[10]=" ";
$wedSubj[11]="";
$wedSubj[12]="";
$wedSubj[13]="";

$thuSubj[1]="";
$thuSubj[2]="";
$thuSubj[3]="";
$thuSubj[4]="";
$thuSubj[5]="";
$thuSubj[6]="";
$thuSubj[7]=" ";
$thuSubj[8]=" ";
$thuSubj[9]=" ";
$thuSubj[10]=" ";
$thuSubj[11]="";
$thuSubj[12]="";
$thuSubj[13]="";

$friSubj[1]="";
$friSubj[2]="";
$friSubj[3]="";
$friSubj[4]="";
$friSubj[5]="";
$friSubj[6]="";
$friSubj[7]=" ";
$friSubj[8]=" ";
$friSubj[9]=" ";
$friSubj[10]=" ";
$friSubj[11]="";
$friSubj[12]="";
$friSubj[13]="";





$monTeach[1]="";
$monTeach[2]="";
$monTeach[3]="";
$monTeach[4]="";
$monTeach[5]="";
$monTeach[6]="";
$monTeach[7]=" ";
$monTeach[8]=" ";
$monTeach[9]=" ";
$monTeach[10]=" ";
$monTeach[11]="";
$monTeach[12]="";
$monTeach[13]="";

$tueTeach[1]="";
$tueTeach[2]="";
$tueTeach[3]="";
$tueTeach[4]="";
$tueTeach[5]="";
$tueTeach[6]="";
$tueTeach[7]="";
$tueTeach[8]="";
$tueTeach[9]="";
$tueTeach[10]="";
$tueTeach[11]="";
$tueTeach[12]="";
$tueTeach[13]="";

$wedTeach[1]="";
$wedTeach[2]="";
$wedTeach[3]="";
$wedTeach[4]="";
$wedTeach[5]="";
$wedTeach[6]="";
$wedTeach[7]="";
$wedTeach[8]="";
$wedTeach[9]="";
$wedTeach[10]="";
$wedTeach[11]="";
$wedTeach[12]="";
$wedTeach[13]="";

$thuTeach[1]="";
$thuTeach[2]="";
$thuTeach[3]="";
$thuTeach[4]="";
$thuTeach[5]="";
$thuTeach[6]="";
$thuTeach[7]="";
$thuTeach[8]="";
$thuTeach[9]="";
$thuTeach[10]="";
$thuTeach[11]="";
$thuTeach[12]="";
$thuTeach[13]="";



// การสุ่ม วิชามาไว้ในวันนนนนน เเต่ยังไม่ได้เช็กว่าวันเต็มรึยัง
    $sql = "SELECT * FROM plan  WHERE status_s = 0 ";
    
	$result = mysqli_query($conn, $sql) or die("Error in sql : $sql".mysqli_error($sql)); 
	foreach($result as $row){

       echo $row["subject_id"];
       $hour = $row["hr"];
        if(empty($monSubj[0])){
            for ($x = 0; $x <= $hour; $x++) {
                if(empty( $monSubj[$x])) {
             
                    $monSubj[$x]=$row["subject_id"];
        
                } else {
                 
                    echo "เช้าไม่ว่าง ";
                 
                }
        }


      }else{
        for ($x = 5; $x <= $hour+5; $x++) {
            if(empty( $monSubj[$x])) {
         
                $monSubj[$x]=$row["subject_id"];
    
            } else {
             
                echo "บ่ายไม่ว่าง ";
             
            }
    }
      }
// --------------------------------------------------

    }
  



?>
	<table width="100%" border="1">
		<tr>
			<td></td>
			<td>1  8:00-8:50</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td>
			<td>9</td><td>10</td><td>11</td><td>12</td><td>13</td>
		</tr>
		<?php
		for($i=1;$i<=5;$i++){
			echo "<tr><td>$i</td>";
			for($j=1;$j<=13;$j++){
				if($i==1){
					echo "<td>".$monSubj[$j]."<br>".$monTeach[$j]."</td>";
				}else{
					echo "<td>$j</td>";
				}
			}			
			echo "</tr>";
		}
		?>
	</table>
