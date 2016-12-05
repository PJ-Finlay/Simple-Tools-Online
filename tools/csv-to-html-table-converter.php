<?php
$toolName = "CSV to HTML Table Converter";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>CSV to HTML Table Converter</h1>

    <fieldset>
        <legend>Data</legend>
        <label for="fileInput">Select .csv File</label><br>
        <input id="fileInput" type="file" onchange="loadFile()"></file><br><br>
        <textarea id="input"></textarea><br>
        <input id="useHeaders" type="checkbox">
        <label for="useHeaders">Use First Row As Heading</label>
    </fieldset>

    <div class="outputContainer">
        <textarea id="output"></textarea>
        <button id="copyToClipboardButton" data-clipboard-target="#output">Copy to Clipboard</button>
        <script src="js/clipboard.min.js"></script>
        <script>
            new Clipboard('#copyToClipboardButton');
        </script>
    </div>

    <script src="js/papaparse.min.js"></script>
    <script src="js/beautify/beautify-html.js"></script>
    <script>
        function loadFile(){
            var selectedFile = document.getElementById('fileInput').files[0];
            if(!/.+\.csv/.test(selectedFile.name)){
                alert("File must be in .csv format");
                document.getElementById('fileInput').value = "";
            }else{
                var reader = new FileReader();
                reader.onload = function() {
                  $("#input").val(reader.result);
                  refreshResult();
                }
                reader.readAsText(selectedFile); //Assumes UTF-8 encoding
            }
        }
        function refreshResult(){
            //Get input
            var inputString = $("#input").val();
            var useHeaders = $("#useHeaders").is(':checked');

            var parsedCSV = Papa.parse(inputString).data;

            var table = '<table>';
            for(var rowNumber = 0; rowNumber < parsedCSV.length; rowNumber++){
                var row = '<tr>';
                for(var i = 0; i < parsedCSV[rowNumber].length; i++){
                    var dataTag = 'td';
                    if(useHeaders && rowNumber == 0) dataTag = 'th';
                    var data = '<' + dataTag + '>';
                    data += String(parsedCSV[rowNumber][i]);
                    data += '</' + dataTag + '>';
                    row += data;
                }
                row += '</tr>';
                table += row;
            }
            table += '</table>';
            table = html_beautify(table);
            $("#output").val(table);
        }
        $(document).ready(function(){
            setOnChangeListener(refreshResult);
        });
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
