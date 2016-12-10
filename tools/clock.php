<?php
$toolName = "Clock";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>
<article>
    <div id="clock">
        <span id="hoursMinutes"></span>
        <span id="amPMSecondsDiv">
            <span id="amPm"></span>
            <br>
            <span id="seconds"></span>
        </span>
        <br>
        <span id="date">Saturday - December 10 2016</span>
    </div>
    <style>
        article{
            text-align: center;
            padding-top: 33vh;
        }
        #hoursMinutes{
            font-size: 10em;
        }
        #amPMSecondsDiv{
            display: inline-block;
            margin-left: 1em;
        }
        #amPm{
            font-size: 3em;
        }
        #seconds{
            font-size: 3em;
        }
        #date{
            font-size: 2em
        }
    </style>
    <script>
    $(document).ready(function(){
        updateTime();
        window.setInterval(updateTime, 500);
        function updateTime(){
            var date = new Date(Date.now());
            var hours = date.getHours();
            var minutes = date.getMinutes();
            var amPm = "AM";
            if(hours > 12){
                hours -= 12;
                amPm = "PM";
            }
            var seconds = date.getSeconds();
            var dayOfWeek = date.getUTCDay();
            var daysofWeekArray = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
            var dayOfWeek = daysofWeekArray[dayOfWeek];
            var month = date.getMonth();
            var monthsArray = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            var month = monthsArray[month];
            var date = date.getDate();
            $("#hoursMinutes").html(String(hours) + ":" + minutes.format(0,2));
            $("#amPm").html(amPm);
            $("#seconds").html(seconds.format(0,2));
            $("#date").html(dayOfWeek + ' - ' + month + ' ' + date);
        }
    });
    </script>
</article>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
