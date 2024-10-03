<?php
function linearSearch($array, $target) {
    foreach ($array as $element) {
        if ($element === $target) {
            return true;
        }
    }
    return false;
}

// Test met 10.000 random nummers
$arraySize = 10000;
$randomArray = range(1, 100000);
shuffle($randomArray);  // Schud de array om willekeurige nummers te krijgen
$randomArray = array_slice($randomArray, 0, $arraySize);  // Neem de eerste 10.000 nummers
sort($randomArray);  // Sorteer de array

$target = $randomArray[array_rand($randomArray)];  // Kies een target dat zeker in de array zit

// Tijd het lineair zoeken
$startTime = microtime(true);
$found = linearSearch($randomArray, $target);
$endTime = microtime(true);

echo "Lineair zoeken: Target $target " . ($found ? 'gevonden' : 'niet gevonden') . "\n";
echo "Tijd: " . ($endTime - $startTime) . " seconden\n";
?>
