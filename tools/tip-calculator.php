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

    <div class="outputContainer">
        <table>
            <tr>
                <td><label for="totalTip">Total Tip</label></td>
                <td><output id="totalTip"></output></td>
            </tr>
            <tr>
                <td><label for="tipPerPerson">Tip Per Person</label></td>
                <td><output id="tipPerPerson"></output></td>
            </tr>
            <tr>
                <td><label for="totalToPay">Total To Pay (Bill + Tip)</label></td>
                <td><output id="totalToPay"></output></td>
            </tr>
            <tr>
                <td><label for="totalPerPerson">Total Per Person</label></td>
                <td><output id="totalPerPerson"></output></td>
            </tr>
        </table>
    </div>

    <script>
        $(document).ready(function(){
            function refreshResult(){
                var bill = Number($("#bill").val());
                var tipPercentage = Number($("#tipPercentage").val());
                var numberOfPeople = Number($("#numberOfPeople").val());

                if(bill >= 0 && tipPercentage >= 0 && numberOfPeople > 0){
                    var totalTip = bill * (tipPercentage / 100);
                    $("#totalTip").val(moneyString(totalTip));
                    var tipPerPerson = totalTip / numberOfPeople;
                    $("#tipPerPerson").val(moneyString(tipPerPerson));
                    var totalToPay = bill + totalTip;
                    $("#totalToPay").val(moneyString(totalToPay));
                    var totalPerPerson = totalToPay / numberOfPeople;
                    $("#totalPerPerson").val(moneyString(totalPerPerson));
                }else{
                    $("#totalTip").val(moneyString(0));
                    $("#tipPerPerson").val(moneyString(0));
                    $("#totalToPay").val(moneyString(0));
                    $("#totalPerPerson").val(moneyString(0));
                }

            }
            setOnChangeListener(refreshResult);
        });
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
