<?php
$toolName = "Password Generator";
$keywords = "secure password, random password, strong password";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>Password Generator</h1>

    <fieldset>
        <label for="length">Length</label><br>
        <input id="length" type="number" value="8"></input><br><br>

        <input id="lowercase" type="checkbox" checked></input>
        <label for="lowercase">Include Lowercase</label><br><br>

        <input id="uppercase" type="checkbox" checked></input>
        <label for="uppercase">Include Uppercase</label><br><br>

        <input id="numbers" type="checkbox" checked></input>
        <label for="numbers">Include Numbers</label><br><br>

        <input id="symbols" type="checkbox" checked></input>
        <label for="symbols">Include Symbols</label><br><br>

        <button id="refresh">Generate another password</button>
    </fieldset>


    <div id="output"></div>

    <script>
        $(document).ready(function(){
            function refreshResult(){
                output(function(){
                    var lowercase = $("#lowercase").is(':checked');
                    var uppercase = $("#uppercase").is(':checked');
                    var numbers = $("#numbers").is(':checked');
                    var symbols = $("#symbols").is(':checked');
                    var length = $("#length").val();

                    var validCharacters = [];


                    if(lowercase){
                        validCharacters = validCharacters.concat(['a','b','c','d','e','f','g','h','i','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z']);
                    }
                    if(uppercase){
                        validCharacters = validCharacters.concat(['A','B','C','D','E','F','G','H','I','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z']);
                    }
                    if(numbers){
                        validCharacters = validCharacters.concat(['1','2','3','4','5','6','7','8','9','0']);
                    }
                    if(symbols){
                        validCharacters = validCharacters.concat(['~','!','@','#','$','%','^','&','*','(',')','+','?','<','>','_']);
                    }


                    if(validCharacters.length == 0){
                        throw "No characters included";
                    }

                    var result = '';

                    for(var i = 0; i < length; i++){
                        var randomChoice = Math.floor(Math.random() * validCharacters.length);
                        result += validCharacters[randomChoice];
                    }

                    result = escapeHTML(result);

                    return result;
                });
            }
            setOnChangeListener(refreshResult);
            $("#refresh").click(refreshResult);
        });
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
