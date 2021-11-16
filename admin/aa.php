<?php include "condb.php"?>
<?php


    for($i = 1;$i <= 13;$i++){
        $monday[$i]="";
        $tueday[$i]="";
        $wedday[$i]="";
        $thuday[$i]="";
        $friday[$i]="";

       
    
    }
    



    $sql = "SELECT * FROM table_a";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
      if($row["day_s"]=="mon"){
        $t = $row["time_s"];
        $monday[$t] = "x";
      }
      if($row["day_s"]=="tue"){
        $t = $row["time_s"];
        $tueday[$t] = "X";
      }
      if($row["day_s"]=="wed"){
          $t = $row["time_s"];
          $wedday[$t]= "X";
      }
      if($row["day_s"]=="thu"){
          $t = $row["time_s"];
          $thuday[$t]="X";
      }
      if($row["day_s"]=="fri"){
        $t = $row["time_s"];
        $friday[$t]="X";
      }
      
    echo "id: " . $row["id"]. " - time: " . $row["time_s"]. " " . $row["day_s"]. "<br>";
  } 
  

} else {

  echo "0 results";

}

mysqli_close($conn);
?>

<table  width="100%" border="1">
<tr>
        <!-- <td>1  8:00-8:50</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td>
			<td>9</td><td>10</td><td>11</td><td>12</td><td>13</td> -->

			<td>mon</td>
           
            <?php
           
                for($k=1;$k<=13;$k++){
                    echo "<td>";
                    echo "$monday[$k]";
                    echo "</td>";
                }
            ?>
			<!-- <td>1  8:00-8:50</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td>
			<td>9</td><td>10</td><td>11</td><td>12</td><td>13</td> -->
		</tr>
        
<tr>
            <td>tue</td>
            <?php
                for($n=1;$n<=13;$n++){
                    echo "<td>";
                    echo "$tueday[$n]";
                    echo "</td>";
                }
            ?>
        </tr>
<tr>
        <td>wed</td>
        <?php
                for($w=1;$w<=13;$w++){
                    echo "<td>";
                    echo "$wedday[$w]";
                    echo "</td>";
                }
            ?>
        </tr>
        <tr>
        <td>thu</td>
        <?php
                for($t=1;$t<=13;$t++){
                    echo "<td>";
                    echo "$thuday[$t]";
                    echo "</td>";
                }
            ?>
        </tr>
        <tr>
        <td>fri</td>
        <?php
                for($n=1;$n<=13;$n++){
                    echo "<td>";
                    echo "$friday[$n]";
                    echo "</td>";
                }
            ?>
        </tr>
        
</table>


