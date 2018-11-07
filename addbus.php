<br>
<br>
<br>
<br>
<br>


<?php  
  $db=mysqli_connect('localhost','root','','registration');

  if(isset($_POST['addbus'])){
        $busid=mysql_real_escape_string($_POST['busid']);
        $from=mysql_real_escape_string($_POST['from']);
        $to=mysql_real_escape_string($_POST['to']);
        $deptime=mysql_real_escape_string($_POST['dep_time']);
        $arvtime=mysql_real_escape_string($_POST['arv_time']);
        $fare=mysql_real_escape_string($_POST['fare']);
        $seats=mysql_real_escape_string($_POST['seats']);
        
        

       /*  $user_check_query = "SELECT * FROM bus WHERE Busid=101 ";
         $result = mysqli_query($db, $user_check_query);
         $user = mysqli_fetch_assoc($result);

         echo ($user['Fromm']);
         echo ($user['Arrival']);*/

       // echo ($deptime);

         $sql="INSERT INTO bus(Busid,Fromm,Too,Departure,Arrival,Fare,Seats) VALUES ('$busid' , '$from' , '$to' , '$deptime' , '$arvtime' , '$fare' , '$seats' )"; 
         mysqli_query($db,$sql);


        $days=array();
        if(isset($_POST['Mon'])){
        	array_push($days,$_POST['Mon']);
        }
        if(isset($_POST['Tue'])){
        	array_push($days,$_POST['Tue']) ;
        }
        if(isset($_POST['Wed'])){
        	array_push($days,$_POST['Wed']) ;
        }
        if(isset($_POST['Thu'])){
        	array_push($days,$_POST['Thu']) ;
        }
        if(isset($_POST['Fri'])){
        	array_push($days,$_POST['Fri']) ;
        }
        if(isset($_POST['Sat'])){
        	array_push($days,$_POST['Sat']) ;
        }
        if(isset($_POST['Sun'])){
        	array_push($days,$_POST['Sun']) ;
        }
       

        foreach ($days as $day){
        	 $sql1="INSERT INTO days(Busid , day ) VALUES ('$busid' , '$day') ";
             mysqli_query($db,$sql1);
        }
       
        

       





        /*echo '<h> BUSES </h>';
        echo("the values ");
        echo ($busid);
        echo ($from);
        echo ($to);
        echo ($deptime);
        echo ($fare);
*/
        unset($_POST['addbus']);

  }

 ?>