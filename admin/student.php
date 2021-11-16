<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ค้นหาตารางเรียน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
    <center><h1 class="Secondary">Welcome to the website class schedule</h1></center>
	
    
		<div class="col-md-12" style="margin-top: 10px">
			<h3>::ค้นหาข้อมูล ตารางเรียน</h3>
			 *ใส่หมู่เรียน
			<br />
			<form action="index.php" method="get" class="form-horizontal">
				<div class="form-group row">
					<div class="col-sm-5">
						<input type="text" name="major_name" class="form-control"  required>
						<!-- *ภาคเรียน
						<input type="text" name="term" class="form-control"  required> -->
					</div>
					<div class="col-sm-2">
						<button type="submit" class="btn btn-primary">ค้นหา
						</button>
					</div>
				</div>
                <!-- <button class="secondary" type="submit2" style="float: right; ">LOGOUT</button> -->
			</form>
		</div>
	</div>
    
</div>


</body>
</html>

