<?php
include("condb.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//get post body content
	$content = file_get_contents('php://input'); 
	//parse JSON
	$data = json_decode($content, true);

	$ID = trim($data['ID']);
	$Sub_ID = $data['Sub_ID'];
	$Major_ID = $data['Major_ID'];
	$Tc_ID = $data['Tc_ID'];
    $Hr = $data['Hr'];

	//check duplicate $title
	$sql = "SELECT nametree FROM tree WHERE nametree=:nametree";
	$result=$conn->prepare($sql);
	$result->bindParam(':nametree',$nametree,PDO::PARAM_STR);
	$result->execute();		
	$num_row=$result->rowCount();
	if($num_row>=1){
		echo json_encode(['status' => 'error','message' => 'ไม่สามารถใช้ name นี้ได้ เนื่องจากมีข้อมูลอยู่แล้ว']);
		exit;
	}

	//insert data
	$sql = "INSERT INTO tree (nametree,treetrunk,leaves,flower,seed) VALUES (:nametree,:treetrunk,:leaves,:flower,:seed);";
	$result=$conn->prepare($sql);
	$result->bindParam(':nametree',$nametree,PDO::PARAM_STR);
	$result->bindParam(':treetrunk',$treetrunk,PDO::PARAM_STR);
	$result->bindParam(':leaves',$leaves,PDO::PARAM_STR);
	$result->bindParam(':flower',$flower,PDO::PARAM_STR);
    $result->bindParam(':seed',$seed,PDO::PARAM_STR);
	$result->execute();		
	if($result){
		echo json_encode(['status' => 'ok','message' => 'บันทึกข้อมูลเรียบร้อยแล้วครับ']);
	}else{
		echo json_encode(['status' => 'error','message' => 'เกิดข้อผิดพลาดในการบันทึกข้อมูล']); 
	}	
}

$conn=null;
?>


<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<?php
$objConnect = mysqli_connect('localhost','root','') or die("Error Connect to Database");
$objDB = mysqli_select_db('myproject');
$strSQL = "SELECT * FROM plan ORDER BY RAND() LIMIT 2 ";
$objQuery = mysqli_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">ID </div></th>
    <th width="98"> <div align="center">.. </div></th>
    <th width="198"> <div align="center">Email </div></th>
    <th width="97"> <div align="center">CountryCode </div></th>
    <th width="59"> <div align="center">Budget </div></th>
    <th width="71"> <div align="center">Used </div></th>
  </tr>
<?php
while($objResult = mysqli_fetch_array($objQuery))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["ID"];?></div></td>
    <td><?php echo $objResult["Name"];?></td>
    <td><?php echo $objResult["Email"];?></td>
    <td><div align="center"><?php echo $objResult["CountryCode"];?></div></td>
    <td align="right"><?php echo $objResult["Budget"];?></td>
    <td align="right"><?php echo $objResult["Used"];?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysql_close($objConnect);
?>
</body>
</html>