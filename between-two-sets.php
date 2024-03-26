<?php

function getTotalX($a, $b) {
    $count = 0;
    // Find the maximum value of array $a
    $maxA = max($a);
    // Find the minimum value of array $b
    $minB = min($b);
    
    // Check each integer from maxA to minB
    for ($i = $maxA; $i <= $minB; $i++) {
        // Check if all elements of array $a are factors of $i
        $isFactorA = true;
        foreach ($a as $factor) {
            if ($i % $factor !== 0) {
                $isFactorA = false;
                break;
            }
        }
        // Check if $i is a factor of all elements of array $b
        $isFactorB = true;
        foreach ($b as $element) {
            if ($element % $i !== 0) {
                $isFactorB = false;
                break;
            }
        }
        // If $i satisfies both conditions, increment count
        if ($isFactorA && $isFactorB) {
            $count++;
        }
    }
    return $count;
}

// Sample Input
$a = [2, 4];
$b = [16, 32, 96];

// Function call
$result = getTotalX($a, $b);

// Output
echo $result;
?>
