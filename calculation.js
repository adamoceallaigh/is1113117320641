 function hi(){
  var radios = document.getElementsByName('product');
  var button = document.getElementById('well');
   button.disabled =true;
for (var i = 0, length = radios.length; i < length; i++) {
    if (radios[i].checked) {
     var choice = radios[i].value;
     var percent = 5;
    document.getElementById("subtotal").value = choice;
    document.getElementById("vattotal").value = choice * percent;
    
      button.disabled = !button.disabled;
    }
 }
 }