<?php
// example of how to use basic selector to retrieve HTML contents
include('../simple_html_dom.php');

include('function.php');
include('config.php');
//Call api
//访问API接口
$html = file_get_html($url);

//load json
//加载json
//The json is an array, odd index is Unix timestamp,even index is contribution
//这个json是一个数组，为contribute*2的数量，单数为timestamp，双数为contribute
$data = json_decode($html,true);

//build the dic of date and number, count the biggest contribute
//制作一个日期和贡献对照的表，并且统计最大数字
$data_dic = Array(); 
$max = 0;

//keep the day but not time
//仅保留日期，不保留时间
foreach($data as $key => $value){
    $temp = Array();
    foreach($value as $key2 => $value2){
        array_push($temp,$value2);
    }
    if($temp[1] > $max)
    {
        $max = $temp[1];
    }
    $data_dic[date('Y-m-d',$temp[0])] = $temp[1];
}
//get last sunday and today
#获取最近的上周日
$last_sunday =strtotime("last sunday");
$today = strtotime("today");

//get the 52 week ago before the last sunday 
#获取上周日的52周之前
$firstday = strtotime("-52 week",$last_sunday);
$firstday = strtotime("-1 day",$firstday);
//set the color index into Array
//算出color坐标
$color_array = Array();

//make the color Array
//制作color坐标
for($now = $firstday; $now < $today; $now = strtotime("+1 day",$now)){

    if(!array_key_exists(date('Y-m-d',$now),$data_dic))
    {
        array_push($color_array,0);
    }
    else{
        array_push($color_array,colorIndex($data_dic[date('Y-m-d',$now)],$max));
    }
}




// extract text from HTML
#echo $html->plaintext;
#$item = 1611754200;
#echo date('r',$item);
?>