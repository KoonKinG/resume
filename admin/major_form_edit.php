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
    <title>Major</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script></head>
    <style>
  body{
      width: 40;
      height: 5%;
      border: 1px;
      border-radius: 05px;
      padding: 8px 15px 8px 15px;
      margin: 10px 0px 15px 0px;
     
  }
      
    </style>
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
            $major_id = $_GET['major_id'];
            $query = "SELECT * FROM major WHERE major_id=$major_id";
            $result = mysqli_query($conn,$query) or die("Error in sql : $query". mysqli_error($query));
            $row = mysqli_fetch_array($result);
    ?>
 

    <script language="javascript">

function fncSubmit()
{
    if(document.form1.major_name.value == "")
    {
        alert("กรุณาใส่ชื่อสาขา");
        document.form1.major_name.focus();
        return false;
    }

    document.form1.submit();
}

</script>

	
<center>
    
    <h1>เเก้ไขสาขา/ปรับปรุงข้อมูล</h1>
    <form action="major_form_edit_db.php" method="post" name="form1" onSubmit="Javascript:return fncSubmit();">
ID : <input type="number" name="major_id"  value="<?php echo $row['major_id'];?>"><br>   
สาขา : <input type="text" name="major_name" placeholder="Enter Major " require value="<?php echo $row['major_name'];?>"><br>
    

    

<input type="submit" value="Add Major"></center>
    </form>
</body>
</html>