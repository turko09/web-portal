<?php
   namespace TeamAlpha\Web;
   
   //Values to be used
   $data = json_decode(file_get_contents("php://input"));
   //computation for fare matrix parameters
  
   $location_from;
   $location_to;
   $driverID;
   $passengerId;
   
   //Retrieve the distance between the 2 locations, for fare matrix
   //content of fare will be computed 
   $amount = $fare;
   // Payment API via credit card or cash
  //Credit card transaction will forward the following
  $creditNum;
  $passenger;
  $amount;
?>
