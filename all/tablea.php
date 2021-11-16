<?php
include("../condb.php");

$sql = "SELECT * FROM table_a";
$result = $conn->query($sql);

$tableaArr = array( );

    




if (mysqli_num_rows($result) > 0) {

    echo "<center><h1>รายวิชา</h1><table border=1px><tr><th>ID</th><th>Name Subject</th><th>Subject ID</th></tr></center>";
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
      
    echo "<tr><td>".$row["id"]."</td><td>".$row["time_s"]."</td><td> ".$row["day_s"]."</td><td> "."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
  mysqli_close($conn);
  ?>
  