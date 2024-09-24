<?php

define("PI", 3.14159265359);


function calculateAreaOfCircle($radius) {
    
    $area = PI * pow($radius, 2);
    return $area;
}


$radius = 5; 
$area = calculateAreaOfCircle($radius);
echo "The area of the circle with radius $radius is: " . $area;






?>
