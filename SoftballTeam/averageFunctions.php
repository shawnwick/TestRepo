<?php

// Get Averages to post //
function getAverage()
{
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
    
    $root[0] = 'u926138038_root';
    $root[1] = 'u926138038_root1';
    $root[2] = 'u926138038_root2';
    $table[0] = 'u926138038_2012';
    $table[1] = 'u926138038_2013';
    $table[2] = 'u926138038_2014';
    $year[0] = '2012';
    $year[1] = '2013';
    $year[2] = '2014';

    // For Website //
    /*
    if($table == 'softball_2012')
    {
        $root = 'u926138038_root';
        $table = 'u926138038_2012';
    }
    if($table == 'softball_2013')
    {
        $root = 'u926138038_root1';
        $table = 'u926138038_2013';
    }
    if($table == 'softball_2014')
    {
        $root = 'u926138038_root2';
        $table = 'u926138038_2014';
    }
    */

    // Get Database //
    //$accounts = mysql_connect("localhost","root","") or die(mysql_error());
    //$accounts = mysql_connect("mysql.freehostingnoads.net",$root,"Studly4") or die(mysql_error());
    
    // Create all 3 Graphs and Text //
    for($z=0;$z<3;$z++)
    {
        $accounts = mysql_connect("mysql.freehostingnoads.net",$root[$z],"Studly4") or die(mysql_error());
        mysql_select_db($table[$z],$accounts) or die(mysql_error());

        // Get the Total to find the average //
        for($j=0;$j<21;$j++)
        {
            // Reset Variables //
            if($j == 0)
            {
                for($i=0;$i<12;$i++)
                {
                    $totalHits[$i] = 0;
                    $totalBats[$i] = 0;
                    $aveHold[$i] = 11;
                    $average[$i] = 0;
                }
            }

            for($i=1;$i<12;$i++)
            {
                $sql = "SELECT * FROM " . $gameArray[$j] . " WHERE user_id='" . $i . "'";
                $result = mysql_query($sql,$accounts) or die(mysql_error());
                $row = mysql_fetch_array($result);

                $tempHits = $row['Hits'];
                $tempBats = $row['AtBats'];

                $totalHits[$i - 1] = $totalHits[$i - 1] + $tempHits;
                $totalBats[$i - 1] = $totalBats[$i - 1] + $tempBats;  
            }
        }

        // Compute Average //
        for($i=0;$i<11;$i++)
        {
            if($totalBats[$i] != 0)
            {
                $average[$i] = $totalHits[$i] / $totalBats[$i];
            }
            else
            {
                $average[$i] = 0;
            }
        }

        // Sort Average //
        $aveHold[0] = 0;
        for ($j = 1; $j < 11; $j++)
        {
            for ($i = 0; $i < 11; $i++)
            {
                if ($average[$j] >= $average[$aveHold[$i]])
                {
                    // Shift All Down //
                    for ($k = 10; $k > $i; $k--)
                    {
                        $aveHold[$k] = $aveHold[$k-1];
                    }
                    $aveHold[$i] = $j;
                    break;
                }
            }
        }

        // Sort Array //
        $aHold = $average;
        rsort($average);
        $aveSort = $average;
        $average = $aHold;
        
        // Make 3 Leader divs //
        echo '<div id="aveTextDiv' . $year[$z] . '" >';
        echo '<div style="padding-bottom: 5px; font-size:19px;">Leaderboard</div>';
        
        for($i=0;$i<11;$i++)
        {
            // Make an href for Graph of Individual Averages //
            echo $teamArray[$aveHold[$i]] . ' - ' . number_format($average[$aveHold[$i]], 3)  . '<br>';
        }

        // End Left Div //
        echo '</div>';

        // Graph Variables //
        $maxv = 1;
        $width = 450;
        $height = 450;
        $adjHeight = $height - 50;
        $adjWidth = $width - 50;
        $columns = 11;
        $im = imagecreate($width,$height);

        $black   = imagecolorallocate($im,0,0,0);
        $white = imagecolorallocate($im,255,255,255);
        $red   = imagecolorallocate($im,255,0,0);  
        $green = imagecolorallocate($im,0,255,0);
        $blue  = imagecolorallocate($im,0,0,255);
        $gray      = imagecolorallocate ($im,0xcc,0xcc,0xcc);
        $gray_l    = imagecolorallocate ($im,0xdd,0xdd,0xdd);
        $gray_lite = imagecolorallocate ($im,0xee,0xee,0xee);
        $gray_dark = imagecolorallocate ($im,0x7f,0x7f,0x7f);

        $padding = 5;
        $column_width = $adjWidth / $columns ;

        // Fill in the background of the image //
        imagefilledrectangle($im,0,0,$width,$height,$white);
        
        // Draw Grid //
        //bool imageline ( resource $image , int $x1 , int $y1 , int $x2 , int $y2 , int $color )
        imageline($im, 40, 0, 450, 0, $gray_l );
        imageline($im, 40, 40, 450, 40, $gray_l );
        imageline($im, 40, 80, 450, 80, $gray_l );
        imageline($im, 40, 120, 450, 120, $gray_l );
        imageline($im, 40, 160, 450, 160, $gray_l );
        imageline($im, 40, 200, 450, 200, $gray_l );
        imageline($im, 40, 240, 450, 240, $gray_l );
        imageline($im, 40, 280, 450, 280, $gray_l );
        imageline($im, 40, 320, 450, 320, $gray_l );
        imageline($im, 40, 360, 450, 360, $gray_l );

        // Draw Each Column //
        for($i=0;$i<11;$i++)
        {
            // Get New Height //
            $column_height = ($adjHeight / 100) * (( $average[$i] / $maxv) *100);

            // Get Coordinates //
            $x1 = $i*$column_width + 50;
            $y1 = $adjHeight-$column_height;
            $x2 = (($i+1)*$column_width)-$padding + 50;
            $y2 = $adjHeight;

            // Fill Rec //
            if($average[$i] == $aveSort[0])
            {
                imagefilledrectangle($im,$x1,$y1,$x2,$y2,$blue);
            }
            else
            {
                imagefilledrectangle($im,$x1,$y1,$x2,$y2,$gray);
            }

            // 3D Effect //
            imageline($im,$x1,$y1,$x1,$y2,$gray_lite);
            imageline($im,$x1,$y2,$x2,$y2,$gray_lite);
            imageline($im,$x2,$y1,$x2,$y2,$gray_dark);

            // Write Name //
            imagestring($im,1,$x1+3,$height-40,$teamArray[$i],$black);
        }

        //draw X, Y Co-Ordinate
        //bool imageline ( resource $image , int $x1 , int $y1 , int $x2 , int $y2 , int $color )
        imageline($im, 40, 0, 40, $adjHeight, $black );
        imageline($im, 40, $adjHeight, $width, $adjHeight, $black );

        //bool imagestring ( resource $image , int $font , int $x , int $y , string $string , int $color )
        imagestring($im,3,0,0,"1.000",$black);
        imagestring($im,3,0,40,".900",$black);
        imagestring($im,3,0,80,".800",$black);
        imagestring($im,3,0,120,".700",$black);
        imagestring($im,3,0,160,".600",$black);
        imagestring($im,3,0,200,".500",$black);
        imagestring($im,3,0,240,".400",$black);
        imagestring($im,3,0,280,".300",$black);
        imagestring($im,3,0,320,".200",$black);
        imagestring($im,3,0,360,".100",$black);

        // Draw Leader Name //
        $leader = 'Hit Leader - ' . $teamArray[$aveHold[0]];
        $font = imageloadfont("Fonts/mv.gdf");
        imagestring($im,$font,$width/2,5,$leader,$blue);

        // Make png //
        imagepng( $im, 'graph' . $z . '.png', 0);
        imagedestroy($im);  
    }
    
    // End Text Div //
    echo '</div>';
        
    // Graph Div //
    echo '<div style="width: 50%; float: left; text-align: left; padding-top: 0px;">';
    
    for($z=0;$z<3;$z++)
    {    
        // Show png //
        echo '<div id="aveGraphDiv' . $year[$z] . '" >';
        echo '<img src="graph' . $z . '.png"><p></p>';
        echo '</div>';
    }

    // End Graph Div //
    echo '</div>';
}

?>

