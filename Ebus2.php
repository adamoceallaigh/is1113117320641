 <?php
    session_start();
   ?>

<!DOCTYPE html>
   
    <html>
        <head>
            <title>Select Product</title>
            <!--JQuery-->
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script type= "text/javascript" src="Ebus2.js"></script>
            
        </head>
        
        <body>
            
            <PHP><head><link rel="stylesheet" type="text/css" href="Ebus.css"></head><PHP>
                
            <div class ="heading">
                <h2> Enter Your Email</h2>
            </div>
            
            <br>
                
                 
            <form name="myForm" method= "POST" action="Ebus3.php">

                <label for="total" class="label"> Pin: </label>
                            
                <input type="password" placeholder="Enter pin..." id="total" name="text" maxlength="4">
                             &nbsp;&nbsp;
                <a href="Ebus3.php"><input type="button" value="Proceed" id="btn" onclick="val()"></a>
            </form>
            
            
            <? php
             $_SESSION["subtotal"] = $_POST["subtotal"];
            ?>
            
            
            
        </body>
    </html>
