<?php
$toolName = "Tip Calculator";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>Tip Calculator</h1>

    <fieldset>
        <label for="bill">Bill</label><br>
        <input type="number"  id="bill" min="0"><br>
        <label for="tipPercentage">Tip %</label><br>
        <input type="number"  id="tipPercentage" value="15" min="0"><br>
        <label for="numberOfPeople">Number of People</label><br>
        <input type="number"  id="numberOfPeople" value="1" min="1">
    </fieldset>

    <div id="output"></div>

    <script>
        $(document).ready(function(){
            function refreshResult(){
                var bill = Number($("#bill").val());
                var tipPercentage = Number($("#tipPercentage").val());
                var numberOfPeople = Number($("#numberOfPeople").val());

                output(function(){
                    if(bill < 0) throw 'Bill must be positive';
                    if(tipPercentage < 0) throw 'Tip percentage must be positive';
                    if(numberOfPeople < 1) throw 'Number of people must be at least 1';

                    var totalTip = bill * (tipPercentage / 100);
                    var tipPerPerson = totalTip / numberOfPeople;
                    var totalToPay = bill + totalTip;
                    var totalPerPerson = totalToPay / numberOfPeople;

                    totalTip = createTableRow("Total Tip", moneyString(totalTip));
                    tipPerPerson = createTableRow("Tip Per Person",moneyString(tipPerPerson));
                    totalToPay = createTableRow("Total To Pay",moneyString(totalToPay));
                    totalPerPerson = createTableRow("Total Per Person",moneyString(totalPerPerson));

                    return '<table>' + totalTip + tipPerPerson + totalToPay + totalPerPerson + '</table>'
                });
            }
            setOnChangeListener(refreshResult);
        });
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
