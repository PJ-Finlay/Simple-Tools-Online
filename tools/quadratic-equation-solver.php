<?php
$toolName = "Quadratic Equation Solver";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>Quadratic Equation Solver</h1>
    <fieldset>
        <label for="a">A</label><br>
        <input id="a" type="number"><br>
        <label for="b">B</label><br>
        <input id="b" type="number"><br>
        <label for="c">C</label><br>
        <input id="c" type="number"><br>
    </fieldset>

    <div class="outputContainer">
        <label for="solution1">Solution 1</label><br>
        <output id="solution1"></output><br><br>
        <label for="solution2">Solution 2</label><br>
        <output id="solution2"></output>
    </div>
    <div class="errorOutput">
        <output id="errorOutput">asdf</output>
    </div>

    <script>

        $(document).ready(function(){
            function output(text1,text2){
                $(".outputContainer").show();
                $(".errorOutput").hide();
                $("#solution1").val(text1.toFixed(4));
                $("#solution2").val(text2.toFixed(4));
            }
            function outputError(message){
                $(".outputContainer").hide();
                $(".errorOutput").show();
                $("#errorOutput").val(message);
            }

            function refreshResult(){
                var a = $("#a").val();
                var b = $("#b").val();
                var c = $("#c").val();
                if(a != 0){
                    if(b*b-4*a*c >= 0){
                        var result1 = (-b + Math.sqrt(b*b-4*a*c))/(2*a);
                        var result2 = (-b - Math.sqrt(b*b-4*a*c))/(2*a);
                        output(result1,result2);
                    }else{
                        outputError("No real solutions");
                    }
                }else{
                    outputError("a can not be 0");
                }
            }
            setOnChangeListener(refreshResult);
        });
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
