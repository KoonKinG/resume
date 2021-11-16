<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>ค้นหาตารางเรียน</title>
  </head>
  <body>
    <?php
    require_once('../condb.php');

    $major_name = (isset($_POST['major_name']) ? $_POST['major_name'] : '');
    include('student.php');
    if($major_name!=''){
    include('show.php');
    }
  
    ?>
    
  </body>
</html>
