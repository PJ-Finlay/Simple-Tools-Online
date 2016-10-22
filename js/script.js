//Calls the given function every time that an input/select/textarea is changed within .tool
function setOnChangeListener(listener){
    $(".tool input,.tool  select,.tool  textarea").on('keyup change', listener);
}

//Checks to make sure that value is a valid number then outputs to the given selector
//rounding to the given decimal places
function outputResult(resultSelector,value,decimalPlaces){
    if(!$.isNumeric(value)){
        value = 0;
    }
    $(resultSelector).text(value.toFixed(decimalPlaces));
}
