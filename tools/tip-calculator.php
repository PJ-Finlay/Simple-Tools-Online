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

                    return ' \
                       <table>\
                            <tr>\
                                <td><label for="totalTip">Total Tip</label></td>\
                                <td><output id="totalTip">' + moneyString(totalTip) + '</output></td>\
                            </tr>\
                            <tr>\
                                <td><label for="tipPerPerson">Tip Per Person</label></td>\
                                <td><output id="tipPerPerson">' + moneyString(tipPerPerson) + '</output></td>\
                            </tr>\
                            <tr>\
                                <td><label for="totalToPay">Total To Pay (Bill + Tip)</label></td>\
                                <td><output id="totalToPay">' + moneyString(totalToPay) + '</output></td>\
                            </tr>\
                            <tr>\
                                <td><label for="totalPerPerson">Total Per Person</label></td>\
                                <td><output id="totalPerPerson">' + moneyString(totalPerPerson) + '</output></td>\
                            </tr>\
                        </table>\
                    '
                });
            }
            setOnChangeListener(refreshResult);
        });
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
