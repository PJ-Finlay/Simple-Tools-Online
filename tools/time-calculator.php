<?php
$toolName = "Time Calculator";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>Time Calculator</h1>

    <fieldset>
        <legend>Time 1</legend>
        <label for="days-1">Days</label><br>
        <input id="days-1" type="number"><br>
        <label for="hours-1">Hours</label><br>
        <input id="hours-1" type="number"><br>
        <label for="minutes-1">Minutes</label><br>
        <input id="minutes-1" type="number"><br>
        <label for="seconds-1">Seconds</label><br>
        <input id="seconds-1" type="number">
    </fieldset>
    <fieldset>
        <legend>Operation</legend>
        <select id="operation">
            <option value="+">+</option>
            <option value="-">-</option>
        </select>
    </fieldset>
    <fieldset>
        <legend>Time 2</legend>
        <label for="days-2">Days</label><br>
        <input id="days-2" type="number"><br>
        <label for="hours-2">Hours</label><br>
        <input id="hours-2" type="number"><br>
        <label for="minutes-2">Minutes</label><br>
        <input id="minutes-2" type="number"><br>
        <label for="seconds-2">Seconds</label><br>
        <input id="seconds-2" type="number">
    </fieldset>

    <div id="output"></div>

    <script>
        $(document).ready(function(){
            function refreshResult(){
                var time1 = Number($("#days-1").val()) * (24*60*60) + Number($("#hours-1").val()) * (60*60) +
                    Number($("#minutes-1").val()) * 60 + Number($("#seconds-1").val());
                var time2 = Number($("#days-2").val()) * (24*60*60) + Number($("#hours-2").val()) * (60*60) +
                    Number($("#minutes-2").val()) * 60 + Number($("#seconds-2").val());
                var operation = $("#operation").val();

                output(function(){
                    if(operation == "-"){
                        var result = time1 - time2;
                    }else{
                        var result = time1 + time2;
                    }

                    var isNegative = result < 0;
                    result = Math.abs(result);
                    var days = Math.floor(result/(24*60*60));
                    result -= days * (24*60*60);
                    var hours = Math.floor(result/(60*60));
                    result -= hours * (60*60);
                    var minutes = Math.floor(result/60);
                    result -= minutes * t60;
                    var seconds = result;

                    hours = hours.format(0,2);
                    minutes = minutes.format(0,2);
                    seconds = seconds.format(0,2);

                    var signPrefix = '';
                    if(isNegative) signPrefix = '-';
                    return signPrefix + String(days) + " days " + String(hours) + ":" + String(minutes) + ":" + String(seconds);
                });
            }
            setOnChangeListener(refreshResult);
        });
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
