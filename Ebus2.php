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
                
                 
            <form method= "POST" action="Ebus3.php">

                <label for="pin" class="label"> Pin: </label>
                            
                <input type="password" placeholder="Enter pin..." id="pin"  maxlength="4">
                             &nbsp;&nbsp;
                             
                             
                <a href="#" id="btn"><input type="button" value="Proceed"  onclick="val()"></a>
            </form>
            
            
            <? php
             $_SESSION["subtotal"] = $_POST["subtotal"];
            ?>
            
            
            
        </body>
    </html>
