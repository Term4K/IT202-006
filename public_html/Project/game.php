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
        var prestige = 0;

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

        function saveGame() {
            postData({
                score: clicks,
                prest: prestige,
            }, "/Project/api/save_scores.php").then(data => {
                console.log(data);
                if(data.status === 200){
                    flash(data.message, "success");
                } else {
                    flash(data.message, "warning");
                }
            })
        }

        function loadGame() {
            flash("Game Loaded!", "success");
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
    <?php
    require_once(__DIR__ . "/../../partials/flash.php");
    ?>
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
    <?php if (is_logged_in()) : ?>
    <div style="margin-left: 60px;">
    <!-- pn253 3/23/22 Buttons added to change the difficulty on click. -->
        <h2> Save/Load Game</h2>
        <button onclick="saveGame()">Save Game</button>
        <button onclick="loadGame()">Load Game</button>
    </div>
    <?php endif; ?>
</body>

</html>