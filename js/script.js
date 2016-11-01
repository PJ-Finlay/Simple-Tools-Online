// To do on every page
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

function moneyString(value){
    return value = value.toLocaleString('en',{
        style: 'currency',
        currency: 'USD'
    });
}


//*****General Functions*****

//Escapes regex from a string
function escapeRegExp(string){
  return string.replace(/[.*+?^${}()|[\]\\]/g, '\\$&'); // $& means the whole matched string
}
