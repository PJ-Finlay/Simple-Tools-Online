<?php
$toolName = "Convert to Upper Case";
$keywords = "convert to all caps";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>Convert to Upper Case</h1>
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
            function refreshResult(){
                var text = $("#textInput").val();
                $("#output").val(text.toUpperCase());
            }
            setOnChangeListener(refreshResult);
        });
    </script>
</article>
<aside class="similarTools">
    <h3>Similar Tools</h3>
    <ul>
        <li><a href="tools/capitalize-first-letter-of-every-word">Capitalize First Letter of Every Word</a></li>
        <li><a href="tools/convert-to-lower-case">Convert to Lower Case</a></li>
        <li><a href="tools/convert-to-sentence-case">Convert to Sentence Case</a></li>
    </ul>
</aside>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
