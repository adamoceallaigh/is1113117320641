<!DOCTYPE html>
    <html>
        <head>
            <title>Select Product</title>
            <!--JQuery-->
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script type= "text/javascript" src="cost_calc.js"></script>
            <link href= "Ebus.css" rel= "stylesheet" type= "text/css">
            
        </head>
        
        <body>
            
            <PHP><head><link rel="stylesheet" type="text/css" href="Ebus.css"></head><PHP>
            <div class ="heading">
                <h2> Select a Product</h2>
            </div>
            
            <br>
            <form method="POST" action ="Ebus2.php" name="myForm">
                
                 <div class ="radios">
                    <input type="radio"  name="product" value="$100.00" onClick ="disablebtnProceed(); calcSub()" class="radio1">  Salesforce @ $100  <br>
                    <input type="radio"  name="product" value="$300.00" onClick ="disablebtnProceed(); calcSub()" class="radio2">  Aus @ $300
                </div>
            <br>
            <br>
            
            <label for="subtotal" class="label">Sub Total: </label>
            <input type ="text" id="subtotal" name ="text" value="0.00" readonly><br>
            
            <label for="total" class="label"> Total: </label>
            <input type ="text" id="total" name ="text1" value="0.00" readonly><br>
            
            
            <br>
            <br>
            <a href ="Ebus2.php"><input type="button" id="proceed" value="Add To Shopping Cart" disabled></a><br>
            <br>
            <br>

            <a href="Ebus1.php"><input type="button" class="clear" value="Clear Choice"></a>
            
        </form>       
        </body>
    </html>
