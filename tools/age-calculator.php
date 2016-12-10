<?php
$toolName = "Age Calculator";
$keywords = "Birth Date, Date at age";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>

<article class="tool">
    <h1>Age Calculator</h1>

    <fieldset>
        <label for="birthDate">Birth Date</label><br>
        <input id="birthDate" type="text"></input><br>
        <label for="ageAtDate">Age At Date</label><br>
        <input id="ageAtDate" type="text"></input>
    </fieldset>

    <div id="output"></div>

    <!--Include JQuery UI for Date Picker -->
    <link href = "libs/jquery-ui/jquery-ui.min.css" rel = "stylesheet">
    <script src="libs/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function(){
            //Create Date Pickers
            $("#birthDate, #ageAtDate").datepicker();
            $("#birthDate, #ageAtDate").datepicker("setDate", new Date(Date.now()));

            function refreshResult(){
                output(function() {
                    var birthDate = $("#birthDate").datepicker("getDate");
                    var ageAtDate = $("#ageAtDate").datepicker("getDate");
                    var difference = ageAtDate - birthDate;
                    if(difference < 0) throw 'Age At Date must be after Birth Date';
                    var years = ageAtDate.getYear() - birthDate.getYear();
                    var months = ageAtDate.getMonth() - ageAtDate.getMonth();
                    var days = ageAtDate.getDay() - ageAtDate.getDay()
                    console.log(ageAtDate);
                    return String(years) + ' years ' + String(months) + " months " + String(days) + ' days';
                });
            }
            setOnChangeListener(refreshResult);
        });
    </script>
</article>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
