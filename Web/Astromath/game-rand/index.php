<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['grupo']!=0) {
  header("Location: ../index.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Generated by GameMaker:Studio http://www.yoyogames.com/gamemaker/studio -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="pragma" content="no-cache"/>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name ="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <meta charset="utf-8"/>

        <!-- Set the title bar of the page -->
        <title>Astromath</title>

        <!-- Set the background colour of the document -->
        <style>
            body {
              background: #000000;
              color:#cccccc;
              margin: 0px;
              padding: 0px;
              border: 0px;
            }
            canvas {
                      image-rendering: optimizeSpeed;
                      -webkit-interpolation-mode: nearest-neighbor;
                      -ms-touch-action: none;
                      margin: 0px;
                      padding: 0px;
                      border: 0px;
            }
            :-webkit-full-screen #canvas {
                 width: 100%;
                 height: 100%;
            }
            div.gm4html5_div_class
            {
              margin: 0px;
              padding: 0px;
              border: 0px;
            }
            /* START - Login Dialog Box */
            div.gm4html5_login
            {
                 padding: 20px;
                 position: absolute;
                 border: solid 2px #000000;
                 background-color: #404040;
                 color:#00ff00;
                 border-radius: 15px;
                 box-shadow: #101010 20px 20px 40px;
            }
            div.gm4html5_cancel_button
            {
                 float: right;
            }
            div.gm4html5_login_button
            {
                 float: left;
            }
            div.gm4html5_login_header
            {
                 text-align: center;
            }
            /* END - Login Dialog Box */
            :-webkit-full-screen {
               width: 100%;
               height: 100%;
            }
        </style>
    </head>

    <body>
        <div class="gm4html5_div_class" id="gm4html5_div_id">
            <!-- Create the canvas element the game draws to -->
            <canvas id="canvas" width="600" height="420">
               <p>Your browser doesn't support HTML5 canvas.</p>
            </canvas>
        </div>

        <!-- Run the game code -->
        <script type="text/javascript" src="html5game/AstromathSinFeedbackRand.js?QNMZB=994031601"></script>
        <script>window.onload = GameMaker_Init;</script>
    </body>
</html>
