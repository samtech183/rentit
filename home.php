<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?><!-- 
<?php if (isset($_SESSION['username'])): ?>
     <p> WELCOME 
     <?php echo $_SESSION['username']; ?>
     </p>
     <p> <a href="server.php?logout='1'" style="color:red;">LOGOUT</a></p>
<?php endif ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Just Ride| Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60"  class="shortPage">

<nav class="navbar navbar-default navbar-fixed-top" style="background-color:  #2F4F5F;" >
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand" href="home.html" style="color:white;">Rent It</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.html" style="color:white;">HOME</a></li>
        <li><a href="viewFlights.php" style="color:white;">BUSES</a></li>
        <li><a href="viewReservations.php" style="color:white;">RESERVATIONS</a></li>
        <li><a href="#" style="color:white;">LOGIN</a></li>
        <li><a href="logout.php" style="color:white;">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="jumbotron text-center" style="background-color:#1abc9c;">

<form action="home.php"  method="post" >
<div class="container" >

  <h1>BOOK BUSES </h1>
  <p>Where would you like to Visit??</p>
   <p> WELCOME 
    
     <?php echo $_SESSION['username']; ?>
     </p>


  

  </div>
  <br>
   <div class="form-inline" >
    <select name="Guests" class="form-control"  placeholder="Guests" required>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>

    </select>

    
    
   <select name="From" class="form-control" placeholder="From" required>
    <option value="Delhi">Delhi</option>
    <option value="Gurgoan">Gurgoan</option>
    <option value="Agra">Agra</option>
    <option value="Mathurak">Mathura</option>
   <option value="Hathras">Hathras</option>
   <option value="Aligarh">Aligarh</option>

  
  </select>
   <select name="To" class="form-control"  placeholder="To" required>
    <option value="Delhi">Delhi</option>
    <option value="Gurgoan">Gurgoan</option>
    <option value="Agra">Agra</option>
    <option value="Mathurak">Mathura</option>
   <option value="Hathras">Hathras</option>
   <option value="Aligarh">Aligarh</option>
  </select>

   <input type="date" class="form-control" name="Date">
  
  <button name='home' type="submit" class="btn btn-danger" >Search Buses</button>
  </div>
  </form>
  </div>


 <div class="jumbotron text-center">
<?php include('showbus.php');?>
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
</div>
</body>
</html>



