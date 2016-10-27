<?php
$toolName = "Compound Interest Calculator";
$keywords = "investing,stocks,bonds,bank interest";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>Compound Interest Calculator</h1>
    <fieldset>
        <label for="principal">Principal</label><br>
        <input id="principal" type="number" step="0.01"><br>
        <label for="yearsToGrow">Years to Grow</label><br>
        <input id="yearsToGrow" type="number"><br>
        <label for="interestRate">Interest Rate (%)</label><br>
        <input id="interestRate" type="number"><br>
        <label for="compoundFrequency"># of Times Compounded Annually</label><br>
        <input id="compoundFrequency" type="number"><br>
    </fieldset>

    <div class="outputContainer">
        <label for="finalAmount">Final Amount</label><br>
        <output id="finalAmount"></output>
    </div>

    <script>
        function formatOutput(a){
            a = Math.round(a * 100)/100;
            a = a.toLocaleString();
            var digitsAfterDecimal = a.length - a.lastIndexOf(".") - 1;
            if(a.lastIndexOf(".") < 0){
                digitsAfterDecimal = 0;
                a += ".";
            }
            for(var i = digitsAfterDecimal; i < 2; i++){
                a += "0";
            }
            return a;
        }
        $(document).ready(function(){
            function refreshResult(){
                p = Number($("#principal").val());
                r = Number($("#interestRate").val())/100;
                n = Number($("#compoundFrequency").val());
                t = Number($("#yearsToGrow").val());
                var a = Math.pow(1 + r/n,n*t) * p; // A = P * (1 + r/n)^nt
                a = formatOutput(a);
                $("#finalAmount").val(a)
            }
            setOnChangeListener(refreshResult);
        });
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'php/footer.php');?>
