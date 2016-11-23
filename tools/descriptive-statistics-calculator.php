<?php
$toolName = "Descriptive Statistics Calculator";
$keywords = "mean, median, mode, average, standard deviation";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>Descriptive Statistics Calculator</h1>

    <section class="toolDescription">
        <p>Enter data points seperated by commas, spaces, new lines. You can also upload a .csv file.</p>
    </section>

    <fieldset>
        <legend>Data</legend>
        <label for="fileInput">Select .csv File</label><br>
        <input id="fileInput" type="file" onchange="loadFile()"></file><br><br>
        <textarea id="input"></textarea>
    </fieldset>

    <div id="output"></div>

    <script src="js/simple-statistics.min.js"></script>
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
            output(function() {
                //Get input
                var inputString = $("#input").val();
                var splitInput = inputString.split(/[,\n\s]+/);
                var data = [];
                for(var i = 0; i < splitInput.length; i++){
                    if(splitInput[i].length > 0){ //Ignore any blank inputs
                        var dataPoint = Number(splitInput[i]);
                        if(!$.isNumeric(dataPoint)) throw '"' + splitInput[i] + '" is not a number'
                        data.push(dataPoint);
                    }
                }
                if (data.length < 1) throw "No data entered";
                //Calculate and print output using simple-statistics library
                data = data.sort(function(a,b){return a-b});//Sort data
                var statsRows = []; //Array of table rows
                statsRows.push(createTableRow("Size",data.length));
                statsRows.push(createTableRow("Min",ss.minSorted(data)));
                statsRows.push(createTableRow("First Quartile",ss.quantileSorted(data,.25)));
                statsRows.push(createTableRow("Median",ss.medianSorted(data)));
                statsRows.push(createTableRow("Third Quartile",ss.quantileSorted(data,.75)));
                statsRows.push(createTableRow("Max",ss.maxSorted(data)));
                statsRows.push(createTableRow("Interquartile range",ss.interquartileRange(data)));
                statsRows.push(createTableRow("Range",ss.maxSorted(data)-ss.minSorted(data)));
                statsRows.push(createTableRow("Mean",ss.mean(data)));
                statsRows.push(createTableRow("Mode",ss.mode(data)));
                statsRows.push(createTableRow("Harmonic Mean",ss.harmonicMean(data)));
                statsRows.push(createTableRow("Geometric Mean",ss.geometricMean(data)));
                statsRows.push(createTableRow("Root Mean Square",ss.rootMeanSquare(data)));
                statsRows.push(createTableRow("Population Variance",ss.variance(data)));
                statsRows.push(createTableRow("Population Standard Deviation",ss.standardDeviation(data)));
                statsRows.push(createTableRow("Sample Standard Deviation",ss.sampleStandardDeviation(data)));
                statsRows.push(createTableRow("Median Absolute Deviation",ss.medianAbsoluteDeviation(data)));
                statsRows.push(createTableRow("Sum",ss.sum(data)));
                return createTable(statsRows);
            });
        }
        $(document).ready(function(){
            setOnChangeListener(refreshResult);
        });
    </script>
    <!--Add everything to keywords -->
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
