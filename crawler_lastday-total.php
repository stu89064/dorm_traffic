<?php
//用來抓前一天所有的流量
date_default_timezone_set("Asia/Taipei");
$db_server = "localhost";
$db_name = "dorm";
$db_user = "";
$db_passwd = "";
if(!@mysql_connect($db_server, $db_user, $db_passwd))
  die("無法對資料庫連線");
mysql_query("SET NAMES utf8");
if(!@mysql_select_db($db_name))
  die("無法使用資料庫");

$source="http://www.cc.ncku.edu.tw/dorm/disable/flowbyday.php?day=1";
$buffer = file($source);
$num="0";
for($i=0;$i<sizeof($buffer);$i++)
{
  $str1="<td align='left'>";
  $n=strpos(" ".$buffer[$i],$str1);
  if($n>0)
  {
    $m=strrpos($buffer[$i],"</td>"); 
    $num++;
    $ip[$num]=preg_replace('/\s+/','',str_replace("</td>","",substr($buffer[$i],$n+16,$m-$n-3)));
    //echo $ip[$num]."<br>";
  }
}
$num="1";
$column="1";
$replace = array("\r\n", "</td>", ",");
for($i=0;$i<sizeof($buffer);$i++)
{
  $str2="<td align='right'>";
  $n=strpos(" ".$buffer[$i],$str2);
  if($n>0)
  {
    $m=strrpos($buffer[$i],"</td>"); 
    if($column%3 =="1")
    {
      $download[$num]=preg_replace('/\s+/','',str_replace("</td>","",str_replace(",","",substr($buffer[$i],$n+17,$m-$n-3))));
      $column++;
    }
    else if($column%3 =="2")
    {
      $upload[$num]=preg_replace('/\s+/','',str_replace("</td>","",str_replace(",","",substr($buffer[$i],$n+17,$m-$n-3))));
      $column++;
    }
    else
    {
      $total[$num]=preg_replace('/\s+/','',str_replace("</td>","",str_replace(",","",substr($buffer[$i],$n+17,$m-$n-3))));
      $column++;
      $num++;
    }
    //echo $download[$num].$upload[$num].$total[$num];
  }
}
$date=date("Ymd", mktime(0, 0, 0, date("m"), date("d")-1, date("Y")));
$sql_query = "SELECT * FROM `$date`";
for($num=1;$num<=6500;$num++)
{
	$sql_insert = "insert into `$date` (rank , ip , download , upload , total , hours) values ('$num' , '$ip[$num]', '$download[$num]', '$upload[$num]', '$total[$num]', '24' )";
  if(mysql_query($sql_insert))
  {
    //echo "成功!";
  }
//	echo $num."<br>".$ip[$num]."<br>".$download[$num]."<br>".$upload[$num]."<br>".$total[$num]."<br>";
}
?>
