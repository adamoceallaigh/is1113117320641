 <?php
//Start the session
session_start();
?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta charset= "utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name = "viewport" content = "width= device-width">
  <meta name = "author" content = "Adam O'Ceallaigh">
  <meta name = "description" content = "Website For Cloud 4 U">
  <link href="https://fonts.googleapis.com/css?family=Calligraffitti|Delius|Give+You+Glory|La+Belle+Aurore|Oxygen+Mono|Schoolbell|Sirin+Stencil|Sue+Ellen+Francisco|The+Girl+Next+Door|Erica+One|Modak|Sigmar+One|Indie Flower|Yellowtail|Satisfy|Rancho" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="ebus1.css">
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
             <li><a href="AboutCloudServices.html">About Cloud </a></li>
             <li><a href="Ebus1.php">Shop</a></li>
          </ul>
</div>
    
    
    
    
    
    
    
    
    
  <div id="wrapper">
      
      
      <div class="image">
        <img src="https://freeiconshop.com/wp-content/uploads/edd/cloud-flat.png">
    </div>
    <h2 class="company">Cloud 4 U</h2>
    
   <form method="POST" action="Ebus3.php" onsubmit="return Validate()" name="vform" >
       
   	<div id="username_div">
   	  <label>Username</label> <br>
   	  <input type="text" name="username" class="textInput">
   	  <div id="name_error"></div>
   	</div>
   	<div id="email_div">
   	  <label>Email</label> <br>
   	  <input type="email" name="email" class="textInput">
   	  <div id="email_error"></div>
   	</div>
   	<div id="password_div">
   	  <label>Password</label> <br>
   	  <input type="password" name="password" class="textInput">
   	</div>
   	<div id="pass_confirm_div">
   	   <label>Password confirm</label> <br>
   	   <input type="password" name="password_confirm" class="textInput">
   	   <div id="password_error"></div>
   	</div>
   	<div>
   	<input type="submit" name="register" value="Validate" class="btn">
   	</div>
   </form>
  </div>
  
   <?php
        //Set session variables
        $_SESSION["subtotal"] = $_POST["subtotal"];
        $_SESSION["vattotal"] = $_POST["vattotal"];
        $_SESSION["discounttotal"] = $_POST["discounttotal"];
        $_SESSION["total"] = $_POST["total"];
    ?>
  
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
        <h2 class="writetous">Write To Us</h2>
        
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
<script src="Ebus2.js"></script>