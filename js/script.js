// To do on every page
$(document).ready(function(){
    $('input[type="number"]').attr('step','any'); //Make number inputs accept decimals
});




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



//*****General Functions*****

//Escapes regex from a string
function escapeRegExp(string){
  return string.replace(/[.*+?^${}()|[\]\\]/g, '\\$&'); // $& means the whole matched string
}
