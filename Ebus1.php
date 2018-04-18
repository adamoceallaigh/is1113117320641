<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
    <html>
        <head>
             
          <meta charset= "utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name = "viewport" content = "width= device-width">
          <meta name = "author" content = "Adam O'Ceallaigh">
          <meta name = "description" content = "Website For Cloud 4 U">
          <link href="https://fonts.googleapis.com/css?family=Calligraffitti|Delius|Give+You+Glory|La+Belle+Aurore|Oxygen+Mono|Schoolbell|Sirin+Stencil|Sue+Ellen+Francisco|The+Girl+Next+Door|Erica+One|Modak|Sigmar+One|Indie Flower|Yellowtail|Satisfy|Rancho" rel="stylesheet">
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
            <!--JQuery-->
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script type= "text/javascript" src="cost_calc.js"></script>
            <link href= "ebus.css" rel= "stylesheet" type= "text/css">
            
        </head>
        
        <body>
            
                 <div id="header">
                      <div class="logo">
                        <h2>Cloud 4 U</h2>
                        <img src="https://ak8.picdn.net/shutterstock/videos/15371518/thumb/1.jpg">
                      </div>
                      
                             <ul>
                                <li><a href="homepage.html">My Website</a></li>
                                 <li><a href="Cloud4UAboutpage.html">About Us</a></li>
                                 <li><a href="AboutCloudservices.html">About Cloud </a></li>
                                 <li><a href="Ebus1.php">Shop</a></li>
                              </ul>
                  </div>
                
               <section class="heading">
                   <h1>Select Product</h1>
                 </section>
                 
                 
                 
                 
                 
                 <!--This is the container i used to make the border on my receipt on my ebus pages-->
                <div id="wrapper">
                     <div class="image">
                        <img src="https://freeiconshop.com/wp-content/uploads/edd/cloud-flat.png">
                     </div>
                      <h2 class="company">Pick A Cloud Service</h2>
                      
                      
                      
                      
                      
                 
                 <form action="Ebus2.php" method="POST">
                 
                 <!--This posts all the data loaded into the different text boxes into the last Ebus 3 page to be displayed on the receipt-->
                 
                 <section class ="content">
                 <section class= "radios">
                                  <label for="salesforce">
                                    <input type ="radio" id="salesforce" name="product" onClick="disablebtnProceed()">
                                    &nbsp;&nbsp;&nbsp;&nbsp;SalesForce @ $100
                                </label>
                                <br>
                                <br> 
                                <label for="cloud9">
                                    <input type="radio" id="cloud9" name="product"  onClick="disablebtnProceed()">
                                    &nbsp;&nbsp;&nbsp;&nbsp;Cloud 9 @ $200
                                </label>
                                <br>
                                <br> 
                                
                                <label for="aws">
                                    <input type ="radio" id="aws" name="product" onClick="disablebtnProceed()">
                                   &nbsp;&nbsp;&nbsp;&nbsp;AWS @ $300 
                                </label>
                                <br>
                                <br>
                                <label for="gmail">
                                    <input type ="radio" id="gmail" name="product" onClick="disablebtnProceed()">
                                    &nbsp;&nbsp;&nbsp;&nbsp;Gmail @ $400
                                </label>
                                
                                
                                
                               
                 </section>
                 
                 <section class="calculations">
                      <label for="subtotal">&nbsp;&nbsp;Sub Total: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     
                      <input type ="text" id="subtotal" name ="subtotal" value="0.00" readonly>
                         <br>
                         <br>
                     
                     <label for="discounttotal">&nbsp;&nbsp;Discount @ 5%:&nbsp;&nbsp;&nbsp;<input type ="text" id="discounttotal" name ="discounttotal" value="0.00" readonly><br>&nbsp;&nbsp;&nbsp;(-Discount) </label>&nbsp;&nbsp;
                     
                          <br>
                          <br>
                     <label for="vattotal" >&nbsp;&nbsp;Vat @ 10%:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ="text" id="vattotal" name ="vattotal" value="0.00" readonly><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(+Vat) </label>
                         <br>
                         <br>
                     <label for="total" >&nbsp;&nbsp;Total: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     
                      <input type ="text" id="total" name ="total" value="0.00" readonly>
                 </section>
                 </section>
                 
                 <button type ="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
                 
                 
                 </form>
                 
                 
                 
                 
                 <button onClick="calcSub()" id="well">Calculate Cost</button>
                 <a role="button" href="Ebus1.php" id="clear">Clear Choice</a>
                 
                 
                  </div>
                 
                 
                 
                 <div class="social">
  <div class="images">
                    <a href = "#"><i class="fa fa-facebook fa-2x" aria-hidden="true" ></i></a>
					<a href = "#"><i class="fa fa-twitter fa-2x" aria-hidden="true" ></i></a>
					<a href = "#"><i class="fa fa-pinterest fa-2x" aria-hidden="true" ></i></a>
					<a href = "#"><i class="fa fa-snapchat fa-2x" aria-hidden="true" ></i></a>
					<a href = "#"><i class="fa fa-instagram fa-2x" aria-hidden="true" ></i></a>
					<a href = "#"><i class="fa fa-linkedin fa-2x" aria-hidden="true" ></i></a>
</div>
</div>
<div class="footer">
  <div class="contact">
    <div class="left1">
     <div class="box1">
      <h1>CONTACT US</h1>
      <br>
      <h4 class="location">We Located Near Downtown California</h4>
       <br>
      <h5>This is Our Official Site</h5>
      <br>
      <br>
      <h4 class="address">2479 Winterville Terrace</h4>
       <h4 class="address">Silicon Valley, CA 24073</h4>
       <h4 class="address">Phone:&nbsp;&nbsp;<em class="number">872-930-526</em></h4>
       <h4 class="address">Email Address:&nbsp;&nbsp;<em class="number">Cloud4U</em>@gmail.com</h4></h4>
      </div> 
    </div>
    <div class="left2">
      <div class="box2">
      <h1>Have Any Queries?</h1>
      <br>
      <br>
     
      <i class="fa fa-pencil" aria-hidden="true"></i>
        <h2>Write To Us</h2>
        
     <div class="form">
      <form>
        <strong>Name:</strong>&nbsp;&nbsp;<input type="text" name="usrname">
</form>
<br>
<textarea rows="4" cols="50" name="comment" form="usrform">
Enter text here...</textarea>
       <br>
       <input type="submit">
        </div>
      </div>
    </div>
  </div>
 <p> Cloud 4 U, Copyright &copy; 2018 </p>
    
</div>
  </body>
</html>