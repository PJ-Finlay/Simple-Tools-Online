<?php
$toolName = "caesar's cipher, the shift cipher, caesar's code, caesar shift";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>Caesar Cipher Generator</h1>
    <fieldset>
        <legend>Input</legend>
        <label for="textInput">Text</label><br>
        <textarea id="textInput"></textarea><br>
        <label for="shift">Shift</label><br>
        <input id="shift" type="number" value="1"></input>
    </fieldset>

    <div class="outputContainer">
        <label for="output">Result</label><br><br>
        <output>
            <textarea id="output"></textarea>
        </output>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            function refreshResult(){
                clearError();
                var text = $("#textInput").val();
                var shift = $("#shift").val();
                shift = Number(shift);
                if(!$.isNumeric(shift)) showError("Shift must be a number");
                $("#output").val(cipher(text,shift));
            }
            setOnChangeListener(refreshResult);

            function cipher(input,shift){
                for(var i = 0; i < input.length; i++){
                    input = input.substring(0,i) + shiftLetter(input.substring(i,i+1),shift) + input.substring(i+1);
                }
                return input;
            }

            function shiftLetter(letter,shift){
                letter = letter.substring(0,1);
                shift = shift % 26;
                if(shift < 0) shift = 26 + shift;
                var code = letter.charCodeAt(0);
                if(code >= 65 && code <= 90){ //Upper Case
                    code += shift;
                    if(code > 90) code -= 26;
                } else if(code >= 97 && code <= 122){//Lower case
                    code += shift;
                    if(code > 122) code -= 26;
                }else{ //Numbers, symbols, etc.
                    return letter;
                }
                return String.fromCharCode(code);
            }
        });

    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
