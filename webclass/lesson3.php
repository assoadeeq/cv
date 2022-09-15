<?php
//Declaration of CONSTANTS
/*

define("SIIT_WEBSITE", "www.siitpartners.com",true);

echo siit_website;
*/

//Declaration of an Arrays using Variable

$car1 = "Honda";
$car2 ="Toyota";
$car3 = "Nissan";
//echo $car1.", ".$car2.", ".$car3;

$cars = array("Honda","Toyota","Nissan","Volvo");

echo "Cars : ".$cars[3];
echo "<br>";


define("B","<br>"); // for line break


/*
define("CAR1","BENZ");
define("CAR2","VOLVO");
define("CAR3","BMW");
echo CAR1. ", ".CAR2. ", ".CAR3;
*/


//Declaration of an Array using CONSTANTS
define("motocycle", [
    "Lifan",
    "Motor B",
    "Bullet"
  ]);

  echo motocycle[2];

//PHP Operators


echo B;


$x = 10125.51;

echo number_format($x);

//echo number_format(2**28,2);







?>