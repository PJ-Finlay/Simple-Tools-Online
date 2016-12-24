<?php
$toolName = "Greatest Common Factor Calculator";
$keywords = "GCF";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>Greatest Common Factor Calculator</h1>

    <section class="toolDescription">
        <p>Enter numbers seperated by commas.</p>
    </section>

    <fieldset>
        <textarea id="input"></textarea>
    </fieldset>

    <div id="output"></div>

    <script>
        $(document).ready(function(){
            function refreshResult(){
                output(function() {
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
                    /***math.js ***/
                });
            }
            setOnChangeListener(refreshResult);
        });
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
