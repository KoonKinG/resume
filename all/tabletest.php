<?php
$monSubj[1]="";
$monSubj[2]="";
$monSubj[3]="";
$monSubj[4]="";
$monSubj[5]="";
$monSubj[6]="";
$monSubj[7]="COS4102 ";
$monSubj[8]="COS4102 ";
$monSubj[9]="COS4102 ";
$monSubj[10]="COS4102 ";
$monSubj[11]="";
$monSubj[12]="";
$monSubj[13]="";

$tueSubj[1]="";
$tueSubj[2]="";
$tueSubj[3]="";
$tueSubj[4]="";
$tueSubj[5]="";
$tueSubj[6]="";
$tueSubj[7]="COS4101 ";
$tueSubj[8]="COS4101 ";
$tueSubj[9]="COS4101 ";
$tueSubj[10]="COS4101 ";
$tueSubj[11]="";
$tueSubj[12]="";
$tueSubj[13]="";

$wedSubj[1]="";
$wedSubj[2]="";
$wedSubj[3]="";
$wedSubj[4]="";
$wedSubj[5]="";
$wedSubj[6]="";
$wedSubj[7]="COS4102 ";
$wedSubj[8]="COS4102 ";
$wedSubj[9]="COS4102 ";
$wedSubj[10]="COS4102 ";
$wedSubj[11]="";
$wedSubj[12]="";
$wedSubj[13]="";

$thuSubj[1]="";
$thuSubj[2]="";
$thuSubj[3]="";
$thuSubj[4]="";
$thuSubj[5]="";
$thuSubj[6]="";
$thuSubj[7]="COS4102 ";
$thuSubj[8]="COS4102 ";
$thuSubj[9]="COS4102 ";
$thuSubj[10]="COS4102 ";
$thuSubj[11]="";
$thuSubj[12]="";
$thuSubj[13]="";

$friSubj[1]="";
$friSubj[2]="";
$friSubj[3]="";
$friSubj[4]="";
$friSubj[5]="";
$friSubj[6]="";
$friSubj[7]="COS4102 ";
$friSubj[8]="COS4102 ";
$friSubj[9]="COS4102 ";
$friSubj[10]="COS4102 ";
$friSubj[11]="";
$friSubj[12]="";
$friSubj[13]="";





$monTeach[1]="";
$monTeach[2]="";
$monTeach[3]="";
$monTeach[4]="";
$monTeach[5]="";
$monTeach[6]="";
$monTeach[7]="ประหยัด ";
$monTeach[8]="ประหยัด ";
$monTeach[9]="ประหยัด ";
$monTeach[10]="ประหยัด ";
$monTeach[11]="";
$monTeach[12]="";
$monTeach[13]="";

$tueTeach[1]="";
$tueTeach[2]="";
$tueTeach[3]="";
$tueTeach[4]="";
$tueTeach[5]="";
$tueTeach[6]="";
$tueTeach[7]="ณัฐธิดา";
$tueTeach[8]="ณัฐธิดา";
$tueTeach[9]="ณัฐธิดา";
$tueTeach[10]="ณัฐธิดา";
$tueTeach[11]="";
$tueTeach[12]="";
$tueTeach[13]="";

$wedTeach[1]="";
$wedTeach[2]="";
$wedTeach[3]="";
$wedTeach[4]="";
$wedTeach[5]="";
$wedTeach[6]="";
$wedTeach[7]="ณัฐธิดา";
$wedTeach[8]="ณัฐธิดา";
$wedTeach[9]="ณัฐธิดา";
$wedTeach[10]="ณัฐธิดา";
$wedTeach[11]="";
$wedTeach[12]="";
$wedTeach[13]="";

$thuTeach[1]="";
$thuTeach[2]="";
$thuTeach[3]="";
$thuTeach[4]="";
$thuTeach[5]="";
$thuTeach[6]="";
$thuTeach[7]="ณัฐธิดา";
$thuTeach[8]="ณัฐธิดา";
$thuTeach[9]="ณัฐธิดา";
$thuTeach[10]="ณัฐธิดา";
$thuTeach[11]="";
$thuTeach[12]="";
$thuTeach[13]="";



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
