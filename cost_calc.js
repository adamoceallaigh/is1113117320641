/* global $ */

function calcSub(){
    
    var argSubTotal;
    if(document.getElementById('salesforce').checked){
      argSubTotal = 100;

      
    }
    else if(document.getElementById('cloud9').checked){
        argSubTotal = 200;

    }
    else if(document.getElementById('gmail').checked){
        argSubTotal = 400;

       
    } else{
        argSubTotal = 300;
       
       
    }

    calcDisVatTotal(argSubTotal);
}
   
   function calcDisVatTotal(parmSubTotal){
       
       var SubTotal;
       var discountAmt;
       var vatAmt;
       var totalAmt;
     
       SubTotal = parmSubTotal;
       
       discountAmt = SubTotal * 0.05;
       
       vatAmt = (SubTotal - discountAmt) * 0.1;
       
       totalAmt = (SubTotal + vatAmt) - discountAmt;
       
      
       
       display(SubTotal, discountAmt, vatAmt, totalAmt);
   }
   
   
  
    function display(parm1, parm2, parm3, parm4, parm5){
        
        document.getElementById("subtotal").value =  parm1;
        document.getElementById("discounttotal").value = parm2;
        document.getElementById("vattotal").value =  parm3;
        document.getElementById("total").value = parm4;
        
        
        enablebtnProceed();
    }
    
    
    function enablebtnProceed(){
  var radios = document.getElementsByName('product');
  var button = document.getElementById('btnProceed');
   button.disabled =true;
   
   
for (var i = 0, length = radios.length; i < length; i++) {
    if (radios[i].checked) {
      button.disabled = !button.disabled;
    }
 }
 }
    
    