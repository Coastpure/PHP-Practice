<?php
// calculate the average score
$math = (int)readline('What is your math score: ');
$chemistry = (int)readline('What is your chemistry score: ');
$physics = (int)readline('What is your physics score: ');

$average_score = ($math + $physics + $chemistry)/3;

echo "Your average score is " . $average_score;

?>
