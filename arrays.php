//1
<?php
function invert($numbers) {
    return array_map('negate', $numbers);
}

function negate($number) {
    return -$number;
}
//3
function countPositivesSumNegatives($numbers) {
    if (empty($numbers) || is_null($numbers)) {
        return [];
    }

    $result = array_reduce($numbers, function($carry, $number) {
        if ($number > 0) {
            $carry[0]++;
        } elseif ($number < 0) {
            $carry[1] += $number;
        }

        return $carry;
    }, [0, 0])

    return $result;
}

//4
function calculateAverage($numbers) {
    if (empty($numbers)) {
        return 0;
    }

    $average = array_sum($numbers) / count($numbers);

    return $average;
}
