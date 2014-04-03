<?php

$gameArray = array(
'game1',
'game2',
'game3',
'game4',
'game5',
'game6',
'game7',
'game8',
'game9',
'game10',
'game11',
'game12',
'game13',
'game14',
'game15',
'game16',
'game17',
'game18',
'game19',
'game20',
'game21');


$accounts = mysql_connect("mysql.freehostingnoads.net","u926138038_root","Studly4") or die(mysql_error());
mysql_select_db("u926138038_2012",$accounts) or die(mysql_error());

for($i=0;$i<21;$i++)
{
  $sql = "CREATE TABLE ". $gameArray[$i] ."(
  user_id INT AUTO_INCREMENT PRIMARY KEY,
  Player varchar(20),
  Hits int,
  AtBats int)";

  mysql_query($sql,$accounts) or die(mysql_error());
}


/*

// 2013 //
$accounts = mysql_connect("mysql.freehostingnoads.net","u926138038_root1","Studly4") or die(mysql_error());
mysql_select_db("u926138038_2013",$accounts) or die(mysql_error());

for($i=0;$i<21;$i++)
{
  $sql = "CREATE TABLE ". $gameArray[$i] ."(
  user_id INT AUTO_INCREMENT PRIMARY KEY,
  Player varchar(20),
  Hits int,
  AtBats int)";

  mysql_query($sql,$accounts) or die(mysql_error());
}

*/

// 2014 //
$accounts = mysql_connect("mysql.freehostingnoads.net","u926138038_root2","Studly4") or die(mysql_error());
mysql_select_db("u926138038_2014",$accounts) or die(mysql_error());

for($i=0;$i<21;$i++)
{
  $sql = "CREATE TABLE ". $gameArray[$i] ."(
  user_id INT AUTO_INCREMENT PRIMARY KEY,
  Player varchar(20),
  Hits int,
  AtBats int)";

  mysql_query($sql,$accounts) or die(mysql_error());
}


echo "Stuff Worked";

?>