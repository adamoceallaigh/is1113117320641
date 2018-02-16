function val(){
  var x = document.myForm.text.value;
  var y = x.length;
  var z;
  
  
  if(y !== 4){
    z="Please enter a four digit password";
  } 
  alert(z);
}

