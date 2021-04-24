<?php

    $PzServername="localhost";
    $PzUsername="root";
    $PzPassword="";
    $PzName="v_hero";


    $connection_xy2= mysqli_connect($PzServername,$PzUsername,$PzPassword,$PzName);

      
    if(!$connection_xy2){
        die("Connection failed: " . mysqli_connect_error());
    }