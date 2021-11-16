<?php session_start();
      
include('../condb.php');

  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='admin'){
    Header("Location: ../logout.php");  
  }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script></head>
   
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="major_form.php">Add Major +</a>
        </li>
        <li class="nav-item">
		<a class="nav-link" aria-current="page" href="sub_form_add.php">Add Subject +</a>
        </li>
        <li class="nav-item">
		<a class="nav-link" aria-current="page" href="room_form.php">Add Room +</a>
        </li>
        <li class="nav-item">
		<a class="nav-link" aria-current="page" href="teacher_form.php">Add Teacher +</a>
        </li>
		<li class="nav-item">
		<a class="nav-link" aria-current="page" href="listadmin.php">List</a>
        </li>
		<li class="nav-item">
		<a class="nav-link" aria-current="page" href="Schedule_form.php">Schedule</a>
        </li>
		<li class="nav-item">
		<a class="nav-link" aria-current="page" href="plan_form.php">Plan</a>
        </li>
		
      </ul>
    </div>
  </div>
  </nav>
<?php
    include '../condb.php';
    //id ที่ส่งมาเเก้ไข
            $room_id = $_GET['room_id'];
            $query = "SELECT * FROM room WHERE room_id=$room_id";
            $result = mysqli_query($conn,$query) or die("Error in sql : $query". mysqli_error($query));
            $row = mysqli_fetch_array($result);
    ?>
  

    <script language="javascript">

function fncSubmit()
{
    if(document.form1.room_name.value == "")
    {
        alert("กรุณาใส่ชื่อห้อง");
        document.form1.room_name.focus();
        return false;
    }

    document.form1.submit();
}

</script>

	<br>
  <form action="room_form_edit_db.php" method="post" name="form1" onSubmit="Javascript:return fncSubmit();">
  <div class="container">
<div class="row">
    <div class="col"></div>
    <div class="col">
      <div class="card text-center">
      <h3><div class="card-header text-white bg-dark">เเก้ไขห้องเรียน/ปรับปรุงข้อมูล</div></h3>
      <div class="card-body">
        <p class="card-text">
        ID : <input type="number" name="room_id"  value="<?php echo $row['room_id'];?>"><br>   
        ห้อง : <input type="text" name="room_name" placeholder="Enter Room " require value="<?php echo $row['room_name'];?>"><br>
        </p>
        <button type="submit" class="btn text-white bg-dark">Edit room</button>
      </div>
      <div class="card-footer text-muted"></div>
    </div></div>
    <div class="col"></div>
    
    </div>
    </div>

    <h1></h1>
    

    

    


    </form>
</body>
</html>