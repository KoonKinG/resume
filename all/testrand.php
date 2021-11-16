<?php include "condb.php"?>
<?php

        if ($result2 = mysqli_query($conn, "SELECT * FROM subject")) {
                while ($row = mysqli_fetch_array($result2))
        {
                $event1[] = "* " . $row['sub_id'] . " - " . $row['name_sub'] . " - " . $row['nameTeacher'] ;
                echo $event1[0];
               
        }
        
                // Free result set
                mysqli_free_result($result2);
        
        }

