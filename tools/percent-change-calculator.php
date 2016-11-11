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

    <div id="output"></div>

    <script>
        $(document).ready(function(){
            function refreshResult(){
                var firstValue = Number($("#firstValue").val());
                var secondValue = Number($("#secondValue").val());

                output(function(){
                    if(!$.isNumeric(firstValue)) throw 'First Value is not a number';
                    if(!$.isNumeric(secondValue)) throw 'Second Value is not a number';
                    if(firstValue == 0) throw 'First Value cannot be 0';
                    var percentChange = (secondValue - firstValue)/Math.abs(firstValue);
                    percentChange *= 100;

                    percentChange = percentChange.format(2);

                    return percentChange + '%';
                });
            }
            setOnChangeListener(refreshResult);
        });
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
