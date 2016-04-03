<?php
/* 這個crawler是用來排程每個小時抓流量數據的爬蟲*/

//設定時間時區
date_default_timezone_set("Asia/Taipei");

//設定資料庫並連線
$db_server = "localhost";
$db_name = "dorm";
$db_user = "";
$db_passwd = "";
if(!@mysql_connect($db_server, $db_user, $db_passwd))
die("fail to connect to database.");
mysql_query("SET NAMES utf8");
if(!@mysql_select_db($db_name))
die("fail to access database");

//設定crawler目標與動作並寫入變數
$source="http://www.cc.ncku.edu.tw/dorm/disable/flow_today.php";
$buffer = file($source);
$num="0";//用來做index
for($i=0;$i<sizeof($buffer);$i++)
{
  $str1="<td align='left'>"; //標的suffix
  $n=strpos(" ".$buffer[$i],$str1); //加一個空格才比對的到
  if($n>0)
  {
    $m=strrpos($buffer[$i],"</td>"); 
    $ip[$num]=preg_replace('/\s+/','',str_replace("</td>","",substr($buffer[$i],$n+16,$m-$n-3)));
    $num++;
    //echo $ip[$num]."<br>";
  }
}
$num="0";
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

$date=date("Ymd");
$sql_query = "SELECT * FROM `$date`";
//沒有資料表的話 建立資料表
if(!mysql_query($sql_query))
{
  $sql_create = "CREATE TABLE `dorm`.`$date` ( `no` INT NOT NULL AUTO_INCREMENT , `timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `rank` INT NOT NULL , `ip` VARCHAR(255) NOT NULL , INDEX `idx0` (`ip`) , `download` VARCHAR(255) NOT NULL , `upload` VARCHAR(255) NOT NULL , `total` VARCHAR(255) NOT NULL , `hours` INT NOT NULL, PRIMARY KEY (`no`) ) ENGINE = InnoDB;";
  if(mysql_query($sql_create))
  {
    //echo "成功建立資料表!";
  }
}

//刪除一個月前的資料表
$before = mktime(0,0,0,date("m")-1,date("d")-3,date("Y")); 
$before_date = date("Ymd",$before);
$sql_query = "SELECT * FROM `$before_date`";
if(mysql_query($sql_query))
{
  $sql_del = "DROP TABLE `$before_date`;";
  if(mysql_query($sql_del))
  {
    //echo "成功刪除資料表!";
  }
}

//開始寫入資料庫
$hours = date("G");
for($num=0;$num<6500;$num++)
{
  $sql_insert = "insert into `$date` (rank , ip , download , upload , total , hours) values ('$num' , '$ip[$num]', '$download[$num]', '$upload[$num]', '$total[$num]', '$hours' )";
  if(mysql_query($sql_insert))
  {
    //echo "成功!";
  }
  //echo $num."<br>".$ip[$num]."<br>".$download[$num]."<br>".$upload[$num]."<br>".$total[$num]."<br>";
}
?>
