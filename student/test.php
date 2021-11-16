<?php
include ('../condb.php');

    $sql = "SELECT * FROM dayx";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    foreach ($result as $row){

        $arraymajor[$row['day_s']] = $row['day_id'];

        echo $arraymajor[2];
    }


?>
