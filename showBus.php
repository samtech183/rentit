<div  class="container-fluid text-center">
<?php

  if(isset($_POST['home'])){
   
    
    $fromstation=$_POST['From'];
    $tostation=$_POST['To'];
    $date=$_POST['Date'];
    $timestamp = strtotime($date);
    $dayc = date('D', $timestamp);
    
    
     echo $dayc;

    
   //connecting to database
     
  	$db=mysqli_connect('localhost','root','','registration');
    $bus_query = "SELECT * FROM  bus where  Fromm='$fromstation' and Too ='$tostation'";
    $result = mysqli_query($db, $bus_query);
    $no=mysqli_num_rows($result);
    $flag=0;
    if($no>0){
        //echo ("mila")
    	  echo '<h> BUSES </h>';
    	  echo("<table id='onwardFlight' class='table table-hover' name='onwardflight' data-toggle='table' data-pagination='true' data-search='true'  data-fixed-columns='true' ");
		    echo("<thead><th>BUS ID</th><th data-sortable='true'>Date</th><th data-sortable='true'>Departure Time</th><th>From</th><th>To</th><th>Fare</th></thead><tbody>");

   	        while($row=mysqli_fetch_assoc($result)){
            $flag=1;
            $checkday=$row['Busid'];
            $check_query= "SELECT * FROM  days where  day='$dayc' and Busid='$checkday'";
            //"SELECT * FROM days WHERE day='$dayc' and Busid='$row['Busid']'";
            $check_result = mysqli_query($db, $check_query);
            $check_no=mysqli_num_rows($check_result);
            if($check_no==0)
          //echo("<h1> bus id " .$row['busid']. "</h1>" );
                 echo("<tr align =\"left\"><td>".$row['Busid']."</td><td>"
                .$date. "</td><td>" .$row['Fromm']. "</td><td>" .$row['Too']. "</td><td>" .$row['Fare']. "</td><td>".$row['Seats']."</td></tr>");
            }


   		/*echo '<div class="form-inline" > <form action="bookbus.php" method="post">  <p> BUS FROM ' .$row['start']. ' TO ' .$row['end']. ' IS ON DATE ' .$row['date']. ' </p>   <button name="bid" type="submit" class="btn btn-danger" >BOOK BUS</button> </form></div>' ;*/
   		
   	} 
   	echo("</tbody></table>");
   }
   else{
    echo "naa " ;
   }
   if($flag==0){
   	echo '<p> NO BUS FOUND </p>';
   }

  }
 ?>
 </div>

