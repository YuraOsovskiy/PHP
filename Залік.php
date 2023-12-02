<?php

// Функція для генерації випадкових чисел від 0 до 10
function generateRandomNumber() {
    return rand(0, 10);
}

// Створення двовимірного масиву 10x10 та заповнення його випадковими числами
$matrix = array();
for ($i = 0; $i < 10; $i++) {
    $matrix[$i] = array();
    for ($j = 0; $j < 10; $j++) {
        $matrix[$i][$j] = generateRandomNumber();
    }
}

// Виведення початкового масиву
echo "Початковий масив:\n";
printMatrix($matrix);

// Сортування першого стовпця за спаданням
array_multisort(array_column($matrix, 0), SORT_DESC, $matrix);

// Сортування останнього рядка за зростанням
sort($matrix[9]);

// Виведення масиву після сортування
echo "Масив після сортування:\n";
printMatrix($matrix);

// Перевірка та виведення результату відповідно до умови
if (array_sum($matrix[0]) < 50) {
    $product = array_product(array_column($matrix, 9));
    echo "Добуток елементів останнього стовпця: $product\n";
} else {
    $sum = 0;
    foreach ($matrix as $row) {
        foreach ($row as $value) {
            if ($value % 2 !== 0) {
                $sum += $value;
            }
        }
    }
    echo "Сума непарних елементів: $sum\n";
}

// Виведення добутку всіх елементів масиву
$totalProduct = array_product(array_merge(...$matrix));
echo "Добуток всіх елементів масиву: $totalProduct\n";

// Оновлення 2 стовпця масиву
foreach ($matrix as &$row) {
    $row[1] = $row[1] ** 2;
}

// Виведення масиву після оновлення
echo "Масив після оновлення 2 стовпця:\n";
printMatrix($matrix);

// Функція для виведення матриці
function printMatrix($matrix) {
    foreach ($matrix as $row) {
        echo implode("\t", $row) . "\n";
    }
    echo "\n";
}
