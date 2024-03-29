<?php
$toolName = "Word Counter";
$keywords = "character counter, sentance counter, paragraph counter";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>Word Counter</h1>
    <fieldset>
        <legend>Text</legend>
        <textarea id="textInput"></textarea>
    </fieldset>

    <div class="outputContainer">
        <table>
            <tr>
                <td><label for="charactersOutput">Characters</label></td>
                <td><output id="charactersOutput"></output></td>
            </tr>
            <tr>
                <td><label for="wordsOutput">Words</label></td>
                <td><output id="wordsOutput"></output></td>
            </tr>
                <td><label for="sentancesOutput">Sentences</label></td>
                <td><output id="sentancesOutput"></output></td>
            <tr>
                <td><label for="paragraphsOutput">Paragraphs</label></td>
                <td><output id="paragraphsOutput"></output></td>
            </tr>
        </table>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            function refreshResult(){
                var text = $("#textInput").val();
                var characters = text.length;
                $("#charactersOutput").text(characters);
                var words = 0;
                if(text.trim().length > 0){
                    words = text.trim().split(/\s+/).length;
                }
                $("#wordsOutput").text(words);
                var sentances = 0;
                if(text.trim().length > 0){
                    sentances = text.trim().split(/\.+/).length;
                }
                $("#sentancesOutput").text(sentances);
                var paragraphs = 0;
                if(text.trim().length > 0){
                    paragraphs = text.trim().split(/\n+/).length;
                }
                $("#paragraphsOutput").text(paragraphs);
            }
            setOnChangeListener(refreshResult);
        });
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
