<!DOCTYPE html>
    <html>
        <head>
            <title>Select Product</title>
            
            <link href="https://fonts.googleapis.com/css?family=Calligraffitti|Delius|Give+You+Glory|La+Belle+Aurore|Oxygen+Mono|Schoolbell|Sirin+Stencil|Sue+Ellen+Francisco|The+Girl+Next+Door" rel="stylesheet">
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
            <!--JQuery-->
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script type= "text/javascript" src="calculation.js"></script>
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
                             <li><a href="#">About Cloud </a></li>
                             <li><a href="Ebus1.php">Shop</a></li>
                        </ul>
                </div>
                
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
                     
                     <label for="discounttotal" class="label">&nbsp;&nbsp;Discount @ 5%:&nbsp;&nbsp;&nbsp;<input type ="text" id="discounttotal" name ="text" value="0.00" readonly><br>&nbsp;&nbsp;&nbsp;(-Discount) </label>&nbsp;&nbsp;
                     
                          <br>
                          <br>
                     <label for="vattotal" class="label">&nbsp;&nbsp;Vat @ 10%:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ="text" id="subtotal" name ="text" value="0.00" readonly><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(-Vat) </label>
                         <br>
                         <br>
                     <label for="total" class="label">&nbsp;&nbsp;Total: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     
                      <input type ="text" id="total" name ="text" value="0.00" readonly>
                 </section>
                 </section>
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