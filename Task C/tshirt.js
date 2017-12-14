const input = document.getElementsByTagName("input");
const gender = document.querySelector("input[name='gender']");
const size = document.querySelector("input[name='size']");
let error = "";
let valid = true;
let valid_input = true;

function validate(){
    for(var i=0; i<input.length; i++){
        if(input[i].value == "" || input[i].value == null){
            input[i].className += " invalid";
            valid = false;
        }
    }
    if( ((gender.value === 'male') || (gender.value === 'female')) &&
        ( (size.value === 'xl' || size.value === 'l' || size.value === 'xxl' || size.value === 'm' ) ) ) {
        valid_input = true;
    } else {
        valid_input = false;
    }


    if(valid && valid_input){
       error = "Submitted";
       document.querySelector(".forms").submit();
    } else {
      error = 'Error in form field(s)';
    }
     document.getElementById("error").innerHTML=error;
}
