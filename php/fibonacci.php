<?php
function fibonacci($n) {
    $fibonacciSeries = array();
    $fibonacciSeries[0] = 0;
    $fibonacciSeries[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fibonacciSeries[$i] = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
    }

    return $fibonacciSeries;
}

$n = 10; // Change this to the number of Fibonacci numbers you want
$fibonacciSeries = fibonacci($n);

echo "Fibonacci Series of $n numbers:\n";
foreach ($fibonacciSeries as $number) {
    echo "$number ";
}
?>
