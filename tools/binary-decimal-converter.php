<?php
$toolName = "Binary Decimal Converter";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>Binary Decimal Converter</h1>

    <fieldset>
        <legend>Decimal</legend>
        <input type="number" id="decimal">
    </fieldset>

    <div id="twoWayInput"></div>

    <fieldset>
        <legend>Binary</legend>
        <input type="text" id="binary">
    </fieldset>

    <script>
    function twoWayInputUp(){
        var binary = $("#binary").val();
        binary = parseInt(binary,2);
        $("#decimal").val(binary.toString());
    }

    function twoWayInputDown(){
        var decimal = $("#decimal").val();
        decimal = parseInt(decimal);
        $("#binary").val(decimal.toString(2));
    }
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
