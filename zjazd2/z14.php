<?php

function is_prime($number) {
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        global $iteration_count;
        $iteration_count++; // increment the iteration count for each iteration of the loop

        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

$iteration_count = 0; // initialize iteration count to 0

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = intval($_POST['number']);

    if ($number > 0) {
        if (is_prime($number)) {
            echo "<p>$number is a prime number.</p>";
        } else {
            echo "<p>$number is not a prime number.</p>";
        }

        echo "<p>Iteration count: $iteration_count</p>";
    } else {
        echo "<p>Please enter a positive integer.</p>";
    }
}
