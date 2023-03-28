<?php
   //php associative arrays
    //model 1
    $age = array("peter"=>"35","ben"=>"37","joe"=>"43");
    header('contet-type:application/json; charset=utf=8');
    echo json_encode($age);
   // model 2
    $age['peter'] = "35";
    $age['ben'] = "37";
    $age['joe'] = "43";