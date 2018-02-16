function val(){
  var x = document.getElementById("pin").value;
  var y = x.length;
  var z;
  var v= document.getElementById('btn');
  
  
  if(y !== 4){
    z="Please enter a four digit password";
    alert(z);
  } else{
    v.href="Ebus3.php";
  }
 
}

