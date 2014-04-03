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
            $(document).ready(function() {
        
                // Hide Main Windows //
                $('div#aboutDiv').hide();
                $('div#batDiv').hide();
                
                // Hide Title Text //
                $('div#t2013').hide();
                $('div#t2014').hide();
                
                // Hide Batting Average Text and Graphs //
                $('div#aveTextDiv2012').hide();
                $('div#aveTextDiv2013').hide();
                $('div#aveTextDiv2014').hide();
                $('div#aveGraphDiv2012').hide();
                $('div#aveGraphDiv2013').hide();
                $('div#aveGraphDiv2014').hide();
                
                $('a#ave2012Ref').click(function()
                {           
                    $('div#t2013').fadeOut(400);
                    $('div#t2014').fadeOut(400);
                    $('div#aveTextDiv2013').fadeOut(400); 
                    $('div#aveTextDiv2014').fadeOut(400); 
                    $('div#aveGraphDiv2013').fadeOut(400); 
                    $('div#aveGraphDiv2014').fadeOut(400);
                    $('div#t2012').delay(400).fadeIn(400);
                    $('div#aveTextDiv2012').delay(400).fadeIn(400);
                    $('div#aveGraphDiv2012').delay(400).fadeIn(400);
                });  
                
                $('a#ave2013Ref').click(function()
                {           
                    $('div#t2012').fadeOut(400);
                    $('div#t2014').fadeOut(400);
                    $('div#aveTextDiv2012').fadeOut(400); 
                    $('div#aveTextDiv2014').fadeOut(400); 
                    $('div#aveGraphDiv2012').fadeOut(400); 
                    $('div#aveGraphDiv2014').fadeOut(400);
                    $('div#t2013').delay(400).fadeIn(400);
                    $('div#aveTextDiv2013').delay(400).fadeIn(400);
                    $('div#aveGraphDiv2013').delay(400).fadeIn(400);
                });
                
                $('a#ave2014Ref').click(function()
                {           
                    $('div#t2012').fadeOut(400);
                    $('div#t2013').fadeOut(400);
                    $('div#aveTextDiv2012').fadeOut(400); 
                    $('div#aveTextDiv2013').fadeOut(400); 
                    $('div#aveGraphDiv2012').fadeOut(400); 
                    $('div#aveGraphDiv2013').fadeOut(400);
                    $('div#t2014').delay(400).fadeIn(400);
                    $('div#aveTextDiv2014').delay(400).fadeIn(400);
                    $('div#aveGraphDiv2014').delay(400).fadeIn(400);
                });
                
                $('a#homeRef').click(function()
                {           
                    $('div#batDiv').fadeOut(400); 
                    $('div#aboutDiv').fadeOut(400); 
                    $('div#homeDiv').delay(400).fadeIn(400);
                    
                    // Set Selected Ref Color //
                    //$('a#homeRef').css("color","#0088cc");
                    //$('a#aboutRef').css("color","#FFFFFF");
                    //$('a#batRef').css("color","#FFFFFF");
                });
        
                $('a#aboutRef').click(function()
                {           
                    $('div#batDiv').fadeOut(400); 
                    $('div#homeDiv').fadeOut(400); 
                    $('div#aboutDiv').delay(400).fadeIn(400);
                    
                    // Set Selected Ref Color //
                    //$('a#homeRef').css("color","#FFFFFF");
                    //$('a#aboutRef').css("color","#0088cc");
                    //$('a#batRef').css("color","#FFFFFF");
                });
                
                $('a#batRef').click(function()
                {           
                    $('div#aboutDiv').fadeOut(400); 
                    $('div#homeDiv').fadeOut(400); 
                    $('div#batDiv').delay(400).fadeIn(400);
                    $('div#aveTextDiv2012').delay(400).fadeIn(400);
                    $('div#aveGraphDiv2012').delay(400).fadeIn(400);
                    
                    // Set Selected Ref Color //
                    //$('a#homeRef').css("color","#FFFFFF");
                    //$('a#aboutRef').css("color","#FFFFFF");
                    //$('a#batRef').css("color","#0088cc");
                });
        
                // Zoom in on Team Pic on hover //
                $('#teamPic')
                .wrap('<span style="display:inline-block"></span>')
                .css('display', 'block')
                .parent()
                .zoom({magnify: 2, duration: 250, on: 'grab'});
        
                // For Player Text Div //
                $(".divPlayer").hover(
                function() 
                {
                    // hover in //
                    $(this).animate({
                       backgroundColor: "#aad15c"
                    }, "fast");  
                }, 
                function() 
                {
                    // hover out //
                    $(this).animate({
                        backgroundColor: "#ffffff"
                    }, "fast");
                });
                        
                // For Player Picture //
                $(".pImage").hover(
                function() 
                {
                    // hover in //
                    $(this).animate({
                       height: "120",
                       width: "120"
                    }, "fast");  
                }, 
                function() 
                {
                    // hover out //
                    $(this).animate({
                        height: "60",
                        width: "60"
                    }, "fast");
                });
            });   
        </script>

        <title>Softball</title>
        
    </head>
    <body style="margin: 0px; padding: 0px;">
        <div class="divHead">
            Team Record 2014: 0 - 0 
        </div>
        <nav class="navigate" style="margin-bottom: 0px;">
            <div class="navy" style="float: left; margin-left: 20px;">
                <a id="homeRef" href="#">Home</a>
            </div>
            <div class="navy" style="float: left;">
                <a id="aboutRef" href="#">
                    <img src="Images/mag.png" alt="" width="20px" height="20px" style="border: 0;" />
                Scouting Report</a>
            </div>
            <div class="navy" style="float: left;">
                <a id="batRef" href="#">
                <img src="Images/Baseball.png" alt="" width="15px" height="20px" style="border: 0;"/>
                Batting Average</a>
             </div>
        </nav>
        
        <div style="clear: both; width: 100%;">
            
            <?php
            // Home //
            echo $home;

            // Scouting Report //
            echo $about;

            // Batting Average //
            echo '<div id="batDiv" >';
            include 'averageFunctions.php';

            // Surrounding Div //
            echo '<div style="text-align: center; padding-bottom: 10px; background-color: white;">
                    <div id="t2012" style="text-align: center; font-size: 35px; padding-top: 20px; padding-bottom: 45px;" class="sansserif">Softball 2012</div>
                    <div id="t2013" style="text-align: center; font-size: 35px; padding-top: 20px; padding-bottom: 45px;" class="sansserif">Softball 2013</div>
                    <div id="t2014" style="text-align: center; font-size: 35px; padding-top: 20px; padding-bottom: 45px;" class="sansserif">Softball 2014</div>
                      <div style="width: 40%; float: left; text-align: right; margin-right: 30px; padding-top: 0px;">
                          <div style="padding-top: 5px; margin-right: 5px; font-size:19px;">Select Year</div>
                          <ul class="yearstat">
                             <li><a id="ave2012Ref" href="#">2012</a></li>
                             <li><a id="ave2013Ref" href="#">2013</a></li>
                             <li><a id="ave2014Ref" href="#">2014</a></li>
                             <li><a href="enterstatspage.php">
                                  <img src="Images/Stats.png" alt="" width="30px" height="20px" style="border: 0;"/>
                                  Enter Stats</a></li>
                         </ul>';

            // Call Avergage //
            getAverage();

            // End Divs //
            echo '</div>';
            echo '</div>';
            ?>
            
        </div>
    </body>
</html>
