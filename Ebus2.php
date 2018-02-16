<!DOCTYPE html>
   <?php
    session_start();
   ?>
   
    <html>
        <head>
            <title>Select Product</title>
            <!--JQuery-->
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script type= "text/javascript" src="cost_calc.js"></script>
            
        </head>
        
        <body>
            
            <PHP><head><link rel="stylesheet" type="text/css" href="Ebus.css"></head><PHP>
                
            <div class ="heading">
                <h2> Enter Your Email</h2>
            </div>
            
            <br>
            <form method="POST"  name="myForm">
                
                 
            <br>
            <br>
            
            <label for="total" class="label"> Pin: </label>
            
            <input type="password" placeholder="Enter pin..." id="total" name="text2">
             &nbsp;&nbsp;<a href="Ebus3.php"><input type="button" value="Submit" onclick="validate()"></a>
            <br>
            
            <?php
            $_SESSION["total"] = $_POST["total"];
            ?>
            
            
            
        </body>
    </html>
            

        </form>       
        </body>
    </html>
