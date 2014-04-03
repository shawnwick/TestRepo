<?php

session_start();

// Default Year //
$year = 'Softball - 2014';

// Start as 2014 //
if(!isset($_SESSION["date"]))
{
    $_SESSION["date"] = 'Softball_2014';
}

$about = '<div id="aboutDiv">
            <table style="margin-left: auto; margin-right: auto; margin-top: 45px;">
                <tr>
                    <td>
                        <img class="pImage" src="Images/Ben.jpg" />
                    </td>
                    <td
                        <div class="divPlayer">
                        <b>Ben</b> - Every 3-1 pitch he gives himself the green light.
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="pImage" src="Images/Brian.jpg" />
                    </td>
                    <td>
                        <div class="divPlayer">
                        <b>Brian</b> - Is he golfing?  You decide.
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="pImage" src="Images/Chad.jpg" />
                    </td>
                    <td>
                        <div class="divPlayer">
                        <b>Chad</b> - Look at those muscles, he is going yard every time.
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="pImage" src="Images/Chris.jpg" />
                    </td>
                    <td>
                        <div class="divPlayer">
                        <b>Chris</b> - He can hit homeruns, but in crunch time you can count on a dribbler back to the pitcher.
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="pImage" src="Images/ErikB.jpg" />
                    </td>
                    <td>
                        <div class="divPlayer">
                        <b>Erik B</b> - Two guarantees, he will hit at least one homerun and pull one hamstring each year.
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="pImage" src="Images/ErikH.jpg" />
                    </td>
                    <td>
                        <div class="divPlayer">
                        <b>Erik H</b> - Does not care until tourney time.
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="pImage" src="Images/Jason.jpg" />
                    </td>
                    <td>
                        <div class="divPlayer">
                        <b>Jason</b> - Will piss off at least one umpire a year, maybe two.
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="pImage" src="Images/Jay.jpg" />
                    </td>
                    <td>
                        <div class="divPlayer">
                        <b>Jay</b> - Calls off Jesse every time.
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="pImage" src="Images/Jesse.jpg" />
                    </td>
                    <td>
                        <div class="divPlayer">
                        <b>Jesse</b> - One bloop single a game to shallow right field.  Would be a double if he wasn\'t walking.
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="pImage" src="Images/Shawn.jpg" />
                    </td>
                    <td>
                        <div class="divPlayer">
                        <b>Shawn</b> - Makes routine pop fly balls look unnecessarily difficult.
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="pImage" src="Images/Tony.jpg" />
                    </td>
                    <td>
                        <div class="divPlayer">
                        <b>Tony</b> - He never lets anything out of the infield, but that may be because he plays 1/4th the way into the outfield.
                        </div>
                    </td>
                </tr>
            </table>
        </div>';

$home = '<div id="homeDiv">
            <div style="font-size: 30px; text-align: center; margin-top: 50px;">
                Welcome to the Shrimp Shack Shooters Homepage <br> 
                Check out the batting average or enter stats.
            </div>
            <div class="teamPic" style="">
            <span class="sssPic">
                <img id="teamPic" src="Images/Team.jpg" alt="" width="450px" height="400px" />
                <p>Grab</p>
            </span>
            </div>
        </div>';

// Main Home Page //
include 'homepage.php';
?>





