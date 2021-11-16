<form action="form_show_db.php" method="post" name="form1" onSubmit="Javascript:return fncSubmit();">
<?php
  include("../condb.php");

$query = "SELECT major_id,major_name FROM major ORDER BY major_id  DESC LIMIT  0,8";
$result = mysqli_query($conn, $query) or die(mysqli_error()."[".$query."]");
?>

<select name="major_id">
    <option value="Select Day">Select Major</option>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['major_id'] . "'>'" . $row['major_name'] . "'</option>";
    }
    ?>        
</select>

<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Submit</button>
  </div>
