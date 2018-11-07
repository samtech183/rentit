<?php 
        session_start();  

        echo "Session destroyed ";
        echo $_SESSION['username'];
    	session_destroy();
    	unset($_SESSION['username']);
        //unset($_GET['logout']);
    	header('location: login.php');
 ?>