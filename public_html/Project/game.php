<!DOCTYPE html>
<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<html>
<head>
    <script>
        var canvas;
        var context;
        var cookie;
        var isCookieReady;
        var cookieX;
        var cookieY;
        var cookieWidth;
        var cookieHeight;
        var previousFrame;
        var clickX;
        var clickY;
        var clicks;

        function init() {
            canvas = document.getElementById("board");
            if (canvas.getContext) {
                context = canvas.getContext("2d");
                cookie = new Image();
                clicks = 0;

                cookieX = 252;
                cookieY = 252;
                cookieWidth = 96;
                cookieHeight = 96;

                cookie.src = "cookie.png";
                isCookieReady = false;
                cookie.onload = function() {
                    isCookieReady = true;
                }
                canvas.addEventListener("click", isClicked, false);
                previousFrame = Date.now();
                setInterval(gameLoop, 1000/60);
            }
        }

        function isClicked(mouseEvent) {
            clickX = mouseEvent.pageX - this.offsetLeft;
            clickY = mouseEvent.pageY - this.offsetTop;

            if(clickX < (cookieX + cookieWidth) && clickX > cookieX && clickY < (cookieY + cookieHeight) && clickY > cookieY)
                clicks++;
        }
        
        function gameLoop() {
            var currentFrame = Date.now();
            var gameTime = (currentFrame - previousFrame) / 1000;
            gameDraw(gameTime);
            previousFrame = currentFrame;
        }

        function gameDraw(gameTime) {
            context.clearRect(0, 0, 600, 600);
            context.fillStyle = "rgb(204, 229, 255)";
            context.fillRect(0, 0, 600, 600);

            if(isCookieReady){
                context.drawImage(cookie, cookieX, cookieY);
            }

            context.fillStyle = "rgb(24, 0, 0)";
            context.font = "24px Courier New";
            context.textAlign = "left";
            context.textBaseline = "top";
            context.fillText("Cookies: " + clicks, 5, 568);
        }
    </script>
    <style>
        canvas:focus{
            border: 3px solid black;
        }
        canvas:not(:focus){
            border: 1px dotted black;
        }
    </style>
</head>

<body onload="init();">
    <div style="margin-left: 60px;">
    <h1 style="display: inline;">Fantastic Cookie Clicker</h1>
    <h3 style="display: inline;"><a href="home.php">Back</a></h3>
    </div>
    <main style="margin-left: 30px;">
        <canvas tabindex="0" id="board" width="600px" height="600px" >

        </canvas>
    </main>
    <div>

    </div>
    <div style="margin-left: 60px;">
    <!-- pn253 3/23/22 Buttons added to change the difficulty on click. -->
    <h2> Settings</h2>
    <button onclick="diff(0.8)">Easy</button>
    <button onclick="diff(0.6)">Normal</button>
    <button onclick="diff(0.4)">Hard</button>
    <button onclick="diff(0.001)">Extreme</button>
    </div>

</body>

</html>