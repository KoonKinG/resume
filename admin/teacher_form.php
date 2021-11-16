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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script></head></head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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

    
    
    <script language="javascript">

	function fncSubmit()
	{
		if(document.form1.nameTeacher.value == "")
		{
			alert("กรุณาใส่ชื่อ");
			document.form1.nameTeacher.focus();
			return false;
		}
		document.form1.submit();
	}
	
</script>
<br>
<form action="teacher_form_db.php" method="post" name="form1" onSubmit="Javascript:return fncSubmit();">
<div class="container">
<div class="row">
    <div class="col"></div>
    <div class="col">
      <div class="card text-center">
      <h3><div class="card-header text-white bg-dark">เพิ่มชื่ออาจารย์</div></h3>
      <div class="card-body">
        <p class="card-text">
        ชื่ออาจารย์ : <input type="text" name="nameTeacher" placeholder="Enter name Teacher"><br>
        </p>
        <button type="submit" class="btn text-white bg-dark">Add teacher</button>
      </div>
      <div class="card-footer text-muted"></div>
    </div></div>
    <div class="col">

    </div>
    
    </div>
    </div>
    

    

    


    </form>
</body>
</html>