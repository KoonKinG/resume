<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<center>
    <h1>เพิ่มรายวิชา</h1>
    <form action="sub_form_add_db.php" method="post">
    ชื่อวิชา : <input type="text" name="subject_name" placeholder="Enter Subject"><br>
    
    รหัสวิชา : <input type="text" name="subjectcode" placeholder="Enter Subject ID"><br>
    

    ชื่ออาจารย์ : <input type="text" name="teacher_name" placeholder="Enter Name Teacher"><br> 
    

    <button type="submit" class="btn btn-primary">Add Subject</button></center>
    </form>
</body>
</html>