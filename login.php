<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>RENTIT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" href="css/home.css">
  <script src = "js/home.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top" style="background-color:  #2F4F5F;" >
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="color:white;">RentIt</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" style="color:white;">HOME</a></li>
        <li><a href="login.html" style="color:white;">LOG IN</a></li>
        <li><a href="#" style="color:white;">SIGN UP</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="jumbotron text-center" style="background-color:#1abc9c;">
<h1>Log In </h1>
			<div class="row">
			<form action="login.php" method="post" class="form" role="form">
      <?php if (!empty($_SESSION['msg'])): ?>
     <p>
     <?php echo $_SESSION['msg']; ?>
     </p>
     <?php endif ?> 
      <?php include('error.php'); ?>
			<input type="hidden" name="redirurl" value="<? echo $_SERVER['HTTP_REFERER']; ?>" />
			
			 <div class="col-xs-12 col-sm-12 col-md-4 col-sm-offset-4 col-xs-offset-2 col-md-offset-4" >
                    <label for = "firstname">Username: </label><input class="form-control" name="username" id = "username" placeholder="Userame" type="text" required autofocus />
                   <label for = "lasttname">Password: </label><input class="form-control" name="password" id = "password" placeholder="Password" type="password" required />
            <br />
            <br />
            <button name='login' class="btn btn-lg btn-primary btn-block" type="submit" style="background-color:  #2F4F4F;">
                Log In</button>
			</div>
            </form>
			</div>
</div>


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
      
      <p>Prateek Verma(CEO) : (91)7888962596</p>
      <p>prateekverma22@gmail.com</p>
      p>Sameer Verma (CTO) : (91)7986791374</p>
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

