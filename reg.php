<?php 
 $errors=array();
 $db=mysqli_connect('localhost','root','','registration');
 if(isset($_POST['reg'])){
    	//echo "username is ";
    	$username=mysql_real_escape_string($_POST['username']);
    	//echo $username;
    	$email=mysql_real_escape_string($_POST['email']);
    	$password=mysql_real_escape_string($_POST['password']);
    	$confirmpassword=mysql_real_escape_string($_POST['confirmpassword']);

    	 $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
         $result = mysqli_query($db, $user_check_query);
         $user = mysqli_fetch_assoc($result);
  
         if ($user){
            // if user exists
              //echo "user exisisi ";
              if ($user['username'] === $username) {
               array_push($errors, "Username already exists");
              }

              if ($user['email'] === $email) {
              array_push($errors, "email already exists");
              }
         }
         else{
         	  $sql="INSERT INTO users(username,email,password) VALUES ('$username' , '$email' , '$password')"; 
              mysqli_query($db,$sql);
              $_SESSION['username'] = $username;
              //$_SESSION['success'] = "you are logged in ";
              
              header('location: login.php');
         }

        
        //$pass=md5($password);
      
    } 
?>