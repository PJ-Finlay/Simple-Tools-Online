<?php
$toolName = "Find and Replace Text";
$keywords = "find and replace";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>Find and Replace Text</h1>
    <fieldset>
        <legend>Text</legend>
        <textarea id="textInput"></textarea>
    </fieldset>

    <fieldset>
        <legend>Find/Replace Text</legend>
        <label for="find">Find</label><br>
        <input id="find" type="text"><br>
        <label for="replace">Replace</label><br>
        <input id="replace" type="text"><br>
        <input id="caseSensitive" type="checkbox"  checked>
        <label for="caseSensitive">Case Sensitive</label>
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
                var text = $("#textInput").val()
                var find = $("#find").val();
                var replace = $("#replace").val();
                var caseSensitive = $("#caseSensitive").prop("checked");
                if(find.length > 0){
                    var regExpFlags = 'g';
                    if(!caseSensitive){
                        regExpFlags += 'i';
                    }
                    find = escapeRegExp(find);
                    var findRegex = RegExp(find,regExpFlags)
                    var result = text.split(findRegex).join(replace);
                    $("#output").val(result);
                }
            }
            setOnChangeListener(refreshResult);
        });
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'php/footer.php');?>
