<?php
$toolName = "Beautify HTML";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>Beautify HTML</h1>

    <fieldset>
        <legend>Input</legend>
        <textarea id="input"></textarea><br>
    </fieldset>

    <div class="outputContainer">
        <textarea id="output"></textarea>
        <button id="copyToClipboardButton" data-clipboard-target="#output">Copy to Clipboard</button>
        <script src="js/clipboard.min.js"></script>
        <script>
            new Clipboard('#copyToClipboardButton');
        </script>
    </div>

    <script src="js/beautify/beautify-html.js"></script>
    <script>
        function refreshResult(){
            var input = $("#input").val();
            $("#output").val(html_beautify(input));
        }
        $(document).ready(function(){
            setOnChangeListener(refreshResult);
        });
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
