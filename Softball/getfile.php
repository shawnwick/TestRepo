<?php

//header('Content-Type: text/plain');
$teamArray = array(
'Ben',
'Brian',
'Chad',
'Chris',
'ErikB',
'ErikH',
'Jason',
'Jay',
'Jesse',
'Shawn',
'Tony');

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

$gameText = array(
'Game1.txt',
'Game2.txt',
'Game3.txt',
'Game4.txt',
'Game5.txt',
'Game6.txt',
'Game7.txt',
'Game8.txt',
'Game9.txt',
'Game10.txt',
'Game11.txt',
'Game12.txt',
'Game13.txt',
'Game14.txt',
'Game15.txt',
'Game16.txt',
'Game17.txt',
'Game18.txt',
'Game19.txt',
'Game20.txt',
'Game21.txt');


$accounts = mysql_connect("mysql.freehostingnoads.net","u926138038_root","Studly4") or die(mysql_error());
mysql_select_db("u926138038_2012",$accounts) or die(mysql_error());

$hits;
$AB;

// Insert 2012 Old Stats //
for($j=0;$j<21;$j++)
{
  $fp = fopen($gameText[$j], 'r');

  for($k=0;$k<11;$k++)
  {
	echo $teamArray[$k] . '<br>';
	
	
	$hits = fgetc($fp);
	fgetc($fp);
	$AB = fgetc($fp);
	
	fgetc($fp);
	fgetc($fp);
	
	$sql = "
	INSERT INTO " . $gameArray[$j] . "(Player,Hits,AtBats) 
	VALUES('" . $teamArray[$k] . "'," . $hits . "," . $AB . ")
	";
	
	mysql_query($sql,$accounts) or die(mysql_error());
	
  }
}


/*

// Clear Stats for 2013 and 2014 //
$accounts = mysql_connect("mysql.freehostingnoads.net","u926138038_root1","Studly4") or die(mysql_error());
mysql_select_db("u926138038_2013",$accounts) or die(mysql_error());

for($j=0;$j<21;$j++)
{

  for($k=0;$k<11;$k++)
  {
	
	$sql = "
	INSERT INTO " . $gameArray[$j] . "(Player,Hits,AtBats) 
	VALUES('" . $teamArray[$k] . "',0,0)";
	
	mysql_query($sql,$accounts) or die(mysql_error());
	
  }
}

*/

$accounts = mysql_connect("mysql.freehostingnoads.net","u926138038_root2","Studly4") or die(mysql_error());
mysql_select_db("u926138038_2014",$accounts) or die(mysql_error());

for($j=0;$j<21;$j++)
{

  for($k=0;$k<11;$k++)
  {
	
	$sql = "
	INSERT INTO " . $gameArray[$j] . "(Player,Hits,AtBats) 
	VALUES('" . $teamArray[$k] . "',0,0)";
	
	mysql_query($sql,$accounts) or die(mysql_error());
	
  }
}




/*
if (!$fp) 
{
    echo 'Could not open file somefile.txt';
}
while (false !== ($char = fgetc($fp))) 
{
    echo "$char\n";
}

$readFile = fopen($file,"r");
while(!feof($readfile))
{
	$c = fgetc($file);
	echo $c . '<br>';
}


$document = file_get_contents($file);
$lines = explode("\n",$document);

foreach($lines as $newline)
{
	echo $newline . '<br>';
}
*/
?>