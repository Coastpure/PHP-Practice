<?php
// calculate averages of students


// student 1
$student1Id = (int)readline("Please input student 1 ID: ");

echo "Please input student 1 Scores: \n";
$math1 = (int)readline(": ");
$chinese1 = (int)readline(": ");
$computer1 = (int)readline(": ");


// student 2
$student2Id = (int)readline("Please input student 2 ID: ");

echo "Please input student 2 Scores: \n";
$math2 = (int)readline(": ");
$chinese2 = (int)readline(": ");
$computer2 = (int)readline(": ");

// averages
$average1 = ($math1 + $chinese1 + $computer1) / 3;
$average2 = ($math2 + $chinese2 + $computer2) / 3;

// output
echo "$student1Id  $math1  $chinese1  $computer1  Average Score: ". $average1 . "\n";
echo "$student2Id   $math2  $chinese2  $computer2  Average Score: ". $average2;


?>