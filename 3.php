<?php
function third(int $month): int {
    if ($month === 2) {
        return 28;
    }
    if ($month === 4 || $month === 6 || $month === 9 || $month === 11) {
        return 30;
    }
        return 31;
}
echo "1) Январь = ", third(1) . PHP_EOL;
echo "2) Февраль = ", third(2) . PHP_EOL;
echo "1) Март = ", third(3) . PHP_EOL;
echo "1) Апрель = ", third(4) . PHP_EOL;
echo "1) Май = ", third(5) . PHP_EOL;
echo "1) Июнь = ", third(6) . PHP_EOL;
echo "1) Июль = ", third(7) . PHP_EOL;
echo "1) Август = ", third(8) . PHP_EOL;
echo "1) Сентябрь = ", third(9) . PHP_EOL;
echo "1) Октябрь = ", third(10) . PHP_EOL;
echo "1) Ноябрь = ", third(11) . PHP_EOL;
echo "1) Декабрь = ", third(12) . PHP_EOL;