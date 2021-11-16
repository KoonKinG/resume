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
    <title>List</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cs</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav w-100">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="admin.php">Home</a>
                    </li>

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

                    <li class="nav-item dropdown ml-auto">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['name'];?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item">
                                    สถานะ | <?php echo $_SESSION['level'];?>
                                </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="../logout.php">Logout</a></li>

                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <!--  Major-->
    <br>
    <div class="container">
        <div class="row">
            <div class="col"></div>

            
                <div class="card text-center">
                    <h3>
                        <div class="card-header text-white bg-dark">List Subject</div>
                    </h3>
                    <div class="card-body"> 
                      
                  </div>

<table  class="table table-striped table-hover">
                    <thead>
                            <tr>

                                <th>subject_id</th>
                                <th>subject_name</th>
                                <th>subjectcode</th>
                                
                                <th>Action</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
    include '../condb.php';
      $query = "SELECT * FROM subjects";
      $result = mysqli_query($conn,$query) or die("Error in sql : $query". mysqli_error($query));

      foreach ($result as $row) { ?>
                            <tr>

                                <td><?php echo $row['subject_id'];?></td>
                                <td><?php echo $row['subject_name'];?></td>
                                <td><?php echo $row['subjectcode'];?></td>
                              

                                <td>
                                    <a href="sub_form_add_edit.php?subject_id=<?php echo $row['subject_id'];?>" class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                    <a href="sub_form_add_delete.php?subject_id=<?php echo $row['subject_id'];?>"
                                        class="btn btn-danger"
                                        onclick="return confirm('ยืนยันการลบข้อมูล');">Delete</a>
                                </td>
                            </tr>
  
    <?php } ?>
    </tbody>
    </table>
</div>
</div>
                </div>

        </div>
    </div>

    <!-- Room -->

    <body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col"></div>

            
                <div class="card text-center">
                    <h3>
                        <div class="card-header text-white bg-dark">List Room</div>
                    </h3>
                    <div class="card-body"> 
                      
                  </div>

<table  class="table table-striped table-hover">
                    <thead>
                            <tr>

                                <th>room_id</th>
                                <th>room_name</th>
                                <th>Action</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
    include '../condb.php';
      $query = "SELECT * FROM room";
      $result = mysqli_query($conn,$query) or die("Error in sql : $query". mysqli_error($query));

      foreach ($result as $row) { ?>
                            <tr>

                                <td><?php echo $row['room_id'];?></td>
                                <td><?php echo $row['room_name'];?></td>
                        
                                <td>
                                    <a href="room_form_edit.php?room_id=<?php echo $row['room_id'];?> " class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                    <a href="room_form_delete.php?room_id=<?php echo $row['room_id'];?>"
                                        class="btn btn-danger"
                                        onclick="return confirm('ยืนยันการลบข้อมูล');">Delete</a>
                                </td>
                            </tr>
  
    <?php } ?>
    </tbody>
    </table>
</div>
</div>
                </div>

        </div>
    </div>


        <?php mysqli_close($conn); ?>
    </body>
    </center>

</html>
<!-- teacher---------------------------------------- -->

<body>

<br>
    <div class="container">
        <div class="row">
            <div class="col"></div>

            
                <div class="card text-center">
                    <h3>
                        <div class="card-header text-white bg-dark">List Major</div>
                    </h3>
                    <div class="card-body"> 
                      
                  </div>

<table  class="table table-striped table-hover">
                    <thead>
                            <tr>

                                <th>major_id</th>
                                <th>major_name</th>
                                <th>Action</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
    include '../condb.php';
      $query = "SELECT * FROM major";
      $result = mysqli_query($conn,$query) or die("Error in sql : $query". mysqli_error($query));

      foreach ($result as $row) { ?>
                            <tr>

                                <td><?php echo $row['major_id'];?></td>
                                <td><?php echo $row['major_name'];?></td>
                             
                                <td>
                                    <a href="major_form_edit.php?major_id=<?php echo $row['major_id'];?>" class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                    <a href="major_form_delete.php?major_id=<?php echo $row['major_id'];?>"
                                        class="btn btn-danger"
                                        onclick="return confirm('ยืนยันการลบข้อมูล');">Delete</a>
                                </td>
                            </tr>
  
    <?php } ?>
    </tbody>
    </table>
</div>
</div>
                </div>

        </div>
    </div>


    <?php mysqli_close($conn); ?>
</body>
</center>

</html>

<br>
    <div class="container">
        <div class="row">
            <div class="col"></div>

            
                <div class="card text-center">
                    <h3>
                        <div class="card-header text-white bg-dark">List Teacher</div>
                    </h3>
                    <div class="card-body"> 
                      
                  </div>

<table  class="table table-striped table-hover">
                    <thead>
                            <tr>

                                <th>tc_id</th>
                                <th>nameTeacher</th>
                             
                                <th>Action</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
    include '../condb.php';
      $query = "SELECT * FROM teacher";
      $result = mysqli_query($conn,$query) or die("Error in sql : $query". mysqli_error($query));

      foreach ($result as $row) { ?>
                            <tr>

                                <td><?php echo $row['tc_id'];?></td>
                                <td><?php echo $row['nameTeacher'];?></td>
                      
                                <td>
                                    <a href="teacher_form_edit.php?tc_id=<?php echo $row['tc_id'];?>" class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                    <a href="teacher_form_delete.php?tc_id=<?php echo $row['tc_id'];?>"
                                        class="btn btn-danger"
                                        onclick="return confirm('ยืนยันการลบข้อมูล');">Delete</a>
                                </td>
                            </tr>
  
    <?php } ?>
    </tbody>
    </table>
</div>
</div>
                </div>

        </div>
    </div>
