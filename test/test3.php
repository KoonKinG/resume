<?
   $hostname = "localhost";
   $user = "root";
   $password = "";
   $dbname = "myproject"; //ใส่ชื่อ Database
   $tblname = "plan"; //ใส่ชื่อตารางที่เราต้องการค้นหาข้อมูล
   mysqli_connect($hostname, $user, $password) or die("No Connect Database!");
   mysqli_select_db($dbname) or die("No Connect Database!");
   $sql = "SELECT * from $tblname"; //บรรทัดที่ใช้ในการเขียนคำสั่ง SQL
   $result = mysqli_db_query($dbname,$sql); //นำคำสั่ง SQL ไปประมวลผมกับ Database
   $num_rows = mysqli_num_rows($result); //หาจำนวนแถวที่ค้นหาข้อมูลได้
   $random_row = rand(0, ($num_rows - 1)); //ตรงนี้ล่ะครับที่ใช้คำสั่ง Random เพื่อสุ่มค่า
   mysqli_data_seek($result,$random_row); //ค้นหาค่าที่ได้จากการ Random
   $data = mysqli_fetch_array($result);
   $message = $data["Hr"]; //นำข้อมูลที่ได้เก็บใส่ที่ตัวแปล
   echo $message; //แสดงข้อมุลจากตัวแปลที่ได้
   mysqli_close();
?>

