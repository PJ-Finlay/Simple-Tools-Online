<?php
$toolName = "Stopwatch";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>
<div id="fullscreenButton"></div>

<article>
    <div>
        <span id="hoursMinutesSeconds">1:20</span>
        <span id="millisecondsDiv">
            <br>
            <span id="milliseconds">44</span>
        </span>
    </div>
    <div>
        <button id="startStop">Start</button>
        <button id="reset">Reset</button>
    </div>
    <style>
        article{
            text-align: center;
            padding-top: 33vh;
        }

        #hoursMinutesSeconds{
            font-size: 10em;
        }

        #millisecondsDiv{
            display: inline-block;
            margin-left: 1em;
        }

        #milliseconds{
            font-size: 3em;
        }

        #startStop, #reset{
            font-size: 200%;
            margin: .33em;
        }

    </style>
    <script>
    $(document).ready(function(){
        var recordedTime = 0;
        var startTime = null;
        var timeRunning = false;

        updateTime();
        $("#startStop").click(function(){startStop()});
        $("#reset").click(function(){reset()});
        window.setInterval(updateTime, 1);


        function updateTime(){
            var time = new Date(getTotalTime());
            var timeString = "";
            if(time.getUTCHours() > 0){
                timeString += String(time.getUTCHours()) + ":";
            }
            timeString += String(time.getUTCMinutes()) + ":";
            timeString += String(time.getUTCSeconds().format(0,2));
            $("#hoursMinutesSeconds").text(timeString);
            $("#milliseconds").text(String(time.getUTCMilliseconds().format(0,3)));
            document.title = timeString
        }

        function reset(){
            recordedTime = 0;
            startTime = Date.now();
        }

        function stop(){
            timeRunning = false;
            recordedTime += Date.now() - startTime;
        }

        function start(){
            timeRunning = true;
            startTime = Date.now();
        }

        function startStop(){
            if(timeRunning) {
                stop();
                $("#startStop").text("Start");
            }else{
                start();
                $("#startStop").text("Stop");
            }
        }

        function getTotalTime(){
            if(timeRunning){
                 return recordedTime + (Date.now() - startTime);
            }else{
                return recordedTime;
            }
        }
    });
    </script>
</article>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
