function calcSub () {
  var cloudType;
      
  for (var i = 0; i < document.myForm.product.length; i++) {
    if (document.myForm.product[i].checked) {
      cloudType = document.myForm.product[i].value;
    }
  }  
  document.myForm.text1.value = cloudType;
  document.myForm.text.value = cloudType;
   
}

function disablebtnProceed () {
  var j = document.myForm.product.length;
  alert(j); 
  var button = document.getElementById('proceed');
  button.disabled = false;
     
  if (document.myForm.product[j].checked) {
    button.disabled = !button.disabled;
  } 
}


