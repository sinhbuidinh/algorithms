<?php

/**
 * A left rotation operation on an array shifts each of the array's elements 1 unit to the left
 * 
 * @param array $numbers [Array to rorate]
 * @param int $d [The number of roration]
 * @return array [The result after rorate left $d elements]
 */
function rotLeft(array $numbers, int $d) {
    $i = 0;
    while ($i < $d) {
        // move first element to end until reach times rorate require
        $firstElement = array_shift($numbers);
        array_push($numbers, $firstElement);
        $i++;
    }

    return $numbers;
}

$numbers = [1, 2, 3, 4, 5];
$rorateTurn = 2;
$arrRotLeft = rotLeft($numbers, $rorateTurn);

echo "Begin array: " . implode(' ', $numbers);
echo "\nThe number of roration: " . $rorateTurn;
echo "\nArray after rorate left: " . implode(' ', $arrRotLeft) . "\n";
