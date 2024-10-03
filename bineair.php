<?php
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

// Tijd het binaire zoeken
$startTime = microtime(true);
$found = binarySearch($randomArray, $target, 0, count($randomArray) - 1);
$endTime = microtime(true);

echo "Binaire zoeken: Target $target " . ($found ? 'gevonden' : 'niet gevonden') . "\n";
echo "Tijd: " . ($endTime - $startTime) . " seconden\n";
?>
