<?php
$toolName = "1RM Calculator";
$keywords = "1RM, 1-Rep max, One Rep Max Calculator, weightlifting";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>1 Rep Max Calculator</h1>

    <fieldset id="weight-fieldset">
        <legend>Weight</legend>
        <label for="weight">Weight</label><br>
        <input type="number"  id="weight" min='0'>
    </fieldset>

    <fieldset id="reps-fieldset">
        <legend>Reps</legend>
        <input type="number"  id="reps" min='2'>
    </fieldset>

    <div id="output"></div>

    <script>
        $(document).ready(function(){
            function refreshResult(){
                var weight = Number($("#weight").val());
                var reps = Number($("#reps").val());
                output(function() {
                    if(weight < 0) throw 'Weight must be at least 0';
                    if(reps < 2) throw 'Reps must be at least 2';
                    //Epley Formula
                    var oneRepMax = weight * (1 + reps/30);
                    return oneRepMax.format(1);
                });
            }
            setOnChangeListener(refreshResult);
        });
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
