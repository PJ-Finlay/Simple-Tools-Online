/********* Do on every page *********/
$(document).ready(function(){
    $('input[type="number"]').attr('step','any'); //Make number inputs accept decimals

    //Default all number inputs to 0
    $('input[type="number"]').each(function(index){
        var value = $(this).attr('value');
        if (typeof value == typeof undefined || value == false) {
            $(this).attr('value',0);
        }
    });
});

/***** Ouput Functions ********/

//Calls the given function every time that an input/select/textarea is changed within .tool
//Also calls it once when the listener is set
function setOnChangeListener(listener){
    listener();
    $(".tool input,.tool  select,.tool  textarea").on('keydown change input', listener);
}

//Checks to make sure that value is a valid number then outputs to the given selector
//rounding to the given decimal places
function outputResult(resultSelector,value,decimalPlaces){
    if(!$.isNumeric(value)){
        value = 0;
    }
    $(resultSelector).text(value.toFixed(decimalPlaces));
}

//The output function should check that inputs values are valid and if they aren't throw a
//user facing error message. If a valid output can be generated then it should be returned
//as a string. If the output is in table form then the markup for the table should be included
//in the string. This function puts the output in a div with id 'output'
function output(outputFunction,autoWrapOutput=true){
    var $output = $("#output");
    try{
        var outputValue = outputFunction();
        if(autoWrapOutput){
            outputValue = '<output>' + outputValue + '</output>';
        }
        $output.html('<div class="outputContainer">' + outputValue + '</div>');
    }catch(error){
        $output.html('<div class="errorOutput">' + error + '</div>');
    }
}

function moneyString(value){
    return value = value.toLocaleString('en',{
        style: 'currency',
        currency: 'USD'
    });
}

//Escapes regex from a string
function escapeRegExp(string){
  return string.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
}

//returns a string with the given number of decimal places and padding length
Number.prototype.format = function(decimalPlaces,paddingLength = -1){
    //Round
    var toReturn = this.toFixed(decimalPlaces);

    //Add commas
    if(paddingLength < 0) toReturn = numberWithCommas(toReturn);

    //Add padding
    if(toReturn.indexOf('.') >= 0){
        var int = toReturn.substring(0,toReturn.indexOf('.'));
    }else{
        var int = toReturn;
    }
    while(int.length < paddingLength){
        int = '0' + int;
    }
    if(toReturn.indexOf('.') >= 0){
        toReturn = int + toReturn.substring(toReturn.indexOf('.'),toReturn.length);
    }else{
        toReturn = int;
    }

    return toReturn;
}

function numberWithCommas(x) {
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return parts.join(".");
}

//Creates a string html table row in the form:
// <tr><td><label for="id">name</label></td><td><output id="id">value</output></td></tr>
// if no id is set an id is created as a camel case version of name with "Output" added at the end
// use ids specifies if ids should even be included
function createTableRow(name,value,useIds=true,id=undefined){
    name = String(name);
    value = String(value);
    if(id == undefined && useIds){
        id = name.split(/\s+/);
        for(var i = 0; i < id.length; i++){ //Make everything lower case
            id[i] = id[i].toLowerCase();
        }
        for(var i = 1; i < id.length; i++){ //Capitalize first letter of every word except the first
            if(id[i].length > 1){
                id[i] = id[i].substring(0,1).toUpperCase() + id[i].substring(1,id[i].length);
            }
        }
        id = id.join("") + "Output";
    }
    if(useIds) return '<tr><td><label for="' + id + '">' + name + '</label></td><td><output id="' + id + '">' + value + '</output></td></tr>';
    return '<tr><td>' + name + '</td><td>' + value + '</td></tr>';
}

//Creates HTML table string from array of string rows
//headingHTML is inserted directly after the first table tag
function createTable(rows,headingHTML = ''){
    var toReturn = "<table>" + headingHTML;
    for(var i = 0; i < rows.length; i++) toReturn += rows[i];
    return toReturn + "</table>";
}
