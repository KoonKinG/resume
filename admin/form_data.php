<html>
<head>
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


    
    <form action="bb.php" method="post">
    ID:<input type="text" name="ID"placeholder="ID">
    วัน:<input type="text" name="day_s"placeholder="mon">
    เวลาเริ่ม:<input type="number" name="time_s"  placeholder="คาบเรียน"><br>
    สิ้นสุด:<input type="number" name="time_x"placeholder="คาบเรียน"><br>
    หมู่เรียน: <input type="text" name="major"placeholder="หมู่เรียน"><br>
    ภาคเรียน: <input type="text" name="term"placeholder="1/2564"><br>
    อาจารย์: <input type="text" name="tc"><br>
    วิชา: <input type="text" name="subjectcode"><br>
    ห้องเรียน: <input type="text" name="room_id"><br>
    สถานะ: <input type="text" name="status_s"><br>

    <input type="submit">
</form>


</body>
</html>