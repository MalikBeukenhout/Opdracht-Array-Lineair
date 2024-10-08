<?php

$randomArray = range(1, 10000);


shuffle($randomArray);

$target = $randomArray[array_rand($randomArray)];  


sort($randomArray);

// Time the binary search
$startTime = microtime(true);
$found = binarySearch($randomArray, $target, 0, count($randomArray) - 1);
$endTime = microtime(true);

echo "Binary Search: Target $target " . ($found ? 'found' : 'not found') . "\n";
echo "Time: " . ($endTime - $startTime) . " seconds\n";


function binarySearch($array, $target, $low, $high) {
    if ($low > $high) {
        return false;
    }
    $mid = (int)(($low + $high) / 2);
    if ($array[$mid] === $target) {
        return true;
    } elseif ($array[$mid] > $target) {
        return binarySearch($array, $target, $low, $mid - 1);
    } else {
        return binarySearch($array, $target, $mid + 1, $high);
    }
}
?>
