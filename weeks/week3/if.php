<?php
// The if statement

// LOGIC - if the temp is less than 90 degrees, all is well, else, it's going to be a cooker
$temp = 91;
if($temp <= 90) {
   echo 'not that hot';
} else {
echo 'It\'s a scorcher';
}

echo '<br>';
//We are going to extend the if statement, with an ifelse statement

$temp = 84;
if($temp <= 78) {
    echo 'It is liveable';
} elseif($temp <= 85) {
    echo 'It\'s getting hotter';
} else {
    echo 'It\'s really hot';
}
echo '<br>';

// fun with logic
// if my sales are year 800000, i will make 10% of my base salary
// if my sales are greater or equal to 600000, i will make a bonus of 5%

$sales = 599000;
$salary = 200000;
if($sales >= 800000) {
    $salary *= 1.10;
    echo $salary;
} elseif($sales >= 600000) {
    $salary *= 1.05;
    echo $salary;
} else {
    echo $salary;
}
