<?php
date_default_timezone_set("Asia/Bangkok");
function fcDate_eng59($x) {
	$thai_m=array("January","February","March","April","May","June","July","August","September","October","November","December");
	$txt = substr($x,0,10); //�Ѵ��ͤ��� �����͡ 2012-08-05 17:35:20
	$time = substr($x,10); //�Ѵ��ͤ��� �ѹ����͡ 2012-08-05 17:35:20
	$date_array=explode("-",$txt);
	$y=$date_array[0];
	$m=$date_array[1]-1;
	$d=$date_array[2];
	
	$m=$thai_m[$m];
	$y=$y;

	$displaydate_eng="$d $m $y / $time";
	return $displaydate_eng;
}
/* Function Date-Time*/
$strendDate2=date("Y-m-d");
$thai_day_arr=array("�ҷԵ��","�ѹ���","�ѧ���","�ظ","����ʺ��","�ء��","�����");
$thai_month_arr=array(
	"0"=>"",
	"1"=>"���Ҥ�",
	"2"=>"����Ҿѹ��",
	"3"=>"�չҤ�",
	"4"=>"����¹",
	"5"=>"����Ҥ�",
	"6"=>"�Զع�¹",	
	"7"=>"�á�Ҥ�",
	"8"=>"�ԧ�Ҥ�",
	"9"=>"�ѹ��¹",
	"10"=>"���Ҥ�",
	"11"=>"��Ȩԡ�¹",
	"12"=>"�ѹ�Ҥ�"					
);
function thai_date59($time){
	global $thai_day_arr,$thai_month_arr;
	$thai_date_return="�ѹ".$thai_day_arr[date("w",$time)];
	$thai_date_return.=	"��� ".date("j",$time);
	$thai_date_return.=" ��͹".$thai_month_arr[date("n",$time)];
	$thai_date_return.=	" �.�.".(date("Y",$time)+543);
	$thai_date_return.=	"� ".date("H:i")." �.";
	return $thai_date_return;
}
function Enddatediff($strendDate1,$strendDate2) { 
	if($strendDate1 < $strendDate2){exit();}} // 1 Hour =  60*60 28/4/2559
 function TimeDiff($strTime1,$strTime2) {
	return (strtotime($strTime2) - strtotime($strTime1))/  ( 60 * 60 ); // 1 Hour =  60*60
	}
$strendDate1=date("2021-10-10");
Enddatediff($strendDate1,$strendDate2);
?>