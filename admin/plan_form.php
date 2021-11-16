<!-- Required meta tags -->
<?php session_start();
      
include('../condb.php');

  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='admin'){
    Header("Location: ../logout.php");  
  }  
?>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script></head>
    <title>แผนการสอน</title>
  </head>
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

  
<div class="container">
    <div class="row justify-content-md-center">
    <div class="col-sm-4">
    <center><h1>แผนการสอน</h1><center>

    <!-- <script language="javascript">

function fncSubmit()
{
    if(document.form1.major_id.value == "")
    {
        alert("กรุณาใส่ชื่อสาขา");
        document.form1.major_id.focus();
        return false;
    }

    if(document.form1.subject_id.value == "")
    {
        alert("กรุณาใส่รหัสวิชา");
        document.form1.subject_id.focus();
        return false;
    }

    if(document.form1.term.value == "")
    {
        alert("กรุณาใส่ปีการศึกษา");
        document.form1.term.focus();
        return false;
    }

    if(document.form1.tc_id.value == "")
    {
        alert("กรุณาใส่ชื่ออาจารย์");
        document.form1.tc_id.focus();
        return false;
    }

    document.form1.submit();
}

</script> -->


    <form action="plan_db.php" method="post" name="form1" onSubmit="Javascript:return fncSubmit();">
  
    <?php
  include("../condb.php");

$query = "SELECT major_id,major_name FROM major ORDER BY major_id DESC LIMIT  0,9";
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
<!-- subjectttttttttttttttttttttttttttttttttt -->

<?php
  include("../condb.php");

$query = "SELECT * FROM subjects ORDER BY subject_id DESC LIMIT  0,15";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn)."[".$query."]");
?>

<select name="subject_id">
    <option value="Select Subject">Select Subject</option>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['subject_id'] . "'>'" . $row['subjectcode'] . "'</option>";
    }
    ?>        
</select>
    <!-- -------------------------------------------ปีการศึกษา -->
<div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">ภาคเรียน:</label>
    <input type="text" name="term" readonly class="form-control-plaintext" value="ภาคเรียน :">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">ภาคเรียน</label>
    <input type="text" class="form-control" name="term" placeholder="1/2564">
  </div>
<!-- อาจารย์์์์-------------------------------- -->
<?php
  include("../condb.php");

$query = "SELECT tc_id,nameTeacher FROM teacher ORDER BY tc_id DESC LIMIT  0,15";
$result = mysqli_query($conn, $query) or die(mysqli_error()."[".$query."]");
?>

<select name="tc_id" >
<?php 
while ($row = mysqli_fetch_array($result))
{
    echo "<option value='".$row['tc_id']."'>'".$row['nameTeacher']."'</option>";
}
?>        
</select>



<!-- ------------------------------------------------------------------------------- -->
 
  <!-- <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">ห้องเรียน:</label>
    <input type="text" name="room" readonly class="form-control-plaintext" value="ห้องเรียน :">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">ห้องเรียน</label>
    <input type="text" class="form-control" name="room_id" placeholder="ห้องเรียน">
  </div> -->
<!-- ----------------------------------------------------------------------------------- -->
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Submit</button>
  </div>



</form>