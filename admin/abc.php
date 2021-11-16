<html>
<head>
<title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
?>
<form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table width="599" border="1">
    <tr>
      <th>Keyword
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form>

<?php

   $serverName = "localhost";
   $userName = "root";
   $userPassword = "";
   $dbName = "myproject";

   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	
   $sql = "SELECT * FROM plan WHERE tc_id LIKE '%".$strKeyword."%' ";

   $query = mysqli_query($conn,$sql);

?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">tc_id </div></th>
    <th width="98"> <div align="center">subject_id </div></th>
    <th width="198"> <div align="center">major_id </div></th>
    <th width="97"> <div align="center">room_id </div></th>
    <th width="59"> <div align="center">time_s </div></th>
    <th width="71"> <div align="center">time_x </div></th>
    <th width="71"> <div align="center">day_id </div></th>
  </tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td><div align="center"><?php echo $result["tc_id"];?></div></td>
    <td><?php echo $result["subject_id"];?></td>
    <td><?php echo $result["major_id"];?></td>
    <td><div align="center"><?php echo $result["room_id"];?></div></td>
    <td align="right"><?php echo $result["time_s"];?></td>
    <td align="right"><?php echo $result["time_x"];?></td>
    <td align="right"><?php echo $result["day_id"];?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>