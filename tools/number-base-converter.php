<?php
$toolName = "Number Base Converter";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>Number Base Converter</h1>

    <fieldset>
        <label for="input">Number</label><br>
        <input type="number"  id="input">
    </fieldset>

    <fieldset>
        <label for="fromBase">From Base</label><br>
        <input type="number"  id="fromBase" min="2" value="10"><br>
        <label for="toBase">To Base</label><br>
        <input type="number"  id="toBase" min="2" value="2">
    </fieldset>

    <div id="output"></div>

    <script>
        $(document).ready(function(){
            function refreshResult(){
                var input = $("#input").val();
                var fromBase = $("#fromBase").val();
                var toBase = $("#toBase").val();

                output(function(){
                    if(!$.isNumeric(input)) throw 'Input number is not a number';
                    if(!$.isNumeric(fromBase)) throw 'From Base is not a number';
                    if(!$.isNumeric(toBase)) throw 'To Base is not a number';
                    if(fromBase < 2) throw 'From Base must be greater than 1';
                    if(toBase < 2) throw 'To Base must be greater than 1';

                    input = parseInt(input,Number(fromBase));
                    return input.toString(Number(toBase));
                });
            }
            setOnChangeListener(refreshResult);
        });
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
