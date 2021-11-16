<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<style>
   div.f1 {
  width: 30%;
  margin: auto;
  border: 3px solid #73AD21;
  position: relative;
  height: 700px;
  Left:0;
}
    iframe{
        border: none;

}

div.f2 {
  max-width: 80%;
  margin: auto;
  border: 3px solid #73AD21;
  position: relative;
  right:0;
}
div.f0 {
  max-width: 100%;
  margin: auto;
  border: 3px solid #73AD21;
  position: relative;
}

</style>
</head>
<title>หน้าจัดตารางเรียน</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="admin.php">Home</a>
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
    <!-- col 3 -- col 9 -->
    <div class="container">
  <div class="row">
    <div class="col-3">
    <iframe name="iframe1" scrolling="no" width="100%" height="100%" src="../admin/Schedule_form22.php"></iframe>
    
    </div>
    <div class="col-9">
    <iframe name="iframe2" scrolling="no" width="100%" height="550px" src="../admin/show_teacher22.php"> </iframe>
        <iframe name="iframe3" scrolling="no" width="100%" height="550px" src="../admin/show_student22.php"></iframe>
        <iframe name="iframe4" scrolling="no"  width="100%" height="550px" src="../admin/show_room22.php"></iframe>
    </div>
    </div>
    </div>
    <!-- <div class="f0">
        <div class="f1">
            
        </div>

        <div class="f2">
        
        </div>
    </div> -->

