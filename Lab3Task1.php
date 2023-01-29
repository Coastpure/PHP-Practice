<?php
// calculate the volume of the cylinder

// input
$radius = (int)readline("Input the radis: ");
$height = (int)readline("Input the height: ");

$volume = pi() * pow($radius,2) * $height;

echo "The volume of the cylinder is: " . $volume

?>