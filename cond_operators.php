//4.22
<?php
$number_1 = 22

function isEven($num)
{
    return $num % 2 === 0;
}

function endsWithSeven($num)
{
    return substr($num, -1) === '7';
}
//4.23
$number_2 = 12;

$first = intval($number_2 / 10);
$second = $number_2 % 10;

if ($first > $second) {
    echo "а) Перша цифра більша за другу.\n";
} elseif ($first < $second) {
    echo "а) Друга цифра більша за першу.\n";
} else {
    echo "а) Цифри рівні.\n";
}

//4.24
$number_3 = 89;
$firstnum = intval($number_3 / 10);
$secondnum = $number_3 % 10;

$square = $number_3 * $number_3;

$quadrupleCubeSum = 4 * (pow($firstnum, 3) + pow($secondnum, 3));

if ($square === $quadrupleCubeSum) {
    echo "Для числа $number відповідь позитивна.\n";
} else {
    echo "Для числа $number відповідь від'ємна.\n";
}

//4.25
$number_5 = 55;

$firstDigit = intval($number_5 / 10);
$secondDigit = $number_5 % 10;

$sum = $firstDigit + $secondDigit;
if (strlen($sum) === 2) {
    echo "a) Сума цифр двозначна.\n";
} else {
    echo "a) Сума цифр не є двозначною.\n";
}

//2.26

$number = 67;

$firstDigit = intval($number / 10);
$secondDigit = $number % 10;

$sum = $firstDigit + $secondDigit;
if ($sum % 3 === 0) {
    echo "а) Сума цифр кратна трьом.\n";
} else {
    echo "а) Сума цифр не кратна трьом.\n";
}

// б) 
$a = 5;
if ($sum % $a === 0) {
    echo "б) Сума цифр кратна числу $a.\n";
} else {
    echo "б) Сума цифр не кратна числу $a.\n";
}



