<!DOCTYPE html>
    <html>
        <head>
            <title>Select Product</title>
            
            
            <!--JQuery-->
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script type= "text/javascript" src="calculation.js"></script>
            <link href= "ebus.css" rel= "stylesheet" type= "text/css">
            
        </head>
        
        <body>
            
                <ul>
                  <li>Home</li>
                  <li>About</li>
                  <li>Shop</li>
                </ul>
                
               <section class="heading">
                   <h1>Select Product</h1>
                 </section>
                 
                 <img src ="https://freeiconshop.com/wp-content/uploads/edd/cloud-flat.png" class="image">
                 <h2>Pick A Cloud Service</h2>
                 <br>
                 <a href ="Ebus1.php"><button id ="clear" value="Clear Choice">Clear Choice</button></a>
                 
                 <button id="well" disabled>Add To Shopping Cart</button>
                 
                 <section class ="content">
                 <section class= "radios">
                      &nbsp;&nbsp;<input type="radio"  name="product" value="$100.00" onClick ="hi()" class="radio1"> &nbsp;&nbsp; Salesforce @ $100  
                     <br>
                     <br>
                      &nbsp;&nbsp;<input type="radio"  name="product" value="$200.00" onClick ="hi()" class="radio2"> &nbsp;&nbsp; Cloud 9 @ $200 <br>
                     <br>
                     &nbsp;&nbsp;<input type="radio"  name="product" value="$300.00" onClick ="hi()" class="radio2">&nbsp;&nbsp;&nbsp;  AWS @ $300
                     <br>
                     <br>
                     &nbsp;&nbsp;<input type="radio"  name="product" value="$400.00" onClick ="hi()" class="radio2">&nbsp;&nbsp;  &nbsp;Gmail @ $400<br>
                     <br>
                     <br>
                     <br>
                 </section>
                 
                 <section class="calculations">
                      <label for="subtotal" class="label">&nbsp;&nbsp;Sub Total: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     
                      <input type ="text" id="subtotal" name ="text" value="0.00" readonly>
                         <br>
                         <br>
                     
                     <label for="subtotal" class="label">&nbsp;&nbsp;Discount @ 5%:&nbsp;&nbsp;&nbsp;<input type ="text" id="vattotal" name ="text" value="0.00" readonly><br>&nbsp;&nbsp;&nbsp;(-Discount) </label>&nbsp;&nbsp;
                     
                          <br>
                          <br>
                     <label for="subtotal" class="label">&nbsp;&nbsp;Vat @ 10%:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ="text" id="subtotal" name ="text" value="0.00" readonly><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(-Vat) </label>
                         <br>
                         <br>
                     <label for="subtotal" class="label">&nbsp;&nbsp;Total: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     
                      <input type ="text" id="subtotal" name ="text" value="0.00" readonly>
                 </section>
                 </section>
                 
                 <div>
                </div>           
          </body>
      </html>