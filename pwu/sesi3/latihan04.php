<?php
    //model 1
   // $cars = array("volvo","bmw","toyota");

   //model 2
    $cars[0] ="volvo";
    $cars[1] ="bmw";
    $cars[2] ="toyota";
    
    header('contet-type:application/json; charset=utf=8');
    echo json_encode($cars); 

    //php associative arrays
    //model 1
    //$age = array("peter"=>"35","ben"=>"37","joe"=>"43");

    //model 2
   // $age['peter'] = "35";
   // $age['ben'] = "37";
   // $age['joe'] = "43";