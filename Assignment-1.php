<?php
    #1. Program to print sum of two number
    $a =10;
    $b = 25 ;
    $c =$a+$b;
    echo "the sum of the two numbers is ".$c."";

    #2. Program to split a string as array elements based on delimiter
    $cars ="Range Rover,BMW,Ferrari,Ford Mustang,Mercedes-Benz";
    $array = explode(",",$cars);
     print_r($array);

     #3. Program to combine the array elements into a string with given delimiter
     $Mycar=["MY","Favourite","is","Range Rover"];
     $carstring = implode(" ",$Mycar) ;
     print_r($carstring);
     
     #4. program to remove the duplicate values from an array
     $X = [1, 2, 2, 3, 4, 4, 5];
     $Y = array_unique($X);
     print_r($Y);
  
    ?> 
