<?php
$toolName = "Tally Keeper";
$keywords = "score keeper, counter";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>
<article class="tool">
    <h1>Tally Keeper</h1>
    <div id="inputArea">
        <input id="newTallyTextfield" type="text" placeholder="Tally Name">
        <button id="addTallyButton">Add Tally</button>
    </div><br>
    <div class="outputContainer">
        <table id="tallies"></table>
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#addTallyButton").click(addTally);

        var rowCount = 0;
        setOutputContainerVisibility();

        function addTally(){
            var $tallyRow = $("<tr>");
            var $tallyValue = $('<td>');
            $tallyRow.append($tallyValue);
            var $tallyValueInput = $('<input type="number" value="0">');
            $tallyValue.append($tallyValueInput);
            var $tallyLabel = $('<td><input type="text" value="'+$("#newTallyTextfield").val()+'"</td>');
            $("#newTallyTextfield").val("");
            $tallyRow.append($tallyLabel);
            var $increment = $("<td>");
            $tallyRow.append($increment);
            var $incrementButton = $("<button>+</button>");
            $increment.append($incrementButton);
            $incrementButton.click(function(){
                $tallyValueInput.val(Number($tallyValueInput.val()) + 1);
            });
            var $decrement = $("<td>");
            $tallyRow.append($decrement);
            var $decrementButton = $("<button>-</button>");
            $decrement.append($decrementButton);
            $decrementButton.click(function(){
                $tallyValueInput.val(Number($tallyValueInput.val()) - 1);
            });
            var $tallyDelete = $("<td>");
            $tallyRow.append($tallyDelete);
            var $tallyDeleteButton = $("<button>X</button>");
            $tallyDelete.append($tallyDeleteButton);
            $tallyDeleteButton.click(function(){
                $tallyRow.remove();
                rowCount--;
                setOutputContainerVisibility();
            });
            $("#tallies").append($tallyRow);
            rowCount++;
            setOutputContainerVisibility();
        }

        function setOutputContainerVisibility(){
            if(rowCount < 1){
                $(".outputContainer").hide();
            }else{
                $(".outputContainer").show();
            }
        }
    });
    </script>
    <style>
    #inputArea{
        text-align: center;
    }
    </style>
</article>


<?php include($_SERVER['DOCUMENT_ROOT'].'php/footer.php');?>
