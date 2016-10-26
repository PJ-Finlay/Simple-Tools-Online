<?php
$toolName = "Rowing Weight Adjustment Calculator";
$keywords = "crew, rowing, weight adjustment";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>Rowing Weight Adjustment Calculator</h1>
    <fieldset>
        <legend>Units</legend>
        <input type="radio" name="unitName" id="unitType-imperial" checked>
        <label for="unitType-imperial">Imperial</label><br>
        <input type="radio" name="unitName" id="unitType-metric">
        <label for="unitType-metric">Metric</label>
    </fieldset>

    <fieldset id="weight-lbs-fieldset">
        <legend>Weight</legend>
        <label for="weight-lbs">Lbs</label><br>
        <input type="number"  id="weight-lbs">
    </fieldset>

    <fieldset id="weight-kgs-fieldset">
        <legend>Weight</legend>
        <label for="weight-kgs">Kgs</label><br>
        <input type="number" id="weight-kgs">
    </fieldset>

    <fieldset>
        <legend>Type</legend>
        <input type="radio" name="rowType" id="rowType-timed" checked>
        <label for="rowType-timed">Timed</label><br>
        <input type="radio" name="rowType" id="rowType-distance">
        <label for="rowType-distance">Distance</label>
    </fieldset>

    <fieldset id="timeFieldset">
        <legend>Time</legend>
        <label for="timeHours">Hours</label><br>
        <input type="number" id="timeHours"><br>
        <label for="timeMinutes">Minutes</label><br>
        <input type="number" id="timeMinutes"><br>
        <label for="timeSeconds">Seconds</label><br>
        <input type="number" id="timeSeconds">
    </fieldset>

    <fieldset id="distanceFieldset">
        <legend>Distance</legend>
        <label for="distance">Meters</label><br>
        <input type="number" id="distance">
    </fieldset>

    <div class="outputContainer">
        <table>
            <tr>
                <td><label for="weightFactorOutput">Adjusted Weight Factor</label></td>
                <td><output id="weightFactorOutput"></output></td>
            </tr>
            <tr id="adjustedDistanceRow">
                <td><label for="adjustedDistanceOutput">Adjusted Distance</label></td>
                <td><output id="adjustedDistanceOutput"></output></td>
            </tr>
            <tr id="adjustedTimeRow">
                <td><label for="adjustedTimeOutput">Adjusted Time</label></td>
                <td><output id="adjustedTimeOutput"></output></td>
            </tr>
        </table>
    </div>

    <script>
        $(document).ready(function(){
            //Only show valid inputs based on units
            var usingImperial;
            function showImperial(){
                $("#weight-lbs-fieldset").show();
                $("#weight-kgs-fieldset").hide();
                usingImperial = true;
            }
            function showMetric(){
                $("#weight-kgs-fieldset").show();
                $("#weight-lbs-fieldset").hide();
                usingImperial = false;
            }
            $("#unitType-imperial").change(showImperial);
            $("#unitType-metric").change(showMetric);
            showImperial();
            //Only show one of distance/time fields
            var usingTime;
            function showTime(){
                $("#timeFieldset").show();
                $("#distanceFieldset").hide();
                $("#adjustedDistanceRow").hide();
                $("#adjustedTimeRow").show();
                usingTime = true;
            }
            function showDistance(){
                $("#timeFieldset").hide();
                $("#distanceFieldset").show();
                $("#adjustedDistanceRow").show();
                $("#adjustedTimeRow").hide();
                usingTime = false;
            }
            showTime();
            $("#rowType-timed").change(showTime);
            $("#rowType-distance").change(showDistance);

            //Calculate Result
            function refreshResult(){
                if(usingImperial){
                    weightInLbs = $("#weight-lbs").val();
                }else{
                    weightInLbs = $("#weight-kgs").val() * 2.20462;
                }
                var weightFactor = Math.pow((weightInLbs/270),.222);
                outputResult("#weightFactorOutput",weightFactor,3);

                if(usingTime){
                    var timeInSeconds = Number($("#timeHours").val()*60*60) + Number($("#timeMinutes").val()*60) + Number($("#timeSeconds").val());
                    var adjustedTimeInSeconds = weightFactor * timeInSeconds;
                    if(!$.isNumeric(adjustedTimeInSeconds)){
                        adjustedTimeInSeconds = 0;
                    }
                    var hours = Math.floor(adjustedTimeInSeconds/(60*60));
                    adjustedTimeInSeconds -= hours * (60*60);
                    var minutes = Math.floor(adjustedTimeInSeconds/60);
                    adjustedTimeInSeconds -= minutes * 60;
                    var seconds = adjustedTimeInSeconds.toFixed(2);
                    var timeString = String(hours)+":"+String(minutes)+":"+seconds;
                    $("#adjustedTimeOutput").val(timeString);
                }else{
                    var correctedDistance = $("#distance").val() / weightFactor;
                    if(!$.isNumeric(correctedDistance)){
                        correctedDistance = 0;
                    }
                    $("#adjustedDistanceOutput").val(correctedDistance.toFixed(2)+"m");
                }
            }
            refreshResult();
            usingTime = !usingTime;
            refreshResult();
            usingTime = !usingTime;
            setOnChangeListener(refreshResult);
        });
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'php/footer.php');?>
