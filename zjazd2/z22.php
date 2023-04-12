<?php

function recursive_fibonacci($n) {
    if ($n <= 1) {
        return $n;
    }
    return recursive_fibonacci($n - 1) + recursive_fibonacci($n - 2);
}

function non_recursive_fibonacci($n) {
    if ($n == 0) {
        return 0;
    }
    $previous = 0;
    $current = 1;
    for ($i = 1; $i < $n; $i++) {
        $temp = $current;
        $current += $previous;
        $previous = $temp;
    }
    return $current;
}

$start_time = microtime(true);
$result = recursive_fibonacci(40);
$end_time = microtime(true);
$recursive_time = $end_time - $start_time;

$start_time = microtime(true);
$result = non_recursive_fibonacci(40);
$end_time = microtime(true);
$non_recursive_time = $end_time - $start_time;

if ($recursive_time < $non_recursive_time) {
    echo "The recursive Fibonacci function was faster by " . ($non_recursive_time / $recursive_time) . "x";
} else {
    echo "The non-recursive Fibonacci function was faster by " . ($recursive_time / $non_recursive_time) . "x";
}


?>