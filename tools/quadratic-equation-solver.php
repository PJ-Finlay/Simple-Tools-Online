<?php
$toolName = "Quadratic Equation Solver";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>Quadratic Equation Solver</h1>
    <fieldset>
        <label for="a">a</label><br>
        <input id="a" type="number"><br>
        <label for="b">b</label><br>
        <input id="b" type="number"><br>
        <label for="c">c</label><br>
        <input id="c" type="number"><br>
    </fieldset>

    <div id="output"></div>

    <script>

        $(document).ready(function(){
            function refreshResult(){
                var a = $("#a").val();
                var b = $("#b").val();
                var c = $("#c").val();
                output(function(){
                    if(a == 0) throw "a can not be 0";
                    if(b*b-4*a*c < 0) throw "No real solutions";
                    var result1 = (-b + Math.sqrt(b*b-4*a*c))/(2*a);
                    var result2 = (-b - Math.sqrt(b*b-4*a*c))/(2*a);
                    var r1String = result1.format(4);
                    var r2String = result2.format(4);
                    return '<label for="solution1">Solution 1</label><br><output id="solution1">' + r1String + '</output><br><br><label for="solution2">Solution 2</label><br><output id="solution2">' + r2String + '</output>'
                });
            }
            setOnChangeListener(refreshResult);
        });
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
