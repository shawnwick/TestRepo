<?php

session_start();

// Get Posted Values //
$hits = $_POST['hits'];
$atbats = $_POST['atbats'];
$date = $_SESSION['date'];
$gameHold = $_SESSION["gameHold"];

// Local Variables //
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

$root = 'u926138038_root';

// For Website //
if($date == 'Softball_2012')
{
    $root = 'u926138038_root';
    $test = 'u926138038_2012';
}
if($date == 'Softball_2013')
{
    $root = 'u926138038_root1';
    $test = 'u926138038_2013';
}
if($date == 'Softball_2014')
{
    $root = 'u926138038_root2';
    $test = 'u926138038_2014';
}

// Get Database //
//$accounts = mysql_connect("localhost","root","") or die(mysql_error());
$accounts = mysql_connect("mysql.freehostingnoads.net",$root,"Studly4") or die(mysql_error());

mysql_select_db($test,$accounts) or die(mysql_error());

// Update each player //
for($i=0;$i<11;$i++)
{
    $sql = "UPDATE " . $gameHold . " SET Hits=" . $hits[$i] . ", AtBats=" . $atbats[$i] . 
           " WHERE Player='" . $teamArray[$i] . "'";
    $result = mysql_query($sql,$accounts) or die(mysql_error());
}

// Update Session //
$_SESSION["hArray"] = $hits;
$_SESSION["aArray"] = $atbats;

header("Location: enterstatspage.php");

?>

