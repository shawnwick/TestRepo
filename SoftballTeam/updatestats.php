<?php

session_start();

$game = '';

// Get p to see if Game or Date //
if (!empty($_GET['p']))
{
    $p = $_GET['p'];
    
    $gString = strstr($p, 'game');
    $dString = strstr($p, 'Softball');
    
    // Game String Found //
    if($gString != '')
    {
        $game = $p;
    }
    
    // Date String Found //
    if($dString != '')
    {
        // Search First Game //
        $_SESSION['date'] = $p;
        $game = 'game1';
    } 
}

$date = $_SESSION['date'];
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

if (!empty($_GET['p']))
{   
    for($i=1;$i<12;$i++)
    {
        $sql = "SELECT * FROM " . $game . " WHERE user_id='" . $i . "'";
        $result = mysql_query($sql,$accounts) or die(mysql_error());
        $row = mysql_fetch_array($result);

        $ppArray[$i - 1] = $row['Player'];
        $hhArray[$i - 1] =  $row['Hits'];
        $aaArray[$i - 1] =  $row['AtBats'];
    }
}

$_SESSION["pArray"] = $ppArray;
$_SESSION["hArray"] = $hhArray;
$_SESSION["aArray"] = $aaArray;
$_SESSION["gameHold"] = $game;

header("Location: enterstatspage.php");

?>

