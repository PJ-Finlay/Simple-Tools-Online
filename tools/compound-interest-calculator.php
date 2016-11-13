<?php
$toolName = "Compound Interest Calculator";
$keywords = "investing,stocks,bonds,bank interest";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>Compound Interest Calculator</h1>
    <fieldset>
        <label for="principal">Principal</label><br>
        <input id="principal" type="number"><br>
        <label for="yearsToGrow">Years to Grow</label><br>
        <input id="yearsToGrow" type="number"><br>
        <label for="interestRate">Interest Rate (%)</label><br>
        <input id="interestRate" type="number"><br>
        <label for="compoundFrequency"># of Times Compounded Annually</label><br>
        <input id="compoundFrequency" type="number" value="1" min='1'><br>
    </fieldset>

    <div id="output"></div>

    <script>
        $(document).ready(function(){
            function refreshResult(){
                p = Number($("#principal").val());
                r = Number($("#interestRate").val())/100;
                n = Number($("#compoundFrequency").val());
                t = Number($("#yearsToGrow").val());
                output(function(){
                    if(n < 1) throw '# of times compounded annualy must be at least 1'
                    var a = Math.pow(1 + r/n,n*t) * p; // A = P * (1 + r/n)^nt
                    return moneyString(a);
                });
            }
            setOnChangeListener(refreshResult);
        });
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
