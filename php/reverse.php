<?php
function reverseNumber($num) {
    $reverse = 0;
    while ($num > 0) {
        $digit = $num % 10;
        $reverse = $reverse * 10 + $digit;
        $num = (int)($num / 10);
    }
    return $reverse;
}

$number = 12345;
$reversedNumber = reverseNumber($number);
echo "Original Number: $number\n";
echo "Reversed Number: $reversedNumber\n";
?>