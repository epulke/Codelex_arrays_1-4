<?php

$randomNumberArray = [];
for ($i = 1; $i <= 10; $i++) {
    array_push($randomNumberArray, rand(1, 100));
}

$randomNumberArrayCopy = $randomNumberArray;

array_pop($randomNumberArray);
array_push($randomNumberArray, -7);

echo "Array 1: ";
foreach ($randomNumberArray as $item) {
    echo $item . " ";
}
echo PHP_EOL;
echo "Array 2: ";
foreach ($randomNumberArrayCopy as $number) {
    echo $number . " ";
}