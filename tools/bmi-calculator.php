<?php
$toolName = "BMI Calculator";
$keywords = "underweight, normal weight, overweight, obesity";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>BMI Calculator</h1>
    <fieldset>
        <legend>Units</legend>
        <input type="radio" name="unitName" id="unitType-imperial" checked>
        <label for="unitType-imperial">Imperial</label><br>
        <input type="radio" name="unitName" id="unitType-metric">
        <label for="unitType-metric">Metric</label>
    </fieldset>

    <fieldset id="weight-imperial-fieldset">
        <legend>Weight</legend>
        <label for="weight-lbs">Lbs</label><br>
        <input type="number"  id="weight-lbs">
    </fieldset>

    <fieldset id="weight-metric-fieldset">
        <legend>Weight</legend>
        <label for="weight-kgs">Kgs</label><br>
        <input type="number" id="weight-kgs">
    </fieldset>

    <fieldset id="height-imperial-fieldset">
        <legend>Height</legend>
        <label for="height-feet">Feet</label><br>
        <input type="number" id="height-feet"><br>
        <label for="height-in">Inches</label><br>
        <input type="number" id="height-in">
    </fieldset>

    <fieldset id="height-metric-fieldset">
        <legend>Height</legend>
        <label for="height-centimeters">Centimeters</label><br>
        <input type="number" id="height-centimeters">
    </fieldset>

    <div class="outputContainer">
        <label for="bmiOutput">BMI</label><br>
        <output id="bmiOutput"></output>
    </div>

    <section class="toolDescription">
        <table>
            <thead>
                <tr>
                    <th>BMI</th>
                    <th>Classification</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Below 18.5</td>
                    <td>Underweight</td>
                </tr>
                <tr>
                    <td>18.5—24.9</td>
                    <td>Normal Weight</td>
                </tr>
                <tr>
                    <td>25.0—29.9</td>
                    <td>Overweight</td>
                </tr>
                <tr>
                    <td>30.0 and Above</td>
                    <td>Obesity</td>
                </tr>
            </tbody>
        </table>
    </section>

    <script>
        $(document).ready(function(){
            var usingImperial;
            function showImperial(){
                $("#height-imperial-fieldset,#weight-imperial-fieldset").show();
                $("#height-metric-fieldset,#weight-metric-fieldset").hide();
                usingImperial = true;
            }
            function showMetric(){
                $("#height-metric-fieldset,#weight-metric-fieldset").show();
                $("#height-imperial-fieldset,#weight-imperial-fieldset").hide();
                usingImperial = false;
            }
            $("#unitType-imperial").change(showImperial);
            $("#unitType-metric").change(showMetric);
            showImperial();

            function refreshResult(){
                if(usingImperial){
                    var weightLbs = Number($("#weight-lbs").val());
                    var heightFeet = Number($("#height-feet").val());
                    var heightInches = Number($("#height-in").val());
                    var heightMeters = (heightFeet * 12 + heightInches) / 39.3701;
                    var weightKgs = weightLbs / 2.20462;
                }else{
                    var weightKgs = Number($("#weight-kgs").val());
                    var heightMeters = Number($("#height-centimeters").val()) / 100;
                    console.log(heightMeters);
                }
                var bmi = weightKgs / (heightMeters * heightMeters);
                outputResult("#bmiOutput",bmi,1)
            }
            setOnChangeListener(refreshResult);
        });
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'php/footer.php');?>
