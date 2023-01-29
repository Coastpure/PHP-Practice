<?php
// convert days to years, months and days

$yearDays = 365;
$months = 30;

// input
$daysNumber = (int)readline('Please input the number of days: ');

// output

echo  "Years: " . (int)($daysNumber / $yearDays) . "\n";
echo "Months: " . (int)(($daysNumber % $yearDays) / $months) . "\n";
echo "Days: " . (int)(($daysNumber % $yearDays) % $months) . "\n"


?>