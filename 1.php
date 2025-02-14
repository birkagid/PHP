<?php
  function first(int $a, int $b, int $c): bool {
    echo "$a, $b, $c (Есть ли арифметическая прогрессия?) ";
    return ($b - $a) == ($c - $b);
  }
  echo first(1, 2, 3) ? "Да" . PHP_EOL : "Нет" . PHP_EOL;
  echo first(1, 3, 2) ? "Да" . PHP_EOL : "Нет" . PHP_EOL;
?>