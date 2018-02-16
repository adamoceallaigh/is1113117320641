 function hi(){
  var radios = document.getElementsByName('product');
  var button = document.getElementById('well');
   button.disabled =true;
   
   
for (var i = 0, length = radios.length; i < length; i++) {
    if (radios[i].checked) {
     
   document.getElementById("subtotal").value = radios[i].value;

     

    
      button.disabled = !button.disabled;
    }
 }
 }