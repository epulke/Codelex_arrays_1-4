<?php

//todo check if an array contains a value user entered

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

$toSearch = (int) readline ("Enter the value to search for: ");
if (in_array($toSearch, $numbers)) {
    echo "{$toSearch} is in this array.";
} else {
    echo "{$toSearch} is not in this array.";
}

