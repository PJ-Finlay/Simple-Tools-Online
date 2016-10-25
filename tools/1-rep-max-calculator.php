<?php
$toolName = "1RM Calculator";
$keywords = "1RM, 1-Rep max, One Rep Max Calculator, weightlifting";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>1 Rep Max Calculator</h1>

    <fieldset id="weight-fieldset">
        <legend>Weight</legend>
        <label for="weight">Lbs or Kgs</label><br>
        <input type="number"  id="weight">
    </fieldset>

    <fieldset id="reps-fieldset">
        <legend>Reps</legend>
        <input type="number"  id="reps">
    </fieldset>

    <div class="outputContainer">
        <label for="1RMOutput">1RM</label>
        <output id="1RMOutput"></output>
    </div>

    <script>
        $(document).ready(function(){
            function refreshResult(){
                var weight = Number($("#weight").val());
                var reps = Number($("#reps").val());
                if(reps == 1){
                    outputResult("#1RMOutput",weight,1)
                } else if(reps > 1){
                    //Epley Formula
                    var oneRepMax = weight * (1 + reps/30);
                    outputResult("#1RMOutput",oneRepMax,1)
                } else{
                    outputResult("#1RMOutput",0,1)
                }
            }
            refreshResult();
            setOnChangeListener(refreshResult);
        });
    </script>
</article>

<?php include($pathToRoot.'php/footer.php');?>
