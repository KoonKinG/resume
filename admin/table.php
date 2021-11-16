<?php include "../condb.php"?>
<style>
.no{ width : 100px; text-align : center;}
.highlight{ background-color : #cccccc; }
.title{ text-align : center;}
</style>
<?php

$timeArr = array( 
			0 => array( "start" => "08:00", "stop" => "08:50"), 
			1 => array( "start" => "08:50", "stop" => "09:40"), 
			2 => array( "start" => "09:40", "stop" => "10:30"), 
			3 => array( "start" => "10:30", "stop" => "11:20"), 
			4 => array( "start" => "11:20", "stop" => "12:10"), 
			5 => array( "start" => "12:10", "stop" => "13:00"), 
			6 => array( "start" => "13:00", "stop" => "13:50"), 
			7 => array( "start" => "13:50", "stop" => "14:40"), 
			8 => array( "start" => "14:40", "stop" => "15:30"), 
			9 => array( "start" => "15:30", "stop" => "16:20"), 
			10 => array( "start" => "16:20", "stop" => "17:10"),
            11 => array( "start" => "17:10", "stop" => "18:00"),
            12 => array( "start" => "18:00", "stop" => "18:50")
		);

//DATABASE to Array
//วนลูปฐานข้อมูล มาเก็บในรูปแบบ Array
    
if ($result = mysqli_query($conn, "SELECT * FROM plan WHERE status_s = '0'")) {
    while ($row = mysqli_fetch_array($result))
{
	$event[] = "* " . $row['Sub_ID'] . " - " . $row['Major_ID'] ;
    echo $event[0];
}

    // Free result set
    mysqli_free_result($result);

  }

  $subjects = array( 
    0 => array( "sub_name" => "", "stop" => "08:50"), 
    1 => array( "start" => "08:50", "stop" => "09:40"), 
    2 => array( "start" => "09:40", "stop" => "10:30"), 
    3 => array( "start" => "10:30", "stop" => "11:20"), 
    4 => array( "start" => "11:20", "stop" => "12:10"), 
    5 => array( "start" => "12:10", "stop" => "13:00"), 
    6 => array( "start" => "13:00", "stop" => "13:50"), 
    7 => array( "start" => "13:50", "stop" => "14:40"), 
    8 => array( "start" => "14:40", "stop" => "15:30"), 
    9 => array( "start" => "15:30", "stop" => "16:20"), 
    10 => array( "start" => "16:20", "stop" => "17:10"),
    11 => array( "start" => "17:10", "stop" => "18:00"),
    12 => array( "start" => "18:00", "stop" => "18:50")
);
//
  if ($result2 = mysqli_query($conn, "SELECT * FROM subject")) {
    while ($row = mysqli_fetch_array($result2))
{
	$event1[] = "* " . $row['name_sub'] . " - " . $row['sub_id'] . " - " . $row['nameTeacher'] ;
    echo $event1[0];
}

    // Free result set
    mysqli_free_result($result2);

  }




            
$timeTeach = array(
	0 => array( 
			array('time' => '13:00-16:20', 'title' => 'COS4102 - คอมพิวเตอร์กราฟิกส์ IT3303 - ประหยัด'),
		 	),
	1 => array(
			array('time' => '11:20-12:10', 'title' => 'โฮมรูมอ.ที่ปรึกษา -  -'),
            array('time' => '13:00-16:20', 'title' => 'COS4101 - การทำเหมืองข้อมูลIT3401 - ณัฐธิดา  ')
			),
	2 => array(
			array('time' => '10:30-12:10', 'title' => 'COS4301 - การเตรียมฝึกประสบการฯIT3402 - ณัฐธิดา'),
			array('time' => '13:00-16:20', 'title' => 'กิจกรรมนักศึกษา --')
			),
	3 => array(
			array('time' => '13:00-16:20', 'title' => 'COS2206 - อินเทอร์เน็ตในทุกสรรฯIT3401 - กล้า ')		
			),
	4 => array(
			array('time' => '08:50-12:10', 'title' => 'COS4103 - การศึกษาอิสระทางวิทยฯIT3402 - ประหยัด จารุวรรณ ')
			),

	
);
//End การจัดรูปแบบข้อมูล

/* Head Column */
function createCol($arr){
	$row = "";
	foreach( $arr as $data )
	{
		$row .= '<td>' . $data['start'] . '-' . $data['stop'] . '</td>';
	}
	return $row;
}

/* Key Positon */
function getCol($haystack, $keyNeedle)
{
    $i = 0;
    foreach($haystack as $arr)
    {
        if($arr['start'] == $keyNeedle)
        {
            return $i;
        }
        $i++;
    }
}

/* Time Range */
function getTimeRange($timeT, $timeCol){
	$data = array();
	foreach($timeT as $timeA){
		$time = $timeA['time'];
		if(!$time) continue;
		$tm = explode("-", $time);
		//echo '<pre>', print_r($tm,true) ,'</pre>';
		$start = getCol($timeCol, $tm[0]);
		$end = getCol($timeCol, $tm[1] );
		$colspan = $end - $start;
		$data[$tm[0]] = array('colspan' => $colspan, 'title' => $timeA['title']);
	}
	return $data;
}

$list = "";
echo '<table border="1" width="90%" align="center" cellspacing="0">';
echo '<tr><td>&nbsp;</td><td>&nbsp;</td>'. createCol( $timeArr ) .'</tr>';
foreach($timeTeach as $i=>$arr){

	//ค้นหาข้อมูลในตารางลงทะเบียน
	//นับช่วงเวลา start_time กับ stop_time ว่ามีกี่ช่อง
	$timeT = $timeTeach[$i];
	
	$arrRange = getTimeRange($timeT, $timeArr);
	
	//echo '<pre>', print_r($arrRange,true) ,'</pre>';
	
	$no = $i + 1;

	$list = '<tr>';
	$list.= '<td rowspan="2" class="no">'.$no.'</td>';
	$list.= '<td>ลายเซ็น</td>';
	$chkCol = 0;
	$col = 0;
	foreach( $timeArr as $timeA )
	{	
		$highlight = "";
		$colspan = "";
		if($chkCol < ($col-1) && $col != 0){
			$chkCol++;
			continue;
		}
		$col = 0;
		$chkCol = 0;
		if(!empty($arrRange[trim($timeA['start'])])){
			$col = $arrRange[trim($timeA['start'])]['colspan'];
			$highlight = "highlight";
			$colspan = 'colspan="'.$col.'"';
		}
		$list.= '<td '.$colspan.' class="'. $highlight .'">&nbsp;</td>';
	}
	$list.= '</tr>';
	
	$list.= '<tr>';
	$list.= '<td>เอก/รุ่น/ห้อง</td>';
	foreach( $timeArr as $timeA )
	{	
		$highlight = "";
		$colspan = "";
		if($chkCol < ($col-1) && $col != 0){
			$chkCol++;
			continue;
		}
		$title = "&nbsp;";
		$col = 0;
		$chkCol = 0;
		if(!empty($arrRange[trim($timeA['start'])])){
			$col = $arrRange[trim($timeA['start'])]['colspan'];
			$title = $arrRange[trim($timeA['start'])]['title'];
			$highlight = "highlight";
			$colspan = 'colspan="'.$col.'"';
		}
		
		$list .= '<td '.$colspan.' class="'. $highlight .' title">' . $title . '</td>';
	}
	$list .= '</tr>';
	echo $list;
	
}
echo '</table>';

?>