<?php
$toolName = "Random Number Generator";
$keywords = "generate random integer, generate number between one and ten,
generate random number between 1 and 100";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>Random Number Generator</h1>
    <fieldset>
        <legend>Bounds</legend>
        <label for="lowerBound">Lower Bound (Inclusive)</label><br>
        <input id="lowerBound" type="number" value="1"><br>
        <label for="upperBound">Upper Bound (Inclusive)</label><br>
        <input id="upperBound" type="number" value="10"><br><br>
        <button id="generateButton">Generate</button>
    </fieldset>

    <div id="output"></div>

    <script>
        $(document).ready(function(){
            function refreshResult(){
                var lowerBound = Number($("#lowerBound").val());
                var upperBound = Number($("#upperBound").val());
                output(function(){
                    if(upperBound >= lowerBound){
                        var seed = Math.random();
                        var result = Math.floor((upperBound - lowerBound + 1) * seed) + lowerBound;
                        return String(result);
                    }else{
                        throw "Lower Bound Greater Than Upper Bound";
                    }
                });
            }
            $("#generateButton").click(refreshResult);
            refreshResult();
        });
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
