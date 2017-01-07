<?php
$toolName = "Morse Code Converter";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>Morse Code Converter</h1>

    <fieldset>
        <legend>Text</legend>
        <input type="text" id="text">
    </fieldset>

    <div id="twoWayInput"></div>

    <fieldset>
        <legend>Morse Code</legend>
        <input type="text" id="morse">
    </fieldset>

    <script>
    function twoWayInputUp(){
        var roman = $("#roman").val();

        //Replace unicode characters with alphabetical characters
        roman = roman.replaceAll("Ⅰ","I");
        roman = roman.replaceAll("Ⅱ","II");
        roman = roman.replaceAll("Ⅲ","III");
        roman = roman.replaceAll("Ⅳ","IV");
        roman = roman.replaceAll("Ⅴ","V");
        roman = roman.replaceAll("Ⅵ","VI");
        roman = roman.replaceAll("Ⅶ","VII");
        roman = roman.replaceAll("Ⅷ","VIII");
        roman = roman.replaceAll("Ⅸ","IX");
        roman = roman.replaceAll("Ⅹ","X");
        roman = roman.replaceAll("Ⅺ","XI");
        roman = roman.replaceAll("Ⅻ","XII");
        roman = roman.replaceAll("Ⅼ","L");
        roman = roman.replaceAll("Ⅽ","C");
        roman = roman.replaceAll("Ⅾ","D");
        roman = roman.replaceAll("Ⅿ","M");

        $("#number").val(toNumber(roman));
    }

    function twoWayInputDown(){
        var number = $("#number").val();

        if(!$.isNumeric(number)) throw "Input is not a number";
        if(number < 0) throw "Input cannot be negative";
        if(number > 2000) throw "Input cannot be greater than 2000";

        number = Number(number);
        $("#roman").val(toRoman(number));
    }

    function toRoman(input) {
        //Uses Unicode Roman Numerals
        var key = {Ⅿ:1000,ⅭⅯ:900,Ⅾ:500,ⅭⅮ:400,Ⅽ:100,ⅩⅭ:90,Ⅼ:50,ⅩⅬ:40,Ⅹ:10,Ⅸ:9,Ⅴ:5,Ⅳ:4,Ⅰ:1};
        var toReturn = '';
        for(i in key){
            while(input >= key[i]){
                toReturn += i;
                input -= key[i];
            }
        }
        return toReturn;
    }

    function toNumber(input){
        var toReturn = 0;
        var key = {M:1000,CM:900,D:500,CD:400,C:100,XC:90,L:50,XL:40,X:10,IX:9,V:5,IV:4,I:1};
        for(i in key) {
            while (input.indexOf(i) == 0){
                toReturn += key[i];
                input = input.replace(i,'');
            }
        }
        return toReturn;
    }
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
