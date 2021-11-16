<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searchdata</title>
</head>
<body>
<?php
include ('../condb.php');
?>
<form method="get" id="form" enctype="multipart/form-data" action="">

    <strong>ค้นหา</strong>
    <input type="text" name="search" size="30" value="">
    <input type="submit" value="ค้นหา">
</form>
        <table border="1">
    <tr>
        <td>ชื่อ</td>
        <td>วิชา</td>
        <td>สาขา</td>
        <td>ห้อง</td>
        <td>เวลาเริ่ม</td>
        <td>เวลาสิ้นสุด</td>
        <td>วัน</td>
    </tr>

    <?php
$search=isset($_GET['search']) ? $_GET['search']:'';

$query = "SELECT * FROM plan WHERE tc_id LIKE '$search%'";
$result = mysqli_query($conn,$query) or die("Error in sql : $query". mysqli_error($query));
    if($result->$num_row>0){
        while ($row = $result->fetch_assoc()) { ?>
            
                <tr>
        <td><?php echo $row['tc_id'];?></td>
        <td><?php echo $row['subject_id'];?></td>
        <td><?php echo $row['major_id'];?></td>
        <td><?php echo $row['room_id'];?></td>
        <td><?php echo $row['time_s'];?></td>
        <td><?php echo $row['time_x'];?></td>
        <td><?php echo $row['day_id'];?></td>
                </tr>

    <?php
        }
    }else{
        echo "0 row";
    }
    $conn->close();
    ?>

        </table>

</body>
</html>