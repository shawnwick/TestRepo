<?php

    // Need to start the session here //
    session_start();

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="StyleSheet.css">
        
        <script src="jquery-1.10.2.js" type="text/javascript"></script>
        
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src='js/jquery.zoom.js'></script>
  
        <script type="text/javascript">
            $(document).ready(function() 
            {
                
                
            });   
        </script>

        <title>Enter Stats</title>
        
    </head>
    <body style="margin: 0px; padding: 0px;">
        <nav class="navigateStat" style="margin-bottom: 0px;">
            <div class="navyStat" style="float: left; margin-left: 20px; border-right: black 1px solid;">
                <a href="index.php" style="margin-right: 20px;">Home</a>
            </div>
        </nav>
        
        <div style="clear: both; width: 100%;">
            <?php
 
            /********************************************/
            // Stat Section //
            /********************************************/

            // Session Hold Stuff //
            $hArray = $_SESSION["hArray"];
            $aArray = $_SESSION["aArray"];
            $gameHold = $_SESSION["gameHold"];
            $date = $_SESSION['date'];
            $year = str_replace('_', ' ' , $date);
            
            ?>

            <form name="statSave" action="enterstats.php" onsubmit="return validateLoginSave()" method="post" class="form-signup">
                <div style="text-align: center; font-size: 35px; padding-top: 20px;;" class="sansserif"><?php echo $year ?></div>
                <div style="width: 45%; float: left; text-align: right; margin-right: 30px; padding-top: 45px;">
                    <div style="padding-bottom: 5px; font-size:19px;">Select Game</div>
                    <select id="gameSelect" name="game" style="margin-right: 15px;" onchange="location = this.options[this.selectedIndex].value;">
                    <?php
                    for($i=0;$i<21;$i++)
                    {
                        $g = $i + 1;
                        if($gameHold == ('game' . $g))
                        {
                            echo '<option value="updatestats.php?p=game' . $g . '" selected="selected">Game ' . $g . '</option>';
                        }
                        else 
                        {
                            echo '<option value="updatestats.php?p=game' . $g . '">Game ' . $g . '</option>';
                        }
                    }
                    ?>
                    </select> 
                    <div style="padding-top: 5px; margin-right: 5px; font-size:19px;">Select Year</div>
                    <ul class="yearstat">
                        <li><a href="updatestats.php?p=Softball_2012">2012</a></li>
                        <li><a href="updatestats.php?p=Softball_2013">2013</a></li>
                        <li><a href="updatestats.php?p=Softball_2014">2014</a></li>
                    </ul>
                </div>
                <div style="width: 50%; float: left; text-align: left; padding-top: 20px;">
                    <table style="">
                       <tr>
                         <td></td>
                         <td style="font-weight: bold;">Hits</td>
                         <td style="font-weight: bold;">At Bats</td>
                       </tr>

                       <?php

                        $i = 0;
                        $teamArray = array(
                        'Ben',
                        'Brian',
                        'Chad',
                        'Chris',
                        'Erik_B',
                        'Erik_H',
                        'Jason',
                        'Jay',
                        'Jesse',
                        'Shawn',
                        'Tony');

                        foreach ($teamArray as $value) 
                        {
                            echo '<tr>
                                <td style="font-weight: bold;">' . $value . ':</td>
                                <td> <input type="text" name="hits[]" MAXLENGTH="1" size="1" value="' . $hArray[$i] . '"></td>
                                <td> <input type="text" name="atbats[]" MAXLENGTH="1" size="1" value="' . $aArray[$i] . '"></td>
                                </tr>';
                            $i++;
                        }

                       ?>
                    </table>
                    <div style="text-align: left; padding-top: 10px;">
                        <input style="width: 150px; margin-left: 5px;" type="submit" value="Update" class="btn btn-large btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
