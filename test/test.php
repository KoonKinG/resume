<?php 
    $connect = new mysqli('localhost', 'root', '', 'myproject');


    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
      }

    $sql = "SELECT * FROM plan" ;
    $result = $connect->query($sql);
    
?>
<?php while($row = $result->fetch_assoc()): ?>
  <tr>
   <td><?php echo $row['ID']; ?></td>
   <td class="name">
    <?php echo $row['Sub_ID']; ?>
   </td>
   <td><?php echo $row['Major_ID']; ?></td>
   </tr>
 <?php endwhile ?>
