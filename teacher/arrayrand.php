<?php
include ('../condb.php');


 
$sql = "SELECT * FROM plan ORDER BY RAND() LIMIT 1";
$result = mysqli_query($conn, $sql) or die("Error in sql : $sql".mysqli_error($sql)); 

while ($row = mysqli_fetch_array($result)) {
     print $row["major_id"].",".$row["subject_id"]." ";
}
 
?>
