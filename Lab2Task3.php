<?php
// calculate average weight of items
$ItemWeight1 = (float)readline('Please input the weight of the first item: ');
$quantity1 = (int)readline("What's the quantity of the first item: ");
$ItemWeight2 = (float)readline('Please input the weight of the second item: ');
$quantity2 = (int)readline("What's the quantity of the second item: ");

$average_weight = ($ItemWeight1 * $quantity1 + $ItemWeight2 * $quantity2) / ($quantity1 + $quantity2);

echo "The average weight of the items is ". $average_weight

?>