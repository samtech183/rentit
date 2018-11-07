<?php include('reg.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>RentIt | Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" href="style.css">
  <script src = "js/home.js"></script>
  <style>
    .logo {
      color: #2F4F4F;
      font-size: 400px;    
      font-family: Tahoma;
    }
    #wrap { 
     width: 1335px; 
     margin:  auto; 
   }
  </style>

</head>
<body id="wrap" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top" style="background-color:  #2F4F4F;" >
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand" href="#"  style="color:white;">RENT IT !</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
       <li><a href="#" style="color:white;">HOME</a></li>
        <li><a href="login.html" style="color:white;">LOG IN</a></li>
        <li><a href="signUp.html" style="color:white;">SIGN UP</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--Signup-->
<div class="jumbotron text-center"  style="background-color:#1abc9c;">
<div class="logo">
    <h1> Sign Up  </h1>
  </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-sm-offset-4 col-xs-offset-2 col-md-offset-4" >
            <form action="register.php" method="post" class="form" role="form">
             <?php include('error.php');?>
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <label for = "firstname">First Name: </label><input class="form-control" name="username" id = "firstname" placeholder="First Name" type="text" required autofocus />
                </div>
                <div class="col-xs-6 col-md-6">
                   <label for = "lasttname">Last Name: </label><input class="form-control" name="lastname" id = "lastname" placeholder="Last Name" type="text" required />
                </div>
            </div>
             <label for = "email">Email: </label><input class="form-control" name="email" id = "email" placeholder="Your Email" type="email" />
             <label for = "password">Password: </label><input class="form-control" name="password" id= "password" placeholder="New Password" type="password" required/>
			 <label for = "confirmpassword">Confirm Password: </label><input class="form-control" name="confirmpassword" id= "confirmpassword" data-match="#password" data-match-error="Whoops, these don't match" placeholder="Confirm Password" type="password" />
            <label for="birthdate">
                Birth Date</label>
               <input class = "form-control" name="birthdate" placeholder="Birthdate" type="date" required/>
            <br />
            <br />
            <button  name="reg" class="btn btn-lg btn-primary btn-block" type="submit" style="background-color:  #2F4F4F;">
                Sign up</button>
            </form>
        </div>
 </div>   
</div>

<script type="text/javascript">

var mail=document.getElementById("email")

var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirmpassword");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

<footer class="container-fluid text-center"> 
  <div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>About Us</h3>
      <p>Rent it is the Rising star in Renting Industry .</p>
      <p>In the last three years our revenue has tripled </p>
      <p>thanks to generous seed money from google</p>
    </div>
    <div class="col-sm-4">
      <h3>Products</h3>
      <p>We rent everything from Automobiles to suits </p>
      <p>From clothes to shoes </p>
    </div>
    <div class="col-sm-4">
      <h3>Contact</h3>        
      
      <p>Prateek Verma (CEO) : (91)9411878625</p>
      <p>prateekverma22@gmail.com</p>
      <p>Sameer Verma (CTO) : (91)7986791374</p>
      <p>sameerverma183@gmail.com</p>
    </div>
  </div>
</div>
<br>
<br> 
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>
<br>
 <div class="footer-copyright text-center py-3">© 2018 Copyright:
  <a href="https://mdbootstrap.com/bootstrap-tutorial/">Rentit.com</a>
  </div> 
  

  
</body>
</html>

