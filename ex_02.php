<?php

//todo calculate an average value of the numbers

$numbers = [20, 30, 25, 35, -16, 60, -100];

$averageArray = array_sum($numbers)/count($numbers);

echo "Average value of numbers in array is {$averageArray}.";