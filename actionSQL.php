<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Table = $_REQUEST['Table'];
if(!empty($Table)){
$Sql = $_REQUEST['Sql'];
include "connect.php";
// วันเดือนปี เวลาปัจจุบัน
$DateTime = date("Y-m-d H:i:s", mktime(date("H")+0, date("i")+0, date("s")+0, date("m")+0 , date("d")+0, date("Y")+0));
$Date = date("Y-m-d");
	switch($Table){
	
		// ----------------------------------------------------------------------------------------//
		case 'login':
		// ----------------------------------------------------------------------------------------//
			include "table-sql/login.php";
		break;


		// ----------------------------------------------------------------------------------------//
		case 'admin':
		// ----------------------------------------------------------------------------------------//
			include "table-sql/tb-$Table.php";
		break;
		
		// ----------------------------------------------------------------------------------------//
		case 'member':
		// ----------------------------------------------------------------------------------------//
			include "table-sql/tb-$Table.php";
		break;
 
		// ----------------------------------------------------------------------------------------//
		case 'bill':
		// ----------------------------------------------------------------------------------------//
			include "table-sql/tb-$Table.php";
		break;
 
 
		// ----------------------------------------------------------------------------------------//
		case 'contact':
		// ----------------------------------------------------------------------------------------//
			include "table-sql/tb-$Table.php";
		break;
 
		// ----------------------------------------------------------------------------------------//
		case 'meter':
		// ----------------------------------------------------------------------------------------//
			include "table-sql/tb-$Table.php";
		break;


		// ----------------------------------------------------------------------------------------//
		case 'rent':
		// ----------------------------------------------------------------------------------------//
			include "table-sql/tb-$Table.php";
		break;

		// ----------------------------------------------------------------------------------------//
		case 'room_type':
		// ----------------------------------------------------------------------------------------//
			include "table-sql/tb-$Table.php";
		break;
		
		// ----------------------------------------------------------------------------------------//
		case 'room':
		// ----------------------------------------------------------------------------------------//
			include "table-sql/tb-$Table.php";
		break;


		// ----------------------------------------------------------------------------------------//
		case 'utility':
		// ----------------------------------------------------------------------------------------//
			include "table-sql/tb-$Table.php";
		break;
		

		// ----------------------------------------------------------------------------------------//
		default:
		// ----------------------------------------------------------------------------------------//
		exit("<script>alert('ไม่พบ ตาราง --> [ ".$Table." ] ที่ส่งมาจากฟอร์ม!');(history.back());</script>");
		
	}
}else{//***  ----  จบ Check ตัวแปร ค่าว่างของ Table ----***  //
exit("<script>alert('ตัวแปร Table ไม่มีข้อมูล!');(history.back());</script>");
}	
?>

</body>
</html>