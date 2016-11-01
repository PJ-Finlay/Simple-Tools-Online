<?php
$toolName = "Percent Change Calculator";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>Percent Change Calculator</h1>

    <fieldset>
        <label for="firstValue">First Value</label><br>
        <input type="number"  id="firstValue"><br>
        <label for="secondValue">Second Value</label><br>
        <input type="number"  id="secondValue"><br>
    </fieldset>

    <div class="outputContainer">
        <label for="percentChangeOutput">Percent Change</label><br>
        <output id="percentChangeOutput"></output>
    </div>

    <script>
        $(document).ready(function(){
            function refreshResult(){
                var firstValue = Number($("#firstValue").val());
                var secondValue = Number($("#secondValue").val());
                var percentChange = (secondValue - firstValue)/Math.abs(firstValue);
                percentChange *= 100;
                if($.isNumeric(percentChange)){
                    $("#percentChangeOutput").val(String(percentChange)+"%");
                }else{
                    $("#percentChangeOutput").val(String(0)+"%");
                }
            }
            setOnChangeListener(refreshResult);
        });
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
