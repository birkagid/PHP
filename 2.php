<?php
  function second(int $a, int $b, int $c): string {
    echo "Стороны: $a, $b, $c. Какой треугольник? ";
    if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
        return "Не треугольник";
    }
    if ($a == $b && $b == $c) {
        return "Равносторонний треугольник";
    }
    if ($a == $b || $a == $c || $b == $c) {
    }
    return "Разносторонний треугольник";
}
echo second(3, 4, 5) . PHP_EOL;
echo second(3, 3, 3) . PHP_EOL;
echo second(3, 3, 5) . PHP_EOL;
echo second(1, 2, 3) . PHP_EOL; 
?>