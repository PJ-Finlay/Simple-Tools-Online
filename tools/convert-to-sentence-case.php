<?php
$toolName = "Convert to Sentence Case";
$keywords = "capitalize first letter of sentence";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>Convert to Sentence Case</h1>
    <fieldset>
        <legend>Text</legend>
        <textarea id="textInput"></textarea>
    </fieldset>

    <div class="outputContainer">
        <label for="output">Result</label><br><br>
        <output>
            <textarea id="output"></textarea>
        </output>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            function toSentenceCase(str) {
                return str.replace(/.+?[\.\?\!](\s|$)/g, function (txt) {
                    return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
                });
            }

            function refreshResult(){
                var text = $("#textInput").val();
                $("#output").val(toSentenceCase(text));
            }
            setOnChangeListener(refreshResult);
        });
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
