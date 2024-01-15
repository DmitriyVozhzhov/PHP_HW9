<?php

declare(strict_types=1);

// 1. Створюємо пустий массив і наповнюємо його випадковими значеннями

function randArray(int $length, int $min = 1, int $max = 10): array
{
    $array = [];

    for ($i = 0; $i < $length; $i++) {
        $array[] = rand($min, $max);
    }

    return $array;
}

$array = randArray(5);

var_dump($array);

// 2. Порахувати суму елементів масиву

$sum = 0;

foreach ($array as $value){
    $sum += $value;
}

echo "Сума елементів массиву = $sum " . PHP_EOL;

// 3. Порахувати добуток всіх елементів масиву.

$product = 1;

foreach ($array as $value){
    $product *= $value;

}

echo "Добуток елементів массиву = $product" . PHP_EOL;

// 4.Перевірте скільки раз число 5 зустрічається у вас в масиві.

$numberOfFives = 0;

// варіант через цикл foreach
//foreach ($array as $value){
//    if ($value === 5){
//        $numberOfFives++;
//    }
//}
//
//echo "Число 5 зустрічається у масиві " . $numberOfFives . " разів." . PHP_EOL;

// варіант через цикл for

for ($i = 0; $i < count($array); $i++){
    if ($array[$i] === 5){
        $numberOfFives++;
    }
}

echo "Число 5 зустрічається у масиві " . $numberOfFives . " разів " . PHP_EOL;

// 5. Виведіть на екран тільки числа, які націло діляться на 3.

//$result = '';
//
//foreach ($array as $number) {
//        $result .= ($number % 3 === 0) ? $number . ' ' : '';
//}
//
//echo ($result != '') ?  $result . '- ділиться на 3 націло ' . PHP_EOL : 'Немає чисел, які націло діляться на 3 ' . PHP_EOL;

// варіант з массивом

$hasNumbersDivisibleBy3 = false;
$NumbersDivisibleBy3 = [];

// Додаємо числа, які націло діляться на 3, до нового масиву
foreach ($array as $number) {
    if ($number % 3 == 0) {
        $NumbersDivisibleBy3[] = $number;
        $hasNumbersDivisibleBy3 = true;
    }
}

// Виводимо новий масив або повідомлення, якщо немає чисел
if ($hasNumbersDivisibleBy3) {
    echo "Числа які діляться на 3 без залишку: ";
    print_r($NumbersDivisibleBy3);
} else {
    echo "Немає чисел, які націло діляться на 3";
}
