<html>
<head>
<title></title>
</head>
<body>
<?php
 include ('../condb.php');
//  "SELECT * FROM plan WHERE status_s = '0'"
    $sql = "SELECT * FROM plan WHERE status_s = 0 ORDER BY RAND() LIMIT 5";
    $result = mysqli_query($conn, $sql) or die("Error in sql : $sql".mysqli_error($sql)); 
?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">Major_id </div></th>
    <th width="98"> <div align="center">subject_id </div></th>
    <th width="198"> <div align="center">tc_id </div></th>
    <th width="97"> <div align="center">room_id </div></th>
    <th width="59"> <div align="center">time_s </div></th>
    <th width="71"> <div align="center">time_x </div></th>
    <th width="71"> <div align="center">day_id </div></th>
    <th width="71"> <div align="center">status_s </div></th>
  </tr>
<?php
while($objResult = mysqli_fetch_array($result))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["major_id"];?></div></td>
    <td><?php echo $objResult["subject_id"];?></td>
    <td><?php echo $objResult["tc_id"];?></td>
    <td><div align="center"><?php echo $objResult["room_id"];?></div></td>
    <td align="right"><?php echo $objResult["time_s"];?></td>
    <td align="right"><?php echo $objResult["time_x"];?></td>
    <td align="right"><?php echo $objResult["day_id"];?></td>
    <td align="right"><?php echo $objResult["status_s"];?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>